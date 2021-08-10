<?php


namespace DesignPatterns\Behavioral\Memento;


class State implements \Stringable
{
    private string $state;
    const STATE_CREATED = 'created';
    const STATE_OPENED = 'opened';
    const STATE_ASSIGNED = 'assigned';
    const STATE_CLOSED = 'closed';


    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function __toString()
    {
        return $this->state;
    }
}