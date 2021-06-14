<?php


namespace DesignPatterns\Behavioral\ObserverPattern;


interface Observer
{
    public function update(Subject $subject);
}