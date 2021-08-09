<?php


namespace DesignPatterns\Behavioral\Mediator;


class Broker
{

    protected StockExchangeMediator $mediator;


    public function __construct(StockExchangeMediator $mediator)
    {
        $this->mediator = $mediator;
    }


    public function buyOffer(string $stockName, int $quantity)
    {
        $this->mediator->buyOffer($stockName, $quantity, $this);
    }

    public function sellOffer(string $stockName, int $quantity)
    {
        $this->mediator->sellOffer($stockName, $quantity, $this);
    }


}