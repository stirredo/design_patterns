<?php


namespace DesignPatterns\Behavioral\CommandPattern\Receivers;


class Light
{
    public bool $state = false;

    public function turnOn()
    {
        $this->state = true;
    }

    public function turnOff()
    {
        $this->state = false;
    }





}