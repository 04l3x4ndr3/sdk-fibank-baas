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
    private ?string $toTaxNumber;
    private ?string $toName;
    private ?int $bank;
    private ?int $bankBranch;
    private ?int $bankAccount;
    private ?int $bankAccountDigit;
    private ?int $accountType;
    private ?float $value;
    private ?float $rateValue;
    private ?string $identifier;
    private ?int $rateValueType;
    private ?array $tags;
    private ?string $description;
    private ?string $paymentDate;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->fromTaxNumber = null;
        $this->toTaxNumber = null;
        $this->toName = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->accountType = null;
        $this->value = null;
        $this->rateValue = null;
        $this->identifier = null;
        $this->rateValueType = null;
        $this->tags = null;
        $this->description = null;
        $this->paymentDate = null;
    }

    /**
     * @description
     * @return string|null
     */
    public function getFromTaxNumber(): ?string
    {
        return $this->fromTaxNumber;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getToTaxNumber(): ?string
    {
        return $this->toTaxNumber;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getToName(): ?string
    {
        return $this->toName;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getBank(): ?int
    {
        return $this->bank;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getBankBranch(): ?int
    {
        return $this->bankBranch;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getBankAccountDigit(): ?int
    {
        return $this->bankAccountDigit;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * @description
     *
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
     * @description
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @description
     *
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
     * @description
     * @return float|null
     */
    public function getRateValue(): ?float
    {
        return $this->rateValue;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @description
     *
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
     * @description
     * @return int|null
     */
    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    /**
     * @description
     *
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
     * @description
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    /**
     * @description
     *
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
     * @description
     * @return array
     */
    public function toArray(): array
    {
        return [
            "FromTaxNumber" => $this->fromTaxNumber,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToName" => $this->toName,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "AccountType" => $this->accountType,
            "Value" => $this->value,
            "RateValue" => $this->rateValue,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "PaymentDate" => $this->paymentDate
        ];
    }

    /**
     * @description Transferência bancária
     *
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
     * @description Consulta de transferência bancária
     *
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
     * @description Cancelamento de transferência bancária
     *
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
