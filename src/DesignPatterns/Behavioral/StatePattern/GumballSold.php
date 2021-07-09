<?php


namespace DesignPatterns\Behavioral\StatePattern;


class GumballSold implements State
{

    private GumballMachine $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertQuarter()
    {
        return "Please wait, we're already giving you a gumball";
    }

    public function ejectQuarter()
    {
        return "Sorry, you have already turned the crank.";
    }

    public function turnCrank()
    {
        return "Turning twice doesn't you another gumball";
    }

    public function dispense()
    {
        $this->machine->count--;
        if ($this->machine->count > 0) {
            $this->machine->setState(new NoQuarterState($this->machine));
        } else {
            $this->machine->setState(new SoldOutState($this->machine));
        }
        return "Dispensing your gumball";
    }

    public function refill()
    {
        return "No refill required";
    }
}