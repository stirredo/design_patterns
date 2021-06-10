<?php

// read the readme for context

require_once "../../../start.php";

use DesignPatterns\StrategyPattern\DuckExample\Ducks\Duck;
use DesignPatterns\StrategyPattern\DuckExample\Ducks\ModelDuck;
use DesignPatterns\StrategyPattern\DuckExample\Ducks\RubberDuck;
use DesignPatterns\StrategyPattern\DuckExample\FlyBehaviour\FlyNoWay;
use DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour\MuteQuack;
use DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour\Quack;
use DesignPatterns\StrategyPattern\DuckExample\Ducks\MallardDuck;
use DesignPatterns\StrategyPattern\DuckExample\FlyBehaviour\FlyWithWings;
use DesignPatterns\StrategyPattern\DuckExample\QuackBehaviour\Squeak;


function showcase_duck(Duck $duck): void
{
    $duck->display();
    $duck->performFly();
    $duck->performQuack();
}


// mallard duck
$flyWithWingsBehaviour = new FlyWithWings();
$quackWithSoundBehaviour = new Quack();

$mallard_duck = new MallardDuck();
$mallard_duck->setFlyBehaviour($flyWithWingsBehaviour);
$mallard_duck->setQuackBehaviour($quackWithSoundBehaviour);

showcase_duck($mallard_duck);

// model duck
$flyNoWay = new FlyNoWay();
$quackWithSoundBehaviour = new MuteQuack();
$model_duck = new ModelDuck();
$model_duck->setFlyBehaviour($flyNoWay);
$model_duck->setQuackBehaviour($quackWithSoundBehaviour);

showcase_duck($model_duck);


// rubber duck
$squeakSound = new Squeak();
$rubber_duck = new RubberDuck();
$rubber_duck->setFlyBehaviour($flyNoWay);
$rubber_duck->setQuackBehaviour($squeakSound);
showcase_duck($rubber_duck);