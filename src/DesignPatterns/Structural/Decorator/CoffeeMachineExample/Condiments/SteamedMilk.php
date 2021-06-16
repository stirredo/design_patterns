<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments;


class SteamedMilk extends BeverageDecorator
{

    function getDescription()
    {
        return "Steamed Milk, ". $this->beverage->getDescription();
    }

    function getCost()
    {
        return 0.10 + $this->beverage->getCost();
    }
}