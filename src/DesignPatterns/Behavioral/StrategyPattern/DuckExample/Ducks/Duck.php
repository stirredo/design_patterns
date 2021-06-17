<?php


namespace DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks;


use DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour\FlyBehaviour;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour\QuackBehaviour;

abstract class Duck
{
    public $flyBehaviour;
    public $quackBehaviour;

    public function setFlyBehaviour(FlyBehaviour $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }
    public function setQuackBehaviour(QuackBehaviour $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public abstract function display();

    public function performQuack()
    {
        return $this->quackBehaviour->quack();

    }

    public function performFly()
    {
        return $this->flyBehaviour->fly();

    }

    public function swim()
    {
        return "All ducks swim, even the fake ones";
    }

}