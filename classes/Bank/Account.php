<?php

namespace App\Bank;

use App\Client\Account as ClientAccount;

abstract class Account
{
    /**
     * propretie owner for save account user name
     * @var ClientAccount
     */
    private ClientAccount $owner;

    /**
     * propertie $balance for save balance
     * @var float
     */
    protected $balance = 0;

    /**
     * Create new Account
     *
     * @param string $owner
     * @param float $balance
     */
    public function __construct(ClientAccount $account, float $balance)
    {
        $this->owner = $account;
        $this->balance = $balance;
    }

    /**
     * get ClientAccount
     * @return ClientAccount
     */
    public function getOwner(): ClientAccount
    {
        return $this->owner;
    }

    /**
     * set new owner name
     *
     * @param ClientAccount $account
     * @return self
     */
    public function setOwner(ClientAccount $account): self
    {
        if (isset($account)) {
            $this->owner = $account;
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