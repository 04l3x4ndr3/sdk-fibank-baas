<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class WithBarcode
{
    private Configuration $configuration;

    public function __construct()
    {
        $this->configuration = new Configuration();
    }

    /**
     * @param string $Name
     * @param string $TaxNumber
     * @param string $Barcode
     * @param float $PrincipalValue
     * @param float $DiscountValue
     * @param float $ExtraValue
     * @param string $PaymentDate
     * @param string $DueDate
     * @param string $Identifier
     * @param int $RateValueType
     * @param float $RateValue
     * @return object
     * @throws GuzzleException
     */
    public function GenerateBoletoOut(string $Name, string $TaxNumber, string $Barcode, float $PrincipalValue, float $DiscountValue, float $ExtraValue, string $PaymentDate, string $DueDate, string $Identifier, int $RateValueType, float $RateValue,): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "Name" => $Name,
            "TaxNumber" => $TaxNumber,
            "Barcode" => $Barcode,
            "PrincipalValue" => $PrincipalValue,
            "DiscountValue" => $DiscountValue,
            "ExtraValue" => $ExtraValue,
            "PaymentDate" => $PaymentDate,
            "DueDate" => $DueDate,
            "Identifier" => $Identifier,
            "RateValueType" => $RateValueType,
            "RateValue" => $RateValue
        ];
        return $http->call('GenerateBoletoOut', $data);
    }

    /**
     * @param string $Barcode
     * @return object
     * @throws GuzzleException
     */
    public function GetBoletoOutByBarcode(string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = ['Barcode' => $Barcode];
        return $http->call('GetBoletoOutByBarcode', $data);
    }

    /**
     * @param string $Barcode
     * @return object
     * @throws GuzzleException
     */
    public function GetInfosByBarcode(string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = ['Barcode' => $Barcode];
        return $http->call('GetInfosByBarcode', $data);
    }

    /**
     * @param string $Taxnumber
     * @param string $Barcode
     * @return object
     * @throws GuzzleException
     */
    public function GetInfosCIPByBarcode(string $Taxnumber, string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "Taxnumber" => $Taxnumber,
            "Barcode" => $Barcode
        ];
        return $http->call('GetInfosCIPByBarcode', $data);

    }
}