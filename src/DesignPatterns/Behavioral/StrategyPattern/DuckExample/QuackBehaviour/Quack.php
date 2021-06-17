<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour;


class Quack implements QuackBehaviour
{

    public function quack()
    {
        return "Quack!";
    }
}