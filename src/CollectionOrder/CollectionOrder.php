<?php

namespace O4l3x4ndr3\SdkFitbank\CollectionOrder;

use O4l3x4ndr3\SdkFitbank\Common\Collection\CollectionCustomer;
use O4l3x4ndr3\SdkFitbank\Common\Collection\CollectionPayer;
use O4l3x4ndr3\SdkFitbank\Common\Collection\Receivers;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class CollectionOrder extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param int $documentNumber
     * @param string $identifier
     * @return object
     */
    public function getCollectionOrder(
        int $documentNumber,
        string $identifier,
    ): object {
        return $this->call(
            'GetCollectionOrder',
            array_filter([
                "DocumentNumber" => $documentNumber,
                "Identifier" => $identifier
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string $identifier
     * @param float $principalValue
     * @param float $finePercent
     * @param float $interestPercent
     * @param string $expirationDate
     * @param CollectionPayer $payer
     * @param CollectionCustomer $customer
     * @param Receivers $receivers
     * @param string|null $collectionOrderType
     * @param float|null $rebateValue
     * @param float|null $interestValue
     * @param float|null $fineValue
     * @param string|null $fineDate
     * @param string|null $dueDate
     * @return object
     */
    public function generateCollectionOrder(
        string $identifier,
        float $principalValue,
        float $finePercent,
        float $interestPercent,
        string $expirationDate,
        CollectionPayer $payer,
        CollectionCustomer $customer,
        Receivers $receivers,
        ?string $collectionOrderType,
        ?float $rebateValue,
        ?float $interestValue,
        ?float $fineValue,
        ?string $fineDate,
        ?string $dueDate
    ): object {
        return $this->call(
            'GenerateCollectionOrder',
            array_filter([
                "Identifier" => $identifier,
                "CollectionOrderType" => $collectionOrderType,
                "PrincipalValue" => $principalValue,
                "RebateValue" => $rebateValue,
                "InterestValue" => $interestValue,
                "FineValue" => $fineValue,
                "FinePercent" => $finePercent,
                "InterestPercent" => $interestPercent,
                "FineDate" => $fineDate,
                "DueDate" => $dueDate,
                "ExpirationDate" => $expirationDate,
                "Payer" => $payer->toArray(),
                "Customer" => $customer->toArray(),
                "Receivers" => $receivers->toArray()
            ], function ($v) {
                return !empty($v);
            })
        );
    }

    /**
     * @param int $documentNumber
     * @return object
     */
    public function cancelCollectionOrder(
        int $documentNumber
    ): object {
        return $this->call(
            'CancelCollectionOrder',
            array_filter([
                "DocumentNumber" => $documentNumber
            ], function ($v) {
                return !empty($v);
            })
        );
    }
}
