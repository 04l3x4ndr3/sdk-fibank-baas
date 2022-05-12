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
$objTopUp->setOriginNSU('805a0ba6-148f-47c2-8bd8-2113e44e8b6c');
$objTopUp->setDocumentNumber(217);

# TopUps
$topUps = new TopUps(new Configuration());
$authorizeTopUp = $topUps->authorizeTopUp($topUps);

header('content-type: application/json');
echo json_encode($authorizeTopUp);