<?php

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\BankAccountProxy;
use PHPUnit\Framework\TestCase;

class ProxyPatternTest extends TestCase
{
    /**
     * @test
     */
    public function proxy_will_only_execute_expensive_get_balance_once()
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        $this->assertSame(30, $bankAccount->getBalance());


        $bankAccount->deposit(50);


        // since the balance is being cached, it would still return 30 instead of 80
        // (it will miss the 50 added in the previous statement)
        $this->assertSame(30, $bankAccount->getBalance());

    }

}
