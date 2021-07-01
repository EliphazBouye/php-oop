<?php

namespace App\Bank;

abstract class Account
{
    /**
     * propretie owner for save account user name
     */
    private $owner;

    /**
     * propertie $balance for save balance
     */
    protected $balance = 0;

    /**
     * Create new Account
     *
     * @param string $owner
     * @param float $balance
     */
    public function __construct(string $owner, float $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    /**
     * get owner name
     *
     * @return void
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * set new owner name
     *
     * @param string $owner
     * @return self
     */
    public function setOwner(string $owner): self
    {
        if ($owner != "") {
            $this->owner = $owner;
        }

        return $this;
    }

    /**
     * Get balance result
     *
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * Add balance to old balacne
     *
     * @param float $balance
     * @return self
     */
    public function setBalance(float $balance): self
    {
        if ($balance >= 0) {
            $this->balance += $balance;
        }

        return $this;
    }

    /**
     * widthraw balance
     *
     * @param float $balance
     * @return void
     */
    public function widthdraw(float $balance)
    {
        if ($balance >= 0 && $this->balance > 0) {
            $this->balance -= $balance;
            return $this->messageBalanceError();
        } else {
            return $this->messageBalanceError();
        }
    }

    /**
     * get message info for balance
     *
     * @return string
     */
    private function messageBalanceError(): string
    {
        if ($this->balance > 0) {
            return "Your have fund to widthdraw $this->balance";
        } else {
            return "Unsufficient fund for widthdraw $this->balance";
        }
    }
}
