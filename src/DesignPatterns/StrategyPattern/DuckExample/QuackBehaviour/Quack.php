<?php


namespace DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour;


class Quack implements QuackBehaviour
{

    public function quack()
    {
        echo "Quack!";
    }
}