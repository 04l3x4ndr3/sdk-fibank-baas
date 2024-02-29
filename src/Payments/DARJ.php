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