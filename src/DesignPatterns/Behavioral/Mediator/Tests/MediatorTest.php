<?php

namespace DesignPatterns\Behavioral\Mediator\Tests;

use DesignPatterns\Behavioral\Mediator\Broker;
use DesignPatterns\Behavioral\Mediator\NewYorkSE;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    /**
     * @test
     */
    public function StockExchangeMediator_acts_as_Mediator_between_brokers()
    {
        $new_york_stock_exchange = new NewYorkSE();
        $jhun_jhun_wala_stock_broker = new Broker($new_york_stock_exchange);
        $stockName = "reliance";
        $jhun_jhun_wala_stock_broker->sellOffer($stockName, 100);
        $this->assertEquals(["reliance" => 100], $new_york_stock_exchange->getAvailableStocks());
        $daru_wala_stock_broker = new Broker($new_york_stock_exchange);
        $daru_wala_stock_broker->buyOffer($stockName, 100);
        $this->assertEquals(['reliance' => 0], $new_york_stock_exchange->getAvailableStocks());


    }


}
