<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Common;

class Product
{
    private ?int $sellerPersonType;
    private ?string $sellerName;
    private ?string $sellerTaxNumber;
    private ?int $receiverPersonType;
    private ?string $receiverName;
    private ?string $receiverTaxNumber;
    private ?int $reference;
    private ?int $productCode;
    private ?string $productName;
    private ?int $productQty;
    private ?float $productValue;

    /**
     * @param int|null $sellerPersonType
     * @param string|null $sellerName
     * @param string|null $sellerTaxNumber
     * @param int|null $receiverPersonType
     * @param string|null $receiverName
     * @param string|null $receiverTaxNumber
     * @param int|null $reference
     * @param int|null $productCode
     * @param string|null $productName
     * @param int|null $productQty
     * @param float|null $productValue
     */
    public function __construct(?int    $sellerPersonType = null,
                                ?string $sellerName = null,
                                ?string $sellerTaxNumber = null,
                                ?int    $receiverPersonType = null,
                                ?string $receiverName = null,
                                ?string $receiverTaxNumber = null,
                                ?int    $reference = null,
                                ?int    $productCode = null,
                                ?string $productName = null,
                                ?int    $productQty = null,
                                ?float  $productValue = null)
    {
        $this->sellerPersonType = $sellerPersonType;
        $this->sellerName = $sellerName;
        $this->sellerTaxNumber = $sellerTaxNumber;
        $this->receiverPersonType = $receiverPersonType;
        $this->receiverName = $receiverName;
        $this->receiverTaxNumber = $receiverTaxNumber;
        $this->reference = $reference;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->productQty = $productQty;
        $this->productValue = $productValue;
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
     */
    public function setSellerPersonType(?int $sellerPersonType): void
    {
        $this->sellerPersonType = $sellerPersonType;
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
     */
    public function setSellerName(?string $sellerName): void
    {
        $this->sellerName = $sellerName;
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
     */
    public function setSellerTaxNumber(?string $sellerTaxNumber): void
    {
        $this->sellerTaxNumber = $sellerTaxNumber;
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
     */
    public function setReceiverPersonType(?int $receiverPersonType): void
    {
        $this->receiverPersonType = $receiverPersonType;
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
     */
    public function setReceiverName(?string $receiverName): void
    {
        $this->receiverName = $receiverName;
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
     */
    public function setReceiverTaxNumber(?string $receiverTaxNumber): void
    {
        $this->receiverTaxNumber = $receiverTaxNumber;
    }

    /**
     * @return int|null
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * @param int|null $reference
     */
    public function setReference(?int $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return int|null
     */
    public function getProductCode(): ?int
    {
        return $this->productCode;
    }

    /**
     * @param int|null $productCode
     */
    public function setProductCode(?int $productCode): void
    {
        $this->productCode = $productCode;
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
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return int|null
     */
    public function getProductQty(): ?int
    {
        return $this->productQty;
    }

    /**
     * @param int|null $productQty
     */
    public function setProductQty(?int $productQty): void
    {
        $this->productQty = $productQty;
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
     */
    public function setProductValue(?float $productValue): void
    {
        $this->productValue = $productValue;
    }

    public function toArray(): array
    {
        return [
            "SellerPersonType" => $this->sellerPersonType,
            "SellerName" => $this->sellerName,
            "SellerTaxNumber" => $this->sellerTaxNumber,
            "ReceiverPersonType" => $this->receiverPersonType,
            "ReceiverName" => $this->receiverName,
            "ReceiverTaxNumber" => $this->receiverTaxNumber,
            "Reference" => $this->reference,
            "ProductCode" => $this->productCode,
            "ProductName" => $this->productName,
            "ProductQty" => $this->productQty,
            "ProductValue" => $this->productValue
        ];
    }
}