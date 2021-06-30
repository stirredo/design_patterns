<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


interface Iterator
{
    public function hasNext();

    public function next();
}