<?php

namespace App\Model;

class Money
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param $amount
     * @param string $currency
     */
    public function __construct(int $amount = 0, $currency = Currency::USD)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public function __toString()
    {
        return $this->amount / 100 .' '.$this->currency;
    }

    public function subtract($value)
    {
        $this->amount = $this->amount - $value;

        return $this;
    }

    public function multiply($value)
    {
        $this->amount = $this->amount * $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param int $amount
     * @return Money
     */
    public function setAmount(int $amount): Money
    {
        $this->amount = $amount;

        return $this;
    }
}