<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    /**
     * @test
     */
    public function singleton_generates_one_instance_only()
    {
        $first_instance = Singleton::getInstance();
        $second_instance = Singleton::getInstance();
        $this->assertTrue($first_instance === $second_instance);

    }
}
