<?php

namespace DesignPatterns\Creational\FactoryMethodPattern\Tests;

use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\AnchoviesPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\CheesePizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\GarlicPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\GreekPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\FactoryMethodPattern\Pizzas\PineApplePizza;
use DesignPatterns\Creational\FactoryMethodPattern\PizzaStore\ChicagoPizzaStore;
use DesignPatterns\Creational\FactoryMethodPattern\PizzaStore\NYPizzaStore;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @test
     */
    public function factory_method_pattern_pizza_store_returns_appropriate_pizza()
    {
        $ny_pizza_store = new NYPizzaStore();
        $this->assertInstanceOf(CheesePizza::class, $ny_pizza_store->orderPizza('cheese'));
        $this->assertInstanceOf(GarlicPizza::class, $ny_pizza_store->orderPizza('garlic'));
        $this->assertInstanceOf(AnchoviesPizza::class, $ny_pizza_store->orderPizza('anchovies'));

        $chicago_pizza_store = new ChicagoPizzaStore();
        $this->assertInstanceOf(GreekPizza::class, $chicago_pizza_store->orderPizza('greek'));
        $this->assertInstanceOf(PepperoniPizza::class, $chicago_pizza_store->orderPizza('pepperoni'));
        $this->assertInstanceOf(PineApplePizza::class, $chicago_pizza_store->orderPizza('pineapple'));
    }
}
