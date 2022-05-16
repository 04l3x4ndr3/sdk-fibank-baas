<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Payments\WithoutBarcode;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class GPS
{
    private Configuration $configuration;
    private string $taxNumber;
    private string $contributorTaxNumber;
    private float $principalValue;
    private float $fineInterestValue;
    private float $otherValues;
    private string $paymentDate;
    private string $dueDate;
    private string $identifier;
    private int $paymentCode;
    private string $referenceNumber;
    private string $jurisdictionDate;
    private int $rateValueType;
    private float $rateValue;

    /**
     * @param string|null $taxNumber
     * @param string|null $contributorTaxNumber
     * @param float|null $principalValue
     * @param float|null $fineInterestValue
     * @param float|null $otherValues
     * @param string|null $paymentDate
     * @param string|null $dueDate
     * @param string|null $identifier
     * @param int|null $paymentCode
     * @param string|null $referenceNumber
     * @param string|null $jurisdictionDate
     * @param int|null $rateValueType
     * @param float|null $rateValue
     */
    public function __construct(?string $taxNumber = null,
                                ?string $contributorTaxNumber = null,
                                ?float  $principalValue = null,
                                ?float  $fineInterestValue = null,
                                ?float  $otherValues = null,
                                ?string $paymentDate = null,
                                ?string $dueDate = null,
                                ?string $identifier = null,
                                ?int    $paymentCode = null,
                                ?string $referenceNumber = null,
                                ?string $jurisdictionDate = null,
                                ?int    $rateValueType = null,
                                ?float  $rateValue = null)
    {
        $this->taxNumber = $taxNumber;
        $this->contributorTaxNumber = $contributorTaxNumber;
        $this->principalValue = $principalValue;
        $this->fineInterestValue = $fineInterestValue;
        $this->otherValues = $otherValues;
        $this->paymentDate = $paymentDate;
        $this->dueDate = $dueDate;
        $this->identifier = $identifier;
        $this->paymentCode = $paymentCode;
        $this->referenceNumber = $referenceNumber;
        $this->jurisdictionDate = $jurisdictionDate;
        $this->rateValueType = $rateValueType;
        $this->rateValue = $rateValue;
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

    /**
     * @param GPS $gps
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentFGTS(GPS $gps): object
    {
        $http = new CallApi($this->configuration);
        $data = $gps->toArray();
        return $http->call('GeneratePaymentGPS', $data);
    }

    /**
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getGpsOutById(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('GetGpsOutById', $data);
    }

    /**
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentGps(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('CancelPaymentGps', $data);
    }
}