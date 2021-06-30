<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


class Waitress
{
    public function __construct(public array $menus)
    {
    }

    public function printMenus()
    {
        $recorder = [];
        foreach ($this->menus as $menu) {
            $menu_iterator = $menu->createIterator();
            while ($menu_iterator->hasNext()) {
                $menuItem =  $menu_iterator->next();
                $recorder[] = "$menuItem->name - $menuItem->description - $menuItem->price";
            }
        }
        return $recorder;
    }
}