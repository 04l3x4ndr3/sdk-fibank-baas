<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class PixOut
{
    private Configuration $configuration;
    private string $taxNumber;
    private string $bank;
    private string $bankBranch;
    private string $bankAccount;
    private string $bankAccountDigit;
    private string $toTaxNumber;
    private string $toName;
    private string $toBank;
    private string $toBankBranch;
    private string $toBankAccount;
    private string $toBankAccountDigit;
    private float $value;
    private string $PixKey;
    private int $pixKeyType;
    private int $AccountType;
    private int $rateValue;
    private string $identifier;
    private string $paymentDate;
//$tags":{"RefundPix":"RefundPix"},
    private string $description;
    private string $entriesName;
    private string $entriesTaxNumber;
    private string $entriesValue;
    private string $entriesDescription;
    private string $entriesBank;
    private string $entriesBankBranch;
    private string $entriesBankAccount;
    private string $entriesBankAccountDigit;
    private string $onlineTransfer;
    private string $searchProtocol;
    private string $customerMessage;
    private int $transactionPurpose;
    private int $agentModality;
    private int $transactionDetailsType;
    private float $transactionDetailsValue;

    /**
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string $toTaxNumber
     * @param string $toName
     * @param string $toBank
     * @param string $toBankBranch
     * @param string $toBankAccount
     * @param string $toBankAccountDigit
     * @param float $value
     * @param string $identifier
     * @param string $paymentDate
     * @param string|null $PixKey
     * @param int|null $pixKeyType
     * @param int|null $AccountType
     * @param int|null $rateValue
     * @param string|null $description
     * @param string|null $entriesName
     * @param string|null $entriesTaxNumber
     * @param string|null $entriesValue
     * @param string|null $entriesDescription
     * @param string|null $entriesBank
     * @param string|null $entriesBankBranch
     * @param string|null $entriesBankAccount
     * @param string|null $entriesBankAccountDigit
     * @param string|null $searchProtocol
     * @param string|null $customerMessage
     * @param bool $onlineTransfer
     */
    public function __construct(string  $taxNumber,
                                string  $bank,
                                string  $bankBranch,
                                string  $bankAccount,
                                string  $bankAccountDigit,
                                string  $toTaxNumber,
                                string  $toName,
                                string  $toBank,
                                string  $toBankBranch,
                                string  $toBankAccount,
                                string  $toBankAccountDigit,
                                float   $value,
                                string  $identifier,
                                string  $paymentDate,
                                ?string $PixKey,
                                ?int    $pixKeyType,
                                ?int    $AccountType,
                                ?int    $rateValue,
                                ?string $description,
                                ?string $entriesName,
                                ?string $entriesTaxNumber,
                                ?string $entriesValue,
                                ?string $entriesDescription,
                                ?string $entriesBank,
                                ?string $entriesBankBranch,
                                ?string $entriesBankAccount,
                                ?string $entriesBankAccountDigit,
                                ?string $searchProtocol,
                                ?string $customerMessage,
                                bool    $onlineTransfer = true)
    {
        $this->configuration = new Configuration();

        $this->taxNumber = $taxNumber;
        $this->bank = $bank;
        $this->bankBranch = $bankBranch;
        $this->bankAccount = $bankAccount;
        $this->bankAccountDigit = $bankAccountDigit;
        $this->toTaxNumber = $toTaxNumber;
        $this->toName = $toName;
        $this->toBank = $toBank;
        $this->toBankBranch = $toBankBranch;
        $this->toBankAccount = $toBankAccount;
        $this->toBankAccountDigit = $toBankAccountDigit;
        $this->value = $value;
        $this->PixKey = $PixKey;
        $this->pixKeyType = $pixKeyType;
        $this->AccountType = $AccountType;
        $this->rateValue = $rateValue;
        $this->identifier = $identifier;
        $this->paymentDate = $paymentDate;
        $this->description = $description;
        $this->entriesName = $entriesName;
        $this->entriesTaxNumber = $entriesTaxNumber;
        $this->entriesValue = $entriesValue;
        $this->entriesDescription = $entriesDescription;
        $this->entriesBank = $entriesBank;
        $this->entriesBankBranch = $entriesBankBranch;
        $this->entriesBankAccount = $entriesBankAccount;
        $this->entriesBankAccountDigit = $entriesBankAccountDigit;
        $this->onlineTransfer = $onlineTransfer;
        $this->searchProtocol = $searchProtocol;
        $this->customerMessage = $customerMessage;
    }


    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getTaxNumber(): string
    {
        return $this->taxNumber;
    }

    /**
     * @param string $taxNumber
     */
    public function setTaxNumber(string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     */
    public function setBank(string $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getBankBranch(): string
    {
        return $this->bankBranch;
    }

    /**
     * @param string $bankBranch
     */
    public function setBankBranch(string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     */
    public function setBankAccount(string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string
     */
    public function getBankAccountDigit(): string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function setBankAccountDigit(string $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }

    /**
     * @return string
     */
    public function getToTaxNumber(): string
    {
        return $this->toTaxNumber;
    }

    /**
     * @param string $toTaxNumber
     */
    public function setToTaxNumber(string $toTaxNumber): void
    {
        $this->toTaxNumber = $toTaxNumber;
    }

    /**
     * @return string
     */
    public function getToName(): string
    {
        return $this->toName;
    }

    /**
     * @param string $toName
     */
    public function setToName(string $toName): void
    {
        $this->toName = $toName;
    }

    /**
     * @return string
     */
    public function getToBank(): string
    {
        return $this->toBank;
    }

    /**
     * @param string $toBank
     */
    public function setToBank(string $toBank): void
    {
        $this->toBank = $toBank;
    }

    /**
     * @return string
     */
    public function getToBankBranch(): string
    {
        return $this->toBankBranch;
    }

    /**
     * @param string $toBankBranch
     */
    public function setToBankBranch(string $toBankBranch): void
    {
        $this->toBankBranch = $toBankBranch;
    }

    /**
     * @return string
     */
    public function getToBankAccount(): string
    {
        return $this->toBankAccount;
    }

    /**
     * @param string $toBankAccount
     */
    public function setToBankAccount(string $toBankAccount): void
    {
        $this->toBankAccount = $toBankAccount;
    }

    /**
     * @return string
     */
    public function getToBankAccountDigit(): string
    {
        return $this->toBankAccountDigit;
    }

    /**
     * @param string $toBankAccountDigit
     */
    public function setToBankAccountDigit(string $toBankAccountDigit): void
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getPixKey(): string
    {
        return $this->PixKey;
    }

    /**
     * @param string $PixKey
     */
    public function setPixKey(string $PixKey): void
    {
        $this->PixKey = $PixKey;
    }

    /**
     * @return int
     */
    public function getPixKeyType(): int
    {
        return $this->pixKeyType;
    }

    /**
     * @param int $pixKeyType
     */
    public function setPixKeyType(int $pixKeyType): void
    {
        $this->pixKeyType = $pixKeyType;
    }

    /**
     * @return int
     */
    public function getAccountType(): int
    {
        return $this->AccountType;
    }

    /**
     * @param int $AccountType
     */
    public function setAccountType(int $AccountType): void
    {
        $this->AccountType = $AccountType;
    }

    /**
     * @return int
     */
    public function getRateValue(): int
    {
        return $this->rateValue;
    }

    /**
     * @param int $rateValue
     */
    public function setRateValue(int $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getPaymentDate(): string
    {
        return $this->paymentDate;
    }

    /**
     * @param string $paymentDate
     */
    public function setPaymentDate(string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEntriesName(): string
    {
        return $this->entriesName;
    }

    /**
     * @param string $entriesName
     */
    public function setEntriesName(string $entriesName): void
    {
        $this->entriesName = $entriesName;
    }

    /**
     * @return string
     */
    public function getEntriesTaxNumber(): string
    {
        return $this->entriesTaxNumber;
    }

    /**
     * @param string $entriesTaxNumber
     */
    public function setEntriesTaxNumber(string $entriesTaxNumber): void
    {
        $this->entriesTaxNumber = $entriesTaxNumber;
    }

    /**
     * @return string
     */
    public function getEntriesValue(): string
    {
        return $this->entriesValue;
    }

    /**
     * @param string $entriesValue
     */
    public function setEntriesValue(string $entriesValue): void
    {
        $this->entriesValue = $entriesValue;
    }

    /**
     * @return string
     */
    public function getEntriesDescription(): string
    {
        return $this->entriesDescription;
    }

    /**
     * @param string $entriesDescription
     */
    public function setEntriesDescription(string $entriesDescription): void
    {
        $this->entriesDescription = $entriesDescription;
    }

    /**
     * @return string
     */
    public function getEntriesBank(): string
    {
        return $this->entriesBank;
    }

    /**
     * @param string $entriesBank
     */
    public function setEntriesBank(string $entriesBank): void
    {
        $this->entriesBank = $entriesBank;
    }

    /**
     * @return string
     */
    public function getEntriesBankBranch(): string
    {
        return $this->entriesBankBranch;
    }

    /**
     * @param string $entriesBankBranch
     */
    public function setEntriesBankBranch(string $entriesBankBranch): void
    {
        $this->entriesBankBranch = $entriesBankBranch;
    }

    /**
     * @return string
     */
    public function getEntriesBankAccount(): string
    {
        return $this->entriesBankAccount;
    }

    /**
     * @param string $entriesBankAccount
     */
    public function setEntriesBankAccount(string $entriesBankAccount): void
    {
        $this->entriesBankAccount = $entriesBankAccount;
    }

    /**
     * @return string
     */
    public function getEntriesBankAccountDigit(): string
    {
        return $this->entriesBankAccountDigit;
    }

    /**
     * @param string $entriesBankAccountDigit
     */
    public function setEntriesBankAccountDigit(string $entriesBankAccountDigit): void
    {
        $this->entriesBankAccountDigit = $entriesBankAccountDigit;
    }

    /**
     * @return string
     */
    public function getOnlineTransfer(): string
    {
        return $this->onlineTransfer;
    }

    /**
     * @param string $onlineTransfer
     */
    public function setOnlineTransfer(string $onlineTransfer): void
    {
        $this->onlineTransfer = $onlineTransfer;
    }

    /**
     * @return string
     */
    public function getSearchProtocol(): string
    {
        return $this->searchProtocol;
    }

    /**
     * @param string $searchProtocol
     */
    public function setSearchProtocol(string $searchProtocol): void
    {
        $this->searchProtocol = $searchProtocol;
    }

    /**
     * @return string
     */
    public function getCustomerMessage(): string
    {
        return $this->customerMessage;
    }

    /**
     * @param string $customerMessage
     */
    public function setCustomerMessage(string $customerMessage): void
    {
        $this->customerMessage = $customerMessage;
    }

    /**
     * @return int
     */
    public function getTransactionPurpose(): int
    {
        return $this->transactionPurpose;
    }

    /**
     * @param int $transactionPurpose
     */
    public function setTransactionPurpose(int $transactionPurpose): void
    {
        $this->transactionPurpose = $transactionPurpose;
    }

    /**
     * @return int
     */
    public function getAgentModality(): int
    {
        return $this->agentModality;
    }

    /**
     * @param int $agentModality
     */
    public function setAgentModality(int $agentModality): void
    {
        $this->agentModality = $agentModality;
    }

    /**
     * @return int
     */
    public function getTransactionDetailsType(): int
    {
        return $this->transactionDetailsType;
    }

    /**
     * @param int $transactionDetailsType
     */
    public function setTransactionDetailsType(int $transactionDetailsType): void
    {
        $this->transactionDetailsType = $transactionDetailsType;
    }

    /**
     * @return float
     */
    public function getTransactionDetailsValue(): float
    {
        return $this->transactionDetailsValue;
    }

    /**
     * @param float $transactionDetailsValue
     */
    public function setTransactionDetailsValue(float $transactionDetailsValue): void
    {
        $this->transactionDetailsValue = $transactionDetailsValue;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToName" => $this->toName,
            "ToBank" => $this->toBank,
            "ToBankBranch" => $this->toBankBranch,
            "ToBankAccount" => $this->toBankAccount,
            "ToBankAccountDigit" => $this->toBankAccountDigit,
            "Value" => $this->value,
            "PixKey" => $this->PixKey,
            "PixKeyType" => $this->pixKeyType,
            "AccountType" => $this->AccountType,
            "RateValue" => $this->rateValue,
            "Identifier" => $this->identifier,
            "PaymentDate" => $this->paymentDate,
            "Description" => $this->description,
            "Entries" => [
                "Name" => $this->entriesName,
                "TaxNumber" => $this->entriesTaxNumber,
                "Value" => $this->entriesValue,
                "Description" => $this->entriesDescription,
                "Bank" => $this->entriesBank,
                "BankBranch" => $this->entriesBankBranch,
                "BankAccount" => $this->entriesBankAccount,
                "BankAccountDigit" => $this->entriesBankAccountDigit
            ],
            "OnlineTransfer" => $this->onlineTransfer,
            "SearchProtocol" => $this->searchProtocol,
            "CustomerMessage" => $this->customerMessage,
            "TransactionPurpose" => $this->transactionPurpose,
            "AgentModality" => $this->agentModality,
            "TransactionDetails" => [
                "Type" => $this->transactionDetailsType,
                "Value" => $this->transactionDetailsValue
            ]
        ];
    }

    /**
     * @param PixOut $pixOut
     * @return object
     * @throws GuzzleException
     */
    public function generatePixOut(PixOut $pixOut): object
    {
        $http = new CallApi($this->configuration);
        $data = $pixOut->toArray();
        return $http->call('GeneratePixOut', $data);
    }

    /**
     * @param int $DocumentNumber
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function getPixOutById(int $DocumentNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "DocumentNumber" => $DocumentNumber,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
        ];
        return $http->call('GetPixOutById', $data);
    }

    /**
     * @param string $TaxNumber
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @param string $StartDate
     * @param string $EndDate
     * @param int $PageIndex
     * @param int $PageSize
     * @return object
     * @throws GuzzleException
     */
    public function getPixOutByDate(string $TaxNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit, string $StartDate, string $EndDate, int $PageIndex, int $PageSize): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
            "StartDate" => $StartDate,
            "EndDate" => $EndDate,
            "PageIndex" => $PageIndex,
            "PageSize" => $PageSize
        ];
        return $http->call('GetPixOutById', $data);
    }

    /**
     * @param string $TaxNumber
     * @param int $Bank
     * @param string $StartDate
     * @param string $EndDate
     * @param int $PageIndex
     * @param int $PageSize
     * @return object
     * @throws GuzzleException
     */
    public function getRefundPixOutByDate(string $TaxNumber, int $Bank, string $StartDate, string $EndDate, int $PageIndex, int $PageSize): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "Bank" => $Bank,
            "StartDate" => $StartDate,
            "EndDate" => $EndDate,
            "PageIndex" => $PageIndex,
            "PageSize" => $PageSize
        ];
        return $http->call('GetRefundPixOutByDate', $data);
    }

    /**
     * @param int $DocumentNumber
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function cancelPixOut(int $DocumentNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "DocumentNumber" => $DocumentNumber,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
        ];
        return $http->call('CancelPixOut', $data);
    }


}
