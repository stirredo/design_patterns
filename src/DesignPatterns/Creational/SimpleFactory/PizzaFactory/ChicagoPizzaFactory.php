<?php


namespace DesignPatterns\Creational\SimpleFactory\PizzaFactory;


use DesignPatterns\Creational\SimpleFactory\Pizzas\AbstractPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\GarlicPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PineApplePizza;

class ChicagoPizzaFactory extends PizzaFactory
{

    public function createPizza($type): AbstractPizza
    {
        if ($type === "garlic") {
            return new GarlicPizza();

        } else if ($type === "pineapple") {
            return new PineApplePizza();
        } else if ($type === "pepperoni") {
            return new PepperoniPizza();
        }
    }
}