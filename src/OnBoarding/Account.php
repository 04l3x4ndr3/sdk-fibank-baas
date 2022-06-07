<?php

namespace TwoPlug\SdkFitbank\OnBoarding;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Common\AccountHolder;
use TwoPlug\SdkFitbank\Common\LimitedAccount;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Errors\RequiredError;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class Account extends AccountHolder
{
    public function __construct(
        ?string $personName = null,
        ?string $phoneNumber = null,
        ?string $taxNumber = null,
        ?string $mail = null,
        ?string $identityDocument = null,
        ?string $motherFullName = null,
        ?string $fatherFullName = null,
        ?string $nationality = null,
        ?string $birthState = null,
        ?int    $gender = null,
        ?int    $maritalStatus = null,
        ?string $spouseName = null,
        ?string $occupation = null,
        ?string $birthDate = null,
        ?bool   $publiclyExposedPerson = null,
        ?int    $companyType = null,
        ?int    $isCompany = null,
        ?string $nickname = null,
        ?int    $checkPendingTransfers = null,
        ?string $companyActivity = null,
        ?string $constitutionDate = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        ?array  $addresses = null, ?array $documents = null,
        ?array  $persons = null)
    {
        parent::__construct($personName, $phoneNumber, $taxNumber, $mail, $identityDocument, $motherFullName, $fatherFullName, $nationality, $birthState, $gender, $maritalStatus, $spouseName, $occupation, $birthDate, $publiclyExposedPerson, $companyType, $isCompany, $nickname, $checkPendingTransfers, $companyActivity, $constitutionDate, $bank, $bankBranch, $bankAccount, $bankAccountDigit, $addresses, $documents, $persons);
    }

    /**
     * @param Account|null $account
     * @return object
     * @throws GuzzleException
     */
    public function newAccount(?Account $account = null): object
    {
        $http = new CallApi(parent::getConfiguration());
        $data = (isset($account)) ? $account->toArray() : parent::toArray();
        return $http->call('NewAccount', $data);
    }

    /**
     * @param LimitedAccount $limitedAccount
     * @return object
     * @throws GuzzleException
     */
    public function newLimitedAccount(LimitedAccount $limitedAccount): object
    {
        $http = new CallApi(parent::getConfiguration());
        return $http->call('LimitedAccount', $limitedAccount->toArray());
    }

    /**
     * @param string|null $identifier
     * @param string|null $taxNumber
     * @param string|null $accountKey
     * @return object
     * @throws GuzzleException
     * @throws Exception
     */
    public function getAccount(string $identifier = null, string $taxNumber = null, string $accountKey = null): object
    {
        if (!isset($identifier) and !isset($taxNumber) and !isset($accountKey)) throw new RequiredError('Enter one of the method parameters!');
        $http = new CallApi(parent::getConfiguration());
        $data = [
            'Identifier' => $identifier,
            'TaxNumber' => $taxNumber,
            'AccountKey' => $accountKey
        ];
        return $http->call('GetAccount', $data);
    }

    /**
     * @param int $pageSize
     * @param int $index
     * @return object
     * @throws GuzzleException
     */
    public function getAccountList(int $pageSize = 5, int $index = 0): object
    {
        $http = new CallApi(parent::getConfiguration());
        $data = [
            'PageSize' => $pageSize,
            'Index' => $index
        ];
        return $http->call('GetAccountList', $data);
    }

    /**
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param bool $onlyBalance
     * @param string $entryClassificationType
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntry(string $taxNumber, string $startDate, string $endDate, string $bank = "", string $bankBranch = "", string $bankAccount = "", string $bankAccountDigit = "", bool $onlyBalance = false, string $entryClassificationType = "Debit"): object
    {
        $http = new CallApi(parent::getConfiguration());
        $data = [
            "TaxNumber" => $taxNumber,
            "StartDate" => $startDate,
            "EndDate" => $endDate,
            "Bank" => $bank ?? "",
            "BankBranch" => $bankBranch ?? "",
            "BankAccount" => $bankAccount ?? "",
            "BankAccountDigit" => $bankAccountDigit ?? "",
            "OnlyBalance" => ($onlyBalance) ? "true" : "false",
            "EntryClassificationType" => $entryClassificationType
        ];
        $call = $http->call('GetAccountEntry', $data);

        # fix api return
        if (isset($call->data->Entry)) $call->data->Entry = json_decode($call->data->Entry, false);
        return $call;
    }

    /**
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param bool $onlyBalance
     * @param int $pageSize
     * @param int $pageIndex
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntryPaged(string $taxNumber, string $startDate, string $endDate, string $bank = "", string $bankBranch = "", string $bankAccount = "", string $bankAccountDigit = "", bool $onlyBalance = false, int $pageSize = 25, int $pageIndex = 0): object
    {
        $http = new CallApi(parent::getConfiguration());
        $data = [
            "TaxNumber" => $taxNumber,
            "StartDate" => $startDate,
            "EndDate" => $endDate,
            "Bank" => $bank,
            "BankBranch" => $bankBranch,
            "BankAccount" => $bankAccount,
            "BankAccountDigit" => $bankAccountDigit,
            "OnlyBalance" => $onlyBalance,
            "PageSize" => $pageSize,
            "PageIndex" => $pageIndex
        ];
        $call = $http->call('GetAccountEntryPaged', $data);

        # fix api return
        if (isset($call->data->Entry)) $call->data->Entry = json_decode($call->data->Entry);
        return $call;
    }
}
