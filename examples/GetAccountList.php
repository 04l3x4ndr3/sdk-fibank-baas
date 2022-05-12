<?php
require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\OnBoarding\Accounts;

$accounts = new Accounts(new Config());
$accountList = $accounts->getAccountList('10', '0');

header('content-type: application/json');
echo json_encode($accountList);