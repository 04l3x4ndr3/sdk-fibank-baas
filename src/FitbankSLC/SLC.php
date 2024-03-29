<?php

namespace O4l3x4ndr3\SdkFitbank\FitbankSLC;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class SLC extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @description Retorna uma lista de pagamentos agendados
     * @document https://dev.fitbank.com.br/reference/post_getslconciliationbydate
     * @param string $taxNumber
     * @param int $bank
     * @param int $bankBranch
     * @param int $bankAccount
     * @param int $bankAccountDigit
     * @param int $acquirerTaxNumber
     * @param int $type
     * @param int $arragmenteCode
     * @param string $startDate
     * @param string $endDate
     * @param int $pageIndex
     * @param int $pageSize
     * @return object
     */
    public function getSLConciliationByDate(
        string $taxNumber,
        int $bank,
        int $bankBranch,
        int $bankAccount,
        int $bankAccountDigit,
        int $acquirerTaxNumber,
        int $type,
        int $arragmenteCode,
        string $startDate,
        string $endDate,
        int $pageIndex,
        int $pageSize
    ): object {
        return $this->call(
            'GetSLConciliationByDate',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "AcquirerTaxNumber" => $acquirerTaxNumber,
                "Type" => $type,
                "ArragmenteCode" => $arragmenteCode,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize
            ], function ($v) {
                return !empty($v);
            })
        );
    }

    /**
     * @description GetSLCScheduled
     * @document https://dev.fitbank.com.br/reference/post_getslcscheduled
     * @param string $taxNumber
     * @param int $bank
     * @param int $bankBranch
     * @param int $bankAccount
     * @param int $bankAccountDigit
     * @return object
     */
    public function getSLCScheduled(
        string $taxNumber,
        int $bank,
        int $bankBranch,
        int $bankAccount,
        int $bankAccountDigit
    ): object {
        return $this->call(
            'GetSLCScheduled',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit
            ], function ($v) {
                return !empty($v);
            })
        );
    }
}
