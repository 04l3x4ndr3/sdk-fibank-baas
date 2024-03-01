<?php

namespace O4l3x4ndr3\SdkFitbank\DDA;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class DDA extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }
    /**
     * @description Retorna uma lista de boletos DDA
     * @document https://dev.fitbank.com.br/reference/post_getboletosdda
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
     * @description Retorna informações de um boleto
     * @document https://dev.fitbank.com.br/reference/post_getinfosboletodda
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
    /**
     * @description Solicita inclusão do pagador eletrônico.
     * @document https://dev.fitbank.com.br/reference/post_addelectronicpayer
     * @param string $taxNumber
     * @param array|null $accounts
     * @return object
     */
    public function addElectronicPayer(string $taxNumber, ?array $accounts): object
    {
        return $this->call(
            'AddElectronicPayer',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Accounts" => $accounts
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @description Solicita exclusão de pagador eletrônico.
     * @document https://dev.fitbank.com.br/reference/post_cancelelectronicpayer
     * @param string $taxNumber
     * @return object
     */
    public function cancelElectronicPayer(string $taxNumber): object
    {
        return $this->call(
            'CancelElectronicPayer',
            array_filter([
                "TaxNumber" => $taxNumber
            ], function ($v) {
                return !empty($v);
            })
        );
    }
}
