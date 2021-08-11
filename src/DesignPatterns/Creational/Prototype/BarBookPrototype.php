<?php


namespace DesignPatterns\Creational\Prototype;


class BarBookPrototype extends BookPrototype
{

    protected string $category = 'Bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}