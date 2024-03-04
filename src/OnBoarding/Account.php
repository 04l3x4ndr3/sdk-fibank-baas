<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\Address;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Common\LimitedAccount;
use O4l3x4ndr3\SdkFitbank\Common\FullAccount;

class Account extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Create a new account request for an Individual Person or Company
     * @document https://dev.fitbank.com.br/reference/92
     *
     * @param FullAccount $account
     *
     * @return object
     * @throws GuzzleException
     */
    public function newAccount(FullAccount $account): object
    {
        return $this->call(
            'NewAccount',
            array_filter($account->toArray(), function ($v) {
                return $v !== null;
            })
        );
    }

    /**
     * Create a new limited account request for individual person or company.
     * @document https://dev.fitbank.com.br/reference/259
     *
     * @param LimitedAccount $limitedAccount
     *
     * @return object
     * @throws GuzzleException
     */
    public function newLimitedAccount(LimitedAccount $limitedAccount): object
    {
        return $this->call(
            'LimitedAccount',
            array_filter($limitedAccount->toArray(), function ($v) {
                return $v !== null;
            })
        );
    }

    /**
     * Get account information.
     * @document https://dev.fitbank.com.br/reference/117
     *
     * @param string|null $identifier
     * @param string|null $taxNumber
     * @param string|null $accountKey
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccount(
        ?string $identifier = null,
        ?string $taxNumber = null,
        ?string $accountKey = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null
    ): object
    {
        return $this->call(
            'GetAccount',
            array_filter([
                "Identifier" => $identifier,
                "TaxNumber" => $taxNumber,
                "AccountKey" => $accountKey,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * Returns a list of business unit accounts.
     * @document https://dev.fitbank.com.br/reference/208
     *
     * @param int $pageSize
     * @param int $index
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccountList(int $pageSize = 5, int $index = 0): object
    {
        return $this->call('GetAccountList', [
            'PageSize' => $pageSize,
            'Index' => $index
        ]);
    }

    /**
     * Obter endereço de uma determonado CPF/CNPJ
     *
     * @param string   $taxNumber
     * @param int|null $index
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccountAddress(string $taxNumber, ?int $index = null): mixed
    {
        $resp = $this->call('GetAccountAddress', [
            'TaxNumber' => $taxNumber,
        ]);

        if ($resp->Success !== "true") {
            return false;
        }

        $data = [];
        foreach ($resp->Message as $addr) {
            $data[] = new Address(
                $addr->AddressLine ?? null,
                $addr->AddressLine2 ?? null,
                $addr->ZipCode ?? null,
                $addr->Neighborhood ?? null,
                $addr->CityCode ?? null,
                $addr->CityName ?? null,
                $addr->State ?? null,
                $addr->AddressType ?? null,
                $addr->Country ?? null,
                $addr->Complement ?? null,
            );
        };

        return (isset($index)) ? $data[$index] : $data;
    }

    /**
     * @document https://dev.fitbank.com.br/reference/637
     * @description Register address for individual person or company.
     * @param string $taxNumber
     * @param Address $address
     * @return object
     */
    public function registerAddress(
        string $taxNumber,
        Address $address
    ): object {
        return $this->call(
            'RegisterAddress',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Addresses" => $address->toArray()
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * Get Account Entry
     * @document https://dev.fitbank.com.br/reference/15
     *
     * @param string      $taxNumber
     * @param string      $startDate
     * @param string      $endDate
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     * @param bool        $onlyBalance
     * @param string      $entryClassificationType
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntry(
        string $taxNumber,
        string $startDate,
        string $endDate,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        bool $onlyBalance = false,
        string $entryClassificationType = "Debit"
    ): object
    {
        $call = $this->call(
            'GetAccountEntry',
            array_filter([
                "TaxNumber" => $taxNumber,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "OnlyBalance" => ($onlyBalance) ? "true" : "false",
                "EntryClassificationType" => $entryClassificationType
            ], function ($v) {
                return !is_null($v);
            })
        );

        # fix api return
        if (isset($call->Entry)) {
            $call->Entry = json_decode($call->Entry, false);
        }
        return $call;
    }

    /**
     * Get account entry information with a page limit.
     * @document https://dev.fitbank.com.br/reference/post_-getaccountentrypaged
     *
     * @param string      $taxNumber
     * @param string      $startDate
     * @param string      $endDate
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     * @param bool        $onlyBalance
     * @param int         $pageSize
     * @param int         $pageIndex
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntryPaged(
        string $taxNumber,
        string $startDate,
        string $endDate,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        bool $onlyBalance = false,
        int $pageSize = 25,
        int $pageIndex = 0
    ): object
    {
        $call = $this->call(
            'GetAccountEntryPaged',
            array_filter([
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
            ], function ($v) {
                return !is_null($v);
            })
        );

        # fix api return
        if (isset($call->data->Entry)) {
            $call->data->Entry = json_decode($call->data->Entry);
        }
        return $call;
    }

    /**
     * Block Account.
     * @document https://fitbank.com.br/developer/#api-Account-BlockAccount
     *
     * @param string   $taxNumber
     * @param int|null $identifier
     * @return object
     * @throws GuzzleException
     * @removed
     */
    public function blockAccount(string $taxNumber, ?int $identifier = null): object
    {
        return $this->call(
            'BlockAccount',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Identifier" => $identifier
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @document https://dev.fitbank.com.br/reference/670
     * @description Get all the signers related to a Person.
     * @param string $taxNumber
     * @return object
     */
    public function getSigners(
        string $taxNumber
    ): object {
        return $this->call(
            'GetSigners',
            array_filter([
                "TaxNumber" => $taxNumber
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @description Create a request to close an account.
     * @document https://dev.fitbank.com.br/reference/457
     * @param string $taxNumber
     * @param string $justification
     * @param array|null $accountKeys
     * @param array|null $accounts
     * @return object
     */
    public function closeAccount(
        string $taxNumber,
        string $justification = "Encerramento de contas",
        ?array $accountKeys = [],
        ?array $accounts = []
    ): object {
        return $this->call(
            'CloseAccount',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Justification" => $justification,
                "AccountKeys" => $accountKeys,
                "Accounts" => $accounts
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @description Create a user or update an existing one.
     * @document https://dev.fitbank.com.br/reference/105
     * @param string $taxNumber
     * @param string $mail
     * @param string $cellphone
     * @param array $accountsTaxNumber
     * @param string $profileType
     * @param string|null $name
     * @param string|null $birthDate
     * @param string|null $userParameterType
     * @return object
     */
    public function createUser(
        string $taxNumber,
        string $mail,
        string $cellphone,
        string $profileType,
        array $accountsTaxNumber,
        ?string $name,
        ?string $birthDate,
        ?string $userParameterType
    ): object {
        return $this->call(
            'CreateUser',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Mail" => $mail,
                "Name" => $name,
                "Cellphone" => $cellphone,
                "BirthDate" => $birthDate,
                "AccountsTaxNumber" => $accountsTaxNumber,
                "UserParameterType" => $userParameterType,
                "ProfileType" => $profileType
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
