<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class Query extends CallApi
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param string $barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfosByBarcode(string $barcode): object
    {
        return $this->call('GetInfosByBarcode',['Barcode' => $barcode]);
    }

    /**
     * @param string $taxNumber
     * @param string $barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfosCIPByBarcode(string $taxNumber, string $barcode): object
    {
        return $this->call('GetInfosCIPByBarcode',["TaxNumber" => $taxNumber, "Barcode" => $barcode]);
    }
}
