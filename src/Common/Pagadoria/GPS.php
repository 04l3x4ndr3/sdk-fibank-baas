<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Pagadoria;

class GPS
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
    private ?string $paymentCode;
    private ?string $referenceNumber;
    private ?string $jurisdictionDate;
    private ?string $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankDigit;
    private ?int $contributorDocumentType;
    public function __construct()
    {
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
        $this->fromBankDigit = null;
        $this->contributorDocumentType = null;
    }

    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(?string $taxNumber): GPS
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    public function setContributorTaxNumber(?string $contributorTaxNumber): GPS
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): GPS
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    public function getFineInterestValue(): ?float
    {
        return $this->fineInterestValue;
    }

    public function setFineInterestValue(?float $fineInterestValue): GPS
    {
        $this->fineInterestValue = $fineInterestValue;
        return $this;
    }

    public function getOtherValues(): ?float
    {
        return $this->otherValues;
    }

    public function setOtherValues(?float $otherValues): GPS
    {
        $this->otherValues = $otherValues;
        return $this;
    }

    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    public function setRateValue(?float $rateValue): GPS
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): GPS
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): GPS
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): GPS
    {
        $this->tags = $tags;
        return $this;
    }

    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    public function setRateValueType(?int $rateValueType): GPS
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): GPS
    {
        $this->description = $description;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): GPS
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getPaymentCode(): ?string
    {
        return $this->paymentCode;
    }

    public function setPaymentCode(?string $paymentCode): GPS
    {
        $this->paymentCode = $paymentCode;
        return $this;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): GPS
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    public function getJurisdictionDate(): ?string
    {
        return $this->jurisdictionDate;
    }

    public function setJurisdictionDate(?string $jurisdictionDate): GPS
    {
        $this->jurisdictionDate = $jurisdictionDate;
        return $this;
    }

    public function getFromBank(): ?string
    {
        return $this->fromBank;
    }

    public function setFromBank(?string $fromBank): GPS
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    public function getFromBankBranch(): ?string
    {
        return $this->fromBankBranch;
    }

    public function setFromBankBranch(?string $fromBankBranch): GPS
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    public function getFromBankAccount(): ?string
    {
        return $this->fromBankAccount;
    }

    public function setFromBankAccount(?string $fromBankAccount): GPS
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    public function getFromBankDigit(): ?string
    {
        return $this->fromBankDigit;
    }

    public function setFromBankDigit(?string $fromBankDigit): GPS
    {
        $this->fromBankDigit = $fromBankDigit;
        return $this;
    }

    public function getContributorDocumentType(): ?int
    {
        return $this->contributorDocumentType;
    }

    public function setContributorDocumentType(?int $contributorDocumentType): GPS
    {
        $this->contributorDocumentType = $contributorDocumentType;
        return $this;
    }

    public function addTags(?string $tag): array
    {
        if (!isset($this->tags)) {
            $this->tags = [];
        }
        $this->tags[] = $tag;
        return $this->tags;
    }

    public function toArray(): array
    {
        return array_filter([
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
            "FromBankAccountDigit" => $this->fromBankDigit,
            "ContributorDocumentType" => $this->contributorDocumentType
        ], function ($v) {
            return $v !== null;
        });
    }
}
