<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class Payment extends CallApi
{
    public function __construct(?Configuration $config = null)
    {
        parent::__construct($config);
    }

    /*public function generatePayments(){
    }*/

    /**
     * @throws GuzzleException
     */
    public function getPayments(
        ?string $initialDate = null,
        ?string $finalDate = null,
        ?string $initialPaymentDate = null,
        ?string $finalPaymentDate = null,
        ?string $taxNumber = null,
        ?string $inicialDate = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        ?int    $status = null
    ): object
    {
        $data = array_filter([
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
            "Status" => $status,
        ], function ($v) {
            return !is_null($v);
        });

        return $this->call('GetPayments', $data);
    }

    /**
     * @throws GuzzleException
     */
    public function expectedDatePayment(string $actualDatePayment, ?string $barCode = null): object
    {
        $data = array_filter([
            "ActualDatePayment" => $actualDatePayment,
            "BarCode" => $barCode
        ], function ($v) {
            return !is_null($v);
        });

        return $this->call('ExpectedDatePayment', $data);
    }
}