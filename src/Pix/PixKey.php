<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class PixKey
{
    private Configuration $configuration;
    private string $pixKey;
    private string $taxNumber;
    private string $pixKeyType;
    private string $bank;
    private string $bankBranch;
    private string $bankAccount;
    private string $bankAccountDigit;

    /**
     * @param string|null $pixKey
     * @param string|null $taxNumber
     * @param string|null $pixKeyType
     * @param string|null $bank
     * @param string|null $bankBranch
     * @param string|null $bankAccount
     * @param string|null $bankAccountDigit
     */
    public function __construct(?string $pixKey = null,
                                ?string $taxNumber = null,
                                ?string $pixKeyType = null,
                                ?string $bank = null,
                                ?string $bankBranch = null,
                                ?string $bankAccount = null,
                                ?string $bankAccountDigit = null)
    {
        $this->configuration = new Configuration();

        $this->pixKey = $pixKey;
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
        return $this->pixKey;
    }

    /**
     * @param string|null $pixKey
     */
    public function setPixKey(?string $pixKey): void
    {
        $this->pixKey = $pixKey;
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

    public function toArray(): array
    {
        return [
            "PixKey" => $this->pixKey,
            "TaxNumber" => $this->taxNumber,
            "PixKeyType" => $this->pixKeyType,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
        ];
    }

    /**
     * @param PixKey|null $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function createPixKey(?PixKey $pixKey = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($pixKey)) ? $pixKey->toArray() : $this->toArray();
        return $http->call('CreatePixKey', $data);
    }

    /**
     * @param string $PixKey
     * @param string $PixKeyType
     * @param string $TaxNumber
     * @param string $ConfirmationCode
     * @return object
     * @throws GuzzleException
     */
    public function confirmPixKeyHold(string $PixKey, string $PixKeyType, string $TaxNumber, string $ConfirmationCode): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "PixKey" => $PixKey,
            "PixKeyType" => $PixKeyType,
            "TaxNumber" => $TaxNumber,
            "ConfirmationCode" => $ConfirmationCode,
        ];
        return $http->call('ConfirmPixKeyHold', $data);
    }

    /**
     * @param string $TaxNumber
     * @param string $PixKey
     * @param string $PixKeyType
     * @return object
     * @throws GuzzleException
     */
    public function resendPixKeyToken(string $TaxNumber, string $PixKey, string $PixKeyType): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "PixKey" => $PixKey,
            "PixKeyType" => $PixKeyType
        ];
        return $http->call('ResendPixKeyToken', $data);
    }

    /**
     * @param PixKey $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function getPixKeyStatus(PixKey $pixKey): object
    {
        $http = new CallApi($this->configuration);
        $data = $pixKey->toArray();
        return $http->call('GetPixKeyStatus', $data);
    }

    /**
     * @param string $TaxNumber
     * @param string $PixKey
     * @return object
     * @throws GuzzleException
     */
    public function getInfosPixKey(string $TaxNumber, string $PixKey): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "PixKey" => $PixKey,
        ];
        return $http->call('GetInfosPixKey', $data);
    }

    /**
     * @param PixKey $pixKey
     * @return object
     * @throws GuzzleException
     */
    public function cancelPixKey(PixKey $pixKey): object
    {
        $http = new CallApi($this->configuration);
        $data = $pixKey->toArray();
        return $http->call('CancelPixKey', $data);
    }

    /**
     * @param string $TaxNumber
     * @param string $PixKey
     * @param string $FromBank
     * @param string $FromBankBranch
     * @param string $FromBankAccount
     * @param string $FromBankAccountDigit
     * @param string $ToBusinessUnitId
     * @param string $ToBank
     * @param string $ToBankBranch
     * @param string $ToBankAccount
     * @param string $ToBankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function changePixKey(string $TaxNumber,
                                 string $PixKey,
                                 string $FromBank,
                                 string $FromBankBranch,
                                 string $FromBankAccount,
                                 string $FromBankAccountDigit,
                                 string $ToBusinessUnitId,
                                 string $ToBank,
                                 string $ToBankBranch,
                                 string $ToBankAccount,
                                 string $ToBankAccountDigit,
    ): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber,
            "FromBank" => $PixKey,
            "FromBankBranch" => $FromBank,
            "FromBankAccount" => $FromBankBranch,
            "FromBankAccountDigit" => $FromBankAccount,
            "PixKey" => $FromBankAccountDigit,
            "ToBusinessUnitId" => $ToBusinessUnitId,
            "ToBank" => $ToBank,
            "ToBankBranch" => $ToBankBranch,
            "ToBankAccount" => $ToBankAccount,
            "ToBankAccountDigit" => $ToBankAccountDigit,
        ];
        return $http->call('ChangePixKey', $data);
    }

    /**
     * @param string|null $TaxNumber
     * @param string|null $Bank
     * @param string|null $BankBranch
     * @param string|null $BankAccount
     * @param string|null $BankAccountDigit
     * @return object
     * @throws GuzzleException
     */
    public function getPixKeys(
        ?string $TaxNumber = null,
        ?string $Bank = null,
        ?string $BankBranch = null,
        ?string $BankAccount = null,
        ?string $BankAccountDigit = null
    ): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "TaxNumber" => $TaxNumber ?? $this->taxNumber,
            "Bank" => $Bank ?? $this->bank,
            "BankBranch" => $BankBranch ?? $this->bankBranch,
            "BankAccount" => $BankAccount ?? $this->bankAccount,
            "BankAccountDigit" => $BankAccountDigit ?? $this->bankAccountDigit,
        ];
        return $http->call('GetPixKeys', $data);
    }
}