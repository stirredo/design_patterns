<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaStore;


use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\AbstractPizza;

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