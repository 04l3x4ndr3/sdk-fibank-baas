<?php

namespace O4l3x4ndr3\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class P2P extends CallApi
{
    private ?string $fromTaxNumber;
    private ?string $toTaxNumber;
    private ?float $value;
    private ?float $rateValue;
    private ?string $transferDate;
    private ?string $identifier;
    private ?string $description;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->fromTaxNumber = null;
        $this->toTaxNumber = null;
        $this->value = null;
        $this->rateValue = null;
        $this->transferDate = null;
        $this->identifier = null;
        $this->description = null;
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
     * @return P2P
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
     * @return P2P
     */
    public function setToTaxNumber(?string $toTaxNumber): self
    {
        $this->toTaxNumber = $toTaxNumber;
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
     * @return P2P
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
     * @return P2P
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
    public function getTransferDate(): ?string
    {
        return $this->transferDate;
    }

    /**
     * @description
     *
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
     * @return P2P
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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @description
     *
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
     * @description
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
     *
     * @return object
     * @throws GuzzleException
     */
    public function internalTransfer(): object
    {
        return $this->call(
            'InternalTransfer',
            array_filter(
                $this->toArray(),
                function ($v) {
                    return $v !== null;
                }
            )
        );
    }

    /**
     * @description Recuperar os dados da Transferência entre contas
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
     * @description Consulta de Status por conta virtual
     *
     * @param string $taxNumber
     * @param string $transferDate
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInternalTransferByDate(
        string $taxNumber,
        string $transferDate
    ): object
    {
        return $this->call('GetInternalTransferByDate', [
            "TaxNumber" => $taxNumber,
            "TransferDate" => $transferDate
        ]);
    }

    /**
     * @description Cancelamento de Transferência Interna
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelInternalTransfer(int $documentNumber): object
    {
        return $this->call(
            'CancelInternalTransfer',
            ["DocumentNumber" => $documentNumber]
        );
    }
}
