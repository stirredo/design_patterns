<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages;


class Espresso extends Beverage
{

    function getDescription()
    {
        return "Espresso";
    }

    function getCost()
    {
        return 1.99;
    }
}