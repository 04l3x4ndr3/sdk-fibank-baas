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
     * @description Create a new account request for an Individual Person or Company
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
     * @description Create a new limited account request for individual person or company.
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
     * @description Get account information.
     * @document https://dev.fitbank.com.br/reference/117
     *
     * @param string|null $identifier
     * @param string|null $taxNumber
     * @param string|null $accountKey
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccount(?string $identifier = null, ?string $taxNumber = null, ?string $accountKey = null): object
    {
        return $this->call(
            'GetAccount',
            array_filter([
                "Identifier" => $identifier,
                "TaxNumber" => $taxNumber,
                "AccountKey" => $accountKey
            ], function ($v) {
                return $v !== null;
            })
        );
    }

    /**
     * @description Returns a list of business unit accounts.
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
     * @param string $taxNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getAccountAddress(string $taxNumber): Address
    {
        $addr = $this->call('GetAccountAddress', [
            'TaxNumber' => $taxNumber,
        ]);

        return new Address(
            $addr->addressLine ?? null,
            $addr->addressLine2 ?? null,
            $addr->zipCode ?? null,
            $addr->neighborhood ?? null,
            $addr->cityCode ?? null,
            $addr->cityName ?? null,
            $addr->state ?? null,
            $addr->addressType ?? null,
            $addr->country ?? null,
            $addr->complement ?? null,
        );
    }

    /**
     * @description Get Account Entry
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
        string $bank = "",
        string $bankBranch = "",
        string $bankAccount = "",
        string $bankAccountDigit = "",
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
                "Bank" => $bank ?? "",
                "BankBranch" => $bankBranch ?? "",
                "BankAccount" => $bankAccount ?? "",
                "BankAccountDigit" => $bankAccountDigit ?? "",
                "OnlyBalance" => ($onlyBalance) ? "true" : "false",
                "EntryClassificationType" => $entryClassificationType
            ], function ($v) {
                return $v !== null;
            })
        );

        # fix api return
        if (isset($call->Entry)) {
            $call->Entry = json_decode($call->Entry, false);
        }
        return $call;
    }

    /**
     * @description Get account entry information with a page limit.
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
        string $bank = "",
        string $bankBranch = "",
        string $bankAccount = "",
        string $bankAccountDigit = "",
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
                return $v !== null;
            })
        );

        # fix api return
        if (isset($call->data->Entry)) {
            $call->data->Entry = json_decode($call->data->Entry);
        }
        return $call;
    }
}
