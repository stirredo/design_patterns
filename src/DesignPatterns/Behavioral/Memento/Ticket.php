<?php


namespace DesignPatterns\Behavioral\Memento;



class Ticket
{
    private State $currentState;

    public function __construct(State $state)
    {
        $this->currentState = $state;
    }

    public function open()
    {
        $this->currentState = new State(State::STATE_OPENED);
    }


    public function close()
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->currentState);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->currentState = $memento->getState();
    }

    public function getState(): State
    {
        return $this->currentState;
    }
}