<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\PizzaFactory\ChicagoPizzaFactory;
use DesignPatterns\Creational\SimpleFactory\PizzaFactory\NYPizzaFactory;
use DesignPatterns\Creational\SimpleFactory\Pizzas\GarlicPizza;
use DesignPatterns\Creational\SimpleFactory\Pizzas\PineApplePizza;
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
        $this->assertInstanceOf(PineApplePizza::class, $pizza_store->orderPizza('cheese'));
        $this->assertInstanceOf(GreekPizza::class, $pizza_store->orderPizza('greek'));
        $this->assertInstanceOf(PepperoniPizza::class, $pizza_store->orderPizza('pepperoni'));

        $chicago_pizza_factory = new ChicagoPizzaFactory();
        $pizza_store = new PizzaStore($chicago_pizza_factory);
        $this->assertInstanceOf(GarlicPizza::class, $pizza_store->orderPizza('garlic'));
        $this->assertInstanceOf(PineApplePizza::class, $pizza_store->orderPizza('pineapple'));
        $this->assertInstanceOf(PepperoniPizza::class, $pizza_store->orderPizza('pepperoni'));
    }
}
