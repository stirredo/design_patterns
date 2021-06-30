<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


class DinerMenuIterator implements Iterator
{
    public function __construct(public DinerMenu $menu, public int $index = 0)
    {
        $this->menu = new DinerMenu([]);
    }

    public function hasNext()
    {
        return $this->index < count($this->menu->menuItems);
    }

    public function next()
    {
        return $this->menu->menuItems[$this->index++];
    }


}