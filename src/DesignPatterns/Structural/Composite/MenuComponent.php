<?php


namespace DesignPatterns\Structural\Composite;


abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent)
    {
        throw new NotImplementedException("Method not implemented");
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new NotImplementedException("Method not implemented");
    }

//    public function getChild(int $i)
//    {
//        throw new NotImplementedException("Method not implemented");
//    }

    public function print()
    {
        throw new NotImplementedException("Method not implemented");
    }

}