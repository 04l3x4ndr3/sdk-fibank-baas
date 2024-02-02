<?php

namespace O4l3x4ndr3\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\InternalTransfers;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 *
 */
class P2P extends CallApi
{
    private ?string $taxNumber;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?string $toTaxNumber;
    private ?string $toBank;
    private ?string $toBankBranch;
    private ?string $toBankAccount;
    private ?string $toBankAccountDigit;
    private ?float $value;
    private ?float $rateValue;
    private ?int $rateValueType;
    private ?float $cachebakValue;
    private ?string $transferDate;
    private ?string $identifier;
    private ?array $tags;
    private ?string $description;
    private ?string $feePayerTaxNumber;
    private ?string $feePayerFullName;
    private ?string $feePayerMail;
    private ?string $feePayerIdentyDocument;
    private ?string $feePayerTradingName;
    private ?string $feePayerLegalName;
    private ?string $feePayerPhone;
    private ?string $feePayerBank;
    private ?string $feePayerBankBranch;
    private ?string $feePayerBankAccount;
    private ?string $feePayerBankAccountDigit;
    private ?string $category;
    private ?array $internalTransfers;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->taxNumber = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->toTaxNumber = null;
        $this->toBank = null;
        $this->toBankBranch = null;
        $this->toBankAccount = null;
        $this->toBankAccountDigit = null;
        $this->value = null;
        $this->rateValue = null;
        $this->rateValueType = null;
        $this->cachebakValue = null;
        $this->transferDate = null;
        $this->identifier = null;
        $this->tags = null;
        $this->description = null;
        $this->feePayerTaxNumber = null;
        $this->feePayerFullName = null;
        $this->feePayerMail = null;
        $this->feePayerIdentyDocument = null;
        $this->feePayerTradingName = null;
        $this->feePayerLegalName = null;
        $this->feePayerPhone = null;
        $this->feePayerBank = null;
        $this->feePayerBankBranch = null;
        $this->feePayerBankAccount = null;
        $this->feePayerBankAccountDigit = null;
        $this->category = null;
        $this->internalTrnsfers = null;
    }

    /**
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @param string|null $taxNumber
     *
     * @return P2P
     */
    public function setTaxNumber(?string $taxNumber): P2P
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @param string|null $bank
     *
     * @return P2P
     */
    public function setBank(?string $bank): P2P
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @param string|null $bankBranch
     *
     * @return P2P
     */
    public function setBankBranch(?string $bankBranch): P2P
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @param string|null $bankAccount
     *
     * @return P2P
     */
    public function setBankAccount(?string $bankAccount): P2P
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string|null $bankAccountDigit
     *
     * @return P2P
     */
    public function setBankAccountDigit(?string $bankAccountDigit): P2P
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToTaxNumber(): ?string
    {
        return $this->toTaxNumber;
    }

    /**
     * @param string|null $toTaxNumber
     *
     * @return P2P
     */
    public function setToTaxNumber(?string $toTaxNumber): P2P
    {
        $this->toTaxNumber = $toTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBank(): ?string
    {
        return $this->toBank;
    }

    /**
     * @param string|null $toBank
     *
     * @return P2P
     */
    public function setToBank(?string $toBank): P2P
    {
        $this->toBank = $toBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankBranch(): ?string
    {
        return $this->toBankBranch;
    }

    /**
     * @param string|null $toBankBranch
     *
     * @return P2P
     */
    public function setToBankBranch(?string $toBankBranch): P2P
    {
        $this->toBankBranch = $toBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankAccount(): ?string
    {
        return $this->toBankAccount;
    }

    /**
     * @param string|null $toBankAccount
     *
     * @return P2P
     */
    public function setToBankAccount(?string $toBankAccount): P2P
    {
        $this->toBankAccount = $toBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToBankAccountDigit(): ?string
    {
        return $this->toBankAccountDigit;
    }

    /**
     * @param string|null $toBankAccountDigit
     *
     * @return P2P
     */
    public function setToBankAccountDigit(?string $toBankAccountDigit): P2P
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float|null $value
     *
     * @return P2P
     */
    public function setValue(?float $value): P2P
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    /**
     * @param float|null $rateValue
     *
     * @return P2P
     */
    public function setRateValue(?float $rateValue): P2P
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    /**
     * @param int|null $rateValueType
     *
     * @return P2P
     */
    public function setRateValueType(?int $rateValueType): P2P
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCachebakValue(): ?float
    {
        return $this->cachebakValue;
    }

    /**
     * @param float|null $cachebakValue
     *
     * @return P2P
     */
    public function setCachebakValue(?float $cachebakValue): P2P
    {
        $this->cachebakValue = $cachebakValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransferDate(): ?string
    {
        return $this->transferDate;
    }

    /**
     * @param string|null $transferDate
     *
     * @return P2P
     */
    public function setTransferDate(?string $transferDate): P2P
    {
        $this->transferDate = $transferDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @param string|null $identifier
     *
     * @return P2P
     */
    public function setIdentifier(?string $identifier): P2P
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param array|null $tags
     *
     * @return P2P
     */
    public function setTags(?array $tags): P2P
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return P2P
     */
    public function setDescription(?string $description): P2P
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerTaxNumber(): ?string
    {
        return $this->feePayerTaxNumber;
    }

    /**
     * @param string|null $feePayerTaxNumber
     *
     * @return P2P
     */
    public function setFeePayerTaxNumber(?string $feePayerTaxNumber): P2P
    {
        $this->feePayerTaxNumber = $feePayerTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerFullName(): ?string
    {
        return $this->feePayerFullName;
    }

    /**
     * @param string|null $feePayerFullName
     *
     * @return P2P
     */
    public function setFeePayerFullName(?string $feePayerFullName): P2P
    {
        $this->feePayerFullName = $feePayerFullName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerMail(): ?string
    {
        return $this->feePayerMail;
    }

    /**
     * @param string|null $feePayerMail
     *
     * @return P2P
     */
    public function setFeePayerMail(?string $feePayerMail): P2P
    {
        $this->feePayerMail = $feePayerMail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerIdentyDocument(): ?string
    {
        return $this->feePayerIdentyDocument;
    }

    /**
     * @param string|null $feePayerIdentyDocument
     *
     * @return P2P
     */
    public function setFeePayerIdentyDocument(?string $feePayerIdentyDocument): P2P
    {
        $this->feePayerIdentyDocument = $feePayerIdentyDocument;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerTradingName(): ?string
    {
        return $this->feePayerTradingName;
    }

    /**
     * @param string|null $feePayerTradingName
     *
     * @return P2P
     */
    public function setFeePayerTradingName(?string $feePayerTradingName): P2P
    {
        $this->feePayerTradingName = $feePayerTradingName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerLegalName(): ?string
    {
        return $this->feePayerLegalName;
    }

    /**
     * @param string|null $feePayerLegalName
     *
     * @return P2P
     */
    public function setFeePayerLegalName(?string $feePayerLegalName): P2P
    {
        $this->feePayerLegalName = $feePayerLegalName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerPhone(): ?string
    {
        return $this->feePayerPhone;
    }

    /**
     * @param string|null $feePayerPhone
     *
     * @return P2P
     */
    public function setFeePayerPhone(?string $feePayerPhone): P2P
    {
        $this->feePayerPhone = $feePayerPhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBank(): ?string
    {
        return $this->feePayerBank;
    }

    /**
     * @param string|null $feePayerBank
     *
     * @return P2P
     */
    public function setFeePayerBank(?string $feePayerBank): P2P
    {
        $this->feePayerBank = $feePayerBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankBranch(): ?string
    {
        return $this->feePayerBankBranch;
    }

    /**
     * @param string|null $feePayerBankBranch
     *
     * @return P2P
     */
    public function setFeePayerBankBranch(?string $feePayerBankBranch): P2P
    {
        $this->feePayerBankBranch = $feePayerBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankAccount(): ?string
    {
        return $this->feePayerBankAccount;
    }

    /**
     * @param string|null $feePayerBankAccount
     *
     * @return P2P
     */
    public function setFeePayerBankAccount(?string $feePayerBankAccount): P2P
    {
        $this->feePayerBankAccount = $feePayerBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankAccountDigit(): ?string
    {
        return $this->feePayerBankAccountDigit;
    }

    /**
     * @param string|null $feePayerBankAccountDigit
     *
     * @return P2P
     */
    public function setFeePayerBankAccountDigit(?string $feePayerBankAccountDigit): P2P
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     *
     * @return P2P
     */
    public function setCategory(?string $category): P2P
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getInternalTransfers(): ?array
    {
        return $this->internalTrnsfers;
    }

    /**
     * @param array|null $internalTransfers
     *
     * @return P2P
     */
    public function setInternalTransfers(?array $internalTransfers): P2P
    {
        $this->internalTrnsfers = $internalTransfers;
        return $this;
    }

    /**
     * @param InternalTransfers $internalTransfers
     *
     * @return P2P
     */
    public function addInternalTransfers(InternalTransfers $internalTransfers): P2P
    {
        $this->internalTransfers[] = $internalTransfers;
        return $this;
    }

    /**
     * @return array|null
     */
    public function toArraySingle(): ?array
    {
        return array_filter([
            "FromTaxNumber" => $this->taxNumber,
            "FromBank" => $this->bank,
            "FromBankBranch" => $this->bankBranch,
            "FromBankAccount" => $this->bankAccount,
            "FromBankAccountDigit" => $this->bankAccountDigit,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToBank" => $this->toBank,
            "ToBankBranch" => $this->toBankBranch,
            "ToBankAccount" => $this->toBankAccount,
            "ToBankAccountDigit" => $this->toBankAccountDigit,
            "Value" => $this->value,
            "RateValue" => $this->rateValue,
            "RateValueType" => $this->rateValueType,
            "CashbackValue" => $this->cachebakValue,
            "TransferDate" => $this->transferDate,
            "Identifier" => $this->identifier,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "FeePayerTaxNumber" => $this->feePayerTaxNumber,
            "FeePayerFullName" => $this->feePayerFullName,
            "FeePayerMail" => $this->feePayerMail,
            "FeePayerIdentyDocument" => $this->feePayerIdentyDocument,
            "FeePayerTradingName" => $this->feePayerTradingName,
            "FeePayerLegalName" => $this->feePayerLegalName,
            "FeePayerPhone" => $this->feePayerPhone,
            "FeePayerBank" => $this->feePayerBank,
            "FeePayerBankBranch" => $this->feePayerBankBranch,
            "FeePayerBankAccount" => $this->feePayerBankAccount,
            "FeePayerBankAccountDigit" => $this->feePayerBankAccountDigit,
            "Category" => $this->category,
        ], function ($v) {
            return ! is_null($v);
        });
    }

    public function toArrayMultiple(): ?array
    {
        $internalTransfers = [];
        if (! empty($this->internalTransfers)) {
            foreach ($this->internalTransfers as $internalTransfer) {
                $internalTransfers[] = array_filter($internalTransfer->toArray(), function ($v) {
                    return ! is_null($v);
                });
            }
        }

        return array_filter([
            "TaxNumber" => $this->taxNumber,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "RateValue" => $this->rateValue,
            "RateValueType" => $this->rateValueType,
            "InternalTransfers" => $internalTransfers
        ], function ($v) {
            return ! is_null($v);
        });
    }

    /**
     * Transferir valores entre contas
     *
     * @return object
     * @throws GuzzleException
     */
    public function internalTransfer(): object
    {
        return $this->call('InternalTransfer', $this->toArraySingle());
    }

    /**
     * Transferir valores entre contas várias contas
     *
     * @return object
     * @throws GuzzleException
     */
    public function multipleInternalTransfers(): object
    {
        return $this->call('MultipleInternalTransfers', $this->toArrayMultiple());
    }

    /**
     * Recuperar os dados da Transferência entre contas
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInternalTransferById(int $documentNumber): object
    {
        return $this->call(
            'GetInternalTransferById',
            ["DocumentNumber" => $documentNumber]
        );
    }

    /**
     * Consulta de Status por conta virtual
     *
     * @param string $taxNumber
     * @param string $transferDate
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInternalTransferByDate(string $taxNumber, string $transferDate): object
    {
        return $this->call('GetInternalTransferByDate', ["TaxNumber" => $taxNumber, "TransferDate" => $transferDate]);
    }

    /**
     * Cancelamento de Transferência Interna
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelInternalTransfer(int $documentNumber): object
    {
        return $this->call('CancelInternalTransfer', ["DocumentNumber" => $documentNumber]);
    }
}
