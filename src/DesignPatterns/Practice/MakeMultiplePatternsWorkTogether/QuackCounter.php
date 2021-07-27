<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


class QuackCounter implements Quackable
{
    private Quackable $duck;
    public static $count = 0;
    public function __construct(Quackable $quackable)
    {
        $this->duck = $quackable;
    }


    public function quack()
    {
        self::$count = self::$count + 1;
        return $this->duck->quack();

    }
}