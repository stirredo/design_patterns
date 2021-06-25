<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\DuckInterface;
use DesignPatterns\Structural\Adapter\Turkey;
use DesignPatterns\Structural\Adapter\TurkeyAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    /**
     * @test
     */
    public function turkey_adapter_can_implement_duck_interface()
    {
        $turkey = new Turkey();
        $turkey_adapter = new TurkeyAdapter($turkey);
        $this->assertInstanceOf(DuckInterface::class, $turkey_adapter);
        $this->assertEquals("Gobble Gobble", $turkey_adapter->quack());
        $this->assertEquals("I am flying but for a short time", $turkey_adapter->fly());
    }

}
