<?php


namespace DesignPatterns\Structural\Bridge\Devices;


class Lights extends AbstractDevice
{

    public $hasPower = false;

    public function on()
    {
        $this->hasPower = true;
    }

    public function off()
    {
        $this->hasPower = false;
    }
}