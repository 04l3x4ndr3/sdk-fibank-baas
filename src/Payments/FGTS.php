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

class FGTS extends CallApi
{
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?float $principalValue;
    private ?int $codeRevenue;
    private ?string $barcode;
    private ?int $fgtsIdentifier;
    private ?int $socialConnectivityCode;
    private ?int $socialConnectivityDigit;
    private ?string $paymentDate;
    private ?array $tags;
    private ?int $rateValueType;
    private ?float $rateValue;
    private ?string $description;
    private ?string $identifier;
    private ?int $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankAccountDigit;

    /**
     * @param Configuration|null $configuration
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->taxNumber = null;
        $this->contributorTaxNumber = null;
        $this->principalValue = null;
        $this->codeRevenue = null;
        $this->barcode = null;
        $this->fgtsIdentifier = null;
        $this->socialConnectivityCode = null;
        $this->socialConnectivityDigit = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->rateValueType = null;
        $this->rateValue = null;
        $this->description = null;
        $this->identifier = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
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
     * @return FGTS
     */
    public function setTaxNumber(?string $taxNumber): FGTS
    {
        $this->taxNumber = $taxNumber;
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
     * @return FGTS
     */
    public function setContributorTaxNumber(?string $contributorTaxNumber): FGTS
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
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
     * @return FGTS
     */
    public function setPrincipalValue(?float $principalValue): FGTS
    {
        $this->principalValue = $principalValue;
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
     * @return FGTS
     */
    public function setCodeRevenue(?int $codeRevenue): FGTS
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
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
     * @return FGTS
     */
    public function setBarcode(?string $barcode): FGTS
    {
        $this->barcode = $barcode;
        return $this;
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
     * @return FGTS
     */
    public function setFgtsIdentifier(?int $fgtsIdentifier): FGTS
    {
        $this->fgtsIdentifier = $fgtsIdentifier;
        return $this;
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
     * @return FGTS
     */
    public function setSocialConnectivityCode(?int $socialConnectivityCode): FGTS
    {
        $this->socialConnectivityCode = $socialConnectivityCode;
        return $this;
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
     * @return FGTS
     */
    public function setSocialConnectivityDigit(?int $socialConnectivityDigit): FGTS
    {
        $this->socialConnectivityDigit = $socialConnectivityDigit;
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
     * @return FGTS
     */
    public function setPaymentDate(?string $paymentDate): FGTS
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
     * @return FGTS
     */
    public function clearTags(): FGTS
    {
        $this->tags = null;
        return $this;
    }

    /**
     * @param string|null $tags
     * @return FGTS
     */
    public function addTag(?string $tags): FGTS
    {
        $this->tags[] = $tags;
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
     * @return FGTS
     */
    public function setRateValueType(?int $rateValueType): FGTS
    {
        $this->rateValueType = $rateValueType;
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
     * @return FGTS
     */
    public function setDescription(?string $description): FGTS
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
     * @return FGTS
     */
    public function setIdentifier(?string $identifier): FGTS
    {
        $this->identifier = $identifier;
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
     * @return FGTS
     */
    public function setFromBank(?int $fromBank): FGTS
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
     * @return FGTS
     */
    public function setFromBankBranch(?string $fromBankBranch): FGTS
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
     * @return FGTS
     */
    public function setFromBankAccount(?string $fromBankAccount): FGTS
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
     * @return FGTS
     */
    public function setFromBankAccountDigit(?string $fromBankAccountDigit): FGTS
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
        return $this;
    }

    /**
     * @return object
     * @throws GuzzleException
     * @deprecated
     */
    public function generatePaymentFGTS(): object
    {
        $data = array_filter($this->toArray(), function ($value) {
            return !is_null($value);
        });
        return $this->call('GeneratePaymentFGTS', $data);
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
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('GetFgtsOutById', $data);
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
        $data = ['DocumentNumber' => $DocumentNumber];
        return $this->call('CancelPaymentFgts', $data);
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
            "Tags" => $this->tags,
            "RateValueType" => $this->rateValueType,
            "RateValue" => $this->rateValue,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
        ];
    }
}
