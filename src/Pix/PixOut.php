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
    private ?string $taxNumber;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?string $toTaxNumber;
    private ?string $toName;
    private ?string $toBank;
    private ?string $toBankBranch;
    private ?string $toBankAccount;
    private ?string $toBankAccountDigit;
    private ?string $value;
    private ?string $pixKey;
    private ?string $pixKeyType;
    private ?string $accountType;
    private ?string $rateValue;
    private ?string $rateValueType;
    private ?string $identifier;
    private ?string $paymentDate;
    private ?string $description;
    private ?string $onlineTransfer;
    private ?string $searchProtocol;
    private ?string $transactionPurpose;
    private ?string $agentModality;
    private ?string $transactionDetailsType;
    private ?string $transactionDetailsValue;

    /**
     * @param string|null $taxNumber
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     * @param string|null $toTaxNumber
     * @param string|null $toName
     * @param string|null $toBank
     * @param string|null $toBankBranch
     * @param string|null $toBankAccount
     * @param string|null $toBankAccountDigit
     * @param string|null $value
     * @param string|null $pixKey
     * @param string|null $pixKeyType
     * @param string|null $accountType
     * @param string|null $rateValue
     * @param string|null $rateValueType
     * @param string|null $identifier
     * @param string|null $paymentDate
     * @param string|null $description
     * @param string|null $onlineTransfer
     * @param string|null $searchProtocol
     * @param string|null $transactionPurpose
     * @param string|null $agentModality
     * @param string|null $transactionDetailsType
     * @param string|null $transactionDetailsValue
     */
    public function __construct(?string $taxNumber = null,
                                ?string $bank = null,
                                ?string $bankBranch = null,
                                ?string $bankAccount = null,
                                ?string $bankAccountDigit = null,
                                ?string $toTaxNumber = null,
                                ?string $toName = null,
                                ?string $toBank = null,
                                ?string $toBankBranch = null,
                                ?string $toBankAccount = null,
                                ?string $toBankAccountDigit = null,
                                ?string $value = null,
                                ?string $pixKey = null,
                                ?string $pixKeyType = null,
                                ?string $accountType = null,
                                ?string $rateValue = null,
                                ?string $rateValueType = null,
                                ?string $identifier = null,
                                ?string $paymentDate = null,
                                ?string $description = null,
                                ?string $onlineTransfer = null,
                                ?string $searchProtocol = null,
                                ?string $transactionPurpose = null,
                                ?string $agentModality = null,
                                ?string $transactionDetailsType = null,
                                ?string $transactionDetailsValue = null)
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
        $this->pixKey = $pixKey;
        $this->pixKeyType = $pixKeyType;
        $this->accountType = $accountType;
        $this->rateValue = $rateValue;
        $this->rateValueType = $rateValueType;
        $this->identifier = $identifier;
        $this->paymentDate = $paymentDate;
        $this->description = $description;
        $this->onlineTransfer = $onlineTransfer;
        $this->searchProtocol = $searchProtocol;
        $this->transactionPurpose = $transactionPurpose;
        $this->agentModality = $agentModality;
        $this->transactionDetailsType = $transactionDetailsType;
        $this->transactionDetailsValue = $transactionDetailsValue;
    }


    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @param string|null $taxNumber
     */
    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    /**
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @param string|null $bank
     */
    public function setBank(?string $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @param string|null $bankBranch
     */
    public function setBankBranch(?string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    /**
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @param string|null $bankAccount
     */
    public function setBankAccount(?string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string|null $bankAccountDigit
     */
    public function setBankAccountDigit(?string $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }

    /**
     * @return string|null
     */
    public function getToTaxNumber(): ?string
    {
        return $this->toTaxNumber;
    }

    /**
     * @param string|null $toTaxNumber
     */
    public function setToTaxNumber(?string $toTaxNumber): void
    {
        $this->toTaxNumber = $toTaxNumber;
    }

    /**
     * @return string|null
     */
    public function getToName(): ?string
    {
        return $this->toName;
    }

    /**
     * @param string|null $toName
     */
    public function setToName(?string $toName): void
    {
        $this->toName = $toName;
    }

    /**
     * @return string|null
     */
    public function getToBank(): ?string
    {
        return $this->toBank;
    }

    /**
     * @param string|null $toBank
     */
    public function setToBank(?string $toBank): void
    {
        $this->toBank = $toBank;
    }

    /**
     * @return string|null
     */
    public function getToBankBranch(): ?string
    {
        return $this->toBankBranch;
    }

    /**
     * @param string|null $toBankBranch
     */
    public function setToBankBranch(?string $toBankBranch): void
    {
        $this->toBankBranch = $toBankBranch;
    }

    /**
     * @return string|null
     */
    public function getToBankAccount(): ?string
    {
        return $this->toBankAccount;
    }

    /**
     * @param string|null $toBankAccount
     */
    public function setToBankAccount(?string $toBankAccount): void
    {
        $this->toBankAccount = $toBankAccount;
    }

    /**
     * @return string|null
     */
    public function getToBankAccountDigit(): ?string
    {
        return $this->toBankAccountDigit;
    }

    /**
     * @param string|null $toBankAccountDigit
     */
    public function setToBankAccountDigit(?string $toBankAccountDigit): void
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string|null $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string|null
     */
    public function getPixKey(): ?string
    {
        return $this->pixKey;
    }

    /**
     * @param string|null $pixKey
     */
    public function setPixKey(?string $pixKey): void
    {
        $this->pixKey = $pixKey;
    }

    /**
     * @return string|null
     */
    public function getPixKeyType(): ?string
    {
        return $this->pixKeyType;
    }

    /**
     * @param string|null $pixKeyType
     */
    public function setPixKeyType(?string $pixKeyType): void
    {
        $this->pixKeyType = $pixKeyType;
    }

    /**
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param string|null $accountType
     */
    public function setAccountType(?string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return string|null
     */
    public function getRateValue(): ?string
    {
        return $this->rateValue;
    }

    /**
     * @param string|null $rateValue
     */
    public function setRateValue(?string $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    /**
     * @return string|null
     */
    public function getRateValueType(): ?string
    {
        return $this->rateValueType;
    }

    /**
     * @param string|null $rateValueType
     */
    public function setRateValueType(?string $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
    }

    /**
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @param string|null $identifier
     */
    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    /**
     * @param string|null $paymentDate
     */
    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getOnlineTransfer(): ?string
    {
        return $this->onlineTransfer;
    }

    /**
     * @param string|null $onlineTransfer
     */
    public function setOnlineTransfer(?string $onlineTransfer): void
    {
        $this->onlineTransfer = $onlineTransfer;
    }

    /**
     * @return string|null
     */
    public function getSearchProtocol(): ?string
    {
        return $this->searchProtocol;
    }

    /**
     * @param string|null $searchProtocol
     */
    public function setSearchProtocol(?string $searchProtocol): void
    {
        $this->searchProtocol = $searchProtocol;
    }

    /**
     * @return string|null
     */
    public function getTransactionPurpose(): ?string
    {
        return $this->transactionPurpose;
    }

    /**
     * @param string|null $transactionPurpose
     */
    public function setTransactionPurpose(?string $transactionPurpose): void
    {
        $this->transactionPurpose = $transactionPurpose;
    }

    /**
     * @return string|null
     */
    public function getAgentModality(): ?string
    {
        return $this->agentModality;
    }

    /**
     * @param string|null $agentModality
     */
    public function setAgentModality(?string $agentModality): void
    {
        $this->agentModality = $agentModality;
    }

    /**
     * @return string|null
     */
    public function getTransactionDetailsType(): ?string
    {
        return $this->transactionDetailsType;
    }

    /**
     * @param string|null $transactionDetailsType
     */
    public function setTransactionDetailsType(?string $transactionDetailsType): void
    {
        $this->transactionDetailsType = $transactionDetailsType;
    }

    /**
     * @return string|null
     */
    public function getTransactionDetailsValue(): ?string
    {
        return $this->transactionDetailsValue;
    }

    /**
     * @param string|null $transactionDetailsValue
     */
    public function setTransactionDetailsValue(?string $transactionDetailsValue): void
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
            "PixKey" => $this->pixKey,
            "PixKeyType" => $this->pixKeyType,
            "AccountType" => $this->accountType,
            "RateValue" => $this->rateValue,
            "RateValueType" => $this->rateValueType,
            "Identifier" => $this->identifier,
            "PaymentDate" => $this->paymentDate,
            "Description," => $this->description,
            "OnlineTransfer" => $this->onlineTransfer,
            "SearchProtocol" => $this->searchProtocol,
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
    public function generatePixOut(?PixOut $pixOut = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($pixOut)) ? $pixOut->toArray() : $this->toArray();
        return $http->call('GeneratePixOut', $data);
    }

    /**
     * @param string $TaxNumber
     * @param int $DocumentNumber
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function getPixOutById(string $TaxNumber, int $DocumentNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" =>  $TaxNumber,
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
     * @param int $DocumentNumber
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function cancelPixOut(string $TaxNumber, int $DocumentNumber, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "DocumentNumber" => $DocumentNumber,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
        ];
        return $http->call('CancelPixOut', $data);
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




}
