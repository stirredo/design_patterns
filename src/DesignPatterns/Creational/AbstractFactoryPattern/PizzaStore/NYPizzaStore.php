<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaStore;


use DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory\NYPizzaIngredientFactory;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\AbstractPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\AnchoviesPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\CheesePizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\GarlicPizza;

class NYPizzaStore extends AbstractPizzaStore
{

    function createPizza(string $type): AbstractPizza
    {
        $pizza_ingredients_factory = new NYPizzaIngredientFactory();
        if ($type == "cheese") {
            $pizza = new CheesePizza($pizza_ingredients_factory);
            $pizza->setName("NY Cheese Pizza");
            return $pizza;
        } else if ($type == 'garlic') {
            $pizza = new GarlicPizza($pizza_ingredients_factory);
            $pizza->setName("NY Garlic Pizza");
            return $pizza;
        } else if ($type == 'anchovies') {
            $pizza =  new AnchoviesPizza($pizza_ingredients_factory);
            $pizza->setName("NY Anchovies Pizza");
            return $pizza;
        }
    }
}