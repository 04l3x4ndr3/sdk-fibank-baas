<?php

namespace O4l3x4ndr3\SdkFitbank\Transfers;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Common\Product;
use O4l3x4ndr3\SdkFitbank\Configuration;

/**
 * @description
 */
class TED extends CallApi
{
    private ?string $supplierName;
    private ?string $supplierTaxNumber;
    private ?string $supplierTradingName;
    private ?string $supplierMail;
    private ?string $supplierPhone;
    private ?string $bankNumber;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $transferDate;
    private ?float $totalValue;
    private ?float $rateValue;
    private ?string $fromName;
    private ?string $fromTaxNumber;
    private ?array $products;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->supplierName = null;
        $this->supplierTaxNumber = null;
        $this->supplierTradingName = null;
        $this->supplierMail = null;
        $this->supplierPhone = null;
        $this->bankNumber = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->transferDate = null;
        $this->totalValue = null;
        $this->rateValue = null;
        $this->fromName = null;
        $this->fromTaxNumber = null;
        $this->products = null;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    /**
     * @description
     *
     * @param string|null $supplierName
     *
     * @return TED
     */
    public function setSupplierName(?string $supplierName): self
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSupplierTaxNumber(): ?string
    {
        return $this->supplierTaxNumber;
    }

    /**
     * @description
     *
     * @param string|null $supplierTaxNumber
     *
     * @return TED
     */
    public function setSupplierTaxNumber(?string $supplierTaxNumber): self
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSupplierTradingName(): ?string
    {
        return $this->supplierTradingName;
    }

    /**
     * @description
     *
     * @param string|null $supplierTradingName
     *
     * @return TED
     */
    public function setSupplierTradingName(?string $supplierTradingName): self
    {
        $this->supplierTradingName = $supplierTradingName;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSupplierMail(): ?string
    {
        return $this->supplierMail;
    }

    /**
     * @description
     *
     * @param string|null $supplierMail
     *
     * @return TED
     */
    public function setSupplierMail(?string $supplierMail): self
    {
        $this->supplierMail = $supplierMail;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getSupplierPhone(): ?string
    {
        return $this->supplierPhone;
    }

    /**
     * @description
     *
     * @param string|null $supplierPhone
     *
     * @return TED
     */
    public function setSupplierPhone(?string $supplierPhone): self
    {
        $this->supplierPhone = $supplierPhone;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }

    /**
     * @description
     *
     * @param string|null $bankNumber
     *
     * @return TED
     */
    public function setBankNumber(?string $bankNumber): self
    {
        $this->bankNumber = $bankNumber;
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
     * @return TED
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
     * @return TED
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
    public function getTransferDate(): ?string
    {
        return $this->transferDate;
    }

    /**
     * @description
     *
     * @param string|null $transferDate
     *
     * @return TED
     */
    public function setTransferDate(?string $transferDate): self
    {
        $this->transferDate = $transferDate;
        return $this;
    }

    /**
     * @description
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    /**
     * @description
     *
     * @param float|null $totalValue
     *
     * @return TED
     */
    public function setTotalValue(?float $totalValue): self
    {
        $this->totalValue = $totalValue;
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
     * @return TED
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
    public function getFromName(): ?string
    {
        return $this->fromName;
    }

    /**
     * @description
     *
     * @param string|null $fromName
     *
     * @return TED
     */
    public function setFromName(?string $fromName): self
    {
        $this->fromName = $fromName;
        return $this;
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
     * @return TED
     */
    public function setFromTaxNumber(?string $fromTaxNumber): self
    {
        $this->fromTaxNumber = $fromTaxNumber;
        return $this;
    }

    /**
     * @description
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @description
     *
     * @param Product|null $product
     *
     * @return TED
     */
    public function addProduct(?Product $product): self
    {
        $this->products[] = $product->toArray();
        return $this;
    }

    /**
     * @description
     * @return array
     */
    public function toArray(): array
    {
        return [
            "SupplierName" => $this->supplierName,
            "SupplierTaxNumber" => $this->supplierTaxNumber,
            "SupplierTradingName" => $this->supplierTradingName,
            "SupplierMail" => $this->supplierMail,
            "SupplierPhone" => $this->supplierPhone,
            "BankNumber" => $this->bankNumber,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "TransferDate" => $this->transferDate,
            "TotalValue" => $this->totalValue,
            "RateValue" => $this->rateValue,
            "FromName" => $this->fromName,
            "FromTaxNumber" => $this->fromTaxNumber,
            "Products" => $this->products,
        ];
    }

    /**
     * @description Recarrega a conta virtual criada via TED
     *
     * @return object
     * @throws GuzzleException
     */
    public function moneyTransferIn(): object
    {
        return $this->call(
            'MoneyTransferIn',
            array_filter(
                $this->toArray(),
                function ($v) {
                    return $v !== null;
                }
            )
        );
    }

    /**
     * @description Consulta de recarga via TED
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getMoneyTransferInById(int $documentNumber): object
    {
        return $this->call(
            'GetMoneyTransferInById',
            ["DocumentNumber" => $documentNumber]
        );
    }

    /**
     * @description Cancelamento de recarga de conta virtual via TED
     *
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelMoneyTransferIn(int $documentNumber): object
    {
        return $this->call(
            'CancelMoneyTransferIn',
            ["DocumentNumber" => $documentNumber]
        );
    }
}
