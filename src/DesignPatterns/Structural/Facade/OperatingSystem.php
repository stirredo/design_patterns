<?php


namespace DesignPatterns\Structural\Facade;


interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}