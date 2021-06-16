<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments;


use DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages\Beverage;

abstract class BeverageDecorator extends Beverage
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

}