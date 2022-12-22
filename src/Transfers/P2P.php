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
    private ?string $fromTaxNumber;
    private ?string $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankAccountDigit;
    private ?string $toTaxNumber;
    private ?string $toBank;
    private ?string $toBankBranch;
    private ?string $toBankAccount;
    private ?string $toBankAccountDigit;
    private ?float $value;
    private ?int $rateValueType;
    private ?float $rateValue;
    private ?string $category;
    private ?string $transferDate;
    private ?string $identifier;
    private ?string $description;
    private ?array $internalTransfers;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->fromTaxNumber = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
        $this->toTaxNumber = null;
        $this->toBank = null;
        $this->toBankBranch = null;
        $this->toBankAccount = null;
        $this->toBankAccountDigit = null;
        $this->value = null;
        $this->rateValueType = null;
        $this->rateValue = null;
        $this->category = null;
        $this->transferDate = null;
        $this->identifier = null;
        $this->description = null;
        $this->internalTransfers = null;
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
     * @return P2P
     */
    public function setFromTaxNumber(?string $fromTaxNumber): self
    {
        $this->fromTaxNumber = $fromTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBank(): ?string
    {
        return $this->fromBank;
    }

    /**
     * @param string|null $fromBank
     *
     * @return P2P
     */
    public function setFromBank(?string $fromBank): self
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankBranch(): ?string
    {
        return $this->fromBankBranch;
    }

    /**
     * @param string|null $fromBankBranch
     *
     * @return P2P
     */
    public function setFromBankBranch(?string $fromBankBranch): self
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankAccount(): ?string
    {
        return $this->fromBankAccount;
    }

    /**
     * @param string|null $fromBankAccount
     *
     * @return P2P
     */
    public function setFromBankAccount(?string $fromBankAccount): self
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromBankAccountDigit(): ?string
    {
        return $this->fromBankAccountDigit;
    }

    /**
     * @param string|null $fromBankAccountDigit
     *
     * @return P2P
     */
    public function setFromBankAccountDigit(?string $fromBankAccountDigit): self
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
     * @return P2P
     */
    public function setToTaxNumber(?string $toTaxNumber): self
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
    public function setToBank(?string $toBank): self
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
    public function setToBankBranch(?string $toBankBranch): self
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
    public function setToBankAccount(?string $toBankAccount): self
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
    public function setToBankAccountDigit(?string $toBankAccountDigit): self
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
    public function setValue(?float $value): self
    {
        $this->value = $value;
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
    public function setRateValueType(?int $rateValueType): self
    {
        $this->rateValueType = $rateValueType;
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
    public function setRateValue(?float $rateValue): self
    {
        $this->rateValue = $rateValue;
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
    public function setCategory(?string $category): self
    {
        $this->category = $category;
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
    public function setTransferDate(?string $transferDate): self
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
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
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
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getInternalTransfers(): ?array
    {
        return $this->internalTransfers;
    }

    /**
     * @param array|null $internalTransfers
     *
     * @return $this
     */
    public function setInternalTransfers(?array $internalTransfers): self
    {
        $this->internalTransfers = $internalTransfers;
        return $this;
    }

    /**
     * @param InternalTransfers $internalTransfers
     *
     * @return P2P
     */
    public function addInternalTransfers(InternalTransfers $internalTransfers): self
    {
        $this->internalTransfers[] = $internalTransfers;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $internalTransfers = null;
        if (!empty($this->internalTransfers)) {
            foreach ($this->internalTransfers as $internalTransfer) {
                $internalTransfers[] = array_filter($internalTransfer->toArray(), function ($v) {
                    return !is_null($v);
                });
            }
        }

        return array_filter([
            "FromTaxNumber" => $this->fromTaxNumber,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToBank" => $this->toBank,
            "ToBankBranch" => $this->toBankBranch,
            "ToBankAccount" => $this->toBankAccount,
            "ToBankAccountDigit" => $this->toBankAccountDigit,
            "Value" => $this->value,
            "RateValueType" => $this->rateValueType,
            "RateValue" => $this->rateValue,
            "Category" => $this->category,
            "TransferDate" => $this->transferDate,
            "Identifier" => $this->identifier,
            "Description" => $this->description,
            "InternalTransfers" => $internalTransfers
        ], function ($v) {
            return !is_null($v);
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
        return $this->call('InternalTransfer', $this->toArray());
    }

    /**
     * Transferir valores entre contas várias contas
     *
     * @return object
     * @throws GuzzleException
     */
    public function multipleInternalTransfers(): object
    {
        return $this->call('MultipleInternalTransfers', $this->toArray(),);
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
