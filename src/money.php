<?php

declare(strict_types=1);

namespace Money;

use Currency\Currency;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(float|int $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this->getAmount() == $money->getAmount() &&
            $this->getCurrency() == $money->getCurrency();
    }

    public function add(Money $money) : Money
    {
        if ($this->getCurrency() != $money->getCurrency()) {
            throw new \Exception('You can\'t add different currencies');
        } else {
            return new Money($this->getAmount() + $money->getAmount(), $this->getCurrency());
        }
    }
}