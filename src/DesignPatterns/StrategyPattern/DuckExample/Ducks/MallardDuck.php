<?php


namespace DesignPatterns\StrategyPattern\DuckExample\Ducks;


class MallardDuck extends Duck
{
    public function display()
    {
        echo "Looks like a mallard duck!";
        echo "\n";
    }
}