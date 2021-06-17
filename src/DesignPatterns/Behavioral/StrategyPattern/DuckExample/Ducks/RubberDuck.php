<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks;


class RubberDuck extends Duck
{

    public function display()
    {
        return "Looks like a rubber duck";
    }
}