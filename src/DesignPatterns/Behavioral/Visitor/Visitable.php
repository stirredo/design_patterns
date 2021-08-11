<?php


namespace DesignPatterns\Behavioral\Visitor;


interface Visitable
{
    public function accept(VisitorInterface $visitor);
}