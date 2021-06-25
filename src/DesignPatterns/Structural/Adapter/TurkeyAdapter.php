<?php


namespace DesignPatterns\Structural\Adapter;


class TurkeyAdapter implements DuckInterface
{
    public Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        return $this->turkey->gobble();
    }

    public function fly()
    {
        return $this->turkey->fly();
    }
}