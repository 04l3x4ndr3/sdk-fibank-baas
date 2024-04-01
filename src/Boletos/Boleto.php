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
    private ?string $rateValue;
    private ?string $rateSent;
    private ?string $addressLine1;
    private ?string $addressLine2;
    private ?string $externalNumber;
    private ?string $ourNumber;
    private ?string $identifier;
    private ?string $comments;
    private ?array $products;
    private ?string $dueDate;
    private ?string $totalValue;
    private ?string $fineDate;
    private ?float $finePercent;
    private ?float $fineValue;
    private ?float $interestPercent;
    private ?float $interestValue;
    private ?string $discountDate;
    private ?string $discountValue;
    private ?string $discountDate2;
    private ?float $discountValue2;
    private ?string $discountDate3;
    private ?float $discountValue3;
    private ?float $rebateValue;
    private ?string $tags;

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
     *
     * @return Boleto
     */
    public function setGroupTemplate(?string $groupTemplate): self
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
     *
     * @return Boleto
     */
    public function setCustomerName(?string $customerName): self
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
     *
     * @return Boleto
     */
    public function setCustomerTaxNumber(?string $customerTaxNumber): self
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
     *
     * @return Boleto
     */
    public function setCustomerMail(?string $customerMail): self
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
     *
     * @return Boleto
     */
    public function setCustomerPhone(?string $customerPhone): self
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
     *
     * @return Boleto
     */
    public function setNeighborhood(?string $neighborhood): self
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
     *
     * @return Boleto
     */
    public function setPhoneToSend(?string $phoneToSend): self
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
     *
     * @return Boleto
     */
    public function setMailToSend(?string $mailToSend): self
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
     *
     * @return Boleto
     */
    public function setCity(?string $city): self
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
     *
     * @return Boleto
     */
    public function setState(?string $state): self
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
    public function setZipCode(?string $zipCode): self
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
     *
     * @return Boleto
     */
    public function setSupplierTaxNumber(?string $supplierTaxNumber): self
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
     *
     * @return Boleto
     */
    public function setSupplierFullName(?string $supplierFullName): self
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
     *
     * @return Boleto
     */
    public function setSupplierTradingName(?string $supplierTradingName): self
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
     *
     * @return Boleto
     */
    public function setSupplierLegalName(?string $supplierLegalName): self
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
     *
     * @return Boleto
     */
    public function setSupplierBank(?string $supplierBank): self
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
     *
     * @return Boleto
     */
    public function setSupplierBankBranch(?string $supplierBankBranch): self
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
     *
     * @return Boleto
     */
    public function setSupplierBankAccount(?string $supplierBankAccount): self
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
     *
     * @return Boleto
     */
    public function setSupplierBankAccountDigit(?string $supplierBankAccountDigit): self
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
     *
     * @return Boleto
     */
    public function setSupplierMail(?string $supplierMail): self
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
     *
     * @return Boleto
     */
    public function setSupplierPhone(?string $supplierPhone): self
    {
        $this->supplierPhone = $supplierPhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRateValue(): ?string
    {
        return $this->rateValue;
    }

    /**
     * @param string|null $rateValue
     *
     * @return Boleto
     */
    public function setRateValue(?string $rateValue): self
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRateSent(): ?string
    {
        return $this->rateSent;
    }

    /**
     * @param string|null $rateSent
     *
     * @return Boleto
     */
    public function setRateSent(?string $rateSent): self
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
     *
     * @return Boleto
     */
    public function setAddressLine1(?string $addressLine1): self
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
     *
     * @return Boleto
     */
    public function setAddressLine2(?string $addressLine2): self
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
     *
     * @return Boleto
     */
    public function setExternalNumber(?string $externalNumber): self
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
     * @return void
     */
    public function setOurNumber(?string $ourNumber): void
    {
        $this->ourNumber = $ourNumber;
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
     * @return Boleto
     */
    public function setIdentifier(?string $identifier): self
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
     *
     * @return Boleto
     */
    public function setComments(?string $comments): self
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
     *
     * @return Boleto
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        return $this;
    }

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;
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
     *
     * @return Boleto
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTotalValue(): ?string
    {
        return $this->totalValue;
    }

    /**
     * @param string|null $totalValue
     *
     * @return Boleto
     */
    public function setTotalValue(?string $totalValue): self
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
     *
     * @return Boleto
     */
    public function setFineDate(?string $fineDate): self
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
     *
     * @return Boleto
     */
    public function setFinePercent(?float $finePercent): self
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
     *
     * @return Boleto
     */
    public function setFineValue(?float $fineValue): self
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
     *
     * @return Boleto
     */
    public function setInterestPercent(?float $interestPercent): self
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
     *
     * @return Boleto
     */
    public function setInterestValue(?float $interestValue): self
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
     *
     * @return Boleto
     */
    public function setDiscountDate(?string $discountDate): self
    {
        $this->discountDate = $discountDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDiscountValue(): ?string
    {
        return $this->discountValue;
    }

    /**
     * @param string|null $discountValue
     *
     * @return Boleto
     */
    public function setDiscountValue(?string $discountValue): self
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
     *
     * @return Boleto
     */
    public function setDiscountDate2(?string $discountDate2): self
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
     *
     * @return Boleto
     */
    public function setDiscountValue2(?float $discountValue2): self
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
     *
     * @return Boleto
     */
    public function setDiscountDate3(?string $discountDate3): self
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
     *
     * @return Boleto
     */
    public function setDiscountValue3(?float $discountValue3): self
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
     *
     * @return Boleto
     */
    public function setRebateValue(?float $rebateValue): self
    {
        $this->rebateValue = $rebateValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param string|null $tags
     *
     * @return Boleto
     */
    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
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
            "Tags" => $this->tags,
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
     * @param int  $installmentsNumber
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
        return $this->call('GenerateBoleto', array_filter($data));
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
     * @param int         $documentNumber
     * @param string      $taxNumber
     * @param float|null  $rebateValue
     * @param string|null $dueDateBoleto
     * @param float|null  $principalValue
     *
     * @return object
     * @throws GuzzleException
     * @throws GuzzleException
     */
    public function changeBoleto(int $documentNumber, string $taxNumber, ?float $rebateValue, ?string $dueDateBoleto, ?float $principalValue): object
    {
        $charges = [];
        if (isset($rebateValue)) {
            $charges[] = [
                "Type" => "ChangeRebateBoleto", "Values" => $rebateValue
            ];
        }

        if (isset($dueDateBoleto)) {
            $charges[] = [
                "Type" => "ChangeDueDateBoleto", "Values" => $dueDateBoleto
            ];
        }

        if (isset($principalValue)) {
            $charges[] = [
                "Type" => "ChangePrincipalValueBoleto",
                "Values" => $principalValue
            ];
        }

        return $this->call(
            'CancelBoleto',
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
     * @param int|null    $status
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
        ?int $status,
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
     * @param string $pageIndex
     * @param string $pageSize
     * @param int|null $status
     * @return object
     */
    public function getListBoletoByDate(
        string $initialDate,
        string $finalDate,
        string $pageIndex,
        string $pageSize,
        ?int $status
    ): object {
        return $this->call('GetListBoletoByDate', array_filter(
            [
                "InitialDate" => $initialDate,
                "FinalDate" => $finalDate,
                "PageIndex" => $pageIndex,
                "PageSize" => $pageSize,
                "Status" => $status,
                "CustomerTaxNumber" => $this->customerTaxNumber,
                "SupplierTaxNumber" => $this->supplierTaxNumber,
                "SupplierBank" => $this->supplierBank,
                "SupplierBankBranch" => $this->supplierBankBranch,
                "SupplierBankAccount" => $this->supplierBankAccount,
                "SupplierBankAccountDigit" => $this->supplierBankAccountDigit
            ],
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
     */
    public function getChangeBoleto(
        string $taxNumber,
        string $protocolNumber
    ): object {
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
