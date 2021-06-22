<?php


namespace DesignPatterns\Creational\SimpleFactory\PizzaStore;


use DesignPatterns\Creational\SimpleFactory\PizzaFactory\PizzaFactory;

class PizzaStore
{
    public PizzaFactory $factory;

    public function __construct(PizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type)
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

}