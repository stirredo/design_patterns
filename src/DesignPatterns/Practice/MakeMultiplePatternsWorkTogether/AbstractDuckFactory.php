<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


abstract class AbstractDuckFactory
{
    public abstract function createDuckToy();
    public abstract function createMallardDuck();
}