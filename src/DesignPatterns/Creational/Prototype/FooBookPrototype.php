<?php


namespace DesignPatterns\Creational\Prototype;


class FooBookPrototype extends BookPrototype
{

    protected string $category = 'Foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}