<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use TwoPlug\SdkFitbank\Common\Product;
use TwoPlug\SdkFitbank\Configuration;

class TED
{
    private Configuration $configuration;
    private ?string $supplierName;
    private ?string $supplierTaxNumber;
    private ?string $supplierTradingName;
    private ?string $supplierMail;
    private ?string $supplierPhone;
    private ?string $bankNumber;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $transferDate;
    private ?float $totalValue;
    private ?float $rateValue;
    private ?string $fromName;
    private ?string $fromTaxNumber;
    private ?array $products;

    /**
     * @param string|null $SupplierName
     * @param string|null $SupplierTaxNumber
     * @param string|null $SupplierTradingName
     * @param string|null $SupplierMail
     * @param string|null $SupplierPhone
     * @param string|null $BankNumber
     * @param string|null $BankBranch
     * @param string|null $BankAccount
     * @param string|null $TransferDate
     * @param float|null $TotalValue
     * @param float|null $RateValue
     * @param string|null $FromName
     * @param string|null $FromTaxNumber
     * @param array $Products
     */
    public function __construct(?string $SupplierName = null,
                                ?string $SupplierTaxNumber = null,
                                ?string $SupplierTradingName = null,
                                ?string $SupplierMail = null,
                                ?string $SupplierPhone = null,
                                ?string $BankNumber = null,
                                ?string $BankBranch = null,
                                ?string $BankAccount = null,
                                ?string $TransferDate = null,
                                ?float  $TotalValue = null,
                                ?float  $RateValue = null,
                                ?string $FromName = null,
                                ?string $FromTaxNumber = null,
                                ?array  $Products = [])
    {
        $this->configuration = new Configuration();
        $this->supplierName = $SupplierName;
        $this->supplierTaxNumber = $SupplierTaxNumber;
        $this->supplierTradingName = $SupplierTradingName;
        $this->supplierMail = $SupplierMail;
        $this->supplierPhone = $SupplierPhone;
        $this->bankNumber = $BankNumber;
        $this->bankBranch = $BankBranch;
        $this->bankAccount = $BankAccount;
        $this->transferDate = $TransferDate;
        $this->totalValue = $TotalValue;
        $this->rateValue = $RateValue;
        $this->fromName = $FromName;
        $this->fromTaxNumber = $FromTaxNumber;
        $this->products = $Products;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    /**
     * @param string|null $supplierName
     */
    public function setSupplierName(?string $supplierName): void
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return string|null
     */
    public function getSupplierTaxNumber(): ?string
    {
        return $this->supplierTaxNumber;
    }

    /**
     * @param string|null $supplierTaxNumber
     */
    public function setSupplierTaxNumber(?string $supplierTaxNumber): void
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
    }

    /**
     * @return string|null
     */
    public function getSupplierTradingName(): ?string
    {
        return $this->supplierTradingName;
    }

    /**
     * @param string|null $supplierTradingName
     */
    public function setSupplierTradingName(?string $supplierTradingName): void
    {
        $this->supplierTradingName = $supplierTradingName;
    }

    /**
     * @return string|null
     */
    public function getSupplierMail(): ?string
    {
        return $this->supplierMail;
    }

    /**
     * @param string|null $supplierMail
     */
    public function setSupplierMail(?string $supplierMail): void
    {
        $this->supplierMail = $supplierMail;
    }

    /**
     * @return string|null
     */
    public function getSupplierPhone(): ?string
    {
        return $this->supplierPhone;
    }

    /**
     * @param string|null $supplierPhone
     */
    public function setSupplierPhone(?string $supplierPhone): void
    {
        $this->supplierPhone = $supplierPhone;
    }

    /**
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }

    /**
     * @param string|null $bankNumber
     */
    public function setBankNumber(?string $bankNumber): void
    {
        $this->bankNumber = $bankNumber;
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
     */
    public function setBankBranch(?string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
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
     */
    public function setBankAccount(?string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string|null
     */
    public function getTransferDate(): ?string
    {
        return $this->transferDate;
    }

    /**
     * @param string|null $transferDate
     */
    public function setTransferDate(?string $transferDate): void
    {
        $this->transferDate = $transferDate;
    }

    /**
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    /**
     * @param float|null $totalValue
     */
    public function setTotalValue(?float $totalValue): void
    {
        $this->totalValue = $totalValue;
    }

    /**
     * @return float|null
     */
    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    /**
     * @param float|null $rateValue
     */
    public function setRateValue(?float $rateValue): void
    {
        $this->rateValue = $rateValue;
    }

    /**
     * @return string|null
     */
    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    /**
     * @param string|null $fromName
     */
    public function setFromName(?string $fromName): void
    {
        $this->fromName = $fromName;
    }

    /**
     * @return string|null
     */
    public function getFromTaxNumber(): ?string
    {
        return $this->fromTaxNumber;
    }

    /**
     * @param string|null $fromTaxNumber
     */
    public function setFromTaxNumber(?string $fromTaxNumber): void
    {
        $this->fromTaxNumber = $fromTaxNumber;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param Product|null $product
     */
    public function addProduct(?Product $product): void
    {
        $this->products[] = $product->toArray();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "SupplierName" => $this->supplierName,
            "SupplierTaxNumber" => $this->supplierTaxNumber,
            "SupplierTradingName" => $this->supplierTradingName,
            "SupplierMail" => $this->supplierMail,
            "SupplierPhone" => $this->supplierPhone,
            "BankNumber" => $this->bankNumber,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "TransferDate" => $this->transferDate,
            "TotalValue" => $this->totalValue,
            "RateValue" => $this->rateValue,
            "FromName" => $this->fromName,
            "FromTaxNumber" => $this->fromTaxNumber,
            "Products" => $this->products,
        ];
    }

    /**
     * @description Recarrega a conta virtual criada via TED
     * @param TED|null $ted
     * @return object
     */
    public function moneyTransferIn(?TED $ted = null): object
    {
        $http = new CallApi($this->configuration);
        $data = isset($ted) ? $ted->toArray() : $this->toArray();
        return $http->call('MoneyTransferIn', $data);
    }

    /**
     * @description Consulta de recarga via TED
     * @param int $DocumentNumber
     * @return object
     */
    public function getMoneyTransferInById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('GetMoneyTransferInById', $data);
    }

    /**
     * @description Cancelamento de recarga de conta virtual via TED
     * @param int $DocumentNumber
     * @return object
     */
    public function cancelMoneyTransferIn(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('CancelMoneyTransferIn', $data);
    }
}