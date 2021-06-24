<?php


namespace DesignPatterns\Behavioral\CommandPattern\Commands;


use DesignPatterns\Behavioral\CommandPattern\Receivers\Light;

class LightOffCommand implements Command
{
    public Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->turnOff();
    }

    public function undo()
    {
        $this->light->state ? $this->light->turnOff() : $this->light->turnOn();
    }
}