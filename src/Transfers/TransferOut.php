<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class TransferOut
{
    private Configuration $configuration;
    private ?string $fromTaxNumber;
    private ?string $toTaxNumber;
    private ?string $toName;
    private ?int $bank;
    private ?int $bankBranch;
    private ?int $bankAccount;
    private ?int $bankAccountDigit;
    private ?int $accountType;
    private ?float $value;
    private ?float $rateValue;
    private ?string $identifier;
    private ?int $rateValueType;
    private ?array $tags;
    private ?string $description;
    private ?string $paymentDate;

    /**
     * @param string|null $fromTaxNumber
     * @param string|null $toTaxNumber
     * @param string|null $toName
     * @param int|null $bank
     * @param int|null $bankBranch
     * @param int|null $bankAccount
     * @param int|null $bankAccountDigit
     * @param int|null $accountType
     * @param float|null $value
     * @param float|null $rateValue
     * @param string|null $identifier
     * @param int|null $rateValueType
     * @param array|null $tags
     * @param string|null $description
     * @param string|null $paymentDate
     */
    public function __construct(
        ?string $fromTaxNumber = null,
        ?string $toTaxNumber = null,
        ?string $toName = null,
        ?int $bank = null,
        ?int $bankBranch = null,
        ?int $bankAccount = null,
        ?int $bankAccountDigit = null,
        ?int $accountType = null,
        ?float $value = null,
        ?float $rateValue = null,
        ?string $identifier = null,
        ?int $rateValueType = null,
        ?array $tags = null,
        ?string $description = null,
        ?string $paymentDate = null
    ) {
        $this->configuration = new Configuration();

        $this->fromTaxNumber = $fromTaxNumber;
        $this->toTaxNumber = $toTaxNumber;
        $this->toName = $toName;
        $this->bank = $bank;
        $this->bankBranch = $bankBranch;
        $this->bankAccount = $bankAccount;
        $this->bankAccountDigit = $bankAccountDigit;
        $this->accountType = $accountType;
        $this->value = $value;
        $this->rateValue = $rateValue;
        $this->identifier = $identifier;
        $this->rateValueType = $rateValueType;
        $this->tags = $tags;
        $this->description = $description;
        $this->paymentDate = $paymentDate;
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
    public function getFromTaxNumber(): ?string
    {
        return $this->fromTaxNumber;
    }

    /**
     * @param string|null $fromTaxNumber
     */
    public function setFromTaxNumber(?string $fromTaxNumber): void
    {
        $this->fromTaxNumber = $fromTaxNumber;
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
     * @return int|null
     */
    public function getBank(): ?int
    {
        return $this->bank;
    }

    /**
     * @param int|null $bank
     */
    public function setBank(?int $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * @return int|null
     */
    public function getBankBranch(): ?int
    {
        return $this->bankBranch;
    }

    /**
     * @param int|null $bankBranch
     */
    public function setBankBranch(?int $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    /**
     * @return int|null
     */
    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    /**
     * @param int|null $bankAccount
     */
    public function setBankAccount(?int $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return int|null
     */
    public function getBankAccountDigit(): ?int
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param int|null $bankAccountDigit
     */
    public function setBankAccountDigit(?int $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }

    /**
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * @param int|null $accountType
     */
    public function setAccountType(?int $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     */
    public function setValue(?float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return float|null
     */
    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    /**
     * @param float|null $rateValue
     */
    public function setRateValue(?float $rateValue): void
    {
        $this->rateValue = $rateValue;
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
     * @return int|null
     */
    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    /**
     * @param int|null $rateValueType
     */
    public function setRateValueType(?int $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
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
     * @return array
     */
    public function toArray(): array
    {
        return [
            "FromTaxNumber" => $this->fromTaxNumber,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToName" => $this->toName,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "AccountType" => $this->accountType,
            "Value" => $this->value,
            "RateValue" => $this->rateValue,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "PaymentDate" => $this->paymentDate
        ];
    }

    /**
     * @description Transferência bancária
     * @param TransferOut|null $transferOut
     * @return object
     * @throws GuzzleException
     */
    public function moneyTransfer(?TransferOut $transferOut = null): object
    {
        $http = new CallApi($this->configuration);
        if(!isset($transferOut)) $transferOut = $this;
        $data = array_filter($transferOut->toArray(), function ($v) {
            return $v !== null;
        });
        return $http->call('MoneyTransfer', $data);
    }

    /**
     * @description Consulta de transferência bancária
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getMoneyTransferOutById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('GetMoneyTransferOutById', $data);
    }

    /**
     * @description Cancelamento de transferência bancária
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelMoneyTransfer(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('CancelMoneyTransfer', $data);
    }
}