<?php

namespace DesignPatterns\Behavioral\StrategyPattern\Tests;

use DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks\MallardDuck;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks\ModelDuck;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\Ducks\RubberDuck;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour\FlyNoWay;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\FlyBehaviour\FlyWithWings;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour\MuteQuack;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour\Quack;
use DesignPatterns\Behavioral\StrategyPattern\DuckExample\QuackBehaviour\Squeak;
use PHPUnit\Framework\TestCase;

class StrategyPatternTest extends TestCase
{
    /**
     * @test
     */
    public function test_changing_behaviour_on_runtime()
    {
        // mallard duck
        $flyWithWingsBehaviour = new FlyWithWings();
        $quackWithSoundBehaviour = new Quack();

        $mallard_duck = new MallardDuck();
        $mallard_duck->setFlyBehaviour($flyWithWingsBehaviour);
        $mallard_duck->setQuackBehaviour($quackWithSoundBehaviour);
        $this->assertEquals("I am flying with wings", $mallard_duck->performFly());
        $this->assertEquals("Quack!", $mallard_duck->performQuack());

        // model duck
        $flyNoWay = new FlyNoWay();
        $quackWithSoundBehaviour = new MuteQuack();
        $model_duck = new ModelDuck();
        $model_duck->setFlyBehaviour($flyNoWay);
        $model_duck->setQuackBehaviour($quackWithSoundBehaviour);
        $this->assertEquals("I cannot fly", $model_duck->performFly());
        $this->assertEquals("< silence >", $model_duck->performQuack());


        // rubber duck
        $squeakSound = new Squeak();
        $rubber_duck = new RubberDuck();
        $rubber_duck->setFlyBehaviour($flyNoWay);
        $rubber_duck->setQuackBehaviour($squeakSound);
        $this->assertEquals("Squeak Squeak!", $rubber_duck->performQuack());
        $this->assertEquals("I cannot fly", $rubber_duck->performFly());
    }
}
