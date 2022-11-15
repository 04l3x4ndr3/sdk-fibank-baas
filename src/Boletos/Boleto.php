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
    private ?int $groupTemplate;
    private ?string $customerName;
    private ?string $customerTaxNumber;
    private ?string $customerMail;
    private ?string $customerPhone;
    private ?string $neighborhood;
    private ?string $city;
    private ?string $state;
    private ?string $zipCode;
    private ?string $addressLine1;
    private ?string $addressLine2;
    private ?string $mailToSend;
    private ?string $phoneToSend;
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
    private ?string $externalNumber;
    private ?string $identifier;
    private ?string $comments;
    private ?array $products;
    private ?string $dueDate;
    private ?float $totalValue;
    private ?float $finePercent;
    private ?float $fineValue;
    private ?float $interestPercent;
    private ?string $discountDate;
    private ?float $discountValue;
    private ?float $rebateValue;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->groupTemplate = null;
        $this->customerName = null;
        $this->customerTaxNumber = null;
        $this->customerMail = null;
        $this->customerPhone = null;
        $this->neighborhood = null;
        $this->city = null;
        $this->state = null;
        $this->zipCode = null;
        $this->addressLine1 = null;
        $this->addressLine2 = null;
        $this->mailToSend = null;
        $this->phoneToSend = null;
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
        $this->externalNumber = null;
        $this->identifier = null;
        $this->comments = null;
        $this->products = null;
        $this->dueDate = null;
        $this->totalValue = null;
        $this->finePercent = null;
        $this->fineValue = null;
        $this->interestPercent = null;
        $this->discountDate = null;
        $this->discountValue = null;
        $this->rebateValue = null;
    }

    /**
     * @description
     * @return int|null
     */
    public function getGroupTemplate(): ?int
    {
        return $this->groupTemplate;
    }

    /**
     * @description
     *
     * @param int|null $groupTemplate
     *
     * @return Boleto
     */
    public function setGroupTemplate(?int $groupTemplate): self
    {
        $this->groupTemplate = $groupTemplate;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getCustomerTaxNumber(): ?string
    {
        return $this->customerTaxNumber;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getCustomerMail(): ?string
    {
        return $this->customerMail;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @description
     *
     * @param string|null $zipCode
     *
     * @return Boleto
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getMailToSend(): ?string
    {
        return $this->mailToSend;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getPhoneToSend(): ?string
    {
        return $this->phoneToSend;
    }

    /**
     * @description
     *
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
     * @return Boleto
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
    public function getSupplierFullName(): ?string
    {
        return $this->supplierFullName;
    }

    /**
     * @description
     *
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
     * @return Boleto
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
    public function getSupplierLegalName(): ?string
    {
        return $this->supplierLegalName;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getSupplierBank(): ?string
    {
        return $this->supplierBank;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getSupplierBankBranch(): ?string
    {
        return $this->supplierBankBranch;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getSupplierBankAccount(): ?string
    {
        return $this->supplierBankAccount;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getSupplierBankAccountDigit(): ?string
    {
        return $this->supplierBankAccountDigit;
    }

    /**
     * @description
     *
     * @param string|null $supplierBankAccountDigit
     *
     * @return Boleto
     */
    public function setSupplierBankAccountDigit(
        ?string $supplierBankAccountDigit
    ): self
    {
        $this->supplierBankAccountDigit = $supplierBankAccountDigit;
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
     * @return Boleto
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
     * @return Boleto
     */
    public function setSupplierPhone(?string $supplierPhone): self
    {
        $this->supplierPhone = $supplierPhone;
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
     * @return Boleto
     */
    public function setRateValue(?float $rateValue): self
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @description
     * @return int|null
     */
    public function getRateSent(): ?int
    {
        return $this->rateSent;
    }

    /**
     * @description
     *
     * @param int|null $rateSent
     *
     * @return Boleto
     */
    public function setRateSent(?int $rateSent): self
    {
        $this->rateSent = $rateSent;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getExternalNumber(): ?string
    {
        return $this->externalNumber;
    }

    /**
     * @description
     *
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
     * @return Boleto
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
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @description
     *
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
     * @return Boleto
     */
    public function addProducts(?Product $product): self
    {
        $this->products[] = $product;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * @description
     *
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
     * @return Boleto
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
    public function getFinePercent(): ?float
    {
        return $this->finePercent;
    }

    /**
     * @description
     *
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
     * @description
     * @return float|null
     */
    public function getFineValue(): ?float
    {
        return $this->fineValue;
    }

    /**
     * @description
     *
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
     * @description
     * @return float|null
     */
    public function getInterestPercent(): ?float
    {
        return $this->interestPercent;
    }

    /**
     * @description
     *
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
     * @description
     * @return string|null
     */
    public function getDiscountDate(): ?string
    {
        return $this->discountDate;
    }

    /**
     * @description
     *
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
     * @description
     * @return float|null
     */
    public function getDiscountValue(): ?float
    {
        return $this->discountValue;
    }

    /**
     * @description
     *
     * @param float|null $discountValue
     *
     * @return Boleto
     */
    public function setDiscountValue(?float $discountValue): self
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @description
     * @return float|null
     */
    public function getRebateValue(): ?float
    {
        return $this->rebateValue;
    }

    /**
     * @description
     *
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
     * @description
     * @return array
     */
    public function toArray(): array
    {
        $products = [];

        if (isset($this->products)) {
            foreach ($this->products as $product) {
                $products[] = $product->toArray();
            }
        }

        return [
            "GroupTemplate" => $this->groupTemplate,
            "CustomerName" => $this->customerName,
            "CustomerTaxNumber" => $this->customerTaxNumber,
            "CustomerMail" => $this->customerMail,
            "CustomerPhone" => $this->customerPhone,
            "Neighborhood" => $this->neighborhood,
            "City" => $this->city,
            "State" => $this->state,
            "ZipCode" => $this->zipCode,
            "AddressLine1" => $this->addressLine1,
            "AddressLine2" => $this->addressLine2,
            "MailToSend" => $this->mailToSend,
            "PhoneToSend" => $this->phoneToSend,
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
            "ExternalNumber" => $this->externalNumber,
            "Identifier" => $this->identifier,
            "Comments" => $this->comments,
            "Products" => $products,
            "DueDate" => $this->dueDate,
            "TotalValue" => $this->totalValue,
            "FinePercent" => $this->finePercent,
            "FineValue" => $this->fineValue,
            "InterestPercent" => $this->interestPercent,
            "DiscountDate" => $this->discountDate,
            "DiscountValue" => $this->discountValue,
            "RebateValue" => $this->rebateValue,
        ];
    }

    /**
     * @description
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
     *
     * @param int  $installmentsNumber
     * @param bool $carnet
     *
     * @return object
     * @throws GuzzleException
     */
    public function generateRecurrenceBoleto(
        int $installmentsNumber,
        bool $carnet
    ): object
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
     * @description
     *
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
     * @description
     *
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
    public function changeBoleto(
        int $documentNumber,
        string $taxNumber,
        ?float $rebateValue,
        ?string $dueDateBoleto,
        ?float $principalValue
    ): object
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
     * @description
     *
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
}
