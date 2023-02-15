<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class BoletoOut extends CallApi
{
    private ?string $name;
    private ?string $taxNumber;
    private ?string $barcode;
    private ?string $beneficiaryName;
    private ?string $guarantorTaxNumber;
    private ?string $guarantorName;
    private ?string $payerTaxNumber;
    private ?string $payerName;
    private ?string $mailToSend;
    private ?string $phoneToSend;
    private ?float $principalValue;
    private ?float $discountValue;
    private ?float $extraValue;
    private ?string $paymentDate;
    private ?string $dueDate;
    private ?string $feePayerFullName;
    private ?string $feePayerTaxNumber;
    private ?string $feePayerMail;
    private ?string $feePayerPhone;
    private ?int $feePayerBank;
    private ?string $feePayerBankBranch;
    private ?string $feePayerBankAccount;
    private ?string $feePayerBankAccountDigit;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValueType;
    private ?int $rateValue;

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);

        $this->name = null;
        $this->taxNumber = null;
        $this->barcode = null;
        $this->beneficiaryName = null;
        $this->guarantorTaxNumber = null;
        $this->guarantorName = null;
        $this->payerTaxNumber = null;
        $this->payerName = null;
        $this->mailToSend = null;
        $this->phoneToSend = null;
        $this->principalValue = null;
        $this->discountValue = null;
        $this->extraValue = null;
        $this->paymentDate = null;
        $this->dueDate = null;
        $this->feePayerFullName = null;
        $this->feePayerTaxNumber = null;
        $this->feePayerMail = null;
        $this->feePayerPhone = null;
        $this->feePayerBank = null;
        $this->feePayerBankBranch = null;
        $this->feePayerBankAccount = null;
        $this->feePayerBankAccountDigit = null;
        $this->tags = null;
        $this->description = null;
        $this->identifier = null;
        $this->rateValueType = null;
        $this->rateValue = null;
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
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
     * @return BoletoOut
     */
    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setPhoneToSend(?string $phoneToSend): self
    {
        $this->phoneToSend = $phoneToSend;
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setDueDate(?string $dueDate): self
    {
        $this->dueDate = $dueDate;
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setFeePayerMail(?string $feePayerMail): self
    {
        $this->feePayerMail = $feePayerMail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFeePayerPhone(): ?string
    {
        return $this->feePayerPhone;
    }

    /**
     * @param string|null $feePayerPhone
     *
     * @return BoletoOut
     */
    public function setFeePayerPhone(?string $feePayerPhone): self
    {
        $this->feePayerPhone = $feePayerPhone;
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setFeePayerBankAccountDigit(
        ?string $feePayerBankAccountDigit
    ): self
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
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
     * @return BoletoOut
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
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
     * @return BoletoOut
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
     * @return BoletoOut
     */
    public function setIdentifier(?string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateValueType(): int
    {
        return $this->rateValueType;
    }

    /**
     * @param int $rateValueType
     *
     * @return BoletoOut
     */
    public function setRateValueType(int $rateValueType): self
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateValue(): int
    {
        return $this->rateValue;
    }

    /**
     * @param int $rateValue
     *
     * @return BoletoOut
     */
    public function setRateValue(int $rateValue): self
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "Name" => $this->name,
            "TaxNumber" => $this->taxNumber,
            "Barcode" => $this->barcode,
            "BeneficiaryName" => $this->beneficiaryName,
            "GuarantorTaxNumber" => $this->guarantorTaxNumber,
            "GuarantorName" => $this->guarantorName,
            "PayerTaxNumber" => $this->payerTaxNumber,
            "PayerName" => $this->payerName,
            "MailToSend" => $this->mailToSend,
            "PhoneToSend" => $this->phoneToSend,
            "PrincipalValue" => $this->principalValue,
            "DiscountValue" => $this->discountValue,
            "ExtraValue" => $this->extraValue,
            "PaymentDate" => $this->paymentDate,
            "DueDate" => $this->dueDate,
            "FeePayerFullName" => $this->feePayerFullName,
            "FeePayerTaxNumber" => $this->feePayerTaxNumber,
            "FeePayerMail" => $this->feePayerMail,
            "FeePayerPhone" => $this->feePayerPhone,
            "FeePayerBank" => $this->feePayerBank,
            "FeePayerBankBranch" => $this->feePayerBankBranch,
            "FeePayerBankAccount" => $this->feePayerBankAccount,
            "FeePayerBankAccountDigit" => $this->feePayerBankAccountDigit,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
            "RateValue" => $this->rateValue,
        ];
    }

    /**
     * @return object
     */
    public function generateBoletoOut(): object
    {
        return $this->call('GenerateBoletoOut', $this->toArray());
    }

    /**
     * @param int $documentNumber
     *
     * @return object
     */
    public function getBoletoOutById(int $documentNumber): object
    {
        return $this->call(
            'GetBoletoOutById',
            array_filter(['DocumentNumber' => $documentNumber], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @param string $barcode
     *
     * @return object
     */
    public function getBoletoOutByBarcode(string $barcode): object
    {
        return $this->call(
            'GetBoletoOutByBarcode',
            array_filter(['Barcode' => $barcode], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @param int $documentNumber
     *
     * @return object
     */
    public function cancelBoletoOut(int $documentNumber): object
    {
        return $this->call(
            'CancelBoletoOut',
            array_filter(['DocumentNumber' => $documentNumber], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @param string $barcode
     *
     * @return object
     */
    public function getInfosByBarcode(string $barcode): object
    {
        return $this->call(
            'GetInfosByBarcode',
            array_filter(['Barcode' => $barcode], function ($v) {
                return !is_null($v);
            })
        );
    }

    /**
     * @param string $taxNumber
     * @param string $barcode
     *
     * @return object
     */
    public function getInfosCIPByBarcode(string $taxNumber, string $barcode): object
    {
        return $this->call(
            'GetInfosCIPByBarcode',
            array_filter([
                "TaxNumber" => $taxNumber,
                "Barcode" => $barcode
            ], function ($v) {
                return !is_null($v);
            })
        );

    }
}
