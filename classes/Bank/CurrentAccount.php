<?php

namespace App\Bank;

use App\Client\Account as ClientAccount;

/**
 * Bank Account (extend account class)
 */
class CurrentAccount extends Account
{
    private $costs;

    /**
     * CurrentAccount constructor extend from Account class
     *
     * @param ClientAccount $account User name account to opening
     * @param float $balance Balance value to opening
     * @param integer $costs
     */
    public function __construct(ClientAccount $account, float $balance, int $costs)
    {
        parent::__construct($account, $balance);
        $this->costs = (int)$costs;
    }

    public function widthdraw(float $balance)
    {
        if ($balance >= 0 && $this->balance - $balance > $this->costs) {
            $resultBalance = $this->balance - $balance;
            $resultBalance -= $this->costs;
            $this->balance = $resultBalance;
        } else {
            echo "Erreur solde insuffisent ou montant invalide";
        }
    }
}