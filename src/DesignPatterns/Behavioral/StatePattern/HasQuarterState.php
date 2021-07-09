<?php


namespace DesignPatterns\Behavioral\StatePattern;


class HasQuarterState implements State
{

    private GumballMachine $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function insertQuarter()
    {
        return "You can't insert another quarter";
    }

    public function ejectQuarter()
    {
        $this->machine->setState(new NoQuarterState($this->machine));
        return "Here is your quarter.";
    }

    public function turnCrank()
    {
        if ($this->machine->count % 3 === 0 && $this->machine->count >= 2) {
            $this->machine->setState(new WinnerState($this->machine));
            return "Turn crank, we have a winner";
        } else {
            $this->machine->setState(new GumballSold($this->machine));
            return "Turn crank, no winner";
        }

    }

    public function dispense()
    {
        return "No gumball dispensed";
    }

    public function refill()
    {
        return "No refill required";

    }
}