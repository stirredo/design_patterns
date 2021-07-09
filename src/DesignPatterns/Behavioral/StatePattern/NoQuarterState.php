<?php


namespace DesignPatterns\Behavioral\StatePattern;


class NoQuarterState implements State
{
    public GumballMachine $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertQuarter()
    {
        $this->machine->setState(new HasQuarterState($this->machine));
        return "You have inserted a quarter into the machine.";
    }

    public function ejectQuarter()
    {
        return "No quarter found.";
    }

    public function turnCrank()
    {
        return "You turned the crank but you will have to insert quarter first";
    }

    public function dispense()
    {
        return "You need to pay first";
    }

    public function refill()
    {
        return "No refill required";
    }
}