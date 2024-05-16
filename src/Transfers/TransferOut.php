<?php

namespace O4l3x4ndr3\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class TransferOut extends CallApi
{
    private ?string $fromTaxNumber;
    private ?int $fromBank;
    private ?int $fromBankBranch;
    private ?int $fromBankAccount;
    private ?int $fromBankAccountDigit;
    private ?string $toTaxNumber;
    private ?string $toName;
    private ?int $bank;
    private ?int $bankBranch;
    private ?int $bankAccount;
    private ?int $bankAccountDigit;
    private ?int $accountType;
    private ?float $value;
    private ?int $subType;
    private ?float $rateValue;
    private ?string $identifier;
    private ?string $dueDate;
    private ?string $paymentDate;
    private ?int $rateValueType;
    private ?array $tags;
    private ?string $description;
    private ?string $feePayerTaxNumber;
    private ?string $feePayerFullName;
    private ?string $feePayerMail;
    private ?string $feePayerIdentityDocument;
    private ?string $feePayerTradingName;
    private ?string $feePayerLegalName;
    private ?string $feePayerPhone;
    private ?string $feePayerBank;
    private ?string $feePayerBankBranch;
    private ?string $feePayerBankAccount;
    private ?string $feePayerBankAccountDigit;
    private ?array $entries;
    private ?bool $onlineTransfer;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
        $this->fromTaxNumber = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
        $this->toTaxNumber = null;
        $this->toName = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->accountType = null;
        $this->value = null;
        $this->subType = null;
        $this->rateValue = null;
        $this->identifier = null;
        $this->dueDate = null;
        $this->paymentDate = null;
        $this->rateValueType = null;
        $this->tags = null;
        $this->description = null;
        $this->feePayerTaxNumber = null;
        $this->feePayerFullName = null;
        $this->feePayerMail = null;
        $this->feePayerIdentityDocument = null;
        $this->feePayerTradingName = null;
        $this->feePayerLegalName = null;
        $this->feePayerPhone = null;
        $this->feePayerBank = null;
        $this->feePayerBankBranch = null;
        $this->feePayerBankAccount = null;
        $this->feePayerBankAccountDigit = null;
        $this->entries = null;
        $this->onlineTransfer = null;
    }

    /**
     * @return string|null
     */
    public function getFromTaxNumber(): ?string
    {
        return $this->fromTaxNumber;
    }

    /**
     * @param string|null $fromTaxNumber
     *
     * @return TransferOut
     */
    public function setFromTaxNumber(?string $fromTaxNumber): self
    {
        $this->fromTaxNumber = $fromTaxNumber;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFromBank(): ?int
    {
        return $this->fromBank;
    }

    /**
     * @param int|null $fromBank
     *
     * @return TransferOut
     */
    public function setFromBank(?int $fromBank): self
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFromBankBranch(): ?int
    {
        return $this->fromBankBranch;
    }

    /**
     * @param int|null $fromBankBranch
     *
     * @return TransferOut
     */
    public function setFromBankBranch(?int $fromBankBranch): self
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFromBankAccount(): ?int
    {
        return $this->fromBankAccount;
    }

    /**
     * @param int|null $fromBankAccount
     *
     * @return TransferOut
     */
    public function setFromBankAccount(?int $fromBankAccount): self
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFromBankAccountDigit(): ?int
    {
        return $this->fromBankAccountDigit;
    }

    /**
     * @param int|null $fromBankAccountDigit
     *
     * @return TransferOut
     */
    public function setFromBankAccountDigit(?int $fromBankAccountDigit): self
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
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
     * @return TransferOut
     */
    public function setToTaxNumber(?string $toTaxNumber): self
    {
        $this->toTaxNumber = $toTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToName(): ?string
    {
        return $this->toName;
    }

    /**
     * @param string|null $toName
     *
     * @return TransferOut
     */
    public function setToName(?string $toName): self
    {
        $this->toName = $toName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBank(): ?int
    {
        return $this->bank;
    }

    /**
     * @param int|null $bank
     *
     * @return TransferOut
     */
    public function setBank(?int $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBankBranch(): ?int
    {
        return $this->bankBranch;
    }

    /**
     * @param int|null $bankBranch
     *
     * @return TransferOut
     */
    public function setBankBranch(?int $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    /**
     * @param int|null $bankAccount
     *
     * @return TransferOut
     */
    public function setBankAccount(?int $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBankAccountDigit(): ?int
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param int|null $bankAccountDigit
     *
     * @return TransferOut
     */
    public function setBankAccountDigit(?int $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * @param int|null $accountType
     *
     * @return TransferOut
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
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
     * @return TransferOut
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSubType(): ?int
    {
        return $this->subType;
    }

    /**
     * @param int|null $subType
     *
     * @return TransferOut
     */
    public function setSubType(?int $subType): self
    {
        $this->subType = $subType;
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
     * @return TransferOut
     */
    public function setRateValue(?float $rateValue): self
    {
        $this->rateValue = $rateValue;
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
     * @return TransferOut
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @param string|null $dueDate
     *
     * @return TransferOut
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    /**
     * @param string|null $paymentDate
     *
     * @return TransferOut
     */
    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;
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
     * @return TransferOut
     */
    public function setRateValueType(?int $rateValueType): self
    {
        $this->rateValueType = $rateValueType;
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
     * @return TransferOut
     */
    public function setTags(?array $tags): self
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
     * @return TransferOut
     */
    public function setDescription(?string $description): self
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
     * @return TransferOut
     */
    public function setFeePayerTaxNumber(?string $feePayerTaxNumber): self
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
     * @return TransferOut
     */
    public function setFeePayerFullName(?string $feePayerFullName): self
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
     * @return TransferOut
     */
    public function setFeePayerMail(?string $feePayerMail): self
    {
        $this->feePayerMail = $feePayerMail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerIdentityDocument(): ?string
    {
        return $this->feePayerIdentityDocument;
    }

    /**
     * @param string|null $feePayerIdentityDocument
     *
     * @return TransferOut
     */
    public function setFeePayerIdentityDocument(?string $feePayerIdentityDocument): self
    {
        $this->feePayerIdentityDocument = $feePayerIdentityDocument;
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
     * @return TransferOut
     */
    public function setFeePayerTradingName(?string $feePayerTradingName): self
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
     * @return TransferOut
     */
    public function setFeePayerLegalName(?string $feePayerLegalName): self
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
     * @return TransferOut
     */
    public function setFeePayerPhone(?string $feePayerPhone): self
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
     * @return TransferOut
     */
    public function setFeePayerBank(?string $feePayerBank): self
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
     * @return TransferOut
     */
    public function setFeePayerBankBranch(?string $feePayerBankBranch): self
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
     * @return TransferOut
     */
    public function setFeePayerBankAccount(?string $feePayerBankAccount): self
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
     * @return TransferOut
     */
    public function setFeePayerBankAccountDigit(?string $feePayerBankAccountDigit): self
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getEntries(): ?array
    {
        return $this->entries;
    }

    /**
     * @param array|null $entries
     *
     * @return TransferOut
     */
    public function setEntries(?array $entries): self
    {
        $this->entries = $entries;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOnlineTransfer(): ?bool
    {
        return $this->onlineTransfer;
    }

    /**
     * @param bool|null $onlineTransfer
     *
     * @return TransferOut
     */
    public function setOnlineTransfer(?bool $onlineTransfer): self
    {
        $this->onlineTransfer = $onlineTransfer;
        return $this;
    }

    /**
     * @description
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "FromTaxNumber" => $this->fromTaxNumber,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToName" => $this->toName,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "AccountType" => $this->accountType,
            "Value" => $this->value,
            "SubType" => $this->subType,
            "RateValue" => $this->rateValue,
            "Identifier" => $this->identifier,
            "DueDate" => $this->dueDate,
            "PaymentDate" => $this->paymentDate,
            "RateValueType" => $this->rateValueType,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "FeePayerTaxNumber" => $this->feePayerTaxNumber,
            "FeePayerFullName" => $this->feePayerFullName,
            "FeePayerMail" => $this->feePayerMail,
            "FeePayerIdentityDocument" => $this->feePayerIdentityDocument,
            "FeePayerTradingName" => $this->feePayerTradingName,
            "FeePayerLegalName" => $this->feePayerLegalName,
            "FeePayerPhone" => $this->feePayerPhone,
            "FeePayerBank" => $this->feePayerBank,
            "FeePayerBankBranch" => $this->feePayerBankBranch,
            "FeePayerBankAccount" => $this->feePayerBankAccount,
            "FeePayerBankAccountDigit" => $this->feePayerBankAccountDigit,
            "Entries" => $this->entries,
            "OnlineTransfer" => $this->onlineTransfer,
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     *Transferência bancária
     * @description External Transfer
     * @document https://dev.fitbank.com.br/reference/8
     * @return object
     * @throws GuzzleException
     */
    public function moneyTransfer(): object
    {
        return $this->call(
            'MoneyTransfer',
            array_filter(
                $this->toArray(),
                function ($v) {
                    return $v !== null;
                }
            )
        );
    }

    /**
     *Consulta de transferência bancária
     * @description Seeks an external transfer by id
     * @document https://dev.fitbank.com.br/reference/20
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getMoneyTransferOutById(int $documentNumber): object
    {
        return $this->call(
            'GetMoneyTransferOutById',
            ["DocumentNumber" => $documentNumber]
        );
    }

    /**
     * Consulta transferencias
     * @description https://dev.fitbank.com.br/reference/101
     * @document Seeks an external transfer
     * @param string      $taxNumber
     * @param string|null $initialDate
     * @param string|null $finalDate
     * @param string|null $initialPaymentDate
     * @param string|null $finalPaymentDate
     * @param string|null $emissionDate
     * @param string|null $schedulingDate
     *
     * @return object
     * @throws GuzzleException
     */
    public function getMoneyTransferOut(
        string $taxNumber,
        ?string $initialDate,
        ?string $finalDate,
        ?string $initialPaymentDate,
        ?string $finalPaymentDate,
        ?string $emissionDate,
        ?string $schedulingDate
    ): object
    {
        return $this->call(
            'GetMoneyTransferOutById',
            array_filter([
                "taxNumber" => $taxNumber,
                "initialDate" => $initialDate,
                "finalDate" => $finalDate,
                "initialPaymentDate" => $initialPaymentDate,
                "finalPaymentDate" => $finalPaymentDate,
                "emissionDate" => $emissionDate,
                "schedulingDate" => $schedulingDate,
            ], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     *Cancelamento de transferência bancária
     * @description Cancel External Transfer
     * @document https://dev.fitbank.com.br/reference/9
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelMoneyTransfer(int $documentNumber): object
    {
        return $this->call(
            'CancelMoneyTransfer',
            ["DocumentNumber" => $documentNumber]
        );
    }
}
