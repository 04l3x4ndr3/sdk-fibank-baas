<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class P2P
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
     * @param string $FromTaxNumber
     * @param string $ToTaxNumber
     * @param float $Value
     * @param float $RateValue
     * @param string $TransferDate
     * @param string $Identifier
     * @param string $Description
     * @return object
     * @throws GuzzleException
     */
    public function InternalTransfer(string $FromTaxNumber, string $ToTaxNumber, float $Value, float $RateValue, string $TransferDate, string $Identifier, string $Description,): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "FromTaxNumber" => $FromTaxNumber,
            "ToTaxNumber" => $ToTaxNumber,
            "Value" => $Value,
            "RateValue" => $RateValue,
            "TransferDate" => $TransferDate,
            "Identifier" => $Identifier,
            "Description" => $Description
        ];
        return $http->call('InternalTransfer', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function GetInternalTransferById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('GetInternalTransferById', $data);
    }

    /**
     * @param string $TaxNumber
     * @param string $TransferDate
     * @return object
     * @throws GuzzleException
     */
    public function GetInternalTransferByDate(string $TaxNumber, string $TransferDate): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "TransferDate" => $TransferDate
        ];
        return $http->call('GetInternalTransferByDate', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function CancelInternalTransfer(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('CancelInternalTransfer', $data);
    }
}