<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks;


class ModelDuck extends Duck
{

    public function display()
    {
        echo "Looks like a model duck!";
        echo "\n";
    }
}