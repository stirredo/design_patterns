<?php


namespace DesignPatterns\Behavioral\Visitor;


interface VisitorInterface
{
    public function visitLiquorItem(LiquorItem $item);
    public function visitTobaccoItem(TobaccoItem $item);
    public function visitNecessityItem(NecessityItem $item);
}