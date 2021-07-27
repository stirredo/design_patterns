<?php


namespace DesignPatterns\Structural\Bridge\Devices;


class Fan extends AbstractDevice
{
    public int $speed = 0;
    public function on()
    {
        if ($this->speed === 0) {
            $this->speed = 1;
        }
    }

    public function off()
    {
        $this->speed = 0;
    }

    public function increaseSpeed()
    {
        if ($this->speed < 5) {
            $this->speed = $this->speed + 1;
        } else {
            $this->speed = 0;
        }

    }

    public function decreaseSpeed()
    {
        if ($this->speed >= 0) {
            $this->speed--;
        } else {
            $this->speed = 5;
        }
    }
}