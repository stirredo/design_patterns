<?php


namespace DesignPatterns\Behavioral\StatePattern;


interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();

    public function refill();

}