<?php

namespace O4l3x4ndr3\SdkFitbank\APIFuturePosting;

use O4l3x4ndr3\SdkFitbank\Common\AccountInfo;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class APIFuturePosting extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }
    /**
     * @description This method can be used to generate a new Future Posting
     * @document https://dev.fitbank.com.br/reference/generatefutureposting
     * @param string $taxNumber
     * @param string $identifier
     * @param string $receiverName
     * @param string $receiverTaxNumber
     * @param int $debitType
     * @param string|null $initialDate
     * @param string|null $dueDate
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     * @param string|null $receiverBank
     * @param string|null $receiverBankBranch
     * @param string|null $receiverBankAccount
     * @param string|null $receiverBankAccountDigit
     * @param float|null $value
     * @param int|null $automaticType
     * @param AccountInfo|null $receiverBankingData
     * @param int|null $rateValueType
     * @param float|null $rateValue
     * @param string|null $description
     * @param array|null $tags
     * @return object
     */
    public function generateFuturePosting(
        string $taxNumber,
        string $identifier,
        string $receiverName,
        string $receiverTaxNumber,
        int $debitType,
        ?string $initialDate = null,
        ?string $dueDate = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        ?string $receiverBank = null,
        ?string $receiverBankBranch = null,
        ?string $receiverBankAccount = null,
        ?string $receiverBankAccountDigit = null,
        ?float $value = null,
        ?int $automaticType = null,
        ?AccountInfo $receiverBankingData = null,
        ?int $rateValueType = null,
        ?float $rateValue = null,
        ?string $description = null,
        ?array $tags = null
    ): object {
        return $this->call('GenerateFuturePosting', array_filter([
            "InitialDate" => $initialDate,
            "DueDate" => $dueDate,
            "TaxNumber" => $taxNumber,
            "Bank" => $bank,
            "BankBranch" => $bankBranch,
            "BankAccount" => $bankAccount,
            "BankAccountDigit" => $bankAccountDigit,
            "Identifier" => $identifier,
            "ReceiverName" => $receiverName,
            "ReceiverTaxNumber" => $receiverTaxNumber,
            "ReceiverBank" => $receiverBank,
            "ReceiverBankBranch" => $receiverBankBranch,
            "ReceiverBankAccount" => $receiverBankAccount,
            "ReceiverBankAccountDigit" => $receiverBankAccountDigit,
            "DebitType" => $debitType,
            "Value" => $value,
            "AutomaticType" => $automaticType,
            "ReceiverBankingData" => $receiverBankingData,
            "RateValueType" => $rateValueType,
            "RateValue" => $rateValue,
            "Description" => $description,
            "Tags" => $tags
        ], function ($v) {
            return !is_null($v);
        }));
    }
    /**
     * @description This method can be used to cancel a new Future Posting
     * @document https://dev.fitbank.com.br/reference/cancelfutureposting
     * @param int $documentNumber
     * @return object
     */
    public function cancelFuturePosting(
        int $documentNumber
    ): object {
        return $this->call('CancelFuturePosting', [
            "DocumentNumber" => $documentNumber
        ]);
    }
    /**
     * @description This method can be used to change a Future Posting
     * @document https://dev.fitbank.com.br/reference/changefutureposting
     * @param int $documentNumber
     * @param float|null $value
     * @param string|null $dueDate
     * @return object
     */
    public function changeFuturePosting(
        int $documentNumber,
        ?float $value = null,
        ?string $dueDate = null
    ): object {
        return $this->call('ChangeFuturePosting', array_filter([
            "DocumentNumber" => $documentNumber,
            "Value" => $value,
            "DueDate" => $dueDate
        ], function ($v) {
            return !is_null($v);
        }));
    }
    /**
     * @description This method can be used to get Future Posting by id
     * @document https://dev.fitbank.com.br/reference/getfuturepostingbyid
     * @param int $documentNumber
     * @param string $taxNumber
     * @return object
     */
    public function getFuturePostingById(
        int $documentNumber,
        string $taxNumber
    ): object {
        return $this->call('GetFuturePostingById', [
            "DocumentNumber" => $documentNumber,
            "TaxNumber" => $taxNumber
        ]);
    }
    /**
     * @description This method can be used to get Future Posting
     * @document https://dev.fitbank.com.br/reference/getfutureposting
     * @param string $initialDate
     * @param string $finalDate
     * @param int|null $documentNumber
     * @param AccountInfo|null $accountInfo
     * @return object
     */
    public function getFuturePosting(
        string $initialDate,
        string $finalDate,
        ?int $documentNumber = null,
        ?AccountInfo $accountInfo = null
    ): object {
        return $this->call('GetFuturePosting', array_filter(
            array_merge(
                [
                    "InitialDate" => $initialDate,
                    "FinalDate" => $finalDate,
                    "DocumentNumber" => $documentNumber
                ],
                $accountInfo->toArray()
            ),
            function ($v) {
                return !empty($v);
            }
        ));
    }
}
