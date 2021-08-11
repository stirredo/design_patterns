<?php


namespace DesignPatterns\Behavioral\Visitor;


class LiquorItem implements Visitable
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
        return $visitor->visitLiquorItem($this);
    }
}