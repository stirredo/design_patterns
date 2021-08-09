<?php


namespace DesignPatterns\Behavioral\Mediator;


abstract class StockExchangeMediator
{
    protected array $stocksAvailable = [];

    abstract public function buyOffer(string $stockName, int $quantity, Broker $broker);

    abstract public function sellOffer(string $stockName, int $quantity, Broker $broker);


    public function getAvailableStocks()
    {
        return $this->stocksAvailable;
    }
}