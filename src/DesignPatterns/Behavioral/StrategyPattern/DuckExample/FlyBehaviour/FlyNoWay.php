<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour;


class FlyNoWay implements FlyBehaviour
{

    public function fly()
    {
        return "I cannot fly";
    }
}