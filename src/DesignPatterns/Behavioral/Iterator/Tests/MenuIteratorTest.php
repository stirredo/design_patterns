<?php

namespace DesignPatterns\Behavioral\Iterator\Tests;

use DesignPatterns\Behavioral\Iterator\Menus\DinerMenu;
use DesignPatterns\Behavioral\Iterator\Menus\PancakeHouseMenu;
use DesignPatterns\Behavioral\Iterator\Menus\Waitress;
use PHPUnit\Framework\TestCase;

class MenuIteratorTest extends TestCase
{
    /**
     * @test
     */
    public function waitress_can_use_iterator_to_iterate_over_menus()
    {
        $menus = [new PancakeHouseMenu(new \SplFixedArray(4)), new DinerMenu([])];
        $waitress = new Waitress($menus);
        $recorded_menu = $waitress->printMenus();
        $expected_array = [
            "K&B's Pancake Breakfast - Pancakes with scrambled eggs and toast - 2.99",
            "Regular Pancake Breakfast - Pancakes with fried eggs, sausage - 2.99",
            "Blueberry Pancakes - Pancakes made with fresh blueberries - 3.49",
            "Waffles - Waffles with your choice of blueberries or strawberries - 3.59",
            "Vegetarian BLT - (Fakin') Bacon with lettuce & tomato on whole wheat - 2.99",
            "BLT - Bacon with lettuce & tomato on whole wheat - 2.99",
            "Soup of the day - Soup of the day, with a side of potato salad - 3.29",
            "Hotdog - A hot dog, with sauerkraut, relish, onions, topped with cheese - 3.05",
        ];
        $this->assertEquals(json_encode($recorded_menu), json_encode($expected_array));

    }
}
