<?php

namespace DesignPatterns\Behavioral\CommandPattern\Tests;

use DesignPatterns\Behavioral\CommandPattern\Invoker\SimpleRemoteControl;
use DesignPatterns\Behavioral\CommandPattern\Commands\LightOffCommand;
use DesignPatterns\Behavioral\CommandPattern\Commands\LightOnCommand;
use DesignPatterns\Behavioral\CommandPattern\Receivers\Light;
use PHPUnit\Framework\TestCase;

class CommandPatternTest extends TestCase
{

    /**
     * @test
     */
    public function command_can_be_triggered_by_invoker_to_change_state_in_receiver()
    {
        // receiver
        $light = new Light();
        // commands
        $light_on_command = new LightOnCommand($light);
        $light_off_command = new LightOffCommand($light);

        // invoker
        $remote_controller = new SimpleRemoteControl();
        $remote_controller->setCommand($light_on_command);
        $remote_controller->pressButton();
        $this->assertTrue($light->state);
        $remote_controller->pressUndoButton();
        $this->assertFalse($light->state);

        $remote_controller->setCommand($light_off_command);
        $remote_controller->pressButton();
        $this->assertFalse($light->state);
        $remote_controller->pressUndoButton();
        $this->assertTrue($light->state);

    }

}
