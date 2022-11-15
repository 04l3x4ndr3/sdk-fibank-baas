<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class PixOut extends CallApi
{
    private ?string $taxNumber;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?string $toTaxNumber;
    private ?string $toName;
    private ?string $toBank;
    private ?string $toBankBranch;
    private ?string $toBankAccount;
    private ?string $toBankAccountDigit;
    private ?string $value;
    private ?string $pixKey;
    private ?string $pixKeyType;
    private ?string $toBankAccountType;
    private ?string $rateValue;
    private ?string $rateValueType;
    private ?string $identifier;
    private ?string $paymentDate;
    private ?string $description;
    private ?string $onlineTransfer;
    private ?string $searchProtocol;
    private ?string $transactionPurpose;
    private ?string $agentModality;
    private ?string $transactionDetailsType;
    private ?string $transactionDetailsValue;

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);

        $this->taxNumber = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->toTaxNumber = null;
        $this->toName = null;
        $this->toBank = null;
        $this->toBankBranch = null;
        $this->toBankAccount = null;
        $this->toBankAccountDigit = null;
        $this->value = null;
        $this->pixKey = null;
        $this->pixKeyType = null;
        $this->toBankAccountType = null;
        $this->rateValue = null;
        $this->rateValueType = null;
        $this->identifier = null;
        $this->paymentDate = null;
        $this->description = null;
        $this->onlineTransfer = null;
        $this->searchProtocol = null;
        $this->transactionPurpose = null;
        $this->agentModality = null;
        $this->transactionDetailsType = null;
        $this->transactionDetailsValue = null;
    }

    /**
     * @description
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @description
     *
     * @param string|null $taxNumber
     *
     * @return PixOut
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @description
     *
     * @param string|null $bank
     *
     * @return PixOut
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @description
     *
     * @param string|null $bankBranch
     *
     * @return PixOut
     */
    public function setBankBranch(?string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @description
     *
     * @param string|null $bankAccount
     *
     * @return PixOut
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @description
     *
     * @param string|null $bankAccountDigit
     *
     * @return PixOut
     */
    public function setBankAccountDigit(?string $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
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
     * @return PixOut
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
     * @return PixOut
     */
    public function setToName(?string $toName): self
    {
        $this->toName = $toName;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getToBank(): ?string
    {
        return $this->toBank;
    }

    /**
     * @description
     *
     * @param string|null $toBank
     *
     * @return PixOut
     */
    public function setToBank(?string $toBank): self
    {
        $this->toBank = $toBank;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getToBankBranch(): ?string
    {
        return $this->toBankBranch;
    }

    /**
     * @description
     *
     * @param string|null $toBankBranch
     *
     * @return PixOut
     */
    public function setToBankBranch(?string $toBankBranch): self
    {
        $this->toBankBranch = $toBankBranch;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getToBankAccount(): ?string
    {
        return $this->toBankAccount;
    }

    /**
     * @description
     *
     * @param string|null $toBankAccount
     *
     * @return PixOut
     */
    public function setToBankAccount(?string $toBankAccount): self
    {
        $this->toBankAccount = $toBankAccount;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getToBankAccountDigit(): ?string
    {
        return $this->toBankAccountDigit;
    }

    /**
     * @description
     *
     * @param string|null $toBankAccountDigit
     *
     * @return PixOut
     */
    public function setToBankAccountDigit(?string $toBankAccountDigit): self
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @description
     *
     * @param string|null $value
     *
     * @return PixOut
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getPixKey(): ?string
    {
        return $this->pixKey;
    }

    /**
     * @description
     *
     * @param string|null $pixKey
     *
     * @return PixOut
     */
    public function setPixKey(?string $pixKey): self
    {
        $this->pixKey = $pixKey;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getPixKeyType(): ?string
    {
        return $this->pixKeyType;
    }

    /**
     * @description
     *
     * @param string|null $pixKeyType
     *
     * @return PixOut
     */
    public function setPixKeyType(?string $pixKeyType): self
    {
        $this->pixKeyType = $pixKeyType;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getToBankAccountType(): ?string
    {
        return $this->toBankAccountType;
    }

    /**
     * @description
     *
     * @param string|null $toBankAccountType
     *
     * @return PixOut
     */
    public function setToBankAccountType(?string $toBankAccountType): self
    {
        $this->toBankAccountType = $toBankAccountType;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getRateValue(): ?string
    {
        return $this->rateValue;
    }

    /**
     * @description
     *
     * @param string|null $rateValue
     *
     * @return PixOut
     */
    public function setRateValue(?string $rateValue): self
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getRateValueType(): ?string
    {
        return $this->rateValueType;
    }

    /**
     * @description
     *
     * @param string|null $rateValueType
     *
     * @return PixOut
     */
    public function setRateValueType(?string $rateValueType): self
    {
        $this->rateValueType = $rateValueType;
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
     * @return PixOut
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
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
     * @return PixOut
     */
    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;
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
     * @return PixOut
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
    public function getOnlineTransfer(): ?string
    {
        return $this->onlineTransfer;
    }

    /**
     * @description
     *
     * @param string|null $onlineTransfer
     *
     * @return PixOut
     */
    public function setOnlineTransfer(?string $onlineTransfer): self
    {
        $this->onlineTransfer = $onlineTransfer;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSearchProtocol(): ?string
    {
        return $this->searchProtocol;
    }

    /**
     * @description
     *
     * @param string|null $searchProtocol
     *
     * @return PixOut
     */
    public function setSearchProtocol(?string $searchProtocol): self
    {
        $this->searchProtocol = $searchProtocol;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getTransactionPurpose(): ?string
    {
        return $this->transactionPurpose;
    }

    /**
     * @description
     *
     * @param string|null $transactionPurpose
     *
     * @return PixOut
     */
    public function setTransactionPurpose(?string $transactionPurpose): self
    {
        $this->transactionPurpose = $transactionPurpose;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getAgentModality(): ?string
    {
        return $this->agentModality;
    }

    /**
     * @description
     *
     * @param string|null $agentModality
     *
     * @return PixOut
     */
    public function setAgentModality(?string $agentModality): self
    {
        $this->agentModality = $agentModality;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getTransactionDetailsType(): ?string
    {
        return $this->transactionDetailsType;
    }

    /**
     * @description
     *
     * @param string|null $transactionDetailsType
     *
     * @return PixOut
     */
    public function setTransactionDetailsType(?string $transactionDetailsType
    ): self
    {
        $this->transactionDetailsType = $transactionDetailsType;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getTransactionDetailsValue(): ?string
    {
        return $this->transactionDetailsValue;
    }

    /**
     * @description
     *
     * @param string|null $transactionDetailsValue
     *
     * @return PixOut
     */
    public function setTransactionDetailsValue(?string $transactionDetailsValue
    ): self
    {
        $this->transactionDetailsValue = $transactionDetailsValue;
        return $this;
    }

    /**
     * @description
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "ToTaxNumber" => $this->toTaxNumber,
            "ToName" => $this->toName,
            "ToBank" => $this->toBank,
            "ToBankBranch" => $this->toBankBranch,
            "ToBankAccount" => $this->toBankAccount,
            "ToBankAccountDigit" => $this->toBankAccountDigit,
            "Value" => $this->value,
            "PixKey" => $this->pixKey,
            "PixKeyType" => $this->pixKeyType,
            "AccountType" => $this->toBankAccountType,
            "RateValue" => $this->rateValue,
            "RateValueType" => $this->rateValueType,
            "Identifier" => $this->identifier,
            "PaymentDate" => $this->paymentDate,
            "Description," => $this->description,
            "OnlineTransfer" => $this->onlineTransfer,
            "SearchProtocol" => $this->searchProtocol,
            "TransactionPurpose" => $this->transactionPurpose,
            "AgentModality" => $this->agentModality,
            "TransactionDetails" => [
                "Type" => $this->transactionDetailsType,
                "Value" => $this->transactionDetailsValue
            ]
        ];
    }

    /**
     * @description
     *
     * @return object
     * @throws GuzzleException
     */
    public function generatePixOut(): object
    {
        return $this->call(
            'GeneratePixOut',
            array_filter($this->toArray())
        );
    }

    /**
     * @description
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getById(int $documentNumber): object
    {
        $data = [
            "TaxNumber" => $this->taxNumber,
            "DocumentNumber" => $documentNumber,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
        ];
        return $this->call('GetPixOutById', array_filter($data));
    }

    /**
     * @description
     *
     * @param string $startDate
     * @param string $endDate
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return object
     * @throws GuzzleException
     */
    public function getByDate(
        string $startDate,
        string $endDate,
        int $pageIndex,
        int $pageSize
    ): object
    {
        return $this->call(
            'GetPixOutById',
            array_filter([
                "TaxNumber" => $this->taxNumber,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit,
                "StartDate" => $startDate,
                "EndDate" => $endDate,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize
            ])
        );
    }

    /**
     * @description
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancel(int $documentNumber): object
    {
        return $this->call(
            'CancelPixOut',
            array_filter([
                "DocumentNumber" => $documentNumber,
                "TaxNumber" => $this->taxNumber,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit,
            ])
        );
    }

    /**
     * @description
     *
     * @param string $startDate
     * @param string $endDate
     * @param int    $pageIndex
     * @param int    $pageSize
     *
     * @return object
     * @throws GuzzleException
     */
    public function getRefundByDate(
        string $startDate,
        string $endDate,
        int $pageIndex,
        int $pageSize
    ): object
    {
        $data = [
            "TaxNumber" => $this->taxNumber,
            "Bank" => $this->bank,
            "StartDate" => $startDate,
            "EndDate" => $endDate,
            "PageIndex" => $pageIndex,
            "PageSize" => $pageSize
        ];
        return $this->call('GetRefundPixOutByDate', array_filter($data));
    }
}
