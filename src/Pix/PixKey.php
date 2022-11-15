<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class PixKey
{
    private Configuration $configuration;
    private ?string $pixKeyValue;
    private ?string $taxNumber;
    private ?string $pixKeyType;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;

    /**
     * @param string|null $pixKey
     * @param string|null $taxNumber
     * @param string|null $pixKeyType
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     */
    public function __construct(
        ?string $pixKeyValue = null,
        ?string $taxNumber = null,
        ?string $pixKeyType = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null
    ) {
        $this->configuration = new Configuration();
        $this->pixKeyValue = $pixKeyValue;
        $this->taxNumber = $taxNumber;
        $this->pixKeyType = $pixKeyType;
        $this->bank = $bank;
        $this->bankBranch = $bankBranch;
        $this->bankAccount = $bankAccount;
        $this->bankAccountDigit = $bankAccountDigit;
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
    public function getPixKey(): ?string
    {
        return $this->pixKeyValue;
    }

    /**
     * @param string|null $pixKey
     */
    public function setPixKeyValue(?string $pixKeyValue): void
    {
        $this->pixKeyValue = $pixKeyValue;
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
    public function getPixKeyType(): ?string
    {
        return $this->pixKeyType;
    }

    /**
     * @param string|null $pixKeyType
     */
    public function setPixKeyType(?string $pixKeyType): void
    {
        $this->pixKeyType = $pixKeyType;
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
     */
    public function setBank(?string $bank): void
    {
        $this->bank = $bank;
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
     */
    public function setBankBranch(?string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
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
     */
    public function setBankAccount(?string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
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
     */
    public function setBankAccountDigit(?string $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "PixKey" => $this->pixKeyValue,
            "TaxNumber" => $this->taxNumber,
            "PixKeyType" => $this->pixKeyType,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
        ];
    }

    /**
     * @description This method can be used to created a PIX key that is registered to an account.
     * @document https://dev.fitbank.com.br/reference/217
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function createPixKey(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;

        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "TaxNumber" => $_->taxNumber,
            "PixKeyType" => $_->pixKeyType,
            "Bank" => $_->bank,
            "BankBranch" => $_->bankBranch,
            "BankAccount" => $_->bankAccount,
            "BankAccountDigit" => $_->bankAccountDigit
        ], function ($v) {
            return $v !== null;
        });

        return $http->call('CreatePixKey', $data);
    }

    /**
     * @description This method has can be used of Confirming the Validation of Pix Key Ownership.
     * @document https://dev.fitbank.com.br/reference/268
     * @param PixKey|null $pixKey
     * @param string $ConfirmationCode
     * @return object
     * @throws GuzzleException
     */
    public function confirmPixKeyHold(string $ConfirmationCode, ?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "PixKeyType" => $_->pixKeyType,
            "TaxNumber" => $_->taxNumber,
            "ConfirmationCode" => $ConfirmationCode,
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('ConfirmPixKeyHold', $data);
    }

    /**
     * @description This method can be used to code Resend for Pix Key Ownership Validation.
     * @document https://dev.fitbank.com.br/reference/269
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function resendPixKeyToken(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "PixKeyType" => $_->pixKeyType,
            "TaxNumber" => $_->taxNumber
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('ResendPixKeyToken', $data);
    }

    /**
     * @description This method can be used to Get Pix Key Status.
     * @document https://dev.fitbank.com.br/reference/243
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function getPixKeyStatus(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "PixKeyType" => $_->pixKeyType,
            "TaxNumber" => $_->taxNumber,
            "Bank" => $_->bank,
            "BankBranch" => $_->bankBranch,
            "BankAccount" => $_->bankAccount,
            "BankAccountDigit" => $_->bankAccountDigit
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('GetPixKeyStatus', $data);
    }

    /**
     * @description This method can be used for Pix Key Lookup.
     * @document https://dev.fitbank.com.br/reference/273
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function getInfosPixKey(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "TaxNumber" => $_->taxNumber,
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('GetInfosPixKey', $data);
    }

    /**
     * @description This method can be used to cancel a PIX key that is registered to an account.
     * @document https://dev.fitbank.com.br/reference/cancelpixkey
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function cancelPixKey(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "PixKey" => $_->pixKeyValue,
            "TaxNumber" => $_->taxNumber,
            "PixKeyType" => $_->pixKeyType,
            "Bank" => $_->bank,
            "BankBranch" => $_->bankBranch,
            "BankAccount" => $_->bankAccount,
            "BankAccountDigit" => $_->bankAccountDigit
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('CancelPixKey', $data);
    }

    /**
     * @description This method can be used for pix key change.
     * @document https://dev.fitbank.com.br/reference/295
     * @param string $ToBusinessUnitId
     * @param string $ToBank
     * @param string $ToBankBranch
     * @param string $ToBankAccount
     * @param string $ToBankAccountDigit
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function changePixKey(
        string $ToBusinessUnitId,
        string $ToBank,
        string $ToBankBranch,
        string $ToBankAccount,
        string $ToBankAccountDigit,
        ?PixKey $pixKey = null
    ): object {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "TaxNumber" => $_->taxNumber,
            "FromBank" => $_->bank,
            "FromBankBranch" => $_->bankBranch,
            "FromBankAccount" => $_->bankAccount,
            "FromBankAccountDigit" => $_->bankAccountDigit,
            "PixKey" => $_->pixKeyValue,
            "ToBusinessUnitId" => $ToBusinessUnitId,
            "ToBank" => $ToBank,
            "ToBankBranch" => $ToBankBranch,
            "ToBankAccount" => $ToBankAccount,
            "ToBankAccountDigit" => $ToBankAccountDigit,
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('ChangePixKey', $data);
    }

    /**
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function getPixKeys(PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $_ = $pixKey ?? $this;
        $data = array_filter([
            "TaxNumber" => $_->taxNumber,
            "Bank" => $_->bank,
            "BankBranch" => $_->bankBranch,
            "BankAccount" => $_->bankAccount,
            "BankAccountDigit" => $_->bankAccountDigit,
        ], function ($v) {
            return $v !== null;
        });
        return $http->call('GetPixKeys', $data);
    }
}