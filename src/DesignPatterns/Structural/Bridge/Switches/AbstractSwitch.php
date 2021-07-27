<?php


namespace DesignPatterns\Structural\Bridge\Switches;


use DesignPatterns\Structural\Bridge\Devices\AbstractDevice;

abstract class AbstractSwitch
{
    protected $implementor;

    public function __construct(AbstractDevice $implementor)
    {
        $this->implementor = $implementor;
    }

    public abstract function on();
    public abstract function off();
}