<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaStore;


use DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory\ChicagoPizzaIngredientsFactory;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\AbstractPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\GreekPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\PineApplePizza;

class ChicagoPizzaStore extends AbstractPizzaStore
{

    function createPizza(string $type): AbstractPizza
    {
        $chicago_ingredients_factory = new ChicagoPizzaIngredientsFactory();
        if ($type == "greek") {
            $pizza = new GreekPizza($chicago_ingredients_factory);
            $pizza->setName("Chicago Greek Pizza");
            return $pizza;
        } else if ($type == 'pepperoni') {
            $pizza = new PepperoniPizza($chicago_ingredients_factory);
            $pizza->setName("Chicago Pepperoni Pizza");
            return $pizza;
        } else if ($type == 'pineapple') {

            $pizza = new PineApplePizza($chicago_ingredients_factory);
            $pizza->setName("Chicago Pineapple Pizza");
            return $pizza;
        }
    }
}