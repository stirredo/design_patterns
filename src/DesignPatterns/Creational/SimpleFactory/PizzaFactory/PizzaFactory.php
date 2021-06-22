<?php


namespace DesignPatterns\Creational\SimpleFactory\PizzaFactory;


use DesignPatterns\Creational\SimpleFactory\Pizzas\AbstractPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PineApplePizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\GreekPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PepperoniPizza;

abstract class PizzaFactory
{
    public abstract function createPizza($type): AbstractPizza;
}