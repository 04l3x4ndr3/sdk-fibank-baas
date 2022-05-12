<?php
require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\OnBoarding\Accounts;

$accounts = new Accounts(new Config());
$accountEntry = $accounts->getAccountEntry('08963882713', '01/04/2022', date('d/m/Y'), '', '', '', '', false, 'Debit');

header('content-type: application/json');
echo json_encode($accountEntry);