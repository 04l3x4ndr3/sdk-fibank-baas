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
$objTopUp->setProductType(15);
$objTopUp->setProductSubType(27);
$objTopUp->setProductValue(15);

# TopUps
$topUps = new TopUps(new Configuration());
$getTopUpProducts = $topUps->getTopUpProducts($topUps);

header('content-type: application/json');
echo json_encode($getTopUpProducts);