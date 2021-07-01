<?php

use App\Autoload;
use App\Client\Account as ClientAccount;
use App\Bank\{CurrentAccount, SavingAccount};

require_once 'classes/Autoload.php';

Autoload::register();


$compte0 = new CurrentAccount("Samuel", 500, 150);

// $compte0->widthdraw(300);
// $compte0->setOwner("Samdev");

var_dump($compte0);


$compte1 = new SavingAccount("Sophonie", 600, 3);
// $compte1->giveInterestRate();
var_dump($compte1);


$compte2 = new ClientAccount("Samuel", "Bouye");

var_dump($compte2);