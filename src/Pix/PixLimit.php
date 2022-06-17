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

class PixLimit
{
    private Configuration $configuration;

    private ?string $taxNumber;
    private ?int $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?int $bankAccountDigit;
    private ?int $type;
    private ?int $operationType;
    private ?int $subType;
    private ?float $minLimitValue;
    private ?float $maxLimitValue;

    /**
     * @param string|null $taxNumber
     * @param int|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param int|null $bankAccountDigit
     * @param int|null $type
     * @param int|null $operationType
     * @param int|null $subType
     * @param float|null $minLimitValue
     * @param float|null $maxLimitValue
     */
    public function __construct(?string $taxNumber = null,
                                ?int    $bank = null,
                                ?string $bankBranch = null,
                                ?string $bankAccount = null,
                                ?int    $bankAccountDigit = null,
                                ?int    $type = null,
                                ?int    $operationType = null,
                                ?int    $subType = null,
                                ?float  $minLimitValue = null,
                                ?float  $maxLimitValue = null)
    {
        $this->configuration = new Configuration();

        $this->taxNumber = $taxNumber;
        $this->bank = $bank;
        $this->bankBranch = $bankBranch;
        $this->bankAccount = $bankAccount;
        $this->bankAccountDigit = $bankAccountDigit;
        $this->type = $type;
        $this->operationType = $operationType;
        $this->subType = $subType;
        $this->minLimitValue = $minLimitValue;
        $this->maxLimitValue = $maxLimitValue;
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
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int|null $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int|null
     */
    public function getOperationType(): ?int
    {
        return $this->operationType;
    }

    /**
     * @param int|null $operationType
     */
    public function setOperationType(?int $operationType): void
    {
        $this->operationType = $operationType;
    }

    /**
     * @return int|null
     */
    public function getSubType(): ?int
    {
        return $this->subType;
    }

    /**
     * @param int|null $subType
     */
    public function setSubType(?int $subType): void
    {
        $this->subType = $subType;
    }

    /**
     * @return float|null
     */
    public function getMinLimitValue(): ?float
    {
        return $this->minLimitValue;
    }

    /**
     * @param float|null $minLimitValue
     */
    public function setMinLimitValue(?float $minLimitValue): void
    {
        $this->minLimitValue = $minLimitValue;
    }

    /**
     * @return float|null
     */
    public function getMaxLimitValue(): ?float
    {
        return $this->maxLimitValue;
    }

    /**
     * @param float|null $maxLimitValue
     */
    public function setMaxLimitValue(?float $maxLimitValue): void
    {
        $this->maxLimitValue = $maxLimitValue;
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
            "Type" => $this->type,
            "OperationType" => $this->operationType,
            "SubType" => $this->subType,
            "MinLimitValue" => $this->minLimitValue,
            "MaxLimitValue" => $this->maxLimitValue,
        ];
    }

    /**
     * @param PixLimit|null $pixLimit
     * @return object
     * @throws GuzzleException
     */
    public function getAccountOperationLimit(?PixLimit $pixLimit = null)
    {
        $http = new CallApi($this->configuration);
        $data = (isset($pixLimit)) ? $pixLimit->toArray() : $this->toArray();
        return $http->call('GetAccountOperationLimit', $data);
    }

    /**
     * @param PixLimit|null $pixLimit
     * @return object
     * @throws GuzzleException
     */
    public function changeAccountOperationLimit(?PixLimit $pixLimit = null)
    {
        $http = new CallApi($this->configuration);
        $data = (isset($pixLimit)) ? $pixLimit->toArray() : $this->toArray();
        return $http->call('ChangeAccountOperationLimit', $data);
    }
}