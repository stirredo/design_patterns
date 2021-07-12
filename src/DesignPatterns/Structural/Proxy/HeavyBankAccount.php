<?php


namespace DesignPatterns\Structural\Proxy;


class HeavyBankAccount implements BankAccount
{
    private array $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        return array_sum($this->transactions);
    }
}