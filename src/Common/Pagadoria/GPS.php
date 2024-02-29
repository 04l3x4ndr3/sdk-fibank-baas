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
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankDigit = null;
        $this->contributorDocumentType = null;
    }

    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    public function setContributorTaxNumber(?string $contributorTaxNumber): void
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
    }

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): void
    {
        $this->principalValue = $principalValue;
    }

    public function getFineInterestValue(): ?float
    {
        return $this->fineInterestValue;
    }

    public function setFineInterestValue(?float $fineInterestValue): void
    {
        $this->fineInterestValue = $fineInterestValue;
    }

    public function getOtherValues(): ?float
    {
        return $this->otherValues;
    }

    public function setOtherValues(?float $otherValues): void
    {
        $this->otherValues = $otherValues;
    }

    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    public function setRateValue(?float $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    public function addTags(?string $tag): array
    {
        if (!isset($this->tags)) {
            $this->tags = [];
        }
        $this->tags[] = $tag;
        return $this->tags;
    }

    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    public function setRateValueType(?int $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function getPaymentCode(): ?string
    {
        return $this->paymentCode;
    }

    public function setPaymentCode(?string $paymentCode): void
    {
        $this->paymentCode = $paymentCode;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): void
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getJurisdictionDate(): ?string
    {
        return $this->jurisdictionDate;
    }

    public function setJurisdictionDate(?string $jurisdictionDate): void
    {
        $this->jurisdictionDate = $jurisdictionDate;
    }

    public function getFromBank(): ?string
    {
        return $this->fromBank;
    }

    public function setFromBank(?string $fromBank): void
    {
        $this->fromBank = $fromBank;
    }

    public function getFromBankBranch(): ?string
    {
        return $this->fromBankBranch;
    }

    public function setFromBankBranch(?string $fromBankBranch): void
    {
        $this->fromBankBranch = $fromBankBranch;
    }

    public function getFromBankAccount(): ?string
    {
        return $this->fromBankAccount;
    }

    public function setFromBankAccount(?string $fromBankAccount): void
    {
        $this->fromBankAccount = $fromBankAccount;
    }

    public function getFromBankDigit(): ?string
    {
        return $this->fromBankDigit;
    }

    public function setFromBankDigit(?string $fromBankDigit): void
    {
        $this->fromBankDigit = $fromBankDigit;
    }

    public function getContributorDocumentType(): ?int
    {
        return $this->contributorDocumentType;
    }

    public function setContributorDocumentType(?int $contributorDocumentType): void
    {
        $this->contributorDocumentType = $contributorDocumentType;
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
