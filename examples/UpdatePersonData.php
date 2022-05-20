<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

require_once('../vendor/autoload.php');

use \TwoPlug\SdkFitbank\Configuration as Config;
use \TwoPlug\SdkFitbank\Common\Address;
use \TwoPlug\SdkFitbank\Common\AccountHolder;
use TwoPlug\SdkFitbank\OnBoarding\PersonData;

# Create object Account Holder
$objAccountHolder = new AccountHolder();
$objAccountHolder->setPersonName('Alexandre Gomes Ribeiro Alves');
$objAccountHolder->setPhoneNumber('+5527998142442');
$objAccountHolder->setTaxNumber('08963882713');
$objAccountHolder->setMail('alexandre@2plug.com.br');
$objAccountHolder->setIdentityDocument('1729479');
$objAccountHolder->setMotherFullName('Maria Helena Gomes da Costa');
$objAccountHolder->setFatherFullName('Walter Ribeiro Alves');
$objAccountHolder->setNationality('Brasileira');
$objAccountHolder->setBirthState('Espirito Santo');
$objAccountHolder->setGender(Config::GENDER_MALE);
$objAccountHolder->setMaritalStatus(Config::MARITAL_STATUS_MARRIED);
$objAccountHolder->setSpouseName('Idalina Marcena da Costa Alves');
$objAccountHolder->setOccupation('Software Enginer Master');
$objAccountHolder->setBirthDate('06/03/1981');
$objAccountHolder->setPubliclyExposedPerson(false);
$objAccountHolder->setIsCompany(false);
$objAccountHolder->setCompanyType(Config::COMPANY_TYPE_LTDA);
$objAccountHolder->setBirthCity('Vila Velha');
$objAccountHolder->setNickname('Alexandre');
$objAccountHolder->setCheckPendingTransfers(false);
$objAccountHolder->setCompanyActivity('Tecnologia da Informação');
$objAccountHolder->setConstitutionDate('01/01/2018');
# Add address on AccountHolder
$objAccountHolder->addAddresse(
    new Address(
        'Rua Nossa Senhora Aparecida',
        '37',
        '29147900',
        'Rio Branco',
        13,
        'Cariacica',
        'Espirito Santo',
        Config::ADDRESS_TYPE_HOME,
        'Brasil',
        'Tr3 1503'
    )
);
# Add document on AccountHolder
$objAccountHolder->addDocument(
    new Document(
        base64_encode(file_get_contents('documents/cpf.png')),
        Config::DOCUMENT_FORMAT_JPG,
        'CNH',
        Config::DOCUMENT_TYPE_CNH,
        'Envio da CNH Frente',
        '12/31/2025'
    )
);
# Add person on AccountHolder
$objAccountHolder->addPerson(
    new Person(
        'Alexandre Gomes Ribeiro Alves',
        '08963882713',
        'alexandre@2plug.com.br',
        'Engenheiro de Software Master',
        '+5527998142442',
        Config::PERSON_ROLE_TYPE_ASSOCIATE,
        'Maria Helena Gomes da Costa',
        'Walter Ribeiro Alves',
        'Brasileiro',
        'Vila Velha',
        'Espirito Santo',
        Config::GENDER_MALE,
        Config::MARITAL_STATUS_MARRIED,
        'Idalina Marcela da Costa Alves',
        '1729479',
        '06/03/1981',
        'Alexandre Gomes Ribeiro Alves',
        '+5527998142442',
        'Alexandre',
        false,
        $objAccountHolder->getDocuments()
    )
);

# Create account object
$objAccount = new Account();
$objAccount->setHolder($objAccountHolder);

# person
$personData = new PersonData(new Config());
$updatePersonData = $personData->updatePersonData($objAccountHolder);

header('content-type: application/json');
echo json_encode($updatePersonData);