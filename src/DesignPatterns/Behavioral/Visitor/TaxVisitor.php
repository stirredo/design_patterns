<?php


namespace DesignPatterns\Behavioral\Visitor;


class TaxVisitor implements VisitorInterface
{

    public function visitLiquorItem(LiquorItem $item)
    {
        return $item->getPrice() * 0.18 + $item->getPrice();
    }


    public function visitTobaccoItem(TobaccoItem $item)
    {
        return $item->getPrice() * 0.20 + $item->getPrice();
    }

    public function visitNecessityItem(NecessityItem $item)
    {
        return $item->getPrice() * 0.10 + $item->getPrice();
    }
}