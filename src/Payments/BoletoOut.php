<?php

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class BoletoOut
{
    private Configuration $configuration;
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

    /**
     * @param string|null $name
     * @param string|null $taxNumber
     * @param string|null $barcode
     * @param string|null $beneficiaryName
     * @param string|null $guarantorTaxNumber
     * @param string|null $guarantorName
     * @param string|null $payerTaxNumber
     * @param string|null $payerName
     * @param string|null $mailToSend
     * @param string|null $phoneToSend
     * @param float|null  $principalValue
     * @param float|null  $discountValue
     * @param float|null  $extraValue
     * @param string|null $paymentDate
     * @param string|null $dueDate
     * @param string|null $feePayerFullName
     * @param string|null $feePayerTaxNumber
     * @param string|null $feePayerMail
     * @param string|null $feePayerPhone
     * @param int|null    $feePayerBank
     * @param string|null $feePayerBankBranch
     * @param string|null $feePayerBankAccount
     * @param string|null $feePayerBankAccountDigit
     * @param array|null  $tags
     * @param string|null $description
     * @param string|null $identifier
     * @param int         $rateValueType
     * @param int         $rateValue
     */
    public function __construct(
        ?string $name = null,
        ?string $taxNumber = null,
        ?string $barcode = null,
        ?string $beneficiaryName = null,
        ?string $guarantorTaxNumber = null,
        ?string $guarantorName = null,
        ?string $payerTaxNumber = null,
        ?string $payerName = null,
        ?string $mailToSend = null,
        ?string $phoneToSend = null,
        ?float $principalValue = null,
        ?float $discountValue = null,
        ?float $extraValue = null,
        ?string $paymentDate = null,
        ?string $dueDate = null,
        ?string $feePayerFullName = null,
        ?string $feePayerTaxNumber = null,
        ?string $feePayerMail = null,
        ?string $feePayerPhone = null,
        ?int $feePayerBank = null,
        ?string $feePayerBankBranch = null,
        ?string $feePayerBankAccount = null,
        ?string $feePayerBankAccountDigit = null,
        ?array $tags = [],
        ?string $description = null,
        ?string $identifier = null,
        int $rateValueType = 0,
        int $rateValue = 0
    )
    {
        $this->configuration = new Configuration();

        $this->name = $name;
        $this->taxNumber = $taxNumber;
        $this->barcode = $barcode;
        $this->beneficiaryName = $beneficiaryName;
        $this->guarantorTaxNumber = $guarantorTaxNumber;
        $this->guarantorName = $guarantorName;
        $this->payerTaxNumber = $payerTaxNumber;
        $this->payerName = $payerName;
        $this->mailToSend = $mailToSend;
        $this->phoneToSend = $phoneToSend;
        $this->principalValue = $principalValue;
        $this->discountValue = $discountValue;
        $this->extraValue = $extraValue;
        $this->paymentDate = $paymentDate;
        $this->dueDate = $dueDate;
        $this->feePayerFullName = $feePayerFullName;
        $this->feePayerTaxNumber = $feePayerTaxNumber;
        $this->feePayerMail = $feePayerMail;
        $this->feePayerPhone = $feePayerPhone;
        $this->feePayerBank = $feePayerBank;
        $this->feePayerBankBranch = $feePayerBankBranch;
        $this->feePayerBankAccount = $feePayerBankAccount;
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
        $this->tags = $tags;
        $this->description = $description;
        $this->identifier = $identifier;
        $this->rateValueType = $rateValueType;
        $this->rateValue = $rateValue;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     */
    public function setTaxNumber(?string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
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
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
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
     */
    public function setBeneficiaryName(?string $beneficiaryName): void
    {
        $this->beneficiaryName = $beneficiaryName;
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
     */
    public function setGuarantorTaxNumber(?string $guarantorTaxNumber): void
    {
        $this->guarantorTaxNumber = $guarantorTaxNumber;
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
     */
    public function setGuarantorName(?string $guarantorName): void
    {
        $this->guarantorName = $guarantorName;
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
     */
    public function setPayerTaxNumber(?string $payerTaxNumber): void
    {
        $this->payerTaxNumber = $payerTaxNumber;
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
     */
    public function setPayerName(?string $payerName): void
    {
        $this->payerName = $payerName;
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
     * @return float|null
     */
    public function getPrincipalValue(): ?float
    {
        return $this->principalValue;
    }

    /**
     * @param float|null $principalValue
     */
    public function setPrincipalValue(?float $principalValue): void
    {
        $this->principalValue = $principalValue;
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
     */
    public function setDiscountValue(?float $discountValue): void
    {
        $this->discountValue = $discountValue;
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
     */
    public function setExtraValue(?float $extraValue): void
    {
        $this->extraValue = $extraValue;
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
     */
    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
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
     * @return string|null
     */
    public function getFeePayerFullName(): ?string
    {
        return $this->feePayerFullName;
    }

    /**
     * @param string|null $feePayerFullName
     */
    public function setFeePayerFullName(?string $feePayerFullName): void
    {
        $this->feePayerFullName = $feePayerFullName;
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
     */
    public function setFeePayerTaxNumber(?string $feePayerTaxNumber): void
    {
        $this->feePayerTaxNumber = $feePayerTaxNumber;
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
     */
    public function setFeePayerMail(?string $feePayerMail): void
    {
        $this->feePayerMail = $feePayerMail;
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
     */
    public function setFeePayerPhone(?string $feePayerPhone): void
    {
        $this->feePayerPhone = $feePayerPhone;
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
     */
    public function setFeePayerBank(?int $feePayerBank): void
    {
        $this->feePayerBank = $feePayerBank;
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
     */
    public function setFeePayerBankBranch(?string $feePayerBankBranch): void
    {
        $this->feePayerBankBranch = $feePayerBankBranch;
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
     */
    public function setFeePayerBankAccount(?string $feePayerBankAccount): void
    {
        $this->feePayerBankAccount = $feePayerBankAccount;
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
     */
    public function setFeePayerBankAccountDigit(
        ?string $feePayerBankAccountDigit
    ): void
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
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
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
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
     * @return int
     */
    public function getRateValueType(): int
    {
        return $this->rateValueType;
    }

    /**
     * @param int $rateValueType
     */
    public function setRateValueType(int $rateValueType): void
    {
        $this->rateValueType = $rateValueType;
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
     */
    public function setRateValue(int $rateValue): void
    {
        $this->rateValue = $rateValue;
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
     * @param BoletoOut $boleto
     *
     * @return object
     * @throws GuzzleException
     */
    public function generateBoletoOut(?BoletoOut $boleto = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($boleto)) ? $boleto->toArray() : $this->toArray();
        return $http->call('GenerateBoletoOut', array_filter($data));
    }

    /**
     * @param string $DocumentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoOutById(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('GetBoletoOutById', array_filter($data));
    }

    /**
     * @param string $Barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getBoletoOutByBarcode(string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = ['Barcode' => $Barcode];
        return $http->call('GetBoletoOutByBarcode', array_filter($data));
    }

    /**
     * @param string $DocumentNumber
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelBoletoOut(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('CancelBoletoOut', array_filter($data));
    }

    /**
     * @param string $Barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfosByBarcode(string $Barcode): object
    {
        $http = new CallApi($this->configuration);
        $data = ['Barcode' => $Barcode];
        return $http->call('GetInfosByBarcode', array_filter($data));
    }

    /**
     * @param string $TaxNumber
     * @param string $Barcode
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfosCIPByBarcode(string $TaxNumber, string $Barcode
    ): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "Barcode" => $Barcode
        ];
        return $http->call('GetInfosCIPByBarcode', array_filter($data));

    }
}
