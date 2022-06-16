<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class P2P
{
    private Configuration $configuration;
    private ?string $fromTaxNumber;
    private ?string $toTaxNumber;
    private ?float $value;
    private ?float $rateValue;
    private ?string $transferDate;
    private ?string $identifier;
    private ?string $description;

    /**
     * @param string|null $fromTaxNumber
     * @param string|null $toTaxNumber
     * @param float|null $value
     * @param float|null $rateValue
     * @param string|null $transferDate
     * @param string|null $identifier
     * @param string|null $description
     */
    public function __construct(?string $fromTaxNumber = null,
                                ?string $toTaxNumber = null,
                                ?float  $value = null,
                                ?float  $rateValue = null,
                                ?string $transferDate = null,
                                ?string $identifier = null,
                                ?string $description = null)
    {
        $this->configuration = new Configuration();

        $this->fromTaxNumber = $fromTaxNumber;
        $this->toTaxNumber = $toTaxNumber;
        $this->value = $value;
        $this->rateValue = $rateValue;
        $this->transferDate = $transferDate;
        $this->identifier = $identifier;
        $this->description = $description;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
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
     */
    public function setFromTaxNumber(?string $fromTaxNumber): void
    {
        $this->fromTaxNumber = $fromTaxNumber;
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
     */
    public function setToTaxNumber(?string $toTaxNumber): void
    {
        $this->toTaxNumber = $toTaxNumber;
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
     */
    public function setValue(?float $value): void
    {
        $this->value = $value;
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
     */
    public function setRateValue(?float $rateValue): void
    {
        $this->rateValue = $rateValue;
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
     */
    public function setTransferDate(?string $transferDate): void
    {
        $this->transferDate = $transferDate;
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
     */
    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
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
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "FromTaxNumber" => $this->fromTaxNumber,
            "ToTaxNumber" => $this->toTaxNumber,
            "Value" => $this->value,
            "RateValue" => $this->rateValue,
            "TransferDate" => $this->transferDate,
            "Identifier" => $this->identifier,
            "Description" => $this->description
        ];
    }

    /**
     * @description Transferir valores entre contas
     * @param P2P|null $p2p
     * @return object
     * @throws GuzzleException
     */
    public function internalTransfer(?P2P $p2p = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($p2p)) ? $p2p->toArray() : $this->toArray();
        return $http->call('InternalTransfer', $data);
    }

    /**
     * @description Recuperar os dados da Transferência entre contas
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getInternalTransferById(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('GetInternalTransferById', $data);
    }

    /**
     * @description Consulta de Status por conta virtual
     * @param string $TaxNumber
     * @param string $TransferDate
     * @return object
     * @throws GuzzleException
     */
    public function getInternalTransferByDate(string $TaxNumber, string $TransferDate): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "TransferDate" => $TransferDate
        ];
        return $http->call('GetInternalTransferByDate', $data);
    }

    /**
     * @description Cancelamento de Transferência Interna
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelInternalTransfer(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber];
        return $http->call('CancelInternalTransfer', $data);
    }
}