<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description TODO:
 */
class PixQRCode extends CallApi
{
    private const CONTEXT = "payments";

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);
    }

    /**
     * @param string $taxNumber
     * @param string $hash
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfosPixHashCode(string $taxNumber, string $hash): object
    {
        return $this->call(
            'GetInfosPixHashCode', array_filter([
            'TaxNumber' => $taxNumber,
            'Hash' => $hash
        ], function ($v) {
            return !is_null($v);
        }),
            self::CONTEXT
        );
    }

}
