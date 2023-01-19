<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\InvalidArgumentException;
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
        $addr = $this->call('GetAccountAddress', [
            'TaxNumber' => $taxNumber,
        ]);

        if($addr->Success !== "true"){
            throw new InvalidArgumentException($addr->Message, 200);
        }

        $data = [];
        foreach ($addr->Message as $addr) {
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
     * Get Account Entry
     * @document https://dev.fitbank.com.br/reference/15
     *
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param bool   $onlyBalance
     * @param string $entryClassificationType
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
                return ! is_null($v);
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
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param bool   $onlyBalance
     * @param int    $pageSize
     * @param int    $pageIndex
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
     *
     * @return object
     * @throws GuzzleException
     */
    public function blockAccount(string $taxNumber, ?int $identifier = null): object
    {
        return $this->call(
            'BlockAccount',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Identifier" => $identifier
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }
}
