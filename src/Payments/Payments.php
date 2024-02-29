<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use O4l3x4ndr3;
use O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARF;
use O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARJ;
use O4l3x4ndr3\SdkFitbank\Common\Pagadoria\FGTS;
use O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GARE;
use O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GPS;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class Payments extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param BoletoOut|null $jsonOperationBoletoOuts
     * @param DARF|null $jsonOperationDARFs
     * @param GPS|null $jsonOperationGPSs
     * @param GARE|null $jsonOperationGAREs
     * @param FGTS|null $jsonOperationFGTSs
     * @param DARJ|null $jsonOperationDARJs
     * @return object
     */
    public function generatePayments(
        ?BoletoOut $jsonOperationBoletoOuts,
        ?DARF $jsonOperationDARFs,
        ?GPS $jsonOperationGPSs,
        ?GARE $jsonOperationGAREs,
        ?FGTS $jsonOperationFGTSs,
        ?DARJ $jsonOperationDARJs,
    ): object {
        return $this->call('GeneratePayments', array_filter(
            [
                "JsonOperationBoletoOuts" => $jsonOperationBoletoOuts->toArray(),
                "JsonOperationDARFs" => $jsonOperationDARFs->toArray(),
                "JsonOperationGPSs" => $jsonOperationGPSs->toArray(),
                "JsonOperationGAREs" => $jsonOperationGAREs->toArray(),
                "JsonOperationFGTSs" => $jsonOperationFGTSs->toArray(),
                "JsonOperationDARJs" => $jsonOperationDARJs->toArray(),
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string|null $initialDate
     * @param string|null $finalDate
     * @param string|null $initialPaymentDate
     * @param string|null $finalPaymentDate
     * @param string|null $taxNumber
     * @param string|null $inicialDate
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     * @return object
     */
    public function getPayments(
        ?string $initialDate,
        ?string $finalDate,
        ?string $initialPaymentDate,
        ?string $finalPaymentDate,
        ?string $taxNumber,
        ?string $inicialDate,
        ?string $bank,
        ?string $bankBranch,
        ?string $bankAccount,
        ?string $bankAccountDigit,
    ): object {
        return $this->call('GetPayments', array_filter(
            [
                "InitialDate" => $initialDate,
                "FinalDate" => $finalDate,
                "InitialPaymentDate" => $initialPaymentDate,
                "FinalPaymentDate" => $finalPaymentDate,
                "TaxNumber" => $taxNumber,
                "InicialDate" => $inicialDate,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}