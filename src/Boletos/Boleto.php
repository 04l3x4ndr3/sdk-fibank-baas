<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Boletos;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\Product;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class Boleto {

	private Configuration $configuration;
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

	public function __construct()
	{
		$this->configuration = new Configuration();

		$this->groupTemplate = NULL;
		$this->customerName = NULL;
		$this->customerTaxNumber = NULL;
		$this->customerMail = NULL;
		$this->customerPhone = NULL;
		$this->neighborhood = NULL;
		$this->city = NULL;
		$this->state = NULL;
		$this->zipCode = NULL;
		$this->addressLine1 = NULL;
		$this->addressLine2 = NULL;
		$this->mailToSend = NULL;
		$this->phoneToSend = NULL;
		$this->supplierTaxNumber = NULL;
		$this->supplierFullName = NULL;
		$this->supplierTradingName = NULL;
		$this->supplierLegalName = NULL;
		$this->supplierBank = NULL;
		$this->supplierBankBranch = NULL;
		$this->supplierBankAccount = NULL;
		$this->supplierBankAccountDigit = NULL;
		$this->supplierMail = NULL;
		$this->supplierPhone = NULL;
		$this->rateValue = NULL;
		$this->rateSent = NULL;
		$this->externalNumber = NULL;
		$this->identifier = NULL;
		$this->comments = NULL;
		$this->products = NULL;
		$this->dueDate = NULL;
		$this->totalValue = NULL;
		$this->finePercent = NULL;
		$this->fineValue = NULL;
		$this->interestPercent = NULL;
		$this->discountDate = NULL;
		$this->discountValue = NULL;
		$this->rebateValue = NULL;
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
	 * @return Boleto
	 */
	public function setConfiguration(Configuration $configuration): self
	{
		$this->configuration = $configuration;
		return $this;
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
	 * @return Boleto
	 */
	public function setGroupTemplate(?int $groupTemplate): self
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
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @param string|null $city
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
	public function getAddressLine1(): ?string
	{
		return $this->addressLine1;
	}

	/**
	 * @param string|null $addressLine1
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
	public function getMailToSend(): ?string
	{
		return $this->mailToSend;
	}

	/**
	 * @param string|null $mailToSend
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
	public function getPhoneToSend(): ?string
	{
		return $this->phoneToSend;
	}

	/**
	 * @param string|null $phoneToSend
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
	public function getSupplierTaxNumber(): ?string
	{
		return $this->supplierTaxNumber;
	}

	/**
	 * @param string|null $supplierTaxNumber
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
	 * @return Boleto
	 */
	public function setSupplierPhone(?string $supplierPhone): self
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
	public function setRateValue(?float $rateValue): self
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
	public function setRateSent(?int $rateSent): self
	{
		$this->rateSent = $rateSent;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getExternalNumber(): ?string
	{
		return $this->externalNumber;
	}

	/**
	 * @param string|null $externalNumber
	 * @return Boleto
	 */
	public function setExternalNumber(?string $externalNumber): self
	{
		$this->externalNumber = $externalNumber;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getIdentifier(): ?string
	{
		return $this->identifier;
	}

	/**
	 * @param int|null $identifier
	 * @return Boleto
	 */
	public function setIdentifier(?string $identifier): self
	{
		$this->identifier = $identifier;
		return $this;
	}

	/**
	 * @return int|null
	 */
	public function getComments(): ?string
	{
		return $this->comments;
	}

	/**
	 * @param int|null $comments
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
	 * @param Product|null $product
	 * @return Boleto
	 */
	public function addProducts(?Product $product): self
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
	 * @return Boleto
	 */
	public function setDueDate(?string $dueDate): self
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
	public function setTotalValue(?float $totalValue): self
	{
		$this->totalValue = $totalValue;
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
	 * @return Boleto
	 */
	public function setInterestPercent(?float $interestPercent): self
	{
		$this->interestPercent = $interestPercent;
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
	public function setDiscountDate(?string $discountDate): self
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
	public function setDiscountValue(?float $discountValue): self
	{
		$this->discountValue = $discountValue;
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
	public function setRebateValue(?float $rebateValue): self
	{
		$this->rebateValue = $rebateValue;
		return $this;
	}

	/**
	 * @return array
	 */
	public function toArray(): array
	{
		$_products = [];

		if (isset($this->products))
		{
			foreach ($this->products as $product)
			{
				$_products[] = $product->toArray();
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
			"Products" => $_products,
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
	 * @param Boleto|null $boleto
	 * @return object
	 * @throws GuzzleException
	 */
	public function generateBoleto(?Boleto $boleto = NULL): object
	{
		$http = new CallApi($this->configuration);
		$data = (isset($boleto)) ? $boleto->toArray() : $this->toArray();
		return $http->call('GenerateBoleto', array_filter($data));
	}

	/**
	 * @param Boleto|null $boleto
	 * @param int $installmentsNumber
	 * @param bool $carnet
	 * @return object
	 */
	public function generateRecurrenceBoleto(?Boleto $boleto, int $installmentsNumber, bool $carnet): object
	{
		$http = new CallApi($this->configuration);
		$data = (isset($boleto)) ? $boleto->toArray() : $this->toArray();
		$data = array_merge($data, [
			'InstallmentsNumber' => $installmentsNumber,
			'Carnet' => $carnet
		]);
		return $http->call('GenerateBoleto', array_filter($data));
	}

	/**
	 * @param int $documentNumber
	 * @return object
	 */
	public function cancelBoleto(int $documentNumber): object
	{
		$http = new CallApi($this->configuration);
		$data = ["DocumentNumber" => $documentNumber];
		return $http->call('CancelBoleto', array_filter($data));
	}


	/**
	 * @param int $documentNumber
	 * @param string $taxNumber
	 * @param float|null $rebateValue
	 * @param string|null $dueDateBoleto
	 * @param float|null $principalValue
	 * @return object
	 */
	public function changeBoleto(int     $documentNumber,
								 string  $taxNumber,
								 ?float  $rebateValue,
								 ?string $dueDateBoleto,
								 ?float  $principalValue): object
	{
		$http = new CallApi($this->configuration);

		$_charges = [];
		if (isset($rebateValue))
		{
			$_charges[] = ["Type" => "ChangeRebateBoleto", "Values" => $rebateValue];
		}

		if (isset($dueDateBoleto))
		{
			$_charges[] = ["Type" => "ChangeDueDateBoleto", "Values" => $dueDateBoleto];
		}

		if (isset($principalValue))
		{
			$_charges[] = ["Type" => "ChangePrincipalValueBoleto", "Values" => $principalValue];
		}

		$data = [
			"DocumentNumber" => $documentNumber,
			"TaxNumber" => $taxNumber,
			"Changes" => array_filter($_charges)
		];
		return $http->call('CancelBoleto', array_filter($data));
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
		return $http->call('GetBoletoById', array_filter($data));
	}

	/**
	 * @param string|null $inicialDate
	 * @param string|null $finalDate
	 * @param string|null $customerTaxNumber
	 * @param string|null $inicialDueDate
	 * @param string|null $finalDueDate
	 * @param string|null $inicialPaymentDate
	 * @param string|null $finalPaymentDate
	 * @param int|null $status
	 * @param string|null $recieverTaxNumber
	 * @param string|null $sellerTaxNumber
	 * @param string|null $supplierTaxNumber
	 * @return object
	 */
	public function getBoletoByDate(?string $inicialDate,
									?string $finalDate,
									?string $customerTaxNumber,
									?string $inicialDueDate,
									?string $finalDueDate,
									?string $inicialPaymentDate,
									?string $finalPaymentDate,
									?int    $status,
									?string $recieverTaxNumber,
									?string $sellerTaxNumber,
									?string $supplierTaxNumber): object
	{
		$http = new CallApi($this->configuration);
		$data = [
			"InicialDate" => $inicialDate,
			"FinalDate" => $finalDate,
			"CustomerTaxNumber" => $customerTaxNumber,
			"InicialDueDate" => $inicialDueDate,
			"FinalDueDate" => $finalDueDate,
			"InicialPaymentDate" => $inicialPaymentDate,
			"FnicialPaymentDate" => $finalPaymentDate,
			"Status" => $status,
			"RecieverTaxNumber" => $recieverTaxNumber,
			"SellerTaxNumber" => $sellerTaxNumber,
			"SupplierTaxNumber" => $supplierTaxNumber,
		];
		return $http->call('GetBoletoByDate', array_filter($data));
	}
}
