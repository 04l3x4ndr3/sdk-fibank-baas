<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class BoletoOut extends CallApi
{
    private ?string $name;
    private ?string $taxNumber;
    private ?string $beneficiaryTaxNumber;
    private ?string $beneficiaryName;
    private ?string $guarantorTaxNumber;
    private ?string $guarantorName;
    private ?string $payerTaxNumber;
    private ?string $payerName;
    private ?string $mailToSend;
    private ?string $phoneToSend;
    private ?string $barcode;
    private ?float $principalValue;
    private ?float $discountValue;
    private ?float $extraValue;
    private ?string $paymentDate;
    private ?string $dueDate;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValue;
    private ?int $rateValueType;
    private ?int $paymentSubType;
    private ?string $feePayerFullName;
    private ?string $feePayerTaxNumber;
    private ?string $feePayerMail;
    private ?int $feePayerBank;
    private ?string $feePayerBankBranch;
    private ?string $feePayerBankAccount;
    private ?string $feePayerBankAccountDigit;
    private ?string $feePayerTradingName;
    private ?string $feePayerLegalName;
    private ?string $feePayerIdentityDocument;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?array $entries;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->name = null;
        $this->taxNumber = null;
        $this->beneficiaryTaxNumber = null;
        $this->beneficiaryName = null;
        $this->guarantorTaxNumber = null;
        $this->guarantorName = null;
        $this->payerTaxNumber = null;
        $this->payerName = null;
        $this->mailToSend = null;
        $this->phoneToSend = null;
        $this->barcode = null;
        $this->principalValue = null;
        $this->discountValue = null;
        $this->extraValue = null;
        $this->paymentDate = null;
        $this->dueDate = null;
        $this->tags = null;
        $this->description = null;
        $this->identifier = null;
        $this->rateValue = null;
        $this->rateValueType = null;
        $this->paymentSubType = null;
        $this->feePayerFullName = null;
        $this->feePayerTaxNumber = null;
        $this->feePayerMail = null;
        $this->feePayerBank = null;
        $this->feePayerBankBranch = null;
        $this->feePayerBankAccount = null;
        $this->feePayerBankAccountDigit = null;
        $this->feePayerTradingName = null;
        $this->feePayerLegalName = null;
        $this->feePayerIdentityDocument = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->entries = null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return self
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBeneficiaryTaxNumber(): ?string
    {
        return $this->beneficiaryTaxNumber;
    }

    /**
     * @param string|null $beneficiaryTaxNumber
     *
     * @return self
     */
    public function setBeneficiaryTaxNumber(?string $beneficiaryTaxNumber): self
    {
        $this->beneficiaryTaxNumber = $beneficiaryTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBeneficiaryName(): ?string
    {
        return $this->beneficiaryName;
    }

    /**
     * @param string|null $beneficiaryName
     *
     * @return self
     */
    public function setBeneficiaryName(?string $beneficiaryName): self
    {
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuarantorTaxNumber(): ?string
    {
        return $this->guarantorTaxNumber;
    }

    /**
     * @param string|null $guarantorTaxNumber
     *
     * @return self
     */
    public function setGuarantorTaxNumber(?string $guarantorTaxNumber): self
    {
        $this->guarantorTaxNumber = $guarantorTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuarantorName(): ?string
    {
        return $this->guarantorName;
    }

    /**
     * @param string|null $guarantorName
     *
     * @return self
     */
    public function setGuarantorName(?string $guarantorName): self
    {
        $this->guarantorName = $guarantorName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayerTaxNumber(): ?string
    {
        return $this->payerTaxNumber;
    }

    /**
     * @param string|null $payerTaxNumber
     *
     * @return self
     */
    public function setPayerTaxNumber(?string $payerTaxNumber): self
    {
        $this->payerTaxNumber = $payerTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPayerName(): ?string
    {
        return $this->payerName;
    }

    /**
     * @param string|null $payerName
     *
     * @return self
     */
    public function setPayerName(?string $payerName): self
    {
        $this->payerName = $payerName;
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
     * @return self
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
     *
     * @return self
     */
    public function setPhoneToSend(?string $phoneToSend): self
    {
        $this->phoneToSend = $phoneToSend;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    /**
     * @param float|null $principalValue
     *
     * @return self
     */
    public function setPrincipalValue(?float $principalValue): self
    {
        $this->principalValue = $principalValue;
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
     *
     * @return self
     */
    public function setDiscountValue(?float $discountValue): self
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getExtraValue(): ?float
    {
        return $this->extraValue;
    }

    /**
     * @param float|null $extraValue
     *
     * @return self
     */
    public function setExtraValue(?float $extraValue): self
    {
        $this->extraValue = $extraValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }

    /**
     * @param string|null $paymentDate
     *
     * @return self
     */
    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;
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
     * @return self
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;
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
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags[] = $tags;
        return $this;
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
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
     *
     * @return self
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRateValue(): ?int
    {
        return $this->rateValue;
    }

    /**
     * @param int|null $rateValue
     *
     * @return self
     */
    public function setRateValue(?int $rateValue): self
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRateValueType(): ?int
    {
        return $this->rateValueType;
    }

    /**
     * @param int|null $rateValueType
     *
     * @return self
     */
    public function setRateValueType(?int $rateValueType): self
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPaymentSubType(): ?int
    {
        return $this->paymentSubType;
    }

    /**
     * @param int|null $paymentSubType
     *
     * @return self
     */
    public function setPaymentSubType(?int $paymentSubType): self
    {
        $this->paymentSubType = $paymentSubType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerFullName(): ?string
    {
        return $this->feePayerFullName;
    }

    /**
     * @param string|null $feePayerFullName
     *
     * @return self
     */
    public function setFeePayerFullName(?string $feePayerFullName): self
    {
        $this->feePayerFullName = $feePayerFullName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerTaxNumber(): ?string
    {
        return $this->feePayerTaxNumber;
    }

    /**
     * @param string|null $feePayerTaxNumber
     *
     * @return self
     */
    public function setFeePayerTaxNumber(?string $feePayerTaxNumber): self
    {
        $this->feePayerTaxNumber = $feePayerTaxNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerMail(): ?string
    {
        return $this->feePayerMail;
    }

    /**
     * @param string|null $feePayerMail
     *
     * @return self
     */
    public function setFeePayerMail(?string $feePayerMail): self
    {
        $this->feePayerMail = $feePayerMail;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFeePayerBank(): ?int
    {
        return $this->feePayerBank;
    }

    /**
     * @param int|null $feePayerBank
     *
     * @return self
     */
    public function setFeePayerBank(?int $feePayerBank): self
    {
        $this->feePayerBank = $feePayerBank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankBranch(): ?string
    {
        return $this->feePayerBankBranch;
    }

    /**
     * @param string|null $feePayerBankBranch
     *
     * @return self
     */
    public function setFeePayerBankBranch(?string $feePayerBankBranch): self
    {
        $this->feePayerBankBranch = $feePayerBankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankAccount(): ?string
    {
        return $this->feePayerBankAccount;
    }

    /**
     * @param string|null $feePayerBankAccount
     *
     * @return self
     */
    public function setFeePayerBankAccount(?string $feePayerBankAccount): self
    {
        $this->feePayerBankAccount = $feePayerBankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerBankAccountDigit(): ?string
    {
        return $this->feePayerBankAccountDigit;
    }

    /**
     * @param string|null $feePayerBankAccountDigit
     *
     * @return self
     */
    public function setFeePayerBankAccountDigit(?string $feePayerBankAccountDigit): self
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerTradingName(): ?string
    {
        return $this->feePayerTradingName;
    }

    /**
     * @param string|null $feePayerTradingName
     *
     * @return self
     */
    public function setFeePayerTradingName(?string $feePayerTradingName): self
    {
        $this->feePayerTradingName = $feePayerTradingName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerLegalName(): ?string
    {
        return $this->feePayerLegalName;
    }

    /**
     * @param string|null $feePayerLegalName
     *
     * @return self
     */
    public function setFeePayerLegalName(?string $feePayerLegalName): self
    {
        $this->feePayerLegalName = $feePayerLegalName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerIdentityDocument(): ?string
    {
        return $this->feePayerIdentityDocument;
    }

    /**
     * @param string|null $feePayerIdentityDocument
     *
     * @return self
     */
    public function setFeePayerIdentityDocument(?string $feePayerIdentityDocument): self
    {
        $this->feePayerIdentityDocument = $feePayerIdentityDocument;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @param string|null $bank
     *
     * @return self
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @param string|null $bankBranch
     *
     * @return self
     */
    public function setBankBranch(?string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @param string|null $bankAccount
     *
     * @return self
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string|null $bankAccountDigit
     *
     * @return self
     */
    public function setBankAccountDigit(?string $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getEntries(): ?array
    {
        return $this->entries;
    }

    /**
     * @param array|null $entries
     *
     * @return self
     */
    public function setEntries(?array $entries): self
    {
        $this->entries[] = $entries;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "Name" => $this->name,
            "TaxNumber" => $this->taxNumber,
            "BeneficiaryTaxNumber" => $this->beneficiaryTaxNumber,
            "BeneficiaryName" => $this->beneficiaryName,
            "GuarantorTaxNumber" => $this->guarantorTaxNumber,
            "GuarantorName" => $this->guarantorName,
            "PayerTaxNumber" => $this->payerTaxNumber,
            "PayerName" => $this->payerName,
            "MailToSend" => $this->mailToSend,
            "PhoneToSend" => $this->phoneToSend,
            "Barcode" => $this->barcode,
            "PrincipalValue" => $this->principalValue,
            "DiscountValue" => $this->discountValue,
            "ExtraValue" => $this->extraValue,
            "PaymentDate" => $this->paymentDate,
            "DueDate" => $this->dueDate,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValue" => $this->rateValue,
            "RateValueType" => $this->rateValueType,
            "PaymentSubType" => $this->paymentSubType,
            "FeePayerFullName" => $this->feePayerFullName,
            "FeePayerTaxNumber" => $this->feePayerTaxNumber,
            "FeePayerMail" => $this->feePayerMail,
            "FeePayerBank" => $this->feePayerBank,
            "FeePayerBankBranch" => $this->feePayerBankBranch,
            "FeePayerBankAccount" => $this->feePayerBankAccount,
            "FeePayerBankAccountDigit" => $this->feePayerBankAccountDigit,
            "FeePayerTradingName" => $this->feePayerTradingName,
            "FeePayerLegalName" => $this->feePayerLegalName,
            "FeePayerIdentityDocument" => $this->feePayerIdentityDocument,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "Entries" => $this->entries,
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function generateBoletoOut(): object
    {
        return $this->call('GenerateBoletoOut', $this->toArray());
    }

    /**
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoOutById(int $documentNumber): object
    {
        return $this->call('GetBoletoOutById', ['DocumentNumber' => $documentNumber]);
    }

    /**
     * @param string $barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoOutByBarcode(string $barcode): object
    {
        return $this->call('GetBoletoOutByBarcode', ['Barcode' => $barcode]);
    }

    /**
     * @param int $documentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelBoletoOut(int $documentNumber): object
    {
        return $this->call('CancelBoletoOut', ['DocumentNumber' => $documentNumber]);
    }

}
