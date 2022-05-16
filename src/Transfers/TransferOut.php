<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use TwoPlug\SdkFitbank\Configuration;

class TransferOut
{
    private Configuration $configuration;
    private string $fromTaxNumber;
    private string $toTaxNumber;
    private string $toName;
    private int $bank;
    private int $bankBranch;
    private int $bankAccount;
    private int $bankAccountDigit;
    private int $accountType;
    private float $value;
    private float $rateValue;
    private string $identifier;
    private int $rateValueType;
    private array $tags;
    private string $description;
    private string $paymentDate;

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
    public function __construct(?string $fromTaxNumber = null,
                                ?string $toTaxNumber = null,
                                ?string $toName = null,
                                ?int    $bank = null,
                                ?int    $bankBranch = null,
                                ?int    $bankAccount = null,
                                ?int    $bankAccountDigit = null,
                                ?int    $accountType = null,
                                ?float  $value = null,
                                ?float  $rateValue = null,
                                ?string $identifier = null,
                                ?int    $rateValueType = null,
                                ?array  $tags = null,
                                ?string $description = null,
                                ?string $paymentDate = null)
    {
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
     * @param Configuration $configuration
     * @return $this
     */
    public function setConfiguration(Configuration $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
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
     * @param TransferOut $out
     * @return object
     */
    public function moneyTransfer(TransferOut $out): object
    {
        $http = new CallApi($this->configuration);
        $data = $out->toArray();
        return $http->call('MoneyTransfer', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function getMoneyTransferOutById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('GetMoneyTransferOutById', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function cancelMoneyTransfer(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('CancelMoneyTransfer', $data);
    }
}