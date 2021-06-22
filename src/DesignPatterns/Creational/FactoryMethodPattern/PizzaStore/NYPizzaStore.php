<?php


namespace DesignPatterns\Creational\FactoryMethodPattern\PizzaStore;


use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AbstractPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AnchoviesPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\CheesePizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\GarlicPizza;

class NYPizzaStore extends AbstractPizzaStore
{

    function createPizza(string $type): AbstractPizza
    {
        if ($type == "cheese") {
            return new CheesePizza();
        } else if ($type == 'garlic') {
            return new GarlicPizza();
        } else if ($type == 'anchovies') {
            return new AnchoviesPizza();
        }
    }
}