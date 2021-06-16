<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages;


class DarkRoast extends Beverage
{

    function getDescription()
    {
        return "Dark Roast";
    }

    function getCost()
    {
        return 0.99;
    }
}