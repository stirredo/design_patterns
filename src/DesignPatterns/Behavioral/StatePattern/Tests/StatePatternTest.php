<?php

namespace DesignPatterns\Behavioral\StatePattern\Tests;

use DesignPatterns\Behavioral\StatePattern\GumballMachine;
use DesignPatterns\Behavioral\StatePattern\HasQuarterState;
use DesignPatterns\Behavioral\StatePattern\NoQuarterState;
use DesignPatterns\Behavioral\StatePattern\SoldOutState;
use DesignPatterns\Behavioral\StatePattern\WinnerState;
use PHPUnit\Framework\TestCase;

class StatePatternTest extends TestCase
{
    /**
     * @test
     */
    public function if_no_gumballs_in_machine_it_goes_to_sold_out_state()
    {
        $machine = new GumballMachine(1);
        $this->assertInstanceOf(NoQuarterState::class, $machine->state);
        $machine->insertQuarter();
        $machine->turnCrank();
        $machine->dispense();
        $this->assertInstanceOf(SoldOutState::class, $machine->state);
    }
    
    /**
     * @test
     */
    public function if_gumball_ejects_inserts_quarter_it_goes_into_has_quarter_state()
    {
        $machine = new GumballMachine(1);
        $this->assertInstanceOf(NoQuarterState::class, $machine->state);
        $machine->insertQuarter();
        $this->assertInstanceOf(HasQuarterState::class, $machine->state);
    }

    /**
     * @test
     */
    public function if_machine_has_quarter_and_multiple_of_three_gumballs_are_left_then_gumballs_are_dispensed()
    {
        $machine = new GumballMachine(3);
        $machine->insertQuarter();
        $machine->turnCrank();
        $this->assertInstanceOf(WinnerState::class, $machine->state);
        $machine->dispense();

        $this->assertEquals($machine->count, 1);

    }

    /**
     * @test
     */
    public function gumball_machine_can_be_refilled_when_empty()
    {
        $machine = new GumballMachine(1);
        $machine->insertQuarter();
        $machine->turnCrank();
        $machine->dispense();
        $this->assertInstanceOf(SoldOutState::class, $machine->state);
        $machine->refill();
        $this->assertInstanceOf(NoQuarterState::class, $machine->state);

    }

    /**
     * @test
     */
    public function ejecting_a_quarter_takes_it_to_no_quarter_state()
    {
        $machine = new GumballMachine(1);
        $machine->insertQuarter();
        $machine->ejectQuarter();
        $this->assertInstanceOf(NoQuarterState::class, $machine->state);
    }

}
