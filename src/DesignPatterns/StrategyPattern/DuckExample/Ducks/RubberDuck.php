<?php


namespace DesignPatterns\StrategyPattern\DuckExample\Ducks;


class RubberDuck extends Duck
{

    public function display()
    {
        echo "Looks like a rubber duck";
        echo "\n";
    }
}