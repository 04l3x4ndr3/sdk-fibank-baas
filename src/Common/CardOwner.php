<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class CardOwner
{
    private ?string $taxNumber;
    private ?string $fullName;
    private ?string $phone;
    private ?string $mail;
    private ?string $bank;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?string $bankBranch;
    public function __construct()
    {
        $this->taxNumber = null;
        $this->fullName = null;
        $this->phone = null;
        $this->mail = null;
        $this->bank = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->bankBranch = null;
    }

    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): void
    {
        $this->bank = $bank;
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

    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    public function setBankBranch(?string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    public function toArray(): array
    {
        return array_filter([
            "TaxNumber" => $this->taxNumber,
            "FullName" => $this->fullName,
            "Phone" => $this->phone,
            "Mail" => $this->mail,
            "Bank" => $this->bank,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "BankBranch" => $this->bankBranch
        ], function ($v) {
            return !is_null($v);
        });
    }

    public function ownerToArray(): array
    {
        return array_filter([
            "OwnerTaxNumber" => $this->taxNumber,
            "FullName" => $this->fullName,
            "Phone" => $this->phone,
            "Mail" => $this->mail,
            "Bank" => $this->bank,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "BankBranch" => $this->bankBranch
        ], function ($v) {
            return !is_null($v);
        });
    }

    public function holderToArray(): array
    {
        return array_filter([
            "OwnerTaxNumber" => $this->taxNumber,
            "FullName" => $this->fullName,
            "Phone" => $this->phone,
            "Mail" => $this->mail,
            "Bank" => $this->bank,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "BankBranch" => $this->bankBranch
        ], function ($v) {
            return !is_null($v);
        });
    }
}
