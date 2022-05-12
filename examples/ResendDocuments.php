<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

require_once('../vendor/autoload.php');

use TwoPlug\SdkFitbank\Common\Document;
use \TwoPlug\SdkFitbank\Configuration as Config;
use \TwoPlug\SdkFitbank\OnBoarding\Documents;

# Create document object
$doc = new Document(
    base64_encode(file_get_contents('documents/cpf.png')),
    Config::DOCUMENT_FORMAT_PNG,
    'CPF',
    Config::DOCUMENT_TYPE_TAXNUMBER,
    'Cópia do CPF',
    '');

$documents = new Documents(new Config());
$document = $documents->resendDocuments('08963882713', [$doc]);

header('content-type: application/json');
echo json_encode($document);