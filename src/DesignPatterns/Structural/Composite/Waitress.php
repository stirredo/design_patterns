<?php


namespace DesignPatterns\Structural\Composite;


use SplObjectStorage;

class Waitress
{
    public MenuComponent $allMenu;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenu = $allMenus;
    }

    public function printMenu()
    {
        return $this->allMenu->print();
    }

}