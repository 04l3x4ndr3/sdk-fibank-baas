<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\OnBoarding\Account;

$accounts = new Account();
$accounts->setConfiguration(new Config('sandbox', '5cbf8a8e-abf2-4f45-9b8c-25de65dc7459', '76046849-a1eb-4a36-b085-0e68965bef2a', '715', '840', '54265'));
$accountEntry = $accounts->getAccountEntry('08963882713', '01/04/2022', '01/04/2022', '', '', '', '', false, 'Debit');

header('content-type: application/json');
echo json_encode($accountEntry);