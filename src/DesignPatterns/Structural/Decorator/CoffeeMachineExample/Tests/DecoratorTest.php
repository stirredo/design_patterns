<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Tests;

use DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages\Decaf;
use DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments\BeverageDecorator;
use DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments\SteamedMilk;
use DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments\Whip;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    // sample menu: https://imgur.com/6dDyVIU

    public function test_coffee_machine_returns_right_cost()
    {
        $beverage = new Decaf(); // 1.05
        $beverage = new SteamedMilk($beverage); // .10
        $beverage = new Whip($beverage); // .10
        $this->assertEquals(1.25, $beverage->getCost());
    }
    /**
     * @test
     */
    public function coffee_machine_returns_right_description()
    {
        $beverage = new Decaf(); // 1.05
        $beverage = new SteamedMilk($beverage); // .10
        $beverage = new Whip($beverage); // .10
        $this->assertEquals("Whip, Steamed Milk, Decaf", $beverage->getDescription());
    }
}
