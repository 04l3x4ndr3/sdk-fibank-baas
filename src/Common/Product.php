<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Product
{
    private ?int $sellerPersonType;
    private ?string $sellerName;
    private ?string $sellerTaxNumber;
    private ?int $receiverPersonType;
    private ?string $receiverName;
    private ?string $receiverTaxNumber;
    private ?string $receiverBank;
    private ?string $receiverBankBranch;
    private ?string $receiverBankAccount;
    private ?string $receiverBankAccountDigit;
    private ?string $reference;
    private ?string $productCode;
    private ?string $productName;
    private ?int $productQty;
    private ?float $productValue;
    private ?int $automaticType;
    private ?int $accountType;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?float $productRateValueToTransfer;

    public function __construct()
    {
        $this->sellerPersonType = null;
        $this->sellerName = null;
        $this->sellerTaxNumber = null;
        $this->receiverPersonType = null;
        $this->receiverName = null;
        $this->receiverTaxNumber = null;
        $this->receiverBank = null;
        $this->receiverBankBranch = null;
        $this->receiverBankAccount = null;
        $this->receiverBankAccountDigit = null;
        $this->reference = null;
        $this->productCode = null;
        $this->productName = null;
        $this->productQty = null;
        $this->productValue = null;
        $this->automaticType = null;
        $this->accountType = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->productRateValueToTransfer = null;
    }

    /**
     * @return int|null
     */
    public function getSellerPersonType(): ?int
    {
        return $this->sellerPersonType;
    }

    /**
     * @param int|null $sellerPersonType
     *
     * @return Product
     */
    public function setSellerPersonType(?int $sellerPersonType): self
    {
        $this->sellerPersonType = $sellerPersonType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSellerName(): ?string
    {
        return $this->sellerName;
    }

    /**
     * @param string|null $sellerName
     *
     * @return Product
     */
    public function setSellerName(?string $sellerName): self
    {
        $this->sellerName = $sellerName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSellerTaxNumber(): ?string
    {
        return $this->sellerTaxNumber;
    }

    /**
     * @param string|null $sellerTaxNumber
     *
     * @return Product
     */
    public function setSellerTaxNumber(?string $sellerTaxNumber): self
    {
        $this->sellerTaxNumber = $sellerTaxNumber;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getReceiverPersonType(): ?int
    {
        return $this->receiverPersonType;
    }

    /**
     * @param int|null $receiverPersonType
     *
     * @return Product
     */
    public function setReceiverPersonType(?int $receiverPersonType): self
    {
        $this->receiverPersonType = $receiverPersonType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    /**
     * @param string|null $receiverName
     *
     * @return Product
     */
    public function setReceiverName(?string $receiverName): self
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverTaxNumber(): ?string
    {
        return $this->receiverTaxNumber;
    }

    /**
     * @param string|null $receiverTaxNumber
     *
     * @return Product
     */
    public function setReceiverTaxNumber(?string $receiverTaxNumber): self
    {
        $this->receiverTaxNumber = $receiverTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverBank(): ?string
    {
        return $this->receiverBank;
    }

    /**
     * @param string|null $receiverBank
     *
     * @return Product
     */
    public function setReceiverBank(?string $receiverBank): self
    {
        $this->receiverBank = $receiverBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverBankBranch(): ?string
    {
        return $this->receiverBankBranch;
    }

    /**
     * @param string|null $receiverBankBranch
     *
     * @return Product
     */
    public function setReceiverBankBranch(?string $receiverBankBranch): self
    {
        $this->receiverBankBranch = $receiverBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverBankAccount(): ?string
    {
        return $this->receiverBankAccount;
    }

    /**
     * @param string|null $receiverBankAccount
     *
     * @return Product
     */
    public function setReceiverBankAccount(?string $receiverBankAccount): self
    {
        $this->receiverBankAccount = $receiverBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReceiverBankAccountDigit(): ?string
    {
        return $this->receiverBankAccountDigit;
    }

    /**
     * @param string|null $receiverBankAccountDigit
     *
     * @return Product
     */
    public function setReceiverBankAccountDigit(?string $receiverBankAccountDigit): self
    {
        $this->receiverBankAccountDigit = $receiverBankAccountDigit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     *
     * @return Product
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $productCode
     *
     * @return Product
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $productName
     *
     * @return Product
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getProductQty(): ?float
    {
        return $this->productQty;
    }

    /**
     * @param float|null $productQty
     *
     * @return Product
     */
    public function setProductQty(?float $productQty): self
    {
        $this->productQty = $productQty;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getProductValue(): ?float
    {
        return $this->productValue;
    }

    /**
     * @param float|null $productValue
     *
     * @return Product
     */
    public function setProductValue(?float $productValue): self
    {
        $this->productValue = $productValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAutomaticType(): ?int
    {
        return $this->automaticType;
    }

    /**
     * @param int|null $automaticType
     *
     * @return Product
     */
    public function setAutomaticType(?int $automaticType): self
    {
        $this->automaticType = $automaticType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * @param int|null $accountType
     *
     * @return Product
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @param string|null $bank
     *
     * @return Product
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @param string|null $bankBranch
     *
     * @return Product
     */
    public function setBankBranch(?string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @param string|null $bankAccount
     *
     * @return Product
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string|null $bankAccountDigit
     *
     * @return Product
     */
    public function setBankAccountDigit(?string $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getProductRateValueToTransfer(): ?float
    {
        return $this->productRateValueToTransfer;
    }

    /**
     * @param float|null $productRateValueToTransfer
     *
     * @return Product
     */
    public function setProductRateValueToTransfer(?float $productRateValueToTransfer): self
    {
        $this->productRateValueToTransfer = $productRateValueToTransfer;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            "SellerPersonType" => $this->sellerPersonType,
            "SellerName" => $this->sellerName,
            "SellerTaxNumber" => $this->sellerTaxNumber,
            "ReceiverPersonType" => $this->receiverPersonType,
            "ReceiverName" => $this->receiverName,
            "ReceiverTaxNumber" => $this->receiverTaxNumber,
            "ReceiverBank" => $this->receiverBank,
            "ReceiverBankBranch" => $this->receiverBankBranch,
            "ReceiverBankAccount" => $this->receiverBankAccount,
            "ReceiverBankAccountDigit" => $this->receiverBankAccountDigit,
            "Reference" => $this->reference,
            "ProductCode" => $this->productCode,
            "ProductName" => $this->productName,
            "ProductQty" => $this->productQty,
            "ProductValue" => $this->productValue,
            "AutomaticType" => $this->automaticType,
            "AccountType" => $this->accountType,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "ProductRateValueToTransfer" => $this->productRateValueToTransfer
        ], function ($v) {
            return !is_null($v);
        });
    }
}
