<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Common;

class Product {
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
	public function __construct(?int    $sellerPersonType = NULL,
								?string $sellerName = NULL,
								?string $sellerTaxNumber = NULL,
								?int    $receiverPersonType = NULL,
								?string $receiverName = NULL,
								?string $receiverTaxNumber = NULL,
								?int    $reference = NULL,
								?int    $productCode = NULL,
								?string $productName = NULL,
								?int    $productQty = NULL,
								?float  $productValue = NULL)
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
	 * @return Product
	 */
	public function setReceiverTaxNumber(?string $receiverTaxNumber): self
	{
		$this->receiverTaxNumber = $receiverTaxNumber;
		return $this;
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
	 * @return Product
	 */
	public function setReference(?int $reference): self
	{
		$this->reference = $reference;
		return $this;
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
	 * @return Product
	 */
	public function setProductCode(?int $productCode): self
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
	 * @return Product
	 */
	public function setProductName(?string $productName): self
	{
		$this->productName = $productName;
		return $this;
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
	 * @return Product
	 */
	public function setProductQty(?int $productQty): self
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
	 * @return Product
	 */
	public function setProductValue(?float $productValue): self
	{
		$this->productValue = $productValue;
		return $this;
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