<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Extras;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class TopUp
{
    private Configuration $configuration;
    private ?int $productType;
    private ?int $productSubType;
    private ?int $productValue;
    private ?string $contractIdentifier;
    private ?string $taxNumber;
    private ?string $originNSU;
    private ?string $batchIdentifier;
    private ?string $productKey;
    private ?array $tags;
    private ?string $documentNumber;

    public function __construct(
        ?int    $productType = null,
        ?int    $productSubType = null,
        ?int    $productValue = null,
        ?string $contractIdentifier = null,
        ?string $taxNumber = null,
        ?string $originNSU = null,
        ?string $batchIdentifier = null,
        ?string $productKey = null,
        ?array  $tags = null,
        ?string $documentNumber = null,
    )
    {
        $this->configuration = new Configuration();

        $this->productType = $productType;
        $this->productSubType = $productSubType;
        $this->productValue = $productValue;
        $this->contractIdentifier = $contractIdentifier;
        $this->taxNumber = $taxNumber;
        $this->originNSU = $originNSU;
        $this->batchIdentifier = $batchIdentifier;
        $this->productKey = $productKey;
        $this->tags = $tags;
        $this->documentNumber = $documentNumber;

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
     */
    public function setProductType(?int $productType): void
    {
        $this->productType = $productType;
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
     */
    public function setProductSubType(?int $productSubType): void
    {
        $this->productSubType = $productSubType;
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
     */
    public function setProductValue(?int $productValue): void
    {
        $this->productValue = $productValue;
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
     */
    public function setContractIdentifier(?string $contractIdentifier): void
    {
        $this->contractIdentifier = $contractIdentifier;
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
     */
    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
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
     */
    public function setOriginNSU(?string $originNSU): void
    {
        $this->originNSU = $originNSU;
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
     */
    public function setBatchIdentifier(?string $batchIdentifier): void
    {
        $this->batchIdentifier = $batchIdentifier;
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
     */
    public function setProductKey(?string $productKey): void
    {
        $this->productKey = $productKey;
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
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
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
     */
    public function setDocumentNumber(?string $documentNumber): void
    {
        $this->documentNumber = $documentNumber;
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
            "DocumentNumber" => $this->documentNumber
        ]);
    }

    /**
     * @param int|null $ProductType
     * @param int|null $ProductSubType
     * @param float|null $ProductValue
     * @return object
     * @throws GuzzleException
     */
    public function getTopUpProducts(?int $ProductType = null, ?int $ProductSubType = null, ?float $ProductValue = null): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            'ProductType' => $ProductType ?? $this->getProductType(),
            'ProductSubType' => $ProductSubType ?? $this->getProductSubType(),
            'ProductValue' => $ProductValue ?? $this->getProductValue()
        ];
        return $http->call('GetTopUpProducts', $data);
    }

    /**
     * @param TopUp $topUp
     * @return object
     * @throws GuzzleException
     */
    public function generateTopUp(TopUp $topUp): object
    {
        $http = new CallApi($this->configuration);
        $topUp = $topUp->toArray() ?? $this->toArray();
        $data = [
            'ContractIdentifier' => $topUp->getContractIdentifier(),
            'TaxNumber' => $topUp->getTaxNumber(),
            'ProductType' => $topUp->getProductType(),
            'OriginNSU' => $topUp->getOriginNSU(),
            'BatchIdentifier' => $topUp->getBatchIdentifier(),
            'ProductKey' => $topUp->getProductKey(),
            'ProductValue' => $topUp->getProductValue(),
            'Tags' => $topUp->getTags(),
        ];
        return $http->call('GenerateTopUp', $data);
    }

    /**
     * @param string|null $DocumentNumber
     * @param string|null $OriginNSU
     * @return object
     * @throws GuzzleException
     */
    public function getTopUpById(?string $DocumentNumber = null, ?string $OriginNSU = null): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            'DocumentNumber' => $DocumentNumber ?? $this->getDocumentNumber(),
            'OriginNSU' => $OriginNSU ?? $this->getOriginNSU()
        ];
        return $http->call('GetTopUpById', $data);
    }

    /**
     * @param string|null $DocumentNumber
     * @param string|null $OriginNSU
     * @return object
     * @throws GuzzleException
     */
    public function authorizeTopUp(?string $DocumentNumber = null, ?string $OriginNSU = null): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            'DocumentNumber' => $DocumentNumber ?? $this->getDocumentNumber(),
            'OriginNSU' => $OriginNSU ?? $this->getOriginNSU()
        ];
        return $http->call('AuthorizeTopUp', $data);
    }
}