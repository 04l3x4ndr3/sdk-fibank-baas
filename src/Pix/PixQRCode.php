<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\Address;
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

    /**
     * @param float $principalValue
     * @param string $taxNumber
     * @param string $pixKey
     * @param Address $address
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param array|null $additionalData
     * @param int|null $transactionPurpose
     * @param string|null $identifier
     * @return object
     */
    public function generateStaticPixQRCode(
        float $principalValue,
        string $taxNumber,
        string $pixKey,
        Address $address,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?array $additionalData,
        ?int $transactionPurpose,
        ?string $identifier
    ): object {
        return $this->call('GenerateStaticPixQRCode', array_filter(
            [
                "PrincipalValue" => $principalValue,
                "TaxNumber" => $taxNumber,
                "PixKey" => $pixKey,
                "Address" => $address,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "AdditionalData" => $additionalData,
                "TransactionPurpose" => $transactionPurpose,
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $pixKey
     * @param string $taxNumber
     * @param float $principalValue
     * @param Address $address
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param int $changeType
     * @param string|null $payerTaxNumber
     * @param string|null $payerName
     * @param string|null $expirationDate
     * @param array|null $additionalData
     * @param string|null $payerRequest
     * @param int|null $transactionPurpose
     * @param float|null $transactionValue
     * @param int|null $agentModality
     * @param int|null $transactionChangeType
     * @param string|null $identifier
     * @return object
     */
    public function generateDynamicPixQRCode(
        string $pixKey,
        string $taxNumber,
        float $principalValue,
        Address $address,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        int $changeType,
        ?string $payerTaxNumber,
        ?string $payerName,
        ?string $expirationDate,
        ?array $additionalData,
        ?string $payerRequest,
        ?int $transactionPurpose,
        ?float $transactionValue,
        ?int $agentModality,
        ?int $transactionChangeType,
        ?string $identifier
    ): object {
        return $this->call('GenerateDynamicPixQRCode', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "ExpirationDate" => $expirationDate,
                "Address" => $address,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "ChangeType" => $changeType,
                "AdditionalData" => $additionalData,
                "PayerRequest" => $payerRequest,
                "TransactionPurpose" => $transactionPurpose,
                "TransactionValue" => $transactionValue,
                "AgentModality" => $agentModality,
                "TransactionChangeType" => $transactionChangeType,
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $pixKey
     * @param string $taxNumber
     * @param string $payerTaxNumber
     * @param string $payerName
     * @param float $principalValue
     * @param Address $address
     * @param string $dueDate
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string|null $expirationDate
     * @param float|null $RebateValue
     * @param float|null $interestValue
     * @param float|null $fineValue
     * @param array|null $additionalData
     * @param string|null $payerRequest
     * @param string|null $identifier
     * @return object
     */
    public function generateDynamicPixQRCodeDueDate(
        string $pixKey,
        string $taxNumber,
        string $payerTaxNumber,
        string $payerName,
        float $principalValue,
        Address $address,
        string $dueDate,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?string $expirationDate,
        ?float $RebateValue,
        ?float $interestValue,
        ?float $fineValue,
        ?array $additionalData,
        ?string $payerRequest,
        ?string $identifier
    ): object {
        return $this->call('GenerateDynamicPixQRCodeDueDate', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "Address" => $address,
                "DueDate" => $dueDate,
                "ExpirationDate" => $expirationDate,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit,
                "RebateValue" => $RebateValue,
                "InterestValue" => $interestValue,
                "FineValue" => $fineValue,
                "AdditionalData" => $additionalData,
                "PayerRequest" => $payerRequest,
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $pixKey
     * @param float $principalValue
     * @param int $changeType
     * @param int $documentNumber
     * @param string|null $taxNumber
     * @param string|null $payerTaxNumber
     * @param string|null $payerName
     * @param string|null $expirationDate
     * @param Address|null $address
     * @param array|null $additionalData
     * @param string|null $payerRequest
     * @param int|null $transactionPurpose
     * @param float|null $transactionValue
     * @param int|null $transactionChangeType
     * @param int|null $agentModality
     * @return object
     */
    public function changeDynamicPixQRCode(
        string $pixKey,
        float $principalValue,
        int $changeType,
        int $documentNumber,
        ?string $taxNumber,
        ?string $payerTaxNumber,
        ?string $payerName,
        ?string $expirationDate,
        ?Address $address,
        ?array $additionalData,
        ?string $payerRequest,
        ?int $transactionPurpose,
        ?float $transactionValue,
        ?int $transactionChangeType,
        ?int $agentModality
    ): object {
        return $this->call('ChangeDynamicPixQRCode', array_filter(
            [
                "PixKey" => $pixKey,
                "PrincipalValue" => $principalValue,
                "ChangeType" => $changeType,
                "DocumentNumber" => $documentNumber,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "ExpirationDate" => $expirationDate,
                "Address" => $address,
                "AdditionalData" => $additionalData,
                "PayerRequest" => $payerRequest,
                "TransactionPurpose" => $transactionPurpose,
                "TransactionValue" => $transactionValue,
                "TransactionChangeType" => $transactionChangeType,
                "AgentModality" => $agentModality
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $taxNumber
     * @param string $payerTaxNumber
     * @param string $payerName
     * @param float $principalValue
     * @param string $pixKey
     * @param int $documentNumber
     * @param string|null $payerRequest
     * @param Address|null $address
     * @param string|null $dueDate
     * @param string|null $expirationDate
     * @param float|null $rebateValue
     * @param float|null $interestValue
     * @param float|null $fineValue
     * @param array|null $additionalData
     * @return object
     */
    public function changeDynamicPixQRCodeDueDate(
        string $taxNumber,
        string $payerTaxNumber,
        string $payerName,
        float $principalValue,
        string $pixKey,
        int $documentNumber,
        ?string $payerRequest,
        ?Address $address,
        ?string $dueDate,
        ?string $expirationDate,
        ?float $rebateValue,
        ?float $interestValue,
        ?float $fineValue,
        ?array $additionalData
    ): object {
        return $this->call('ChangeDynamicPixQRCodeDueDate', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "PixKey" => $pixKey,
                "DocumentNumber" => $documentNumber,
                "PayerRequest" => $payerRequest,
                "Address" => $address,
                "DueDate" => $dueDate,
                "ExpirationDate" => $expirationDate,
                "RebateValue" => $rebateValue,
                "InterestValue" => $interestValue,
                "FineValue" => $fineValue,
                "AdditionalData" => $additionalData
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $taxNumber
     * @param int $documentNumber
     * @return object
     */
    public function cancelPixQRCode(
        string $taxNumber,
        int $documentNumber,
    ): object {
        return $this->call('CancelPixQRCode', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $taxNumber
     * @param int $documentNumber
     * @return object
     */
    public function getPixQRCodeById(
        string $taxNumber,
        int $documentNumber,
    ): object {
        return $this->call('GetPixQRCodeById', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string|null $taxNumber
     * @param int|null $documentNumber
     * @param string|null $identifier
     * @return object
     */
    public function getPixQRCodeByIdentifier(
        ?string $taxNumber,
        ?int $documentNumber,
        ?string $identifier,
    ): object {
        return $this->call('GetPixQRCodeByIdentifier', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "DocumentNumber" => $documentNumber,
                "Identifier" => $identifier,
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}
