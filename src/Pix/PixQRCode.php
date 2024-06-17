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
     * @description This method can be used to consult a Pix QrCode information, by decoding its HashCode.
     * @document https://dev.fitbank.com.br/reference/274
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
     * @description This method can be used to generate a static Pix QRCode transaction.
     * @document https://dev.fitbank.com.br/reference/255
     * @param string $taxNumber
     * @param string $pixKey
     * @param float $principalValue
     * @param Address $address
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @param string|null $additionalData
     * @param int|null $transactionPurpose
     * @param string|null $identifier
     * @return object
     */
    public function generateStaticPixQRCode(
        string $taxNumber,
        string $pixKey,
        float $principalValue,
        Address $address,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        ?string $additionalData = null,
        ?int $transactionPurpose = null,
        ?string $identifier = null
    ): object {
        return $this->call('GenerateStaticPixQRCode', array_filter(
            [
                "PrincipalValue" => $principalValue,
                "TaxNumber" => $taxNumber,
                "PixKey" => $pixKey,
                "Address" => $address->toArray(),
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
     * @description This method can be used to generate a dynamic Pix QRCode transaction.
     * @document https://dev.fitbank.com.br/reference/256
     * @param string $taxNumber
     * @param string $pixKey
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
     * @param string|null $additionalData
     * @param string|null $payerRequest
     * @param int|null $transactionPurpose
     * @param float|null $transactionValue
     * @param int|null $agentModality
     * @param int|null $transactionChangeType
     * @param string|null $identifier
     * @return object
     */
    public function generateDynamicPixQRCode(
        string $taxNumber,
        string $pixKey,
        float $principalValue,
        Address $address,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit,
        int $changeType,
        ?string $payerTaxNumber = null,
        ?string $payerName = null,
        ?string $expirationDate = null,
        ?string $additionalData = null,
        ?string $payerRequest = null,
        ?int $transactionPurpose = null,
        ?float $transactionValue = null,
        ?int $agentModality = null,
        ?int $transactionChangeType = null,
        ?string $identifier = null
    ): object {
        return $this->call('GenerateDynamicPixQRCode', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "ExpirationDate" => $expirationDate,
                "Address" => $address->toArray(),
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
     * @description This method can be used to generate a dynamic Pix QRCode transactyion with due date.
     * @document https://dev.fitbank.com.br/reference/275
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
        ?string $expirationDate = null,
        ?float $RebateValue = null,
        ?float $interestValue = null,
        ?float $fineValue = null,
        ?array $additionalData = null,
        ?string $payerRequest = null,
        ?string $identifier = null
    ): object {
        return $this->call('GenerateDynamicPixQRCodeDueDate', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "Address" => $address->toArray(),
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
     * @description This method can be used to modify a dynamic Pix QRCode data.
     * @document https://dev.fitbank.com.br/reference/310
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
        ?string $taxNumber = null,
        ?string $payerTaxNumber = null,
        ?string $payerName = null,
        ?string $expirationDate = null,
        ?Address $address = null,
        ?array $additionalData = null,
        ?string $payerRequest = null,
        ?int $transactionPurpose = null,
        ?float $transactionValue = null,
        ?int $transactionChangeType = null,
        ?int $agentModality = null
    ): object {
        return $this->call('ChangeDynamicPixQRCode', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "ExpirationDate" => $expirationDate,
                "Address" => $address->toArray(),
                "ChangeType" => $changeType,
                "AdditionalData" => $additionalData,
                "PayerRequest" => $payerRequest,
                "DocumentNumber" => $documentNumber,
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
     * @description This method can be used to modify dynamic a Pix QRCode Due Date information.
     * @document https://dev.fitbank.com.br/reference/320
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
        ?string $payerRequest = null,
        ?Address $address = null,
        ?string $dueDate = null,
        ?string $expirationDate = null,
        ?float $rebateValue = null,
        ?float $interestValue = null,
        ?float $fineValue = null,
        ?array $additionalData = null
    ): object {
        return $this->call('ChangeDynamicPixQRCodeDueDate', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "PayerRequest" => $payerRequest,
                "PayerTaxNumber" => $payerTaxNumber,
                "PayerName" => $payerName,
                "PrincipalValue" => $principalValue,
                "PixKey" => $pixKey,
                "Address" => $address->toArray(),
                "DueDate" => $dueDate,
                "ExpirationDate" => $expirationDate,
                "RebateValue" => $rebateValue,
                "InterestValue" => $interestValue,
                "FineValue" => $fineValue,
                "AdditionalData" => $additionalData,
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description This method can be used to cancel Pix QRCode transaction.
     * @document https://dev.fitbank.com.br/reference/344
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
     * @description This method can be used to consult a Pix QRCode by its identifier (DocumentNumber).
     * @document https://dev.fitbank.com.br/reference/336
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
     * @description This method can be used to consult a pix payment by its identifier (DocumentNumber).
     * @document https://dev.fitbank.com.br/reference/555
     * @param string|null $taxNumber
     * @param int|null $documentNumber
     * @param string|null $identifier
     * @return object
     */
    public function getPixQRCodeByIdentifier(
        ?string $taxNumber = null,
        ?int $documentNumber = null,
        ?string $identifier = null
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
