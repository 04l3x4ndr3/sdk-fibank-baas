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

    public function setTaxNumber(?string $taxNumber): DARJ
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    public function setContributorTaxNumber(?string $contributorTaxNumber): DARJ
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): DARJ
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): DARJ
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    public function setFineValue(?float $fineValue): DARJ
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    public function setInterestValue(?float $interestValue): DARJ
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    public function getMonetaryValue(): ?float
    {
        return $this->monetaryValue;
    }

    public function setMonetaryValue(?float $monetaryValue): DARJ
    {
        $this->monetaryValue = $monetaryValue;
        return $this;
    }

    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    public function setTotalValue(?float $totalValue): DARJ
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    public function setRateValue(?float $rateValue): DARJ
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): DARJ
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): DARJ
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): DARJ
    {
        $this->tags = $tags;
        return $this;
    }

    public function getCodeRevenue(): ?string
    {
        return $this->codeRevenue;
    }

    public function setCodeRevenue(?string $codeRevenue): DARJ
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
    }

    public function getStateRegistration(): ?string
    {
        return $this->stateRegistration;
    }

    public function setStateRegistration(?string $stateRegistration): DARJ
    {
        $this->stateRegistration = $stateRegistration;
        return $this;
    }

    public function getOriginDocument(): ?int
    {
        return $this->originDocument;
    }

    public function setOriginDocument(?int $originDocument): DARJ
    {
        $this->originDocument = $originDocument;
        return $this;
    }

    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    public function setRateValueType(?int $rateValueType): DARJ
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): DARJ
    {
        $this->description = $description;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): DARJ
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getFromBank(): ?string
    {
        return $this->fromBank;
    }

    public function setFromBank(?string $fromBank): DARJ
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    public function getFromBankBranch(): ?string
    {
        return $this->fromBankBranch;
    }

    public function setFromBankBranch(?string $fromBankBranch): DARJ
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    public function getFromBankAccount(): ?string
    {
        return $this->fromBankAccount;
    }

    public function setFromBankAccount(?string $fromBankAccount): DARJ
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    public function getFromBankDigit(): ?string
    {
        return $this->fromBankDigit;
    }

    public function setFromBankDigit(?string $fromBankDigit): DARJ
    {
        $this->fromBankDigit = $fromBankDigit;
        return $this;
    }

    public function addTag(?string $tag): array
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
