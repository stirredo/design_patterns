<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;



class DinerMenu implements CreatesIterator
{

    public function __construct(public array $menuItems)
    {
        $this->menuItems[] = new MenuItem("Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->menuItems[] = new MenuItem("BLT",
            "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->menuItems[] = new MenuItem("Soup of the day",
            "Soup of the day, with a side of potato salad", false, 3.29);
        $this->menuItems[] = new MenuItem("Hotdog",
            "A hot dog, with sauerkraut, relish, onions, topped with cheese", false, 3.05);
    }

    public function createIterator(): Iterator
    {
        return new DinerMenuIterator($this);
    }
}