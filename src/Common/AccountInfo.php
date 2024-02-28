<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class AccountInfo
{
    private ?string $pixKey;
    private ?string $accountType;
    private ?string $toBankIdentifier;
    private ?Payer $payer;
    public function __construct()
    {
        $this->pixKey = null;
        $this->accountType = null;
        $this->toBankIdentifier = null;
        $this->payer = null;
    }

    public function getPixKey(): ?string
    {
        return $this->pixKey;
    }

    public function setPixKey(?string $pixKey): void
    {
        $this->pixKey = $pixKey;
    }

    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    public function setAccountType(?string $accountType): void
    {
        $this->accountType = $accountType;
    }

    public function getToBankIdentifier(): ?string
    {
        return $this->toBankIdentifier;
    }

    public function setToBankIdentifier(?string $toBankIdentifier): void
    {
        $this->toBankIdentifier = $toBankIdentifier;
    }

    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    public function setPayer(?Payer $payer): void
    {
        $this->payer = $payer;
    }
    public function toArray(): array
    {
        return array_filter(array_merge([
            "PixKey" => $this->pixKey,
            "AccountType" => $this->accountType,
            "ToBankIdentifier" => $this->toBankIdentifier,
        ], $this->payer->toArray()), function ($v) {
            return $v !== null;
        });
    }
}
