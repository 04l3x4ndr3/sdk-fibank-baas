<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Pagadoria;

use O4l3x4ndr3\SdkFitbank\Common\Payer;

class DARF
{
    private ?Payer $payer;
    private ?int $darfType;
    private ?string $calculationPeriod;
    private ?string $codeRevenue;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?string $dueDate;
    private ?float $grossRevenueValue;
    private ?float $grossRevenuePercentage;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValueType;
    public function __construct()
    {
        $this->payer = null;
        $this->darfType = null;
        $this->calculationPeriod = null;
        $this->codeRevenue = null;
        $this->contributorTaxNumber = null;
        $this->referenceNumber = null;
        $this->dueDate = null;
        $this->grossRevenueValue = null;
        $this->grossRevenuePercentage = null;
        $this->principalValue = null;
        $this->fineValue = null;
        $this->interestValue = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->description = null;
        $this->identifier = null;
        $this->rateValueType = null;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function setPayer(?Payer $payer): DARF
    {
        $this->payer = $payer;
        return $this;
    }

    public function getDarfType(): ?int
    {
        return $this->darfType;
    }

    public function setDarfType(?int $darfType): DARF
    {
        $this->darfType = $darfType;
        return $this;
    }

    public function getCalculationPeriod(): ?string
    {
        return $this->calculationPeriod;
    }

    public function setCalculationPeriod(?string $calculationPeriod): DARF
    {
        $this->calculationPeriod = $calculationPeriod;
        return $this;
    }

    public function getCodeRevenue(): ?string
    {
        return $this->codeRevenue;
    }

    public function setCodeRevenue(?string $codeRevenue): DARF
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
    }

    public function getContributorTaxNumber(): ?string
    {
        return $this->contributorTaxNumber;
    }

    public function setContributorTaxNumber(?string $contributorTaxNumber): DARF
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }

    public function setReferenceNumber(?string $referenceNumber): DARF
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate(?string $dueDate): DARF
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    public function getGrossRevenueValue(): ?float
    {
        return $this->grossRevenueValue;
    }

    public function setGrossRevenueValue(?float $grossRevenueValue): DARF
    {
        $this->grossRevenueValue = $grossRevenueValue;
        return $this;
    }

    public function getGrossRevenuePercentage(): ?float
    {
        return $this->grossRevenuePercentage;
    }

    public function setGrossRevenuePercentage(?float $grossRevenuePercentage): DARF
    {
        $this->grossRevenuePercentage = $grossRevenuePercentage;
        return $this;
    }

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): DARF
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    public function setFineValue(?float $fineValue): DARF
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    public function setInterestValue(?float $interestValue): DARF
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?string $paymentDate): DARF
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): DARF
    {
        $this->tags = $tags;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): DARF
    {
        $this->description = $description;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(?string $identifier): DARF
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    public function setRateValueType(?int $rateValueType): DARF
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            "TaxNumber" => $this->payer->getTaxNumber(),
            "FromBank" => $this->payer->getBank(),
            "FromBankBranch" => $this->payer->getBankBranch(),
            "FromBankAccount" => $this->payer->getBankAccount(),
            "FromBankAccountDIgit" => $this->payer->getBankAccountDIgit(),
            "DARFType" => $this->darfType,
            "CalculationPeriod" => $this->calculationPeriod,
            "CodeRevenue" => $this->codeRevenue,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "ReferenceNumber" => $this->referenceNumber,
            "DueDate" => $this->dueDate,
            "GrossRevenueValue" => $this->grossRevenueValue,
            "GrossRevenuePercentage" => $this->grossRevenuePercentage,
            "PrincipalValue" => $this->principalValue,
            "FineValue" => $this->fineValue,
            "InterestValue" => $this->interestValue,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType
        ], function ($v) {
            return $v !== null;
        });
    }
}
