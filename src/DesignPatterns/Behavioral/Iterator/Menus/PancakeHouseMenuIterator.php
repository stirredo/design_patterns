<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


class PancakeHouseMenuIterator implements Iterator
{
    public function __construct(public PancakeHouseMenu $menu, public int $index = 0)
    {
    }

    public function hasNext()
    {
        return $this->index < $this->menu->menuItems->count();
    }

    public function next()
    {
        return $this->menu->menuItems[$this->index++];

    }
}