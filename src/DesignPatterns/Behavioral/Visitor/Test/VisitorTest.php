<?php

namespace DesignPatterns\Behavioral\Visitor\Test;

use DesignPatterns\Behavioral\Visitor\LiquorItem;
use DesignPatterns\Behavioral\Visitor\NecessityItem;
use DesignPatterns\Behavioral\Visitor\TaxVisitor;
use DesignPatterns\Behavioral\Visitor\TobaccoItem;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @test
     */
    public function tax_visitor_can_calculate_tax_on_item()
    {
        $tax_visitor = new TaxVisitor();
        $liquor = new LiquorItem(1.00);
        $this->assertEquals(1.18, $liquor->accept($tax_visitor));
        $tobacco = new TobaccoItem(1.00);
        $this->assertEquals(1.20, $tobacco->accept($tax_visitor));
        $necessity = new NecessityItem(1.00);
        $this->assertEquals(1.10, $necessity->accept($tax_visitor));

    }

}
