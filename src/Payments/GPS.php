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
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?float $principalValue;
    private ?float $fineInterestValue;
    private ?float $otherValues;
    private ?float $rateValue;
    private ?string $paymentDate;
    private ?string $dueDate;
    private ?array $tags;
    private ?int $rateValueType;
    private ?string $description;
    private ?string $identifier;
    private ?int $paymentCode;
    private ?string $referenceNumber;
    private ?string $jurisdictionDate;
    private ?int $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankAccountDigit;
    private ?int $contributorDocumentType;


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
        $this->rateValue = null;
        $this->paymentDate = null;
        $this->dueDate = null;
        $this->tags = null;
        $this->rateValueType = null;
        $this->description = null;
        $this->identifier = null;
        $this->paymentCode = null;
        $this->referenceNumber = null;
        $this->jurisdictionDate = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
        $this->contributorDocumentType = null;
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
     * @return GPS
     */
    public function setTaxNumber(?string $taxNumber): GPS
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
     * @return GPS
     */
    public function setContributorTaxNumber(?string $contributorTaxNumber): GPS
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
     * @return GPS
     */
    public function setPrincipalValue(?float $principalValue): GPS
    {
        $this->principalValue = $principalValue;
        return $this;
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
     * @return GPS
     */
    public function setFineInterestValue(?float $fineInterestValue): GPS
    {
        $this->fineInterestValue = $fineInterestValue;
        return $this;
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
     * @return GPS
     */
    public function setOtherValues(?float $otherValues): GPS
    {
        $this->otherValues = $otherValues;
        return $this;
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
     * @return GPS
     */
    public function setRateValue(?float $rateValue): GPS
    {
        $this->rateValue = $rateValue;
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
     * @return GPS
     */
    public function setPaymentDate(?string $paymentDate): GPS
    {
        $this->paymentDate = $paymentDate;
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
     * @return GPS
     */
    public function setDueDate(?string $dueDate): GPS
    {
        $this->dueDate = $dueDate;
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
     * @param string $tags
     * @return GPS
     */
    public function addTags(string $tags): GPS
    {
        $this->tags[] = $tags;
        return $this;
    }

    /**
     * @return $this
     */
    public function clearTags(): GPS
    {
        $this->tags = null;
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
     * @return GPS
     */
    public function setRateValueType(?int $rateValueType): GPS
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
     * @return GPS
     */
    public function setDescription(?string $description): GPS
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
     * @return GPS
     */
    public function setIdentifier(?string $identifier): GPS
    {
        $this->identifier = $identifier;
        return $this;
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
     * @return GPS
     */
    public function setPaymentCode(?int $paymentCode): GPS
    {
        $this->paymentCode = $paymentCode;
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
     * @return GPS
     */
    public function setReferenceNumber(?string $referenceNumber): GPS
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
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
     * @return GPS
     */
    public function setJurisdictionDate(?string $jurisdictionDate): GPS
    {
        $this->jurisdictionDate = $jurisdictionDate;
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
     * @return GPS
     */
    public function setFromBank(?int $fromBank): GPS
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
     * @return GPS
     */
    public function setFromBankBranch(?string $fromBankBranch): GPS
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
     * @return GPS
     */
    public function setFromBankAccount(?string $fromBankAccount): GPS
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
     * @return GPS
     */
    public function setFromBankAccountDigit(?string $fromBankAccountDigit): GPS
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getContributorDocumentType(): ?int
    {
        return $this->contributorDocumentType;
    }

    /**
     * @param int|null $contributorDocumentType
     * @return GPS
     */
    public function setContributorDocumentType(?int $contributorDocumentType): GPS
    {
        $this->contributorDocumentType = $contributorDocumentType;
        return $this;
    }

    /**
     * @description Generates a GPS payment.
     * @document https://dev.fitbank.com.br/reference/50-1
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentGPS(): object
    {
        $data = array_filter($this->toArray(), function ($value) {
            return !is_null($value);
        });
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
        return $this->call('GetGpsOutById', $data);
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
        return $this->call('CancelPaymentGps', $data);
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
            "Tags" => $this->tags,
            "RateValueType" => $this->rateValueType,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "PaymentCode" => $this->paymentCode,
            "ReferenceNumber" => $this->referenceNumber,
            "JurisdictionDate" => $this->jurisdictionDate,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
            "ContributorDocumentType" => $this->contributorDocumentType
        ];
    }
}
