<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use O4l3x4ndr3;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class DARJ extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @description Generates a DARJ payment.
     * @document https://dev.fitbank.com.br/reference/59-1
     * @param O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARJ|null $jsonOperationDARJs
     * @return object
     */
    public function generatePaymentDARJ(
        ?O4l3x4ndr3\SdkFitbank\Common\Pagadoria\DARJ $jsonOperationDARJs,
    ): object {
        return $this->call('GeneratePaymentDARJ', array_filter(
            $jsonOperationDARJs->toArray(),
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Returns a DARJ payment by document number.
     * @document https://dev.fitbank.com.br/reference/61-1
     * @param string $documentNumber
     * @return object
     */
    public function getDARJOutById(
        string $documentNumber
    ): object {
        return $this->call('GetDARJOutById', array_filter(
            [
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Cancels DARJ payment by document number.
     * @document https://dev.fitbank.com.br/reference/60-1
     * @param string $documentNumber
     * @return object
     */
    public function cancelPaymentDARJ(
        string $documentNumber
    ): object {
        return $this->call('CancelPaymentDARJ', array_filter(
            [
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}