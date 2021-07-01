<?php

use App\Autoload;
use App\Client\Account as ClientAccount;
use App\Bank\{CurrentAccount, SavingAccount};

require_once 'classes/Autoload.php';

Autoload::register();

$client0 = new ClientAccount("Samuel", "Bouye", "Abidjan");

$compte0 = new CurrentAccount($client0, 500, 150);

// $compte0->widthdraw(300);
// $compte0->setOwner("Samdev");

var_dump($compte0);

$client1 = new ClientAccount("Sophonie", "Zamble", "Califonia, LA");
$compte1 = new SavingAccount($client1, 600, 3);
// $compte1->giveInterestRate();
var_dump($compte1);