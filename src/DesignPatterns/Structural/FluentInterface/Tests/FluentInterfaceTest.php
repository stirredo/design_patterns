<?php

namespace DesignPatterns\Structural\FluentInterface\Tests;

use DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    /**
     * @test
     */
    public function build_sql_test()
    {
        $query = (new Sql())
            ->select(['order_no', 'name'])
            ->from('customers', 'c')
            ->where('c.id = ?');

        $expected_query = "SELECT order_no, name FROM customers AS c WHERE c.id = ?";
        $this->assertEquals($expected_query, $query);
    }
}
