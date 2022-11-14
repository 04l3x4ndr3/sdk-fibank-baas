<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Product {
	private ?int $sellerPersonType;
	private ?string $sellerName;
	private ?string $sellerTaxNumber;
	private ?int $receiverPersonType;
	private ?string $receiverName;
	private ?string $receiverTaxNumber;
	private ?string $reference;
	private ?string $productCode;
	private ?string $productName;
	private ?int $productQty;
	private ?float $productValue;

	public function __construct()
	{
		$this->sellerPersonType = NULL;
		$this->sellerName = NULL;
		$this->sellerTaxNumber = NULL;
		$this->receiverPersonType = NULL;
		$this->receiverName = NULL;
		$this->receiverTaxNumber = NULL;
		$this->reference = NULL;
		$this->productCode = NULL;
		$this->productName = NULL;
		$this->productQty = NULL;
		$this->productValue = NULL;
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
	 * @return string|null
	 */
	public function getReference(): ?string
	{
		return $this->reference;
	}

	/**
	 * @param string|null $reference
	 * @return Product
	 */
	public function setReference(?string $reference): self
	{
		$this->reference = $reference;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getProductCode(): ?string
	{
		return $this->productCode;
	}

	/**
	 * @param int|null $productCode
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
