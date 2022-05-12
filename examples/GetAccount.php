<?php
require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\OnBoarding\Accounts;

$accounts = new Accounts(new Config());
$accountInfo = $accounts->getAccount('', '08963882713', '');

header('content-type: application/json');
echo json_encode($accountInfo);