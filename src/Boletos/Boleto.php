<?php

namespace O4l3x4ndr3\SdkFitbank\Boletos;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\Product;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class Boleto extends CallApi
{
    private ?string $groupTemplate;
    private ?string $customerName;
    private ?string $customerTaxNumber;
    private ?string $customerMail;
    private ?string $customerPhone;
    private ?string $neighborhood;
    private ?string $phoneToSend;
    private ?string $mailToSend;
    private ?string $city;
    private ?string $state;
    private ?string $zipCode;
    private ?string $supplierTaxNumber;
    private ?string $supplierFullName;
    private ?string $supplierTradingName;
    private ?string $supplierLegalName;
    private ?string $supplierBank;
    private ?string $supplierBankBranch;
    private ?string $supplierBankAccount;
    private ?string $supplierBankAccountDigit;
    private ?string $supplierMail;
    private ?string $supplierPhone;
    private ?float $rateValue;
    private ?int $rateSent;
    private ?string $addressLine1;
    private ?string $addressLine2;
    private ?string $externalNumber;
    private ?string $ourNumber;
    private ?string $identifier;
    private ?string $comments;
    private ?array $products;
    private ?string $dueDate;
    private ?float $totalValue;
    private ?string $fineDate;
    private ?float $finePercent;
    private ?float $fineValue;
    private ?float $interestPercent;
    private ?float $interestValue;
    private ?string $discountDate;
    private ?float $discountValue;
    private ?string $discountDate2;
    private ?float $discountValue2;
    private ?string $discountDate3;
    private ?float $discountValue3;
    private ?float $rebateValue;
    private ?array $tags;
    private ?array $operationVars;
    private ?int $divergentPaymentType;
    private ?float $minPaymentValue;
    private ?float $maxPaymentValue;
    private ?int $expirationDays;
    private ?int $interestType;
    private ?string $interestDate;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
        $this->groupTemplate = null;
        $this->customerName = null;
        $this->customerTaxNumber = null;
        $this->customerMail = null;
        $this->customerPhone = null;
        $this->neighborhood = null;
        $this->phoneToSend = null;
        $this->mailToSend = null;
        $this->city = null;
        $this->state = null;
        $this->zipCode = null;
        $this->supplierTaxNumber = null;
        $this->supplierFullName = null;
        $this->supplierTradingName = null;
        $this->supplierLegalName = null;
        $this->supplierBank = null;
        $this->supplierBankBranch = null;
        $this->supplierBankAccount = null;
        $this->supplierBankAccountDigit = null;
        $this->supplierMail = null;
        $this->supplierPhone = null;
        $this->rateValue = null;
        $this->rateSent = null;
        $this->addressLine1 = null;
        $this->addressLine2 = null;
        $this->externalNumber = null;
        $this->ourNumber = null;
        $this->identifier = null;
        $this->comments = null;
        $this->products = null;
        $this->dueDate = null;
        $this->totalValue = null;
        $this->fineDate = null;
        $this->finePercent = null;
        $this->fineValue = null;
        $this->interestPercent = null;
        $this->interestValue = null;
        $this->discountDate = null;
        $this->discountValue = null;
        $this->discountDate2 = null;
        $this->discountValue2 = null;
        $this->discountDate3 = null;
        $this->discountValue3 = null;
        $this->rebateValue = null;
        $this->tags = null;
        $this->operationVars = null;
        $this->divergentPaymentType = null;
        $this->minPaymentValue = null;
        $this->maxPaymentValue = null;
        $this->expirationDays = null;
        $this->interestType = null;
        $this->interestDate = null;
    }

    /**
     * @return string|null
     */
    public function getGroupTemplate(): ?string
    {
        return $this->groupTemplate;
    }

    /**
     * @param string|null $groupTemplate
     * @return Boleto
     */
    public function setGroupTemplate(?string $groupTemplate): Boleto
    {
        $this->groupTemplate = $groupTemplate;
        return $this;
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
     * @return Boleto
     */
    public function setCustomerName(?string $customerName): Boleto
    {
        $this->customerName = $customerName;
        return $this;
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
     * @return Boleto
     */
    public function setCustomerTaxNumber(?string $customerTaxNumber): Boleto
    {
        $this->customerTaxNumber = $customerTaxNumber;
        return $this;
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
     * @return Boleto
     */
    public function setCustomerMail(?string $customerMail): Boleto
    {
        $this->customerMail = $customerMail;
        return $this;
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
     * @return Boleto
     */
    public function setCustomerPhone(?string $customerPhone): Boleto
    {
        $this->customerPhone = $customerPhone;
        return $this;
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
     * @return Boleto
     */
    public function setNeighborhood(?string $neighborhood): Boleto
    {
        $this->neighborhood = $neighborhood;
        return $this;
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
     * @return Boleto
     */
    public function setPhoneToSend(?string $phoneToSend): Boleto
    {
        $this->phoneToSend = $phoneToSend;
        return $this;
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
     * @return Boleto
     */
    public function setMailToSend(?string $mailToSend): Boleto
    {
        $this->mailToSend = $mailToSend;
        return $this;
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
     * @return Boleto
     */
    public function setCity(?string $city): Boleto
    {
        $this->city = $city;
        return $this;
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
     * @return Boleto
     */
    public function setState(?string $state): Boleto
    {
        $this->state = $state;
        return $this;
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
     * @return Boleto
     */
    public function setZipCode(?string $zipCode): Boleto
    {
        $this->zipCode = $zipCode;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierTaxNumber(?string $supplierTaxNumber): Boleto
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierFullName(?string $supplierFullName): Boleto
    {
        $this->supplierFullName = $supplierFullName;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierTradingName(?string $supplierTradingName): Boleto
    {
        $this->supplierTradingName = $supplierTradingName;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierLegalName(?string $supplierLegalName): Boleto
    {
        $this->supplierLegalName = $supplierLegalName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSupplierBank(): ?string
    {
        return $this->supplierBank;
    }

    /**
     * @param string|null $supplierBank
     * @return Boleto
     */
    public function setSupplierBank(?string $supplierBank): Boleto
    {
        $this->supplierBank = $supplierBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSupplierBankBranch(): ?string
    {
        return $this->supplierBankBranch;
    }

    /**
     * @param string|null $supplierBankBranch
     * @return Boleto
     */
    public function setSupplierBankBranch(?string $supplierBankBranch): Boleto
    {
        $this->supplierBankBranch = $supplierBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSupplierBankAccount(): ?string
    {
        return $this->supplierBankAccount;
    }

    /**
     * @param string|null $supplierBankAccount
     * @return Boleto
     */
    public function setSupplierBankAccount(?string $supplierBankAccount): Boleto
    {
        $this->supplierBankAccount = $supplierBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSupplierBankAccountDigit(): ?string
    {
        return $this->supplierBankAccountDigit;
    }

    /**
     * @param string|null $supplierBankAccountDigit
     * @return Boleto
     */
    public function setSupplierBankAccountDigit(?string $supplierBankAccountDigit): Boleto
    {
        $this->supplierBankAccountDigit = $supplierBankAccountDigit;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierMail(?string $supplierMail): Boleto
    {
        $this->supplierMail = $supplierMail;
        return $this;
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
     * @return Boleto
     */
    public function setSupplierPhone(?string $supplierPhone): Boleto
    {
        $this->supplierPhone = $supplierPhone;
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
     * @return Boleto
     */
    public function setRateValue(?float $rateValue): Boleto
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRateSent(): ?int
    {
        return $this->rateSent;
    }

    /**
     * @param int|null $rateSent
     * @return Boleto
     */
    public function setRateSent(?int $rateSent): Boleto
    {
        $this->rateSent = $rateSent;
        return $this;
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
     * @return Boleto
     */
    public function setAddressLine1(?string $addressLine1): Boleto
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     * @return Boleto
     */
    public function setAddressLine2(?string $addressLine2): Boleto
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalNumber(): ?string
    {
        return $this->externalNumber;
    }

    /**
     * @param string|null $externalNumber
     * @return Boleto
     */
    public function setExternalNumber(?string $externalNumber): Boleto
    {
        $this->externalNumber = $externalNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOurNumber(): ?string
    {
        return $this->ourNumber;
    }

    /**
     * @param string|null $ourNumber
     * @return Boleto
     */
    public function setOurNumber(?string $ourNumber): Boleto
    {
        $this->ourNumber = $ourNumber;
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
     * @return Boleto
     */
    public function setIdentifier(?string $identifier): Boleto
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @param string|null $comments
     * @return Boleto
     */
    public function setComments(?string $comments): Boleto
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param array|null $products
     * @return Boleto
     */
    public function setProducts(?array $products): Boleto
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @param Product|null $products
     * @return $this
     */
    public function addProducts(Product $products): Boleto
    {
        $this->products[] = $products;
        return $this;
    }

    /**
     * @return $this
     */
    public function clearProducts(): Boleto
    {
        $this->products[] = null;
        return $this;
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
     * @return Boleto
     */
    public function setDueDate(?string $dueDate): Boleto
    {
        $this->dueDate = $dueDate;
        return $this;
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
     * @return Boleto
     */
    public function setTotalValue(?float $totalValue): Boleto
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFineDate(): ?string
    {
        return $this->fineDate;
    }

    /**
     * @param string|null $fineDate
     * @return Boleto
     */
    public function setFineDate(?string $fineDate): Boleto
    {
        $this->fineDate = $fineDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFinePercent(): ?float
    {
        return $this->finePercent;
    }

    /**
     * @param float|null $finePercent
     * @return Boleto
     */
    public function setFinePercent(?float $finePercent): Boleto
    {
        $this->finePercent = $finePercent;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    /**
     * @param float|null $fineValue
     * @return Boleto
     */
    public function setFineValue(?float $fineValue): Boleto
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInterestPercent(): ?float
    {
        return $this->interestPercent;
    }

    /**
     * @param float|null $interestPercent
     * @return Boleto
     */
    public function setInterestPercent(?float $interestPercent): Boleto
    {
        $this->interestPercent = $interestPercent;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getInterestValue(): ?float
    {
        return $this->interestValue;
    }

    /**
     * @param float|null $interestValue
     * @return Boleto
     */
    public function setInterestValue(?float $interestValue): Boleto
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscountDate(): ?string
    {
        return $this->discountDate;
    }

    /**
     * @param string|null $discountDate
     * @return Boleto
     */
    public function setDiscountDate(?string $discountDate): Boleto
    {
        $this->discountDate = $discountDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountValue(): ?float
    {
        return $this->discountValue;
    }

    /**
     * @param float|null $discountValue
     * @return Boleto
     */
    public function setDiscountValue(?float $discountValue): Boleto
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscountDate2(): ?string
    {
        return $this->discountDate2;
    }

    /**
     * @param string|null $discountDate2
     * @return Boleto
     */
    public function setDiscountDate2(?string $discountDate2): Boleto
    {
        $this->discountDate2 = $discountDate2;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountValue2(): ?float
    {
        return $this->discountValue2;
    }

    /**
     * @param float|null $discountValue2
     * @return Boleto
     */
    public function setDiscountValue2(?float $discountValue2): Boleto
    {
        $this->discountValue2 = $discountValue2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscountDate3(): ?string
    {
        return $this->discountDate3;
    }

    /**
     * @param string|null $discountDate3
     * @return Boleto
     */
    public function setDiscountDate3(?string $discountDate3): Boleto
    {
        $this->discountDate3 = $discountDate3;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDiscountValue3(): ?float
    {
        return $this->discountValue3;
    }

    /**
     * @param float|null $discountValue3
     * @return Boleto
     */
    public function setDiscountValue3(?float $discountValue3): Boleto
    {
        $this->discountValue3 = $discountValue3;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRebateValue(): ?float
    {
        return $this->rebateValue;
    }

    /**
     * @param float|null $rebateValue
     * @return Boleto
     */
    public function setRebateValue(?float $rebateValue): Boleto
    {
        $this->rebateValue = $rebateValue;
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
     * @return Boleto
     */
    public function setTags(?array $tags): Boleto
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param string|null $tags
     * @return $this
     */
    public function addTag(?string $tags): Boleto
    {
        $this->tags[] = $tags;
        return $this;
    }

    /**
     * @return $this
     */
    public function clearTag(): Boleto
    {
        $this->tags[] = null;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getOperationVars(): ?array
    {
        return $this->operationVars;
    }

    /**
     * @param array|null $operationVars
     * @return Boleto
     */
    public function setOperationVars(?array $operationVars): Boleto
    {
        $this->operationVars = $operationVars;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDivergentPaymentType(): ?int
    {
        return $this->divergentPaymentType;
    }

    /**
     * @param int|null $divergentPaymentType
     * @return Boleto
     */
    public function setDivergentPaymentType(?int $divergentPaymentType): Boleto
    {
        $this->divergentPaymentType = $divergentPaymentType;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinPaymentValue(): ?float
    {
        return $this->minPaymentValue;
    }

    /**
     * @param float|null $minPaymentValue
     * @return Boleto
     */
    public function setMinPaymentValue(?float $minPaymentValue): Boleto
    {
        $this->minPaymentValue = $minPaymentValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxPaymentValue(): ?float
    {
        return $this->maxPaymentValue;
    }

    /**
     * @param float|null $maxPaymentValue
     * @return Boleto
     */
    public function setMaxPaymentValue(?float $maxPaymentValue): Boleto
    {
        $this->maxPaymentValue = $maxPaymentValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpirationDays(): ?int
    {
        return $this->expirationDays;
    }

    /**
     * @param int|null $expirationDays
     * @return Boleto
     */
    public function setExpirationDays(?int $expirationDays): Boleto
    {
        $this->expirationDays = $expirationDays;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getInterestType(): ?int
    {
        return $this->interestType;
    }

    /**
     * @param int|null $interestType
     * @return Boleto
     */
    public function setInterestType(?int $interestType): Boleto
    {
        $this->interestType = $interestType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInterestDate(): ?string
    {
        return $this->interestDate;
    }

    /**
     * @param string|null $interestDate
     * @return Boleto
     */
    public function setInterestDate(?string $interestDate): Boleto
    {
        $this->interestDate = $interestDate;
        return $this;
    }

    /**
     * @description
     * @return array
     */
    public function toArray(): array
    {
        $arrProducts = [];

        if (isset($this->products)) {
            foreach ($this->products as $product) {
                $arrProducts[] = array_filter($product->toArray(), function ($v) {
                    return !is_null($v);
                });
            }
        }

        return array_filter([
            "GroupTemplate" => $this->groupTemplate,
            "CustomerName" => $this->customerName,
            "CustomerTaxNumber" => $this->customerTaxNumber,
            "CustomerMail" => $this->customerMail,
            "CustomerPhone" => $this->customerPhone,
            "Neighborhood" => $this->neighborhood,
            "PhoneToSend" => $this->phoneToSend,
            "MailToSend" => $this->mailToSend,
            "City" => $this->city,
            "State" => $this->state,
            "ZipCode" => $this->zipCode,
            "SupplierTaxNumber" => $this->supplierTaxNumber,
            "SupplierFullName" => $this->supplierFullName,
            "SupplierTradingName" => $this->supplierTradingName,
            "SupplierLegalName" => $this->supplierLegalName,
            "SupplierBank" => $this->supplierBank,
            "SupplierBankBranch" => $this->supplierBankBranch,
            "SupplierBankAccount" => $this->supplierBankAccount,
            "SupplierBankAccountDigit" => $this->supplierBankAccountDigit,
            "SupplierMail" => $this->supplierMail,
            "SupplierPhone" => $this->supplierPhone,
            "RateValue" => $this->rateValue,
            "RateSent" => $this->rateSent,
            "AddressLine1" => $this->addressLine1,
            "AddressLine2" => $this->addressLine2,
            "ExternalNumber" => $this->externalNumber,
            "OurNumber" => $this->ourNumber,
            "Identifier" => $this->identifier,
            "Comments" => $this->comments,
            "Products" => array_filter($arrProducts, function ($v) {
                return !is_null($v);
            }),
            "DueDate" => $this->dueDate,
            "TotalValue" => $this->totalValue,
            "FineDate" => $this->fineDate,
            "FinePercent" => $this->finePercent,
            "FineValue" => $this->fineValue,
            "InterestPercent" => $this->interestPercent,
            "InterestValue" => $this->interestValue,
            "DiscountDate" => $this->discountDate,
            "DiscountValue" => $this->discountValue,
            "DiscountDate2" => $this->discountDate2,
            "DiscountValue2" => $this->discountValue2,
            "DiscountDate3" => $this->discountDate3,
            "DiscountValue3" => $this->discountValue3,
            "RebateValue" => $this->rebateValue,
            "Tags" => join(',', $this->tags),
            "OperationVars" => $this->operationVars,
            "DivergentPaymentType" => $this->divergentPaymentType,
            "MinPaymentValue" => $this->minPaymentValue,
            "MaxPaymentValue" => $this->maxPaymentValue,
            "ExpirationDays" => $this->expirationDays,
            "InterestType" => $this->interestType,
            "InterestDate" => $this->interestDate
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * @description
     * @document https://dev.fitbank.com.br/reference/0
     *
     * @return object
     * @throws GuzzleException
     */
    public function generateBoleto(): object
    {
        return $this->call('GenerateBoleto', array_filter($this->toArray()));
    }

    /**
     * @description
     * @document https://dev.fitbank.com.br/reference/1
     *
     * @param int $installmentsNumber
     * @param bool $carnet
     *
     * @return object
     * @throws GuzzleException
     */
    public function generateRecurrenceBoleto(int $installmentsNumber, bool $carnet): object
    {
        $data = array_merge(
            $this->toArray(),
            [
                'InstallmentsNumber' => $installmentsNumber,
                'Carnet' => $carnet
            ]
        );
        return $this->call('GenerateRecurrenceBoleto', array_filter($data));
    }

    /**
     * @description Method used to cancel boletos using DocumentNumber.
     * @document https://dev.fitbank.com.br/reference/post_cancelboleto
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelBoleto(int $documentNumber): object
    {
        return $this->call(
            'CancelBoleto',
            array_filter(["DocumentNumber" => $documentNumber])
        );
    }


    /**
     * @description Method used to send change instructions.
     * @document https://dev.fitbank.com.br/reference/post_changeboleto
     * @param int $documentNumber
     * @param string $taxNumber
     * @param float|null $rebateValue
     * @param string|null $dueDateBoleto
     * @param float|null $principalValue
     *
     * @return object
     * @throws GuzzleException
     */
    public function changeBoleto(int $documentNumber, string $taxNumber, ?float $rebateValue, ?string $dueDateBoleto, ?float $principalValue, ?string $fineDate): object
    {
        $charges = [];
        if (isset($rebateValue)) {
            $charges[] = [
                "Type" => "ChangeRebateBoleto",
                "Value" => $rebateValue
            ];
        }

        if (isset($dueDateBoleto)) {
            $charges[] = [
                "Type" => "ChangeDueDateBoleto",
                "Value" => $dueDateBoleto
            ];
        }

        if (isset($principalValue)) {
            $charges[] = [
                "Type" => "ChangePrincipalValueBoleto",
                "Value" => $principalValue
            ];
        }

        if (isset($fineDate)) {
            $charges[] = [
                "Type" => "ChangeFineDateBoleto",
                "Value" => $fineDate
            ];
        }

        return $this->call(
            'ChangeBoleto',
            array_filter([
                "DocumentNumber" => $documentNumber,
                "TaxNumber" => $taxNumber,
                "Changes" => array_filter($charges)
            ])
        );
    }

    /**
     * @description Get boleto by DocumentNumber.
     * @document https://dev.fitbank.com.br/reference/20-1
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoById(int $documentNumber): object
    {
        return $this->call(
            'GetBoletoById',
            array_filter(['DocumentNumber' => $documentNumber])
        );
    }

    /**
     * @description
     *
     * @param string|null $inicialDate
     * @param string|null $finalDate
     * @param string|null $customerTaxNumber
     * @param string|null $inicialDueDate
     * @param string|null $finalDueDate
     * @param string|null $inicialPaymentDate
     * @param string|null $finalPaymentDate
     * @param int|null $status
     * @param string|null $receiverTaxNumber
     * @param string|null $sellerTaxNumber
     * @param string|null $supplierTaxNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoByDate(
        ?string $inicialDate,
        ?string $finalDate,
        ?string $customerTaxNumber,
        ?string $inicialDueDate,
        ?string $finalDueDate,
        ?string $inicialPaymentDate,
        ?string $finalPaymentDate,
        ?int    $status,
        ?string $receiverTaxNumber,
        ?string $sellerTaxNumber,
        ?string $supplierTaxNumber
    ): object
    {
        return $this->call(
            'GetBoletoByDate',
            array_filter([
                "InicialDate" => $inicialDate,
                "FinalDate" => $finalDate,
                "CustomerTaxNumber" => $customerTaxNumber,
                "InicialDueDate" => $inicialDueDate,
                "FinalDueDate" => $finalDueDate,
                "InicialPaymentDate" => $inicialPaymentDate,
                "FinalPaymentDate" => $finalPaymentDate,
                "Status" => $status,
                "ReceiverTaxNumber" => $receiverTaxNumber,
                "SellerTaxNumber" => $sellerTaxNumber,
                "SupplierTaxNumber" => $supplierTaxNumber,
            ])
        );
    }

    /**
     * @description More performant version than GetBoletoById. Use to get a boleto by DocumentNumber.
     * @document https://dev.fitbank.com.br/reference/780
     * @param int $documentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoInById(int $documentNumber): object
    {
        return $this->call('GetBoletoInById', ['DocumentNumber' => $documentNumber]);
    }

    /**
     * @description More performant version than GetBoletoByDate. Use to get boletos by range of dates.
     * @document https://dev.fitbank.com.br/reference/775
     * @param string $initialDate
     * @param string $finalDate
     * @param int $pageIndex
     * @param int $pageSize
     * @param int|null $status
     * @return object
     * @throws GuzzleException
     */
    public function getListBoletoByDate(string $initialDate, string $finalDate, int $pageIndex, int $pageSize, ?int $status): object
    {
        $data = [
            "Date" => [
                "Initial" => $initialDate,
                "Final" => $finalDate,
                "Type" => 0
            ],
            "PageIndex" => $pageIndex,
            "PageSize" => $pageSize,
            "Status" => $status,
            "CustomerTaxNumber" => $this->customerTaxNumber,
        ];
        if (!empty($this->supplierTaxNumber)) {
            $data["Supplier"] = array_filter([
                "TaxNumber" => $this->supplierTaxNumber,
                "Bank" => $this->supplierBank,
                "BankBranch" => $this->supplierBankBranch,
                "BankAccount" => $this->supplierBankAccount,
                "BankAccountDigit" => $this->supplierBankAccountDigit
            ], function ($v) {
                return !is_null($v);
            });
        }
        return $this->call('GetListBoletoByDate', array_filter(
            $data,
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Method for viewing the change instructions via Protocol Number.
     * @document https://dev.fitbank.com.br/reference/19
     * @param string $taxNumber
     * @param string $protocolNumber
     * @return object
     * @throws GuzzleException
     */
    public function getChangeBoleto(string $taxNumber, string $protocolNumber): object
    {
        return $this->call('GetChangeBoleto', array_filter(
            [
                "TaxNumber" => $taxNumber,
                "ProtocolNumber" => $protocolNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}
