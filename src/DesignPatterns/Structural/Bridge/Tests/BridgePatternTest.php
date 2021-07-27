<?php

namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\Devices\Fan;
use DesignPatterns\Structural\Bridge\Devices\Lights;
use DesignPatterns\Structural\Bridge\Switches\ButtonSwitch;
use DesignPatterns\Structural\Bridge\Switches\DialSwitch;
use PHPUnit\Framework\TestCase;

class BridgePatternTest extends TestCase
{
    /**
     * @test
     */
    public function switch_can_be_dial_switch_for_a_fan()
    {
        $fan = new Fan();
        $dial_switch = new DialSwitch($fan);
        $dial_switch->on();
        $this->assertEquals(1, $fan->speed);
        $dial_switch->increaseSpeed();
        $this->assertEquals(2, $fan->speed);
        $dial_switch->decreaseSpeed();
        $this->assertEquals(1, $fan->speed);
        $dial_switch->off();
        $this->assertEquals(0, $fan->speed);
    }

    /**
     * @test
     */
    public function button_switch_can_be_implemented_for_lights()
    {
        $lights = new Lights();
        $button_switch = new ButtonSwitch($lights);
        $button_switch->on();
        $this->assertTrue($lights->hasPower);
        $button_switch->off();
        $this->assertFalse($lights->hasPower);
    }
}
