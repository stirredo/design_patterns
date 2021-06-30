<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


use SplFixedArray;

class PancakeHouseMenu implements CreatesIterator
{
    public function __construct(public SplFixedArray $menuItems)
    {
        $this->menuItems[0] = new MenuItem("K&B's Pancake Breakfast",
            "Pancakes with scrambled eggs and toast", true,
            2.99);
        $this->menuItems[1]= new MenuItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage",
            false,
            2.99);
        $this->menuItems[2] = new MenuItem("Blueberry Pancakes",
            "Pancakes made with fresh blueberries", true,
            3.49);
        $this->menuItems[3] = new MenuItem("Waffles",
            "Waffles with your choice of blueberries or strawberries", true,
            3.59);
    }


    public function createIterator(): Iterator
    {
        return new PancakeHouseMenuIterator($this);
    }
}