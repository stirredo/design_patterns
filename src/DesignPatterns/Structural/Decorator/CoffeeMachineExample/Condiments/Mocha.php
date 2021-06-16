<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments;


class Mocha extends BeverageDecorator
{

    function getDescription()
    {
        return "Mocha, ". $this->beverage->getDescription();
    }

    function getCost()
    {
        return 0.20 + $this->beverage->getCost();
    }
}