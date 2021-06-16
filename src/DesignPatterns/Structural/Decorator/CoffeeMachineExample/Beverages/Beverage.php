<?php


namespace DesignPatterns\Structural\Decorator\CoffeeMachineExample\Beverages;


abstract class Beverage
{
    abstract function getDescription();

    abstract function getCost();

}