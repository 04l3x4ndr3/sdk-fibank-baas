<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class DARF extends CallApi
{
    private ?string $taxNumber;
    private ?int $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankAccountDigit;
    private ?int $DARFType;
    private ?string $calculationPeriod;
    private ?int $codeRevenue;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?string $dueDate;
    private ?float $grossRevenueValue;
    private ?float $grossRevenuePercentage;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValueType;

    /**
     */
    public function __construct(?Configuration $config = null)
    {
        parent::__construct($config);

        $this->taxNumber = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
        $this->DARFType = null;
        $this->calculationPeriod = null;
        $this->codeRevenue = null;
        $this->contributorTaxNumber = null;
        $this->referenceNumber = null;
        $this->dueDate = null;
        $this->grossRevenueValue = null;
        $this->grossRevenuePercentage = null;
        $this->principalValue = null;
        $this->fineValue = null;
        $this->interestValue = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->description = null;
        $this->identifier = null;
        $this->rateValueType = null;
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
     * @return DARF
     */
    public function setTaxNumber(?string $taxNumber): DARF
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFromBank(): ?int
    {
        return $this->fromBank;
    }

    /**
     * @param int|null $fromBank
     * @return DARF
     */
    public function setFromBank(?int $fromBank): DARF
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankBranch(): ?string
    {
        return $this->fromBankBranch;
    }

    /**
     * @param string|null $fromBankBranch
     * @return DARF
     */
    public function setFromBankBranch(?string $fromBankBranch): DARF
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankAccount(): ?string
    {
        return $this->fromBankAccount;
    }

    /**
     * @param string|null $fromBankAccount
     * @return DARF
     */
    public function setFromBankAccount(?string $fromBankAccount): DARF
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankAccountDigit(): ?string
    {
        return $this->fromBankAccountDigit;
    }

    /**
     * @param string|null $fromBankAccountDigit
     * @return DARF
     */
    public function setFromBankAccountDigit(?string $fromBankAccountDigit): DARF
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDARFType(): ?int
    {
        return $this->DARFType;
    }

    /**
     * @param int|null $DARFType
     * @return DARF
     */
    public function setDARFType(?int $DARFType): DARF
    {
        $this->DARFType = $DARFType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCalculationPeriod(): ?string
    {
        return $this->calculationPeriod;
    }

    /**
     * @param string|null $calculationPeriod
     * @return DARF
     */
    public function setCalculationPeriod(?string $calculationPeriod): DARF
    {
        $this->calculationPeriod = $calculationPeriod;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCodeRevenue(): ?int
    {
        return $this->codeRevenue;
    }

    /**
     * @param int|null $codeRevenue
     * @return DARF
     */
    public function setCodeRevenue(?int $codeRevenue): DARF
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    /**
     * @param string|null $contributorTaxNumber
     * @return DARF
     */
    public function setContributorTaxNumber(?string $contributorTaxNumber): DARF
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    /**
     * @param string|null $referenceNumber
     * @return DARF
     */
    public function setReferenceNumber(?string $referenceNumber): DARF
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     * @return DARF
     */
    public function setDueDate(?string $dueDate): DARF
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getGrossRevenueValue(): ?float
    {
        return $this->grossRevenueValue;
    }

    /**
     * @param float|null $grossRevenueValue
     * @return DARF
     */
    public function setGrossRevenueValue(?float $grossRevenueValue): DARF
    {
        $this->grossRevenueValue = $grossRevenueValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getGrossRevenuePercentage(): ?float
    {
        return $this->grossRevenuePercentage;
    }

    /**
     * @param float|null $grossRevenuePercentage
     * @return DARF
     */
    public function setGrossRevenuePercentage(?float $grossRevenuePercentage): DARF
    {
        $this->grossRevenuePercentage = $grossRevenuePercentage;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    /**
     * @param float|null $principalValue
     * @return DARF
     */
    public function setPrincipalValue(?float $principalValue): DARF
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    /**
     * @param float|null $fineValue
     * @return DARF
     */
    public function setFineValue(?float $fineValue): DARF
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    /**
     * @param float|null $interestValue
     * @return DARF
     */
    public function setInterestValue(?float $interestValue): DARF
    {
        $this->interestValue = $interestValue;
        return $this;
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
     * @return DARF
     */
    public function setPaymentDate(?string $paymentDate): DARF
    {
        $this->paymentDate = $paymentDate;
        return $this;
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
     * @return DARF
     */
    public function setTags(?array $tags): DARF
    {
        $this->tags = $tags;
        return $this;
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
     * @return DARF
     */
    public function setDescription(?string $description): DARF
    {
        $this->description = $description;
        return $this;
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
     * @return DARF
     */
    public function setIdentifier(?string $identifier): DARF
    {
        $this->identifier = $identifier;
        return $this;
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
     * @return DARF
     */
    public function setRateValueType(?int $rateValueType): DARF
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @description Generates a DARF payment.
     * @document https://dev.fitbank.com.br/reference/26-1
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentDARF(): object
    {
        $data = $this->toArray();
        return $this->call('GeneratePaymentDARF', array_filter($data));
    }

    /**
     * @description Returns a DARF payment by document number.
     * @document https://dev.fitbank.com.br/reference/35-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getDarfOutById(string $DocumentNumber): object
    {
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('GetDARFOutById', array_filter($data));
    }

    /**
     * @description Returns a DARF payment by informations.
     * @document https://dev.fitbank.com.br/reference/47-1
     * @param string $dueDate
     * @param string $principalValue
     * @param string $taxContributor
     * @param string $referenceNumber
     * @param string $calculationPeriod
     * @return object
     * @throws GuzzleException
     */
    public function getDARFOutByInformations(
        string $dueDate,
        string $principalValue,
        string $taxContributor,
        string $referenceNumber,
        string $calculationPeriod,
    ): object
    {
        return $this->call('GetDARFOutByInformations', array_filter(
                [
                    "DueDate" => $dueDate,
                    "PrincipalValue" => $principalValue,
                    "TaxContributor" => $taxContributor,
                    "ReferenceNumber" => $referenceNumber,
                    "CalculationPeriod" => $calculationPeriod
                ],
                function ($v) {
                    return !is_null($v);
                }
            ));
    }

    /**
     * @description Cancels DARF payment by document number.
     * @document https://dev.fitbank.com.br/reference/27-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentDARF(string $DocumentNumber): object
    {
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('CancelPaymentDARF', array_filter($data));
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
            "DARFType" => $this->DARFType,
            "CalculationPeriod" => $this->calculationPeriod,
            "CodeRevenue" => $this->codeRevenue,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "ReferenceNumber" => $this->referenceNumber,
            "DueDate" => $this->dueDate,
            "GrossRevenueValue" => $this->grossRevenueValue,
            "GrossRevenuePercentage" => $this->grossRevenuePercentage,
            "PrincipalValue" => $this->principalValue,
            "FineValue" => $this->fineValue,
            "InterestValue" => $this->interestValue,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
        ];
    }
}
