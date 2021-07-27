<?php


namespace DesignPatterns\Structural\Bridge\Devices;


abstract class AbstractDevice
{
    public abstract function on();
    public abstract function off();

}