<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use TwoPlug\SdkFitbank\Configuration;

class Ted
{
    private Configuration $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
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
     * @param string $SupplierName
     * @param string $SupplierTaxNumber
     * @param string $SupplierTradingName
     * @param string $SupplierMail
     * @param string $SupplierPhone
     * @param string $BankNumber
     * @param string $BankBranch
     * @param string $BankAccount
     * @param string $TransferDate
     * @param float $TotalValue
     * @param float $RateValue
     * @param string $FromName
     * @param string $FromTaxNumber
     * @param array $Products
     * @return object
     */
    public function MoneyTransferIn(string $SupplierName, string $SupplierTaxNumber, string $SupplierTradingName, string $SupplierMail, string $SupplierPhone, string $BankNumber, string $BankBranch, string $BankAccount, string $TransferDate, float $TotalValue, float $RateValue, string $FromName, string $FromTaxNumber, array $Products): object
    {
        $_products = [];
        if (isset($products)) {
            foreach ($this->products as $product) {
                $_products[] = $product->toArray();
            }
        }

        $http = new CallApi($this->configuration);
        $data = [
            "SupplierName" => $SupplierName,
            "SupplierTaxNumber" => $SupplierTaxNumber,
            "SupplierTradingName" => $SupplierTradingName,
            "SupplierMail" => $SupplierMail,
            "SupplierPhone" => $SupplierPhone,
            "BankNumber" => $BankNumber,
            "BankBranch" => $BankBranch,
            "BankAccount" => $BankAccount,
            "TransferDate" => $TransferDate,
            "TotalValue" => $TotalValue,
            "RateValue" => $RateValue,
            "FromName" => $FromName,
            "FromTaxNumber" => $FromTaxNumber,
            "Products" => $_products,
        ];
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