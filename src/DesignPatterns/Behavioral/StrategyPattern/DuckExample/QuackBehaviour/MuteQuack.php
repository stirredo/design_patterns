<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour;


class MuteQuack implements QuackBehaviour
{

    public function quack()
    {
        echo "< silence >";
    }
}