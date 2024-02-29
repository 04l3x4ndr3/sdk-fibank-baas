<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Pagadoria;

class FGTS
{
    private ?string $taxNumber;
    private ?string $contributorTaxNumber;
    private ?float $principalValue;
    private ?string $codeRevenue;
    private ?string $barcode;
    private ?string $fgtsIdentifier;
    private ?int $socialConnectivityCode;
    private ?int $socialConnectivityDigit;
    private ?string $paymentDate;
    private ?array $tags;
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
        $this->principalValue = null;
        $this->codeRevenue = null;
        $this->barcode = null;
        $this->fgtsIdentifier = null;
        $this->socialConnectivityCode = null;
        $this->socialConnectivityDigit = null;
        $this->paymentDate = null;
        $this->tags = null;
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

    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    public function setPrincipalValue(?float $principalValue): void
    {
        $this->principalValue = $principalValue;
    }

    public function getCodeRevenue(): ?string
    {
        return $this->codeRevenue;
    }

    public function setCodeRevenue(?string $codeRevenue): void
    {
        $this->codeRevenue = $codeRevenue;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    public function getFgtsIdentifier(): ?string
    {
        return $this->fgtsIdentifier;
    }

    public function setFgtsIdentifier(?string $fgtsIdentifier): void
    {
        $this->fgtsIdentifier = $fgtsIdentifier;
    }

    public function getSocialConnectivityCode(): ?int
    {
        return $this->socialConnectivityCode;
    }

    public function setSocialConnectivityCode(?int $socialConnectivityCode): void
    {
        $this->socialConnectivityCode = $socialConnectivityCode;
    }

    public function getSocialConnectivityDigit(): ?int
    {
        return $this->socialConnectivityDigit;
    }

    public function setSocialConnectivityDigit(?int $socialConnectivityDigit): void
    {
        $this->socialConnectivityDigit = $socialConnectivityDigit;
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
            "PrincipalValue" => $this->principalValue,
            "CodeRevenue" => $this->codeRevenue,
            "Barcode" => $this->barcode,
            "FgtsIdentifier" => $this->fgtsIdentifier,
            "SocialConnectivityCode" => $this->socialConnectivityCode,
            "SocialConnectivityDigit" => $this->socialConnectivityDigit,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "RateValueType" => $this->rateValueType,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankDigit,
        ], function ($v) {
            return $v !== null;
        });
    }
}
