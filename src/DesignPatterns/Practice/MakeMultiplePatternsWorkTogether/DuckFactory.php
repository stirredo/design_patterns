<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


class DuckFactory extends AbstractDuckFactory
{

    public function createDuckToy()
    {
        return new QuackCounter(new DuckToy());
    }

    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }
}