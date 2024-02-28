<?php

namespace O4l3x4ndr3\SdkFitbank\PaymentOrder;

use O4l3x4ndr3\SdkFitbank\Common\Beneficiary;
use O4l3x4ndr3\SdkFitbank\Common\Payer;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class PaymentOrder extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param float $value
     * @param string $identifier
     * @param string $paymentDate
     * @param Beneficiary $beneficiary
     * @param Payer $payer
     * @param array|null $tags
     * @return object
     */
    public function generatePaymentOrder(
        float $value,
        string $identifier,
        string $paymentDate,
        Beneficiary $beneficiary,
        Payer $payer,
        ?array $tags = []
    ): object {
        return $this->call(
            'GeneratePaymentOrder',
            array_filter([
                "Value" => $value,
                "Identifier" => $identifier,
                "PaymentDate" => $paymentDate,
                "Tags" => $tags,
                "Beneficiary" => $beneficiary->toArray(),
                "Payer" => $payer->toArray()
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string|null $taxNumber
     * @param string|null $paymentDate
     * @param string|null $paymentOrderStatus
     * @param int|null $paymentOrderId
     * @param string|null $identifier
     * @param int|null $pageSize
     * @param int|null $index
     * @return object
     */
    public function getPaymentOrder(
        ?string $taxNumber,
        ?string $paymentDate,
        ?string $paymentOrderStatus,
        ?int $paymentOrderId,
        ?string $identifier,
        ?int $pageSize,
        ?int $index
    ): object {
        return $this->call(
            'GetPaymentOrder',
            array_filter([
                "TaxNumber" => $taxNumber,
                "PaymentDate" => $paymentDate,
                "PaymentOrderStatus" => $paymentOrderStatus,
                "PaymentOrderId" => $paymentOrderId,
                "Identifier" => $identifier,
                "PageSize" => $pageSize,
                "Index" => $index
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string|null $taxNumber
     * @param int|null $paymentOrderId
     * @return object
     */
    public function cancelPaymentOrder(
        ?string $taxNumber,
        ?int $paymentOrderId
    ): object {
        return $this->call(
            'CancelPaymentOrder',
            array_filter([
                "TaxNumber" => $taxNumber,
                "PaymentOrderId" => $paymentOrderId
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string|null $taxNumber
     * @return object
     */
    public function getBeneficiary(
        ?string $taxNumber
    ): object {
        return $this->call(
            'GetBeneficiary',
            array_filter([
                "TaxNumber" => $taxNumber
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @return object
     */
    public function getFXforecast(): object {
        return $this->call('GetFXforecast', []);
    }
}
