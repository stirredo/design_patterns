<?php


namespace DesignPatterns\StrategyPattern\DuckExample\FlyBehaviour;


class FlyNoWay implements FlyBehaviour
{

    public function fly()
    {
        print "I cannot fly";
    }
}