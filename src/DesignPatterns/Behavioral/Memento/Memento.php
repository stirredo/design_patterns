<?php


namespace DesignPatterns\Behavioral\Memento;


class Memento
{

    /**
     * Memento constructor.
     * @param State $state
     */
    public function __construct(private State $state)
    {
    }

    public function getState()
    {
        return $this->state;

    }
}