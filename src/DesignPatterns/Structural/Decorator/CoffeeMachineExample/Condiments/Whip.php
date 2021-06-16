<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments;


class Whip extends BeverageDecorator
{

    function getDescription()
    {
        return "Whip, ". $this->beverage->getDescription();
    }

    function getCost()
    {
        return 0.10 + $this->beverage->getCost();
    }
}