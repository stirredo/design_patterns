<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;



interface CreatesIterator
{
    public function createIterator(): Iterator;
}