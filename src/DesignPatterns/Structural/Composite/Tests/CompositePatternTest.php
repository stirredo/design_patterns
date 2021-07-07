<?php

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite\Menu;
use DesignPatterns\Structural\Composite\MenuItem;
use DesignPatterns\Structural\Composite\Waitress;
use PHPUnit\Framework\TestCase;

class CompositePatternTest extends TestCase
{

    /**
     * @test
     */
    public function waitress_can_print_all_menus()
    {
        $allMenus = new Menu("All Menus", "All menus combined");
        $dinnerMenu = new Menu("Dinner Menu", "Dinner Time Menu");
        $lunchMenu = new Menu("Lunch Menu", "Lunch Time Menu");
        $desertMenu = new Menu("Desert Menu", "Desert Menu");

        $allMenus->add($dinnerMenu);
        $allMenus->add($lunchMenu);
        $allMenus->add($desertMenu);

        $dinnerMenu->add(new MenuItem("Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99));

        $dinnerMenu->add(new MenuItem("BLT",
            "Bacon with lettuce & tomato on whole wheat", false, 2.99));

        $lunchMenu->add(new MenuItem("Soup of the day",
            "Soup of the day, with a side of potato salad", false, 3.29));

        $lunchMenu->add(new MenuItem("Hotdog",
            "A hot dog, with sauerkraut, relish, onions, topped with cheese", false, 3.05));

        $desertMenu->add(new MenuItem("Ice Cream", "Cream Ice", true, 2.99));
        $desertMenu->add(new MenuItem("Shake", "Milk and cream", true, 3.99));
        $waitress = new Waitress($allMenus);

        $recordings = $waitress->printMenu();
        $expectedMenu = ["All Menus All menus combined", ["Dinner Menu Dinner Time Menu", "Vegetarian BLT 1 - (Fakin') Bacon with lettuce & tomato on whole wheat - 2.99", "BLT  - Bacon with lettuce & tomato on whole wheat - 2.99"], ["Lunch Menu Lunch Time Menu", "Soup of the day  - Soup of the day, with a side of potato salad - 3.29", "Hotdog  - A hot dog, with sauerkraut, relish, onions, topped with cheese - 3.05"], ["Desert Menu Desert Menu", "Ice Cream 1 - Cream Ice - 2.99", "Shake 1 - Milk and cream - 3.99"]];
        $this->assertEquals(json_encode($expectedMenu), json_encode($recordings));

    }
}
