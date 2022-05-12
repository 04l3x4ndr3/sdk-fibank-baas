<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\OnBoarding\Accounts;

$accounts = new Accounts(new Config());
$accountList = $accounts->getAccountList('10', '0');

header('content-type: application/json');
echo json_encode($accountList);