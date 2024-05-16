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

class DARF
{
    private Configuration $configuration;

    private ?string $taxNumber;
    private ?int $DARFType;
    private ?string $calculationPeriod;
    private ?int $codeRevenue;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?string $dueDate;
    private ?float $totalValue;
    private ?float $rateValue;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValueType;

    /**
     * @param string|null $taxNumber
     * @param int|null $DARFType
     * @param string|null $calculationPeriod
     * @param int|null $codeRevenue
     * @param string|null $contributorTaxNumber
     * @param string|null $referenceNumber
     * @param string|null $dueDate
     * @param float|null $principalValue
     * @param float|null $fineValue
     * @param float|null $interestValue
     * @param float|null $totalValue
     * @param string|null $paymentDate
     * @param string|null $description
     * @param string|null $identifier
     * @param int $rateValueType
     * @param float $rateValue
     * @param array $tags
     */
    public function __construct(?string $taxNumber = null,
                                ?int    $DARFType = null,
                                ?string $calculationPeriod = null,
                                ?int    $codeRevenue = null,
                                ?string $contributorTaxNumber = null,
                                ?string $referenceNumber = null,
                                ?string $dueDate = null,
                                ?float  $principalValue = null,
                                ?float  $fineValue = null,
                                ?float  $interestValue = null,
                                ?float  $totalValue = null,
                                ?string $paymentDate = null,
                                ?string $description = null,
                                ?string $identifier = null,
                                int     $rateValueType = 0,
                                float   $rateValue = 0,
                                array   $tags = [])
    {
        $this->configuration = new Configuration();

        $this->taxNumber = $taxNumber;
        $this->DARFType = $DARFType;
        $this->calculationPeriod = $calculationPeriod;
        $this->codeRevenue = $codeRevenue;
        $this->contributorTaxNumber = $contributorTaxNumber;
        $this->referenceNumber = $referenceNumber;
        $this->dueDate = $dueDate;
        $this->principalValue = $principalValue;
        $this->fineValue = $fineValue;
        $this->interestValue = $interestValue;
        $this->totalValue = $totalValue;
        $this->paymentDate = $paymentDate;
        $this->description = $description;
        $this->identifier = $identifier;
        $this->rateValueType = $rateValueType;
        $this->rateValue = $rateValue;
        $this->tags = $tags;
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
     * @return int
     */
    public function getDARFType(): int
    {
        return $this->DARFType;
    }

    /**
     * @param int $DARFType
     */
    public function setDARFType(int $DARFType): void
    {
        $this->DARFType = $DARFType;
    }

    /**
     * @return string
     */
    public function getCalculationPeriod(): string
    {
        return $this->calculationPeriod;
    }

    /**
     * @param string $calculationPeriod
     */
    public function setCalculationPeriod(string $calculationPeriod): void
    {
        $this->calculationPeriod = $calculationPeriod;
    }

    /**
     * @return int
     */
    public function getCodeRevenue(): int
    {
        return $this->codeRevenue;
    }

    /**
     * @param int $codeRevenue
     */
    public function setCodeRevenue(int $codeRevenue): void
    {
        $this->codeRevenue = $codeRevenue;
    }

    /**
     * @return string
     */
    public function getContributorTaxNumber(): string
    {
        return $this->contributorTaxNumber;
    }

    /**
     * @param string $contributorTaxNumber
     */
    public function setContributorTaxNumber(string $contributorTaxNumber): void
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
    }

    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }

    /**
     * @param string $referenceNumber
     */
    public function setReferenceNumber(string $referenceNumber): void
    {
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     */
    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return float
     */
    public function getPrincipalValue(): float
    {
        return $this->principalValue;
    }

    /**
     * @param float $principalValue
     */
    public function setPrincipalValue(float $principalValue): void
    {
        $this->principalValue = $principalValue;
    }

    /**
     * @return float
     */
    public function getFineValue(): float
    {
        return $this->fineValue;
    }

    /**
     * @param float $fineValue
     */
    public function setFineValue(float $fineValue): void
    {
        $this->fineValue = $fineValue;
    }

    /**
     * @return float
     */
    public function getInterestValue(): float
    {
        return $this->interestValue;
    }

    /**
     * @param float $interestValue
     */
    public function setInterestValue(float $interestValue): void
    {
        $this->interestValue = $interestValue;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        return $this->totalValue;
    }

    /**
     * @param float $totalValue
     */
    public function setTotalValue(float $totalValue): void
    {
        $this->totalValue = $totalValue;
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
     * @return int
     */
    public function getRateValueType(): int
    {
        return $this->rateValueType;
    }

    /**
     * @param int $rateValueType
     */
    public function setRateValueType(int $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
    }

    /**
     * @return float
     */
    public function getRateValue(): float
    {
        return $this->rateValue;
    }

    /**
     * @param float $rateValue
     */
    public function setRateValue(float $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "DARFType" => $this->DARFType,
            "CalculationPeriod" => $this->calculationPeriod,
            "CodeRevenue" => $this->codeRevenue,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "ReferenceNumber" => $this->referenceNumber,
            "DueDate" => $this->dueDate,
            "PrincipalValue" => $this->principalValue,
            "FineValue" => $this->fineValue,
            "InterestValue" => $this->interestValue,
            "TotalValue" => $this->totalValue,
            "PaymentDate" => $this->paymentDate,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
            "RateValue" => $this->rateValue,
            "Tags" => $this->tags
        ];
    }

    /**
     * @description Generates a DARF payment.
     * @document https://dev.fitbank.com.br/reference/26-1
     * @param DARF $darf
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentDARF(?DARF $darf = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($darf)) ? $darf->toArray() : $this->toArray();
        return $http->call('GeneratePaymentDARF', array_filter($data));
    }

    /**
     * @description New version for generates a DARF payment.
     * @document https://dev.fitbank.com.br/reference/26-1
     * @param \O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARF $darf
     * @return object
     */
    public function generatePaymentDARF2(\O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARF $darf): object
    {
        $http = new CallApi($this->configuration);
        return $http->call('GeneratePaymentDARF', array_filter($darf->toArray()));
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
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('GetDarfOutById', array_filter($data));
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
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('CancelPaymentDARF', array_filter($data));
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
     */
    public function getDARFOutByInformations(
        string $dueDate,
        string $principalValue,
        string $taxContributor,
        string $referenceNumber,
        string $calculationPeriod,
    ): object {
        return (new CallApi($this->configuration))
            ->call('GetDARFOutByInformations', array_filter(
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
}