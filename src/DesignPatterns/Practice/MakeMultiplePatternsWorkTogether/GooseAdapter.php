<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


class GooseAdapter implements Quackable
{
    private Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;

    }


    public function quack()
    {
        return $this->goose->makeSound();
    }
}