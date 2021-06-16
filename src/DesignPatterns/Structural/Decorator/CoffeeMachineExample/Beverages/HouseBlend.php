<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages;


class HouseBlend extends Beverage
{

    function getDescription(): string
    {
        return "House Blend";
    }

    function getCost(): float
    {
        return 0.89;
    }
}