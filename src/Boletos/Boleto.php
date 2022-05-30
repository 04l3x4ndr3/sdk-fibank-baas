<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Boletos;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Common\Product;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class Boleto
{
    private Configuration $configuration;
    private ?int $groupTemplate;
    private ?string $customerName;
    private ?string $customerTaxNumber;
    private ?string $customerMail;
    private ?string $customerPhone;
    private ?float $rateValue;
    private ?int $ratesent;
    private ?string $supplierTaxNumber;
    private ?string $supplierFullName;
    private ?string $supplierTradingName;
    private ?string $supplierLegalName;
    private ?string $supplierMail;
    private ?string $supplierPhone;
    private ?string $addressLine1;
    private ?string $neighborhood;
    private ?string $city;
    private ?string $state;
    private ?string $zipCode;
    private ?string $mailToSend;
    private ?string $phoneToSend;
    private ?int $externalNumber;
    private ?int $identifier;
    private ?string $dueDate;
    private ?float $totalValue;
    private ?array $products;

    /**
     * @param int|null $groupTemplate
     * @param string|null $customerName
     * @param string|null $customerTaxNumber
     * @param string|null $customerMail
     * @param string|null $customerPhone
     * @param float|null $rateValue
     * @param int|null $ratesent
     * @param string|null $supplierTaxNumber
     * @param string|null $supplierFullName
     * @param string|null $supplierTradingName
     * @param string|null $supplierLegalName
     * @param string|null $supplierMail
     * @param string|null $supplierPhone
     * @param string|null $addressLine1
     * @param string|null $neighborhood
     * @param string|null $city
     * @param string|null $state
     * @param string|null $zipCode
     * @param string|null $mailToSend
     * @param string|null $phoneToSend
     * @param int|null $externalNumber
     * @param int|null $identifier
     * @param string|null $dueDate
     * @param float|null $totalValue
     * @param array|null $products
     */
    public function __construct(?int    $groupTemplate = null,
                                ?string $customerName = null,
                                ?string $customerTaxNumber = null,
                                ?string $customerMail = null,
                                ?string $customerPhone = null,
                                ?float  $rateValue = null,
                                ?int    $ratesent = null,
                                ?string $supplierTaxNumber = null,
                                ?string $supplierFullName = null,
                                ?string $supplierTradingName = null,
                                ?string $supplierLegalName = null,
                                ?string $supplierMail = null,
                                ?string $supplierPhone = null,
                                ?string $addressLine1 = null,
                                ?string $neighborhood = null,
                                ?string $city = null,
                                ?string $state = null,
                                ?string $zipCode = null,
                                ?string $mailToSend = null,
                                ?string $phoneToSend = null,
                                ?int    $externalNumber = null,
                                ?int    $identifier = null,
                                ?string $dueDate = null,
                                ?float  $totalValue = null,
                                ?array  $products = null)
    {
        $this->configuration = new Configuration();

        $this->groupTemplate = $groupTemplate;
        $this->customerName = $customerName;
        $this->customerTaxNumber = $customerTaxNumber;
        $this->customerMail = $customerMail;
        $this->customerPhone = $customerPhone;
        $this->rateValue = $rateValue;
        $this->ratesent = $ratesent;
        $this->supplierTaxNumber = $supplierTaxNumber;
        $this->supplierFullName = $supplierFullName;
        $this->supplierTradingName = $supplierTradingName;
        $this->supplierLegalName = $supplierLegalName;
        $this->supplierMail = $supplierMail;
        $this->supplierPhone = $supplierPhone;
        $this->addressLine1 = $addressLine1;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->mailToSend = $mailToSend;
        $this->phoneToSend = $phoneToSend;
        $this->externalNumber = $externalNumber;
        $this->identifier = $identifier;
        $this->dueDate = $dueDate;
        $this->totalValue = $totalValue;
        $this->products = $products;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }



    /**
     * @return int|null
     */
    public function getGroupTemplate(): ?int
    {
        return $this->groupTemplate;
    }

    /**
     * @param int|null $groupTemplate
     */
    public function setGroupTemplate(?int $groupTemplate): void
    {
        $this->groupTemplate = $groupTemplate;
    }

    /**
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * @param string|null $customerName
     */
    public function setCustomerName(?string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string|null
     */
    public function getCustomerTaxNumber(): ?string
    {
        return $this->customerTaxNumber;
    }

    /**
     * @param string|null $customerTaxNumber
     */
    public function setCustomerTaxNumber(?string $customerTaxNumber): void
    {
        $this->customerTaxNumber = $customerTaxNumber;
    }

    /**
     * @return string|null
     */
    public function getCustomerMail(): ?string
    {
        return $this->customerMail;
    }

    /**
     * @param string|null $customerMail
     */
    public function setCustomerMail(?string $customerMail): void
    {
        $this->customerMail = $customerMail;
    }

    /**
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * @param string|null $customerPhone
     */
    public function setCustomerPhone(?string $customerPhone): void
    {
        $this->customerPhone = $customerPhone;
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
     * @return int|null
     */
    public function getRatesent(): ?int
    {
        return $this->ratesent;
    }

    /**
     * @param int|null $ratesent
     */
    public function setRatesent(?int $ratesent): void
    {
        $this->ratesent = $ratesent;
    }

    /**
     * @return string|null
     */
    public function getSupplierTaxNumber(): ?string
    {
        return $this->supplierTaxNumber;
    }

    /**
     * @param string|null $supplierTaxNumber
     */
    public function setSupplierTaxNumber(?string $supplierTaxNumber): void
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
    }

    /**
     * @return string|null
     */
    public function getSupplierFullName(): ?string
    {
        return $this->supplierFullName;
    }

    /**
     * @param string|null $supplierFullName
     */
    public function setSupplierFullName(?string $supplierFullName): void
    {
        $this->supplierFullName = $supplierFullName;
    }

    /**
     * @return string|null
     */
    public function getSupplierTradingName(): ?string
    {
        return $this->supplierTradingName;
    }

    /**
     * @param string|null $supplierTradingName
     */
    public function setSupplierTradingName(?string $supplierTradingName): void
    {
        $this->supplierTradingName = $supplierTradingName;
    }

    /**
     * @return string|null
     */
    public function getSupplierLegalName(): ?string
    {
        return $this->supplierLegalName;
    }

    /**
     * @param string|null $supplierLegalName
     */
    public function setSupplierLegalName(?string $supplierLegalName): void
    {
        $this->supplierLegalName = $supplierLegalName;
    }

    /**
     * @return string|null
     */
    public function getSupplierMail(): ?string
    {
        return $this->supplierMail;
    }

    /**
     * @param string|null $supplierMail
     */
    public function setSupplierMail(?string $supplierMail): void
    {
        $this->supplierMail = $supplierMail;
    }

    /**
     * @return string|null
     */
    public function getSupplierPhone(): ?string
    {
        return $this->supplierPhone;
    }

    /**
     * @param string|null $supplierPhone
     */
    public function setSupplierPhone(?string $supplierPhone): void
    {
        $this->supplierPhone = $supplierPhone;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string|null $addressLine1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     */
    public function setNeighborhood(?string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string|null
     */
    public function getMailToSend(): ?string
    {
        return $this->mailToSend;
    }

    /**
     * @param string|null $mailToSend
     */
    public function setMailToSend(?string $mailToSend): void
    {
        $this->mailToSend = $mailToSend;
    }

    /**
     * @return string|null
     */
    public function getPhoneToSend(): ?string
    {
        return $this->phoneToSend;
    }

    /**
     * @param string|null $phoneToSend
     */
    public function setPhoneToSend(?string $phoneToSend): void
    {
        $this->phoneToSend = $phoneToSend;
    }

    /**
     * @return int|null
     */
    public function getExternalNumber(): ?int
    {
        return $this->externalNumber;
    }

    /**
     * @param int|null $externalNumber
     */
    public function setExternalNumber(?int $externalNumber): void
    {
        $this->externalNumber = $externalNumber;
    }

    /**
     * @return int|null
     */
    public function getIdentifier(): ?int
    {
        return $this->identifier;
    }

    /**
     * @param int|null $identifier
     */
    public function setIdentifier(?int $identifier): void
    {
        $this->identifier = $identifier;
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
     */
    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    /**
     * @param float|null $totalValue
     */
    public function setTotalValue(?float $totalValue): void
    {
        $this->totalValue = $totalValue;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param Product $product
     * @return $this
     */
    public function addProducts(Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $_products = [];

        if (isset($this->products)) {
            foreach ($this->products as $product) {
                $_products[] = $product->toArray();
            }
        }

        return [
            "GroupTemplate" => $this->groupTemplate,
            "CustomerName" => $this->customerName,
            "CustomerTaxNumber" => $this->customerTaxNumber,
            "CustomerMail" => $this->customerMail,
            "CustomerPhone" => $this->customerPhone,
            "RateValue" => $this->rateValue,
            "Ratesent" => $this->ratesent,
            "SupplierTaxNumber" => $this->supplierTaxNumber,
            "SupplierFullName" => $this->supplierFullName,
            "SupplierTradingName" => $this->supplierTradingName,
            "SupplierLegalName" => $this->supplierLegalName,
            "SupplierMail" => $this->supplierMail,
            "SupplierPhone" => $this->supplierPhone,
            "AddressLine1" => $this->addressLine1,
            "Neighborhood" => $this->neighborhood,
            "City" => $this->city,
            "State" => $this->state,
            "ZipCode" => $this->zipCode,
            "MailToSend" => $this->mailToSend,
            "PhoneToSend" => $this->phoneToSend,
            "ExternalNumber" => $this->externalNumber,
            "Identifier" => $this->identifier,
            "Products" => $_products,
            "DueDate" => $this->dueDate,
            "TotalValue" => $this->totalValue
        ];
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @param Boleto|null $boleto
     * @return object
     * @throws GuzzleException
     */
    public function generateBoleto(?Boleto $boleto = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($boleto)) ? $boleto->toArray() : $this->toArray();
        return $http->call('GenerateBoleto', $data);
    }

    /**
     * @param int $documentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoById(int $documentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $documentNumber];
        return $http->call('GetBoletoById', $data);
    }

    /**
     * @param string $Barcode
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoOutByBarcode(string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = ['Barcode' => $Barcode];
        return $http->call('GetBoletoOutByBarcode', $data);
    }

    /**
     * @param string|null $InicialDate
     * @param string|null $FinalDate
     * @param string|null $RecieverTaxNumber
     * @param int|null $Status
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoByDate(?string $InicialDate = null, ?string $FinalDate = null, ?string $RecieverTaxNumber = null, ?int $Status = null): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "InicialDate" => $InicialDate,
            "FinalDate" => $FinalDate,
            "RecieverTaxNumber" => $RecieverTaxNumber,
            "Status" => $Status
        ];
        return $http->call('GetBoletoByDate', $data);
    }

    /**
     * @param int $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelBoleto(int $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ["DocumentNumber" => $DocumentNumber,];
        return $http->call('CancelBoleto', $data);
    }
}