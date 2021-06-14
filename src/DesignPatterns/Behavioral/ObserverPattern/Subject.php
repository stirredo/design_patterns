<?php


namespace DesignPatterns\Behavioral\ObserverPattern;


interface Subject
{
    public function attach(Observer $observer);

    public function detach(Observer $observer);

    public function notify();

}