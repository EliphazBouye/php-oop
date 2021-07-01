<?php 

namespace App\Bank;

class SavingAccount extends Account
{
   private $interestRate;
 
   /**
    * Constructor for create new saving account and send $owner and $balance to parent
    * class
    *
    * @param string $owner
    * @param float $balance
    * @param integer $interestRate
    */  
   public function __construct(string $owner, float $balance, int $interestRate)
   {
      //Send necessary value to parent class
      parent::__construct($owner, $balance);
      $this->interestRate = $interestRate;
   }
   
   /**
    * Get the value of interestRate
    */ 
   public function getInterestRate(): int
   {
      return $this->interestRate;
   }

   /**
    * Set the value of interestRate
    *
    * @return  self
    */ 
   public function setInterestRate(int $interestRate): self
   {
      if($interestRate >= 0){
         $this->interestRate = $interestRate;
      }

      return $this;
   }

   public function giveInterestRate()
   {
      $this->balance = $this->balance + ($this->balance * $this->interestRate / 100);
   }
}

?>