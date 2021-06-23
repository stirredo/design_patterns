<?php

namespace DesignPatterns\Creational\AbstractFactoryPattern\Tests;

use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\AnchoviesPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\CheesePizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\GarlicPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\GreekPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\PepperoniPizza;
use DesignPatterns\Creational\AbstractFactoryPattern\Pizzas\PineApplePizza;
use DesignPatterns\Creational\AbstractFactoryPattern\PizzaStore\ChicagoPizzaStore;
use DesignPatterns\Creational\AbstractFactoryPattern\PizzaStore\NYPizzaStore;
use PHPUnit\Framework\TestCase;

class AbstractFactoryPatternTest extends TestCase
{   
    /**
     * @test
     */
    public function test_abstract_factory_pizza_store_returns_pizza_instace()
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
