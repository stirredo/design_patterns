<?php


namespace DesignPatterns\Behavioral\StatePattern;


class GumballMachine
{
    public State $noQuarter;
    public State $hasQuarter;
    public State $gumballSold;
    public State $winner;
    public State $soldOutState;

    public State $state;

    public int $count = 0;

    public int $capacity;


    public function __construct(int $numberOfGumballs)
    {
        $this->count = $numberOfGumballs;
        $this->capacity = $numberOfGumballs;
        $this->noQuarter = new NoQuarterState($this);
        $this->hasQuarter = new HasQuarterState($this);
        $this->gumballSold = new GumballSold($this);
        $this->winner = new WinnerState($this);
        $this->soldOutState = new SoldOutState($this);

        if ($this->count == 0) {
            $this->setState($this->soldOutState);
        } else {
            $this->setState($this->noQuarter);
        }
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
    }

    public function dispense()
    {
        $this->state->dispense();
    }


    public function refill()
    {
        $this->state->refill();
    }

}