<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Common\TopUp;
use TwoPlug\SdkFitbank\Extras\TopUps;

# Create TopUp object
$objTopUp = new TopUp();
$objTopUp->setProductValue(15);
$objTopUp->setContractIdentifier('27998142442');
$objTopUp->setTaxNumber('08963882713');
$objTopUp->setOriginNSU('01f17467-a2c4-4dcc-8034-7fdfc1fa15e9');
$objTopUp->setBatchIdentifier('970000000134');
$objTopUp->setProductKey('CLARO85-1500-970000000134');
$objTopUp->setTags(["TAG-1", "TAG-2", "TopUp"]);

# TopUps
$topUps = new TopUps(new Configuration());
$generateTopUp = $topUps->generateTopUp($topUps);

header('content-type: application/json');
echo json_encode($generateTopUp);