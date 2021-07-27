<?php

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderPatternTest extends TestCase
{
    /**
     * @test
     */
    public function director_can_build_a_car()
    {
        $car_builder = new CarBuilder();
        $director = new Director();
        $car = $director->build($car_builder);
        $this->assertInstanceOf(Car::class, $car);

    }

    /**
     * @test
     */
    public function director_can_build_a_truck()
    {
        $truck_builder = new TruckBuilder();
        $director = new Director();
        $truck = $director->build($truck_builder);
        $this->assertInstanceOf(Truck::class, $truck);
    }

}
