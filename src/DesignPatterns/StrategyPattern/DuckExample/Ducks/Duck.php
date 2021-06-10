<?php


namespace DesignPatterns\StrategyPattern\DuckExample\Ducks;


use DesignPatterns\StrategyPattern\DuckExample\FlyBehaviour\FlyBehaviour;
use DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour\QuackBehaviour;

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
        echo $this->quackBehaviour->quack();
        echo "\n";
    }

    public function performFly()
    {
        echo $this->flyBehaviour->fly();
        echo "\n";
    }

    public function swim()
    {
        echo "All ducks swim, even the fake ones";
    }

}