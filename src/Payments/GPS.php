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

class GPS extends CallApi
{
    private Configuration $configuration;
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?float $principalValue;
    private ?float $fineInterestValue;
    private ?float $otherValues;
    private ?string $paymentDate;
    private ?string $dueDate;
    private ?string $identifier;
    private ?int $paymentCode;
    private ?string $referenceNumber;
    private ?string $jurisdictionDate;
    private ?int $rateValueType;
    private ?float $rateValue;

    /**
     * @param Configuration|null $configuration
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->taxNumber = null;
        $this->contributorTaxNumber = null;
        $this->principalValue = null;
        $this->fineInterestValue = null;
        $this->otherValues = null;
        $this->paymentDate = null;
        $this->dueDate = null;
        $this->identifier = null;
        $this->paymentCode = null;
        $this->referenceNumber = null;
        $this->jurisdictionDate = null;
        $this->rateValueType = null;
        $this->rateValue = null;
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
    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    /**
     * @param string|null $contributorTaxNumber
     */
    public function setContributorTaxNumber(?string $contributorTaxNumber): void
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
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
     */
    public function setPrincipalValue(?float $principalValue): void
    {
        $this->principalValue = $principalValue;
    }

    /**
     * @return float|null
     */
    public function getFineInterestValue(): ?float
    {
        return $this->fineInterestValue;
    }

    /**
     * @param float|null $fineInterestValue
     */
    public function setFineInterestValue(?float $fineInterestValue): void
    {
        $this->fineInterestValue = $fineInterestValue;
    }

    /**
     * @return float|null
     */
    public function getOtherValues(): ?float
    {
        return $this->otherValues;
    }

    /**
     * @param float|null $otherValues
     */
    public function setOtherValues(?float $otherValues): void
    {
        $this->otherValues = $otherValues;
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
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     */
    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate = $dueDate;
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
    public function getPaymentCode(): ?int
    {
        return $this->paymentCode;
    }

    /**
     * @param int|null $paymentCode
     */
    public function setPaymentCode(?int $paymentCode): void
    {
        $this->paymentCode = $paymentCode;
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
     */
    public function setReferenceNumber(?string $referenceNumber): void
    {
        $this->referenceNumber = $referenceNumber;
    }

    /**
     * @return string|null
     */
    public function getJurisdictionDate(): ?string
    {
        return $this->jurisdictionDate;
    }

    /**
     * @param string|null $jurisdictionDate
     */
    public function setJurisdictionDate(?string $jurisdictionDate): void
    {
        $this->jurisdictionDate = $jurisdictionDate;
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
     * @description Generates a GPS payment.
     * @document https://dev.fitbank.com.br/reference/50-1
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentGPS(): object
    {
        $data =  array_filter($this->toArray());
        return $this->call('GeneratePaymentGPS', array_filter($data));
    }

    /**
     * @description Returns a GPS payment by document number.
     * @document https://dev.fitbank.com.br/reference/53-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getGpsOutById(string $DocumentNumber): object
    {
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('GetGpsOutById', array_filter($data));
    }

    /**
     * @description Cancels GPS payment by document number.
     * @document https://dev.fitbank.com.br/reference/55-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentGps(string $DocumentNumber): object
    {
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('CancelPaymentGps', array_filter($data));
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "PrincipalValue" => $this->principalValue,
            "FineInterestValue" => $this->fineInterestValue,
            "OtherValues" => $this->otherValues,
            "RateValue" => $this->rateValue,
            "PaymentDate" => $this->paymentDate,
            "DueDate" => $this->dueDate,
            "RateValueType" => $this->rateValueType,
            "Identifier" => $this->identifier,
            "PaymentCode" => $this->paymentCode,
            "ReferenceNumber" => $this->referenceNumber,
            "JurisdictionDate" => $this->jurisdictionDate
        ];
    }
}
