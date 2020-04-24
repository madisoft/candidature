<?php

class Account
{
    private $balance;

    public function setBalance(int $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        $this->balance;
    }
}

class Client
{
    public function deposit(Account $account, int $amount)
    {
        $balance = $account->getBalance();
        $newBalance = $balance + $amount;
        $account->setBalance($newBalance);
    }

    public function withdraw(Account $account, int $amount)
    {
        $balance = $account->getBalance();
        if ($balance >= $amount) {
            $newBalance = $balance - $amount;
            $account->setBalance($balance);
        } else {
            throw new \Exception('...');
        }
    }
}