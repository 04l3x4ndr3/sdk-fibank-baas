<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class AccountOperationLimit extends CallApi
{
    private ?string $taxNumber;
    private ?int $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?int $bankAccountDigit;
    private ?int $type;
    private ?int $operationType;
    private ?int $subType;
    private ?float $minLimitValue;
    private ?float $maxLimitValue;

    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);

        $this->taxNumber = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->type = null;
        $this->operationType = null;
        $this->subType = null;
        $this->minLimitValue = null;
        $this->maxLimitValue = null;
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
     * @return AccountOperationLimit
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
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
     * @return AccountOperationLimit
     */
    public function setBank(?int $bank): self
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
     * @return AccountOperationLimit
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
     * @return AccountOperationLimit
     */
    public function setBankAccount(?string $bankAccount): self
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
     * @return AccountOperationLimit
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
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @description
     *
     * @param int|null $type
     *
     * @return AccountOperationLimit
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @description
     * @return int|null
     */
    public function getOperationType(): ?int
    {
        return $this->operationType;
    }

    /**
     * @description
     *
     * @param int|null $operationType
     *
     * @return AccountOperationLimit
     */
    public function setOperationType(?int $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * @description
     * @return int|null
     */
    public function getSubType(): ?int
    {
        return $this->subType;
    }

    /**
     * @description
     *
     * @param int|null $subType
     *
     * @return AccountOperationLimit
     */
    public function setSubType(?int $subType): self
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @description
     * @return float|null
     */
    public function getMinLimitValue(): ?float
    {
        return $this->minLimitValue;
    }

    /**
     * @description
     *
     * @param float|null $minLimitValue
     *
     * @return AccountOperationLimit
     */
    public function setMinLimitValue(?float $minLimitValue): self
    {
        $this->minLimitValue = $minLimitValue;
        return $this;
    }

    /**
     * @description
     * @return float|null
     */
    public function getMaxLimitValue(): ?float
    {
        return $this->maxLimitValue;
    }

    /**
     * @description
     *
     * @param float|null $maxLimitValue
     *
     * @return AccountOperationLimit
     */
    public function setMaxLimitValue(?float $maxLimitValue): self
    {
        $this->maxLimitValue = $maxLimitValue;
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
            "OperationType" => $this->operationType,
            "Type" => $this->type,
            "SubType" => $this->subType,
            "MinLimitValue" => $this->minLimitValue,
            "MaxLimitValue" => $this->maxLimitValue,
        ];
    }

    /**
     * @description API method to query the pix limits configured for an account.
     * @document https://dev.fitbank.com.br/reference/260
     * @return object
     * @throws GuzzleException
     */
    public function getAccountOperationLimit(): object
    {
        return $this->call(
            'GetAccountOperationLimit',
            array_filter(
                $this->toArray(),
                function ($v) {
                    return !is_null($v);
                })
        );
    }

    /**
     * @description API method to configure (reduce or enlarge) pix limits according to the parameters of the business unit.
     * @document https://dev.fitbank.com.br/reference/261
     * @return object
     * @throws GuzzleException
     */
    public function changeAccountOperationLimit(): object
    {
        return $this->call(
            'ChangeAccountOperationLimit',
            array_filter(
                $this->toArray(),
                function ($v) {
                    return !is_null($v);
                }));
    }
}
