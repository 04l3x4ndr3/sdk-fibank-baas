<?php

namespace O4l3x4ndr3\SdkFitbank\DDA;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class BoletosDDA extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }
    /**
     * @param string $electronicPayerTaxNumber
     * @param int $pageSize
     * @param int $pageIndex
     * @param string|null $initialDueDate
     * @param string|null $finalDueDate
     * @param string|null $beneficiaryName
     * @param string|null $beneficiaryTaxNumber
     * @return object
     */
    public function getBoletosDDA(
        string $electronicPayerTaxNumber,
        int $pageSize,
        int $pageIndex,
        ?string $initialDueDate,
        ?string $finalDueDate,
        ?string $beneficiaryName,
        ?string $beneficiaryTaxNumber
    ): object {
        return $this->call(
            'GetBoletosDDA',
            array_filter([
                "electronicPayerTaxNumber" => $electronicPayerTaxNumber,
                "pageSize" => $pageSize,
                "pageIndex" => $pageIndex,
                "initialDueDate" => $initialDueDate,
                "finalDueDate" => $finalDueDate,
                "beneficiaryName" => $beneficiaryName,
                "beneficiaryTaxNumber" => $beneficiaryTaxNumber
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string $electronicPayerTaxNumber
     * @param string $barcode
     * @return object
     */
    public function getInfosBoletoDDA(
        string $electronicPayerTaxNumber,
        string $barcode
    ): object {
        return $this->call(
            'GetInfosBoletoDDA',
            array_filter([
                "electronicPayerTaxNumber" => $electronicPayerTaxNumber,
                "barcode" => $barcode
            ], function ($v) {
                return !empty($v);
            })
        );
    }
}
