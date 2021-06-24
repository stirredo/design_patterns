<?php


namespace DesignPatterns\Behavioral\CommandPattern\Invoker;


use DesignPatterns\Behavioral\CommandPattern\Commands\Command;

class SimpleRemoteControl
{
    protected Command $slot;

    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    // receiver action
    public function pressButton()
    {
        $this->slot->execute();
    }

    public function pressUndoButton()
    {
        $this->slot->undo();
    }


}