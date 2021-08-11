<?php


namespace DesignPatterns\Behavioral\Visitor;


class TobaccoItem implements Visitable
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
        return $visitor->visitTobaccoItem($this);
    }
}