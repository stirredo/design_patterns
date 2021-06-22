<?php


namespace DesignPatterns\Creational\FactoryMethodPattern\Pizzas;


abstract class AbstractPizza
{
    public function prepare()
    {
        return "Preparing pizza...";
    }

    public function bake()
    {
        return "baking pizza..";
    }

    public function cut()
    {
        return "Cutting pizza...";
    }

    public function box()
    {
        return "Boxing pizza";
    }
}