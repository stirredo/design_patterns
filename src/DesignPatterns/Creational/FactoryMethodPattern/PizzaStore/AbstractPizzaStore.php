<?php


namespace DesignPatterns\Creational\FactoryMethodPattern\PizzaStore;


use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AbstractPizza;

abstract class AbstractPizzaStore
{
    public function orderPizza(string $type): AbstractPizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;

    }

    protected abstract function createPizza(string $type) : AbstractPizza;

}