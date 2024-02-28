<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Payer
{
    private ?string $taxNumber;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    public function __construct()
    {
        $this->taxNumber = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
    }

    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): void
    {
        $this->bank = $bank;
    }

    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    public function setBankBranch(?string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    public function setBankAccountDigit(?string $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }
    public function toArray(): array
    {
        return array_filter([
            "TaxNumber" => $this->taxNumber,
            "Bank" => $this->bank,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "BankBranch" => $this->bankBranch
        ], function ($v) {
            return !empty($v);
        });
    }
}
