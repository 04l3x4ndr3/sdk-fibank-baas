<?php

namespace two_plug\sdk_fitbank;

use Exception;
use GuzzleHttp\Exception\GuzzleException;

class Accounts
{
    private CallApi $httpCli;

    public function __construct(Configuration $configuration)
    {
        $this->httpCli = new CallApi($configuration);
    }

    /**
     * @param Account $account
     * @return object
     * @throws GuzzleException
     */
    public function newAccount(Account $account): object
    {
        return $this->httpCli->call('NewAccount', $account->toArray());
    }

    /**
     * @param LimitedAccount $account
     * @return object
     * @throws GuzzleException
     */
    public function newLimitedAccount(LimitedAccount $account): object
    {
        return $this->httpCli->call('LimitedAccount', $account->toArray());
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
        if (!isset($identifier) and !isset($taxNumber) and !isset($accountKey)) throw new Exception('Enter one of the method parameters!', 500);

        return $this->httpCli->call('GetAccount', [
            'Identifier' => $identifier,
            'TaxNumber' => $taxNumber,
            'AccountKey' => $accountKey
        ]);
    }

    /**
     * @param int $pageSize
     * @param int $index
     * @return object
     * @throws GuzzleException
     */
    public function getAccountList(int $pageSize = 5, int $index = 0): object
    {
        return $this->httpCli->call('GetAccountList', [
            'PageSize' => $pageSize,
            'Index' => $index
        ]);
    }

    /**
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param bool $onlyBalance
     * @param string $entryClassificationType
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntry(string $taxNumber, string $startDate, string $endDate, bool $onlyBalance = false, string $entryClassificationType = "Debit"): object
    {
        return $this->httpCli->call('GetAccountEntry', [
            "TaxNumber" => $taxNumber,
            "StartDate" => $startDate,
            "EndDate" => $endDate,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "OnlyBalance" => $onlyBalance,
            "EntryClassificationType" => $entryClassificationType
        ]);
    }

    /**
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param bool $onlyBalance
     * @param int $pageSize
     * @param int $pageIndex
     * @return object
     * @throws GuzzleException
     */
    public function getAccountEntryPaged(string $taxNumber, string $startDate, string $endDate, bool $onlyBalance = false, int $pageSize = 25, int $pageIndex = 0): object
    {
        return $this->httpCli->call('GetAccountEntryPaged', [
            "TaxNumber" => $taxNumber,
            "StartDate" => $startDate,
            "EndDate" => $endDate,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "OnlyBalance" => $onlyBalance,
            "PageSize" => $pageSize,
            "PageIndex" => $pageIndex
        ]);
    }
}