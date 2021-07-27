<?php


namespace DesignPatterns\Structural\Bridge\Switches;


class DialSwitch extends AbstractSwitch
{

    public function on()
    {
        $this->implementor->on();
    }

    public function off()
    {
        $this->implementor->off();
    }

    public function increaseSpeed()
    {
        $this->implementor->increaseSpeed();
    }

    public function decreaseSpeed()
    {
        $this->implementor->decreaseSpeed();
    }
}