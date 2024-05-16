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

    public function setTaxNumber(?string $taxNumber): Payer
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): Payer
    {
        $this->bank = $bank;
        return $this;
    }

    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    public function setBankBranch(?string $bankBranch): Payer
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?string $bankAccount): Payer
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    public function setBankAccountDigit(?string $bankAccountDigit): Payer
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
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
            return !is_null($v);
        });
    }
}
