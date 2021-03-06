<?php


namespace DesignPatterns\Creational\SimpleFactory\PizzaFactory;


use DesignPatterns\Creational\SimpleFactory\Pizzas\AbstractPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PineApplePizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\GreekPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PepperoniPizza;

class NYPizzaFactory extends PizzaFactory
{

    public function createPizza($type): AbstractPizza
    {
        if ($type == "cheese") {
            return new PineApplePizza();
        } else if ($type == "greek") {
            return new GreekPizza();
        } else if ($type === "pepperoni") {
            return new PepperoniPizza();
        }
    }
}