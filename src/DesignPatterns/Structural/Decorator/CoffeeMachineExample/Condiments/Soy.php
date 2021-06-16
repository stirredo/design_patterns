<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Condiments;


class Soy extends BeverageDecorator
{

    function getDescription()
    {
        return "Soy, ". $this->beverage->getDescription();
    }

    function getCost()
    {
        return 0.15 + $this->beverage->getCost();
    }
}