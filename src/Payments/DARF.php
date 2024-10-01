<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Payments;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class DARF
{
    private Configuration $configuration;

    private ?string $taxNumber;
    private ?int $fromBank;
    private ?string $fromBankBranch;
    private ?string $fromBankAccount;
    private ?string $fromBankAccountDigit;
    private ?int $DARFType;
    private ?string $calculationPeriod;
    private ?int $codeRevenue;
    private ?string $contributorTaxNumber;
    private ?string $referenceNumber;
    private ?string $dueDate;
    private ?float $grossRevenueValue;
    private ?float $grossRevenuePercentage;
    private ?float $principalValue;
    private ?float $fineValue;
    private ?float $interestValue;
    private ?string $paymentDate;
    private ?array $tags;
    private ?string $description;
    private ?string $identifier;
    private ?int $rateValueType;

    /**
     */
    public function __construct()
    {
        $this->configuration = new Configuration();

        $this->taxNumber = null;
        $this->fromBank = null;
        $this->fromBankBranch = null;
        $this->fromBankAccount = null;
        $this->fromBankAccountDigit = null;
        $this->DARFType = null;
        $this->calculationPeriod = null;
        $this->codeRevenue = null;
        $this->contributorTaxNumber = null;
        $this->referenceNumber = null;
        $this->dueDate = null;
        $this->grossRevenueValue = null;
        $this->grossRevenuePercentage = null;
        $this->principalValue = null;
        $this->fineValue = null;
        $this->interestValue = null;
        $this->paymentDate = null;
        $this->tags = null;
        $this->description = null;
        $this->identifier = null;
        $this->rateValueType = null;
    }


    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @description Generates a DARF payment.
     * @document https://dev.fitbank.com.br/reference/26-1
     * @return object
     * @throws GuzzleException
     */
    public function generatePaymentDARF(): object
    {
        $http = new CallApi($this->configuration);
        $data = $this->toArray();
        return $http->call('GeneratePaymentDARF', array_filter($data));
    }

    /**
     * @description Returns a DARF payment by document number.
     * @document https://dev.fitbank.com.br/reference/35-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function getDarfOutById(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('GetDARFOutById', array_filter($data));
    }

    /**
     * @description Returns a DARF payment by informations.
     * @document https://dev.fitbank.com.br/reference/47-1
     * @param string $dueDate
     * @param string $principalValue
     * @param string $taxContributor
     * @param string $referenceNumber
     * @param string $calculationPeriod
     * @return object
     * @throws GuzzleException
     */
    public function getDARFOutByInformations(
        string $dueDate,
        string $principalValue,
        string $taxContributor,
        string $referenceNumber,
        string $calculationPeriod,
    ): object
    {
        return (new CallApi($this->configuration))
            ->call('GetDARFOutByInformations', array_filter(
                [
                    "DueDate" => $dueDate,
                    "PrincipalValue" => $principalValue,
                    "TaxContributor" => $taxContributor,
                    "ReferenceNumber" => $referenceNumber,
                    "CalculationPeriod" => $calculationPeriod
                ],
                function ($v) {
                    return !is_null($v);
                }
            ));
    }

    /**
     * @description Cancels DARF payment by document number.
     * @document https://dev.fitbank.com.br/reference/27-1
     * @param string $DocumentNumber
     * @return object
     * @throws GuzzleException
     */
    public function cancelPaymentDARF(string $DocumentNumber): object
    {
        $http = new CallApi($this->configuration);
        $data = ['DocumentNumber' => $DocumentNumber];
        return $http->call('CancelPaymentDARF', array_filter($data));
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "TaxNumber" => $this->taxNumber,
            "FromBank" => $this->fromBank,
            "FromBankBranch" => $this->fromBankBranch,
            "FromBankAccount" => $this->fromBankAccount,
            "FromBankAccountDigit" => $this->fromBankAccountDigit,
            "DARFType" => $this->DARFType,
            "CalculationPeriod" => $this->calculationPeriod,
            "CodeRevenue" => $this->codeRevenue,
            "ContributorTaxNumber" => $this->contributorTaxNumber,
            "ReferenceNumber" => $this->referenceNumber,
            "DueDate" => $this->dueDate,
            "GrossRevenueValue" => $this->grossRevenueValue,
            "GrossRevenuePercentage" => $this->grossRevenuePercentage,
            "PrincipalValue" => $this->principalValue,
            "FineValue" => $this->fineValue,
            "InterestValue" => $this->interestValue,
            "PaymentDate" => $this->paymentDate,
            "Tags" => $this->tags,
            "Description" => $this->description,
            "Identifier" => $this->identifier,
            "RateValueType" => $this->rateValueType,
        ];
    }
}
