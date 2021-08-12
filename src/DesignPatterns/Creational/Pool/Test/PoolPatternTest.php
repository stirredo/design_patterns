<?php

namespace DesignPatterns\Creational\Pool\Test;

use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolPatternTest extends TestCase
{
    /**
     * @test
     */
    public function pool_pattern_is_used_for_managing_resources()
    {
        $pool = new WorkerPool();
        $worker = $pool->get();
        $worker2 = $pool->get();
        $this->assertCount(2, $pool);
        $this->assertNotEquals(spl_object_hash($worker), spl_object_hash($worker2));
    }
}
