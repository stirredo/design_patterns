<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\PizzaFactory\NYPizzaFactory;
use DesignPatterns\Creational\SimpleFactory\Pizzas\CheesePizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\GreekPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\SimpleFactory\PizzaStore\PizzaStore;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function pizza_store_can_use_factory_to_create_pizza()
    {
        $ny_pizza_factory = new NYPizzaFactory();
        $pizza_store = new PizzaStore($ny_pizza_factory);
        $this->assertInstanceOf(CheesePizza::class, $pizza_store->orderPizza('cheese'));
        $this->assertInstanceOf(GreekPizza::class, $pizza_store->orderPizza('greek'));
        $this->assertInstanceOf(PepperoniPizza::class, $pizza_store->orderPizza('pepperoni'));

    }
}
