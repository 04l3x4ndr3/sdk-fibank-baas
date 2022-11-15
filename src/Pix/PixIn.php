<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class PixIn
{

    private Configuration $configuration;

    /**
     * @param string $TaxNumber
     * @param string $Bank
     * @param string $BankBranch
     * @param string $BankAccount
     * @param string $BankAccountDigit
     * @param string $StartDate
     * @param string $EndDate
     * @param int $PageIndex
     * @param int $PageSize
     * @return object
     * @throws GuzzleException
     */
    public function getPixInByDate(
        string $TaxNumber,
        string $Bank,
        string $BankBranch,
        string $BankAccount,
        string $BankAccountDigit,
        string $StartDate,
        string $EndDate,
        int    $PageIndex,
        int    $PageSize): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "Bank" => $Bank,
            "BankBranch," => $BankBranch,
            "BankAccount" => $BankAccount,
            "BankAccountDigit" => $BankAccountDigit,
            "StartDate" => $StartDate,
            "EndDate" => $EndDate,
            "PageIndex" => $PageIndex,
            "PageSize" => $PageSize
        ];
        return $http->call('GetPixInByDate', array_filter($data));
    }
}