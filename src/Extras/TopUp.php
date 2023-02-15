<?php

namespace O4l3x4ndr3\SdkFitbank\Extras;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class TopUp extends CallApi
{
    private ?string $contractIdentifier;
    private ?string $taxNumber;
    private ?int $productType;
    private ?string $batchIdentifier;
    private ?string $productKey;
    private ?int $productValue;
    private ?string $originNSU;
    private ?int $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?int $fromBankAccountDigit;
    private ?int $productSubType;
    private ?array $tags;
    private ?int $documentNumber;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->productType = null;
        $this->productSubType = null;
        $this->productValue = null;
        $this->contractIdentifier = null;
        $this->taxNumber = null;
        $this->originNSU = null;
        $this->batchIdentifier = null;
        $this->productKey = null;
        $this->tags = null;
        $this->documentNumber = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
    }

    /**
     * @return int|null
     */
    public function getProductType(): ?int
    {
        return $this->productType;
    }

    /**
     * @param int|null $productType
     *
     * @return TopUp
     */
    public function setProductType(?int $productType): self
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductSubType(): ?int
    {
        return $this->productSubType;
    }

    /**
     * @param int|null $productSubType
     *
     * @return TopUp
     */
    public function setProductSubType(?int $productSubType): self
    {
        $this->productSubType = $productSubType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductValue(): ?int
    {
        return $this->productValue;
    }

    /**
     * @param int|null $productValue
     *
     * @return TopUp
     */
    public function setProductValue(?int $productValue): self
    {
        $this->productValue = $productValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContractIdentifier(): ?string
    {
        return $this->contractIdentifier;
    }

    /**
     * @param string|null $contractIdentifier
     *
     * @return TopUp
     */
    public function setContractIdentifier(?string $contractIdentifier): self
    {
        $this->contractIdentifier = $contractIdentifier;
        return $this;
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
     * @return TopUp
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginNSU(): ?string
    {
        return $this->originNSU;
    }

    /**
     * @param string|null $originNSU
     *
     * @return TopUp
     */
    public function setOriginNSU(?string $originNSU): self
    {
        $this->originNSU = $originNSU;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBatchIdentifier(): ?string
    {
        return $this->batchIdentifier;
    }

    /**
     * @param string|null $batchIdentifier
     *
     * @return TopUp
     */
    public function setBatchIdentifier(?string $batchIdentifier): self
    {
        $this->batchIdentifier = $batchIdentifier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductKey(): ?string
    {
        return $this->productKey;
    }

    /**
     * @param string|null $productKey
     *
     * @return TopUp
     */
    public function setProductKey(?string $productKey): self
    {
        $this->productKey = $productKey;
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
     * @return TopUp
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * @param string|null $documentNumber
     *
     * @return TopUp
     */
    public function setDocumentNumber(?string $documentNumber): self
    {
        $this->documentNumber = $documentNumber;
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
     * @return TopUp
     */
    public function setFromBank(?int $fromBank): self
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
     * @return TopUp
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
     * @return TopUp
     */
    public function setFromBankAccount(?string $fromBankAccount): self
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
     * @return TopUp
     */
    public function setFromBankAccountDigit(?int $fromBankAccountDigit): self
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "ProductType" => $this->productType,
            "ProductSubType" => $this->productSubType,
            "ProductValue" => $this->productValue,
            "ContractIdentifier" => $this->contractIdentifier,
            "TaxNumber" => $this->taxNumber,
            "OriginNSU" => $this->originNSU,
            "BatchIdentifier" => $this->batchIdentifier,
            "ProductKey" => $this->productKey,
            "Tags" => $this->tags,
            "DocumentNumber" => $this->documentNumber,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
        ], function ($v) {
            return ! is_null($v);
        });
    }

    /**
     * @return object
     */
    public function generateTopUp(): object
    {
        return $this->call('GenerateTopUp', $this->toArray());
    }

    /**
     * @param int    $documentNumber
     * @param string $originNSU
     *
     * @return object
     */
    public function authorizeTopUp(int $documentNumber, string $originNSU): object
    {
        return $this->call(
            'AuthorizeTopUp',
            array_filter([
                'DocumentNumber' => $documentNumber,
                'OriginNSU' => $originNSU
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }

    /**
     * @param int    $documentNumber
     * @param string $originNSU
     *
     * @return object
     */
    public function cancelTopUp(int $documentNumber, string $originNSU): object
    {
        return $this->call(
            'CancelTopUp',
            array_filter([
                'DocumentNumber' => $documentNumber,
                'OriginNSU' => $originNSU
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }

    /**
     * @param int|null   $productType
     * @param int|null   $productSubType
     * @param float|null $productValue
     *
     * @return object
     */
    public function getTopUpProducts(?int $productType, ?int $productSubType = null, ?float $productValue = null): object
    {
        return $this->call(
            'GetTopUpProducts',
            array_filter([
                'ProductType' => $productType,
                'ProductSubType' => $productSubType,
                'ProductValue' => $productValue,
            ], function ($v) {
                return $v !== null;
            })
        );
    }

    /**
     * @param string $documentNumber
     * @param string $originNSU
     *
     * @return object
     */
    public function getTopUpById(string $documentNumber, string $originNSU): object
    {
        return $this->call(
            'GetTopUpById',
            array_filter([
                'DocumentNumber' => $documentNumber,
                'OriginNSU' => $originNSU
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }
}
