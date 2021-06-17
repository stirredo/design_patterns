<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour;


class FlyWithWings implements FlyBehaviour
{

    public function fly()
    {
        return "I am flying with wings";
    }
}