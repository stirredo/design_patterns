<?php


namespace DesignPatterns\Behavioral\Visitor;


class NecessityItem implements Visitable
{

    public function __construct(private float $price)
    {

    }

    public function getPrice()
    {
        return $this->price;
    }


    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitNecessityItem($this);
    }
}