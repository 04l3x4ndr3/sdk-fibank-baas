<?php

namespace O4l3x4ndr3\SdkFitbank\DDA;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class ElectronicPayer extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }
    /**
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
