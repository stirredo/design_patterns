<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


use SplObserver;

class DuckToy implements Quackable, \SplSubject
{
    public $name = "Duck Toy";
    public \SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function quack()
    {
        $this->notify();
        return "Squeak!";
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}