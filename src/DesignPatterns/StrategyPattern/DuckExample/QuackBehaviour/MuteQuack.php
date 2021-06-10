<?php


namespace DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour;


class MuteQuack implements QuackBehaviour
{

    public function quack()
    {
        echo "< silence >";
    }
}