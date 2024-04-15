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
     * @description This method can be used to consult a Pix In (pix receipt) by date.
     * @document https://dev.fitbank.com.br/reference/365
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

    /**
     * @description This method can be used to consult a Pix In (pix receipt) by date.
     * @document https://dev.fitbank.com.br/reference/365
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
     */
    public function getPixInByDate2(
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        string $startDate,
        string $endDate,
        ?int $pageIndex,
        ?int $pageSize
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
            function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @description This method can be used to generate a refund of a pix transaction
     * @document https://dev.fitbank.com.br/reference/240
     * @param float $refundValue
     * @param int $documentNumber
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string $identifier
     * @param string|null $toTaxNumber
     * @param string|null $toName
     * @param string|null $toBank
     * @param string|null $toBankBranch
     * @param string|null $toBankAccount
     * @param string|null $toBankAccountDigit
     * @param string|null $customerMessage
     * @param array|null $tags
     * @return object
     */
    public function generateRefundPixIn(
        float $refundValue,
        int $documentNumber,
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        string $identifier,
        ?string $toTaxNumber = null,
        ?string $toName = null,
        ?string $toBank = null,
        ?string $toBankBranch = null,
        ?string $toBankAccount = null,
        ?string $toBankAccountDigit = null,
        ?string $customerMessage = null,
        ?array $tags = null
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
     * @description This method can be used to consult a refund pix in transaction by date.
     * @document https://dev.fitbank.com.br/reference/368
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
        ?int $pageIndex = null,
        ?int $pageSize = null
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
     * @description This method can be used to consult a PIX Receipt by its ID (DocumentNumber).
     * @document https://dev.fitbank.com.br/reference/480
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
        ?int $documentNumber = null,
        ?string $endToEndId = null,
        ?string $conciliationId = null
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

    /**
     * @description This method can be used to consult a refund pix in transaction by its identifier (DocumentNumber).
     * @document https://dev.fitbank.com.br/reference/335
     * @param string $taxNumber
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param int|null $documentNumber
     * @param string|null $identifier
     * @return object
     */
    public function getRefundPixInById(
        string $taxNumber,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?int $documentNumber = null,
        ?string $identifier = null
    ): object {
        return $this->call('GetRefundPixInById', array_filter(
            [
                "DocumentNumber" => $documentNumber,
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
}
