<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks;



class MallardDuck extends Duck
{
    public function display()
    {
        return "Looks like a mallard duck!";
    }
}