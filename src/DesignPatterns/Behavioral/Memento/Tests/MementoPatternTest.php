<?php

namespace DesignPatterns\Behavioral\Memento\Tests;

use DesignPatterns\Behavioral\Memento\State;
use DesignPatterns\Behavioral\Memento\Ticket;
use PHPUnit\Framework\TestCase;

class MementoPatternTest extends TestCase
{

    /**
     * @test
     */
    public function ticket_can_create_and_restore_using_mementos()
    {
        $ticket = new Ticket(new State(State::STATE_OPENED));
        $opened_memento = $ticket->saveToMemento();

        $ticket->close();
        $this->assertEquals(State::STATE_CLOSED, (string)$ticket->getState());
        $ticket->restoreFromMemento($opened_memento);
        $this->assertEquals(State::STATE_OPENED, (string) $ticket->getState());
        
    }
    
}
