<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class InternalTransfers
{
    private ?string $toName;
    private ?string $toTaxNumber;
    private ?string $toBank;
    private ?string $toBankBranch;
    private ?string $toBankAccount;
    private ?string $toBankAccountDigit;
    private ?float $value;
    private ?string $description;

    public function __construct()
    {
        $this->toName = null;
        $this->toTaxNumber = null;
        $this->toBank = null;
        $this->toBankBranch = null;
        $this->toBankAccount = null;
        $this->toBankAccountDigit = null;
        $this->value = null;
        $this->description = null;
    }

    /**
     * @return string|null
     */
    public function getToName(): ?string
    {
        return $this->toName;
    }

    /**
     * @param string|null $toName
     * @return InternalTransfers
     */
    public function setToName(?string $toName): self
    {
        $this->toName = $toName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToTaxNumber(): ?string
    {
        return $this->toTaxNumber;
    }

    /**
     * @param string|null $toTaxNumber
     * @return InternalTransfers
     */
    public function setToTaxNumber(?string $toTaxNumber): self
    {
        $this->toTaxNumber = $toTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBank(): ?string
    {
        return $this->toBank;
    }

    /**
     * @param string|null $toBank
     * @return InternalTransfers
     */
    public function setToBank(?string $toBank): self
    {
        $this->toBank = $toBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankBranch(): ?string
    {
        return $this->toBankBranch;
    }

    /**
     * @param string|null $toBankBranch
     * @return InternalTransfers
     */
    public function setToBankBranch(?string $toBankBranch): self
    {
        $this->toBankBranch = $toBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankAccount(): ?string
    {
        return $this->toBankAccount;
    }

    /**
     * @param string|null $toBankAccount
     * @return InternalTransfers
     */
    public function setToBankAccount(?string $toBankAccount): self
    {
        $this->toBankAccount = $toBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankAccountDigit(): ?string
    {
        return $this->toBankAccountDigit;
    }

    /**
     * @param string|null $toBankAccountDigit
     * @return InternalTransfers
     */
    public function setToBankAccountDigit(?string $toBankAccountDigit): self
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     * @return InternalTransfers
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
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
     * @return InternalTransfers
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "toName" => $this->toName,
            "toTaxNumber" => $this->toTaxNumber,
            "toBank" => $this->toBank,
            "toBankBranch" => $this->toBankBranch,
            "toBankAccount" => $this->toBankAccount,
            "toBankAccountDigit" => $this->toBankAccountDigit,
            "value" => $this->value,
            "description" => $this->description,
        ], function ($v) {
            return $v !== null;
        });
    }
}
