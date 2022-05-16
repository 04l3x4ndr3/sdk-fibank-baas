<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use TwoPlug\SdkFitbank\Configuration;

class TED
{
    private Configuration $configuration;
    private string $supplierName;
    private string $supplierTaxNumber;
    private string $supplierTradingName;
    private string $supplierMail;
    private string $supplierPhone;
    private string $bankNumber;
    private string $bankBranch;
    private string $bankAccount;
    private string $transferDate;
    private float $totalValue;
    private float $rateValue;
    private string $fromName;
    private string $fromTaxNumber;
    private array $products;

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
                                array   $Products = [])
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
     * @param Configuration $configuration
     * @return $this
     */
    public function setConfiguration(Configuration $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $_products = [];
        if (isset($products)) {
            foreach ($this->products as $product) {
                $_products[] = $product->toArray();
            }
        }
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
            "Products" => $_products,
        ];
    }

    /**
     * @param TED $ted
     * @return object
     */
    public function MoneyTransferIn(TED $ted): object
    {
        $http = new CallApi($this->configuration);
        $data = $ted->toArray();
        return $http->call('MoneyTransferIn', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function GetMoneyTransferInById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('GetMoneyTransferInById', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function CancelMoneyTransferIn(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('CancelMoneyTransferIn', $data);
    }




    /**
     * @param string $FromTaxNumber
     * @param string $ToTaxNumber
     * @param string $ToName
     * @param int $Bank
     * @param int $BankBranch
     * @param int $BankAccount
     * @param int $BankAccountDigit
     * @param int $AccountType
     * @param float $Value
     * @param float $RateValue
     * @param string $Identifier
     * @param int $RateValueType
     * @param array $Tags
     * @param string $Description
     * @param string $PaymentDate
     * @return object
     */
    public function MoneyTransfer(string $FromTaxNumber, string $ToTaxNumber, string $ToName, int $Bank, int $BankBranch, int $BankAccount, int $BankAccountDigit, int $AccountType, float $Value, float $RateValue, string $Identifier, int $RateValueType, array $Tags, string $Description, string $PaymentDate): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "FromTaxNumber" => $FromTaxNumber,
            "ToTaxNumber" => $ToTaxNumber,
            "ToName" => $ToName,
            "Bank" => $Bank,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
            "AccountType" => $AccountType,
            "Value" => $Value,
            "RateValue" => $RateValue,
            "Identifier" => $Identifier,
            "RateValueType" => $RateValueType,
            "Tags" => $Tags,
            "Description" => $Description,
            "PaymentDate" => $PaymentDate
        ];
        return $http->call('MoneyTransfer', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function GetMoneyTransferOutById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('GetMoneyTransferOutById', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     */
    public function CancelMoneyTransfer(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('CancelMoneyTransfer', $data);
    }
}