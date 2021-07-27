<?php


namespace DesignPatterns\Creational\Builder;


use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface Builder
{

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;

    public function createVehicle();
}