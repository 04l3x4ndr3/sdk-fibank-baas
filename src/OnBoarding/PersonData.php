<?php

namespace TwoPlug\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Common\AccountHolder;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class PersonData extends AccountHolder
{
    private Configuration $configuration;

    public function __construct(?string $personName = null, ?string $phoneNumber = null, ?string $taxNumber = null, ?string $mail = null, ?string $identityDocument = null, ?string $motherFullName = null, ?string $fatherFullName = null, ?string $nationality = null, ?string $birthState = null, ?int $gender = null, ?int $maritalStatus = null, ?string $spouseName = null, ?string $occupation = null, ?string $birthDate = null, ?bool $publiclyExposedPerson = null, ?int $companyType = null, ?int $isCompany = null, ?string $nickname = null, ?int $checkPendingTransfers = null, ?string $companyActivity = null, ?string $constitutionDate = null, ?string $bank = null, ?string $bankBranch = null, ?string $bankAccount = null, ?string $bankAccountDigit = null, ?array $addresses = null, ?array $documents = null, ?array $persons = null)
    {
        parent::__construct($personName, $phoneNumber, $taxNumber, $mail, $identityDocument, $motherFullName, $fatherFullName, $nationality, $birthState, $gender, $maritalStatus, $spouseName, $occupation, $birthDate, $publiclyExposedPerson, $companyType, $isCompany, $nickname, $checkPendingTransfers, $companyActivity, $constitutionDate, $bank, $bankBranch, $bankAccount, $bankAccountDigit, $addresses, $documents, $persons);
        $this->configuration = new Configuration();
    }

    /**
     * @param AccountHolder|null $accountHolder
     * @return object
     * @throws GuzzleException
     */
    public function updatePersonData(?AccountHolder $accountHolder = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($accountHolder)) ? $accountHolder->toArray() : parent::toArray();
        return $http->call('UpdatePersonData', array_filter($data));
    }
}