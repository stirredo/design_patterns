<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


use SplSubject;

class Quackologist implements \SplObserver
{
    public $recorder = [];

    public function update(SplSubject $subject)
    {
        $this->recorder[] = $subject->name . " just quacked!";
    }
}