<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class GARE extends CallApi
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

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
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
     * @return GARE
     */
    public function setTaxNumber(?string $taxNumber): GARE
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
     * @return GARE
     */
    public function setContributorTaxNumber(?string $contributorTaxNumber): GARE
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
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
     * @return GARE
     */
    public function setReferenceNumber(?string $referenceNumber): GARE
    {
        $this->referenceNumber = $referenceNumber;
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
     * @return GARE
     */
    public function setPrincipalValue(?float $principalValue): GARE
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    /**
     * @param float|null $fineValue
     * @return GARE
     */
    public function setFineValue(?float $fineValue): GARE
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    /**
     * @param float|null $interestValue
     * @return GARE
     */
    public function setInterestValue(?float $interestValue): GARE
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    /**
     * @param float|null $totalValue
     * @return GARE
     */
    public function setTotalValue(?float $totalValue): GARE
    {
        $this->totalValue = $totalValue;
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
     * @return GARE
     */
    public function setRateValue(?float $rateValue): GARE
    {
        $this->rateValue = $rateValue;
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
     * @return GARE
     */
    public function setDueDate(?string $dueDate): GARE
    {
        $this->dueDate = $dueDate;
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
     * @return GARE
     */
    public function setPaymentDate(?string $paymentDate): GARE
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
     * @param array|null $tags
     * @return GARE
     */
    public function setTags(?array $tags): GARE
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeRevenue(): ?string
    {
        return $this->codeRevenue;
    }

    /**
     * @param string|null $codeRevenue
     * @return GARE
     */
    public function setCodeRevenue(?string $codeRevenue): GARE
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStateRegistration(): ?string
    {
        return $this->stateRegistration;
    }

    /**
     * @param string|null $stateRegistration
     * @return GARE
     */
    public function setStateRegistration(?string $stateRegistration): GARE
    {
        $this->stateRegistration = $stateRegistration;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getActiveDebit(): ?string
    {
        return $this->activeDebit;
    }

    /**
     * @param string|null $activeDebit
     * @return GARE
     */
    public function setActiveDebit(?string $activeDebit): GARE
    {
        $this->activeDebit = $activeDebit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuoteNumberNotification(): ?string
    {
        return $this->quoteNumberNotification;
    }

    /**
     * @param string|null $quoteNumberNotification
     * @return GARE
     */
    public function setQuoteNumberNotification(?string $quoteNumberNotification): GARE
    {
        $this->quoteNumberNotification = $quoteNumberNotification;
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
     * @return GARE
     */
    public function setRateValueType(?int $rateValueType): GARE
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCalculationPeriod(): ?string
    {
        return $this->calculationPeriod;
    }

    /**
     * @param string|null $calculationPeriod
     * @return GARE
     */
    public function setCalculationPeriod(?string $calculationPeriod): GARE
    {
        $this->calculationPeriod = $calculationPeriod;
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
     * @return GARE
     */
    public function setDescription(?string $description): GARE
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
     * @return GARE
     */
    public function setIdentifier(?string $identifier): GARE
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGareType(): ?int
    {
        return $this->gareType;
    }

    /**
     * @param int|null $gareType
     * @return GARE
     */
    public function setGareType(?int $gareType): GARE
    {
        $this->gareType = $gareType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBank(): ?string
    {
        return $this->fromBank;
    }

    /**
     * @param string|null $fromBank
     * @return GARE
     */
    public function setFromBank(?string $fromBank): GARE
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
     * @return GARE
     */
    public function setFromBankBranch(?string $fromBankBranch): GARE
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
     * @return GARE
     */
    public function setFromBankAccount(?string $fromBankAccount): GARE
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankDigit(): ?string
    {
        return $this->fromBankDigit;
    }

    /**
     * @param string|null $fromBankDigit
     * @return GARE
     */
    public function setFromBankDigit(?string $fromBankDigit): GARE
    {
        $this->fromBankDigit = $fromBankDigit;
        return $this;
    }

    /**
     * @description Generates a GARE payment.
     * @document https://dev.fitbank.com.br/reference/51-1
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentGARE(): object
    {
        $data = array_filter($this->toArray());
        return $this->call('GeneratePaymentGARE', $data);
    }

    /**
     * @description Returns a GARE payment by document number.
     * @document https://dev.fitbank.com.br/reference/52-1
     * @param string $documentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getGAREOutById(string $documentNumber): object
    {
        $data = array_filter(["DocumentNumber" => $documentNumber]);
        return $this->call('GetGAREOutById', $data);
    }

    /**
     * @description Cancels GARE payment by document number.
     * @document https://dev.fitbank.com.br/reference/54-1
     * @param string $documentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentGARE(string $documentNumber): object
    {
        $data = array_filter(["DocumentNumber" => $documentNumber]);
        return $this->call('CancelPaymentGARE', $data);
    }

    public function toArray(): array
    {
        return [
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
            "FromBankAccountDigit" => $this->fromBankDigit,
        ];
    }
}
