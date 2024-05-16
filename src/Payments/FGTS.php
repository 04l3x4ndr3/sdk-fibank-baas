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

class FGTS
{
    private Configuration $configuration;
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?float $principalValue;
    private ?int $codeRevenue;
    private ?string $barcode;
    private ?int $fgtsIdentifier;
    private ?int $socialConnectivityCode;
    private ?int $socialConnectivityDigit;
    private ?string $paymentDate;
    private ?int $rateValueType;
    private ?float $rateValue;
    private ?string $identifier;

    /**
     * @param string|null $taxNumber
     * @param string|null $contributorTaxNumber
     * @param float|null $principalValue
     * @param int|null $codeRevenue
     * @param string|null $barcode
     * @param int|null $fgtsIdentifier
     * @param int|null $socialConnectivityCode
     * @param int|null $socialConnectivityDigit
     * @param string|null $paymentDate
     * @param int $rateValueType
     * @param float $rateValue
     * @param string|null $identifier
     */
    public function __construct(?string $taxNumber = null,
                                ?string $contributorTaxNumber = null,
                                ?float  $principalValue = null,
                                ?int    $codeRevenue = null,
                                ?string $barcode = null,
                                ?int    $fgtsIdentifier = null,
                                ?int    $socialConnectivityCode = null,
                                ?int    $socialConnectivityDigit = null,
                                ?string $paymentDate = null,
                                int     $rateValueType = 0,
                                float   $rateValue = 0,
                                ?string $identifier = null)
    {
        $this->configuration = new Configuration();
        $this->taxNumber = $taxNumber;
        $this->contributorTaxNumber = $contributorTaxNumber;
        $this->principalValue = $principalValue;
        $this->codeRevenue = $codeRevenue;
        $this->barcode = $barcode;
        $this->fgtsIdentifier = $fgtsIdentifier;
        $this->socialConnectivityCode = $socialConnectivityCode;
        $this->socialConnectivityDigit = $socialConnectivityDigit;
        $this->paymentDate = $paymentDate;
        $this->rateValueType = $rateValueType;
        $this->rateValue = $rateValue;
        $this->identifier = $identifier;
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
     * @return int|null
     */
    public function getCodeRevenue(): ?int
    {
        return $this->codeRevenue;
    }

    /**
     * @param int|null $codeRevenue
     */
    public function setCodeRevenue(?int $codeRevenue): void
    {
        $this->codeRevenue = $codeRevenue;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return int|null
     */
    public function getFgtsIdentifier(): ?int
    {
        return $this->fgtsIdentifier;
    }

    /**
     * @param int|null $fgtsIdentifier
     */
    public function setFgtsIdentifier(?int $fgtsIdentifier): void
    {
        $this->fgtsIdentifier = $fgtsIdentifier;
    }

    /**
     * @return int|null
     */
    public function getSocialConnectivityCode(): ?int
    {
        return $this->socialConnectivityCode;
    }

    /**
     * @param int|null $socialConnectivityCode
     */
    public function setSocialConnectivityCode(?int $socialConnectivityCode): void
    {
        $this->socialConnectivityCode = $socialConnectivityCode;
    }

    /**
     * @return int|null
     */
    public function getSocialConnectivityDigit(): ?int
    {
        return $this->socialConnectivityDigit;
    }

    /**
     * @param int|null $socialConnectivityDigit
     */
    public function setSocialConnectivityDigit(?int $socialConnectivityDigit): void
    {
        $this->socialConnectivityDigit = $socialConnectivityDigit;
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
     * @return float|int|null
     */
    public function getRateValue(): float|int|null
    {
        return $this->rateValue;
    }

    /**
     * @param float|int|null $rateValue
     */
    public function setRateValue(float|int|null $rateValue): void
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
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "PrincipalValue" => $this->principalValue,
            "CodeRevenue" => $this->codeRevenue,
            "Barcode" => $this->barcode,
            "FgtsIdentifier" => $this->fgtsIdentifier,
            "SocialConnectivityCode" => $this->socialConnectivityCode,
            "SocialConnectivityDigit" => $this->socialConnectivityDigit,
            "PaymentDate" => $this->paymentDate,
            "RateValueType" => $this->rateValueType,
            "Identifier" => $this->identifier
        ];
    }

    /**
     * @param FGTS $fgts
     * @return object
     * @throws GuzzleException
     * @deprecated
     */
    public function generatePaymentFGTS(?FGTS $fgts = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($fgts)) ? $fgts->toArray() : $this->toArray();
        return $http->call('GeneratePaymentFGTS', array_filter($data));
    }

    /**
     * @description Generates a FGTS payment.
     * @document https://dev.fitbank.com.br/reference/56-1
     * @param FGTS|null $fgts
     * @return object
     */
    public function generatePaymentsFGTS(?FGTS $fgts = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($fgts)) ? $fgts->toArray() : $this->toArray();
        return $http->call('GeneratePaymentsFGTS', array_filter($data));
    }

    /**
     * @description New version, generates a FGTS payment.
     * @document https://dev.fitbank.com.br/reference/56-1
     * @param \O4l3x4ndr3\SdkFitbank\Common\Pagadoria\FGTS|null $fgts
     * @return object
     */
    public function generatePaymentsFGTS2(?\O4l3x4ndr3\SdkFitbank\Common\Pagadoria\FGTS $fgts = null): object
    {
        $http = new CallApi(new Configuration());
        return $http->call('GeneratePaymentsFGTS', array_filter($fgts->toArray()));
    }

    /**
     * @description Returns a FGTS payment by document number.
     * @document https://dev.fitbank.com.br/reference/57-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getFgtsOutById(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('GetFgtsOutById', array_filter($data));
    }

    /**
     * @description Cancels FGTS payment by document number.
     * @document https://dev.fitbank.com.br/reference/58-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentFgts(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('CancelPaymentFgts', array_filter($data));
    }
}