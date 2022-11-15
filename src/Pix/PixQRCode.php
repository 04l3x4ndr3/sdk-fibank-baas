<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description TODO:
 */
class PixQRCode extends CallApi
{
    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);
    }
}
