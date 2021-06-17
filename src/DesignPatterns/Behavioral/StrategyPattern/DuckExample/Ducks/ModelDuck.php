<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks;


class ModelDuck extends Duck
{

    public function display()
    {
        return "Looks like a model duck!";
    }
}