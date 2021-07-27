<?php


namespace DesignPatterns\Structural\Bridge\Switches;


use DesignPatterns\Structural\Bridge\Switches\AbstractSwitch;

class ButtonSwitch extends AbstractSwitch
{

    public function on()
    {
        $this->implementor->on();
    }

    public function off()
    {
        $this->implementor->off();
    }
}