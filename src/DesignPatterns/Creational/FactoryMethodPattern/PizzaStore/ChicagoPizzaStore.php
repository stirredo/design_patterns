<?php


namespace DesignPatterns\Creational\FactoryMethodPattern\PizzaStore;


use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AbstractPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AnchoviesPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\GreekPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\PineApplePizza;

class ChicagoPizzaStore extends AbstractPizzaStore
{

    function createPizza(string $type): AbstractPizza
    {
        if ($type == "greek") {
            return new GreekPizza();
        } else if ($type == 'pepperoni') {
            return new PepperoniPizza();
        } else if ($type == 'pineapple') {
            return new PineApplePizza();
        }
    }
}