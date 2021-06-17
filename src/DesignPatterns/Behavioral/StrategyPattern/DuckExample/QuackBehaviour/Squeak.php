<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour;


class Squeak implements QuackBehaviour
{

    public function quack()
    {
        return "Squeak Squeak!";

    }
}