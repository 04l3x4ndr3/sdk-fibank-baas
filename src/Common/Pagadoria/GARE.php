<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Pagadoria;

class GARE
{
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?float $totalValue;
    private ?float $rateValue;
    private ?string $dueDate;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $codeRevenue;
    private ?string $stateRegistration;
    private ?string $activeDebit;
    private ?string $quoteNumberNotification;
    private ?int $rateValueType;
    private ?string $calculationPeriod;
    private ?string $description;
    private ?string $identifier;
    private ?int $gareType;
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
        $this->totalValue = null;
        $this->rateValue = null;
        $this->dueDate = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->codeRevenue = null;
        $this->stateRegistration = null;
        $this->activeDebit = null;
        $this->quoteNumberNotification = null;
        $this->rateValueType = null;
        $this->calculationPeriod = null;
        $this->description = null;
        $this->identifier = null;
        $this->gareType = null;
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

    public function getActiveDebit(): ?string
    {
        return $this->activeDebit;
    }

    public function setActiveDebit(?string $activeDebit): void
    {
        $this->activeDebit = $activeDebit;
    }

    public function getQuoteNumberNotification(): ?string
    {
        return $this->quoteNumberNotification;
    }

    public function setQuoteNumberNotification(?string $quoteNumberNotification): void
    {
        $this->quoteNumberNotification = $quoteNumberNotification;
    }

    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    public function setRateValueType(?int $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
    }

    public function getCalculationPeriod(): ?string
    {
        return $this->calculationPeriod;
    }

    public function setCalculationPeriod(?string $calculationPeriod): void
    {
        $this->calculationPeriod = $calculationPeriod;
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

    public function getGareType(): ?int
    {
        return $this->gareType;
    }

    public function setGareType(?int $gareType): void
    {
        $this->gareType = $gareType;
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
            "TotalValue" => $this->totalValue,
            "RateValue" => $this->rateValue,
            "DueDate" => $this->dueDate,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "CodeRevenue" => $this->codeRevenue,
            "StateRegistration" => $this->stateRegistration,
            "ActiveDebit" => $this->activeDebit,
            "QuoteNumberNotification" => $this->quoteNumberNotification,
            "RateValueType" => $this->rateValueType,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "GareType" => $this->gareType,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDIgit" => $this->fromBankDigit,
        ], function ($v) {
            return $v !== null;
        });
    }
}
