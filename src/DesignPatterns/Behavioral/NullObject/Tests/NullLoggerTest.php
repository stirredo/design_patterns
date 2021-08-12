<?php

namespace DesignPatterns\Behavioral\NullObject\Tests;

use DesignPatterns\Behavioral\NullObject\NullLogger;
use DesignPatterns\Behavioral\NullObject\PrintLogger;
use DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullLoggerTest extends TestCase
{
    /**
     * @test
     */
    public function null_logger_does_not_output_anything_additional()
    {
        $service = new Service(new PrintLogger());
        $service->doSomething();
        $this->expectOutputString(Service::WE_ARE_DOING_SOMETHING_STR);
        $service = new Service(new NullLogger());
        $service->doSomething();
        // no additional output was added
        $this->expectOutputString(Service::WE_ARE_DOING_SOMETHING_STR);

    }
}
