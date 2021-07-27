<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class MallardDuck implements Quackable, SplSubject
{
    public $name = "Mallard Duck";
    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();

    }
    public function quack()
    {
        $this->notify();
        return "Quack!";
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