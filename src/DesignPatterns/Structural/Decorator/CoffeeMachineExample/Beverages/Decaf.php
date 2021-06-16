<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages;


class Decaf extends Beverage
{

    function getDescription()
    {
        return "Decaf";
    }

    function getCost()
    {
        return 1.05;
    }
}