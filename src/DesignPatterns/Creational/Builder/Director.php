<?php


namespace DesignPatterns\Creational\Builder;


class Director
{

    public function build(Builder $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();

    }
}