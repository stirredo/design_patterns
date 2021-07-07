<?php


namespace DesignPatterns\Structural\Composite;


use SplObjectStorage;

class Menu extends MenuComponent
{
    public SplObjectStorage $menuComponents;

    public function __construct(public string $name, public string $description)
    {
        $this->menuComponents = new SplObjectStorage();
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents->attach($menuComponent);
    }

    public function remove(MenuComponent $menuComponent)
    {
        $this->menuComponents->detach($menuComponent);
    }

    public function print()
    {
        $recorder = [];
        $recorder[] = "$this->name $this->description";
        foreach ($this->menuComponents as $menuComponent) {
            $recorder[] = $menuComponent->print();
        }
        return $recorder;
    }
}