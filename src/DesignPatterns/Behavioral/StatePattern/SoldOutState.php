<?php


namespace DesignPatterns\Behavioral\StatePattern;


class SoldOutState implements State
{
    private GumballMachine $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }
    public function insertQuarter()
    {
        return "The machine is sold out";
    }

    public function ejectQuarter()
    {
        return "You haven't inserted a quarter yet";
    }

    public function turnCrank()
    {
        return "There are no gumballs";
    }

    public function dispense()
    {
        return "No gumballs dispensed";
    }

    public function refill()
    {
        $this->machine->count = $this->machine->capacity;
        $this->machine->setState(new NoQuarterState($this->machine));
        return "Machine has been refilled";

    }
}