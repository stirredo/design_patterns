<?php


namespace DesignPatterns\Behavioral\Mediator;


class NewYorkSE extends StockExchangeMediator
{

    public function buyOffer(string $stockName, int $quantity, Broker $broker)
    {
        if (array_key_exists($stockName, $this->stocksAvailable) && $this->stocksAvailable[$stockName] <= $quantity) {
            $this->stocksAvailable[$stockName] -= $quantity;
        } else {
            throw new NotEnoughQuantityException("Not enough quantity available for trade. Please wait a while.");
        }

    }

    public function sellOffer(string $stockName, int $quantity, Broker $broker)
    {
        if (array_key_exists($stockName, $this->stocksAvailable) && $this->stocksAvailable[$stockName] <= $quantity) {
            $this->stocksAvailable[$stockName] += $quantity;
        } else {
            $this->stocksAvailable[$stockName] = $quantity;
        }
    }
}