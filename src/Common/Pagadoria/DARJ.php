<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Pagadoria;

class DARJ
{
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?float $monetaryValue;
    private ?float $totalValue;
    private ?float $rateValue;
    private ?string $dueDate;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $codeRevenue;
    private ?string $stateRegistration;
    private ?int $originDocument;
    private ?int $rateValueType;
    private ?string $description;
    private ?string $identifier;
    private ?string $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankDigit;
    public function __construct()
    {
        $this->taxNumber = null;
        $this->contributorTaxNumber = null;
        $this->referenceNumber = null;
        $this->principalValue = null;
        $this->fineValue = null;
        $this->interestValue = null;
        $this->monetaryValue = null;
        $this->totalValue = null;
        $this->rateValue = null;
        $this->dueDate = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->codeRevenue = null;
        $this->stateRegistration = null;
        $this->originDocument = null;
        $this->rateValueType = null;
        $this->description = null;
        $this->identifier = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankDigit = null;
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

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): void
    {
        $this->referenceNumber = $referenceNumber;
    }

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): void
    {
        $this->principalValue = $principalValue;
    }

    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    public function setFineValue(?float $fineValue): void
    {
        $this->fineValue = $fineValue;
    }

    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    public function setInterestValue(?float $interestValue): void
    {
        $this->interestValue = $interestValue;
    }

    public function getMonetaryValue(): ?float
    {
        return $this->monetaryValue;
    }

    public function setMonetaryValue(?float $monetaryValue): void
    {
        $this->monetaryValue = $monetaryValue;
    }

    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    public function setTotalValue(?float $totalValue): void
    {
        $this->totalValue = $totalValue;
    }

    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    public function setRateValue(?float $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    public function addTag(?string $tag): array
    {
        if (!isset($this->tags)) {
            $this->tags = [];
        }
        $this->tags[] = $tag;
        return $this->tags;
    }

    public function getCodeRevenue(): ?string
    {
        return $this->codeRevenue;
    }

    public function setCodeRevenue(?string $codeRevenue): void
    {
        $this->codeRevenue = $codeRevenue;
    }

    public function getStateRegistration(): ?string
    {
        return $this->stateRegistration;
    }

    public function setStateRegistration(?string $stateRegistration): void
    {
        $this->stateRegistration = $stateRegistration;
    }

    public function getOriginDocument(): ?int
    {
        return $this->originDocument;
    }

    public function setOriginDocument(?int $originDocument): void
    {
        $this->originDocument = $originDocument;
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

    public function toArray(): array
    {
        return array_filter([
            "TaxNumber" => $this->taxNumber,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "ReferenceNumber" => $this->referenceNumber,
            "PrincipalValue" => $this->principalValue,
            "FineValue" => $this->fineValue,
            "InterestValue" => $this->interestValue,
            "MonetaryValue" => $this->monetaryValue,
            "TotalValue" => $this->totalValue,
            "RateValue" => $this->rateValue,
            "DueDate" => $this->dueDate,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "CodeRevenue" => $this->codeRevenue,
            "StateRegistration" => $this->stateRegistration,
            "OriginDocument" => $this->originDocument,
            "RateValueType" => $this->rateValueType,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankDigit
        ], function ($v) {
            return $v !== null;
        });
    }
}
