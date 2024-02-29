<?php

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class GARE extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param \O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GARE|null $jsonOperationGAREs
     * @return object
     */
    public function generatePaymentGARE(
        ?O4l3x4ndr3\SdkFitbank\Common\Pagadoria\GARE $jsonOperationGAREs,
    ): object {
        return $this->call('GeneratePaymentGARE', array_filter(
            $jsonOperationGAREs->toArray(),
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