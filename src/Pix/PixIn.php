<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class PixIn extends CallApi
{

    private const CONTEXT = "payments";

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);
    }

    /**
     * @description
     *
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string $startDate
     * @param string $endDate
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return object
     * @throws GuzzleException
     */
    public function getPixInByDate(
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        string $startDate,
        string $endDate,
        int $pageIndex,
        int $pageSize
    ): object
    {
        return $this->call(
            'GetPixInByDate',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch," => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize
            ],
                self::CONTEXT)
        );
    }
}
