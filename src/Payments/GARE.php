<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class GARE extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @description Generates a GARE payment.
     * @document https://dev.fitbank.com.br/reference/51-1
     * @param \O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GARE|null $jsonOperationGAREs
     * @return object
     */
    public function generatePaymentGARE(
        ?\O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GARE $jsonOperationGAREs,
    ): object {
        return $this->call('GeneratePaymentGARE', array_filter(
            $jsonOperationGAREs->toArray(),
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Returns a GARE payment by document number.
     * @document https://dev.fitbank.com.br/reference/52-1
     * @param string $documentNumber
     * @return object
     */
    public function getGAREOutById(
        string $documentNumber
    ): object {
        return $this->call('GetGAREOutById', array_filter(
            [
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Cancels GARE payment by document number.
     * @document https://dev.fitbank.com.br/reference/54-1
     * @param string $documentNumber
     * @return object
     */
    public function cancelPaymentGARE(
        string $documentNumber
    ): object {
        return $this->call('CancelPaymentGARE', array_filter(
            [
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}
