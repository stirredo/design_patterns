<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour;


class FlyWithWings implements FlyBehaviour
{

    public function fly()
    {
        print "I am flying with wings";
    }
}