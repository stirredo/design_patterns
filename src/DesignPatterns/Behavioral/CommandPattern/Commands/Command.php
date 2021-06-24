<?php


namespace DesignPatterns\Behavioral\CommandPattern\Commands;


interface Command
{
    public function execute();

    public function undo();

}