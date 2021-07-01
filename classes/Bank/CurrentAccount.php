<?php
    namespace App\Bank;
    /**
    * Bank Account (extend account class)
    */
    class CurrentAccount extends Account
    {
        private $costs;

        /**
         * CurrentAccount constructor extend from Account class
         *
         * @param string $owner User name account to opening
         * @param float $balance Balance value to opening
         * @param integer $costs
         */
        public function __construct(string $owner, float $balance, int $costs)
        {
            parent::__construct($owner, $balance);
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
    
    ?>