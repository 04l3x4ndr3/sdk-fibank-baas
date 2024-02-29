<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class PixIn extends CallApi
{

    private const CONTEXT = "payments";

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);
    }

    /**
     * @description
     *
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string $startDate
     * @param string $endDate
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return object
     * @throws GuzzleException
     */
    public function getPixInByDate(
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        string $startDate,
        string $endDate,
        int $pageIndex,
        int $pageSize
    ): object
    {
        return $this->call(
            'GetPixInByDate',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch," => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize
            ],
                self::CONTEXT)
        );
    }
    public function generateRefundPixIn(
        float $refundValue,
        int $documentNumber,
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        string $identifier,
        ?string $toTaxNumber,
        ?string $toName,
        ?string $toBank,
        ?string $toBankBranch,
        ?string $toBankAccount,
        ?string $toBankAccountDigit,
        ?string $customerMessage,
        ?array $tags,
    ): object {
        return $this->call('GenerateRefundPixIn', array_filter(
            [
                "ToTaxNumber" => $toTaxNumber,
                "ToName" => $toName,
                "ToBank" => $toBank,
                "ToBankBranch" => $toBankBranch,
                "ToBankAccount" => $toBankAccount,
                "ToBankAccountDigit" => $toBankAccountDigit,
                "RefundValue" => $refundValue,
                "CustomerMessage" => $customerMessage,
                "DocumentNumber" => $documentNumber,
                "Tags" => $tags,
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param int|null $pageIndex
     * @param int|null $pageSize
     * @return object
     */
    public function getRefundPixInByDate(
        string $taxNumber,
        string $startDate,
        string $endDate,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?int $pageIndex,
        ?int $pageSize
    ): object {
        return $this->call('GetRefundPixInByDate', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param int|null $documentNumber
     * @param string|null $endToEndId
     * @param string|null $conciliationId
     * @return object
     */
    public function getPixInById(
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?int $documentNumber,
        ?string $endToEndId,
        ?string $conciliationId
    ): object {
        return $this->call('GetPixInById', array_filter(
            [
                "DocumentNumber" => $documentNumber,
                "TaxNumber" => $taxNumber,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "EndToEndId" => $endToEndId,
                "ConciliationId" => $conciliationId,
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}
