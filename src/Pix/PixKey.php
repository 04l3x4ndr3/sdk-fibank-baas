<?php

namespace O4l3x4ndr3\SdkFitbank\Pix;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

/**
 * @description
 */
class PixKey extends CallApi
{
    private const CONTEXT = "payments";

    private ?string $pixKeyValue;
    private ?string $taxNumber;
    private ?string $pixKeyType;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;


    public function __construct(Configuration $config = null)
    {
        parent::__construct($config);

        $this->pixKeyValue = null;
        $this->taxNumber = null;
        $this->pixKeyType = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
    }

    /**
     * @description
     * @return string|null
     */
    public function getPixKey(): ?string
    {
        return $this->pixKeyValue;
    }

    /**
     * @description
     *
     * @param string|null $pixKeyValue
     *
     * @return PixKey
     */
    public function setPixKeyValue(?string $pixKeyValue): self
    {
        $this->pixKeyValue = $pixKeyValue;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * @description
     *
     * @param string|null $taxNumber
     *
     * @return PixKey
     */
    public function setTaxNumber(?string $taxNumber): self
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getPixKeyType(): ?string
    {
        return $this->pixKeyType;
    }

    /**
     * @description
     *
     * @param string|null $pixKeyType
     *
     * @return PixKey
     */
    public function setPixKeyType(?string $pixKeyType): self
    {
        $this->pixKeyType = $pixKeyType;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @description
     *
     * @param string|null $bank
     *
     * @return PixKey
     */
    public function setBank(?string $bank): self
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankBranch(): ?string
    {
        return $this->bankBranch;
    }

    /**
     * @description
     *
     * @param string|null $bankBranch
     *
     * @return PixKey
     */
    public function setBankBranch(?string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    /**
     * @description
     *
     * @param string|null $bankAccount
     *
     * @return PixKey
     */
    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @description
     * @return string|null
     */
    public function getBankAccountDigit(): ?string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @description
     *
     * @param string|null $bankAccountDigit
     *
     * @return PixKey
     */
    public function setBankAccountDigit(?string $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @description
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
     * @description This method can be used to create a PIX key that is registered to an account.
     * @document https://dev.fitbank.com.br/reference/217
     *
     * @return object
     * @throws GuzzleException
     */
    public function create(): object
    {
        return $this->call(
            'CreatePixKey',
            array_filter([
                "PixKey" => $this->pixKeyValue,
                "TaxNumber" => $this->taxNumber,
                "PixKeyType" => $this->pixKeyType,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description This method has can be used of Confirming the Validation of Pix Key Ownership.
     * @document https://dev.fitbank.com.br/reference/268
     *
     * @param string $confirmationCode
     *
     * @return object
     * @throws GuzzleException
     */
    public function confirmHold(string $confirmationCode): object
    {
        $data = $this->toArray();
        $data["ConfirmationCode"] = $confirmationCode;
        return $this->call(
            'ConfirmPixKeyHold',
            array_filter($data, function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description This method can be used to code Resend for Pix Key Ownership Validation.
     * @document https://dev.fitbank.com.br/reference/269
     *
     * @return object
     * @throws GuzzleException
     */
    public function resendToken(): object
    {
        $data = $this->toArray();
        return $this->call(
            'ResendPixKeyToken',
            array_filter(
                $data,
                function ($v) {
                    return $v !== null;
                }
            ),
            self::CONTEXT
        );
    }

    /**
     * @description This method can be used to Get Pix Key Status.
     * @document https://dev.fitbank.com.br/reference/243
     *
     * @return object
     * @throws GuzzleException
     */
    public function getStatus(): object
    {
        return $this->call(
            'GetPixKeyStatus',
            array_filter([
                "PixKey" => $this->pixKeyValue,
                "PixKeyType" => $this->pixKeyType,
                "TaxNumber" => $this->taxNumber,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description This method can be used for Pix Key Lookup.
     * @document https://dev.fitbank.com.br/reference/273
     *
     * @return object
     * @throws GuzzleException
     */
    public function getInfos(): object
    {
        return $this->call(
            'GetInfosPixKey',
            array_filter([
                "PixKey" => $this->pixKeyValue,
                "TaxNumber" => $this->taxNumber,
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description This method can be used to cancel a PIX key that is registered to an account.
     * @document https://dev.fitbank.com.br/reference/cancelpixkey
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancel(): object
    {
        return $this->call(
            'CancelPixKey',
            array_filter([
                "PixKey" => $this->pixKeyValue,
                "TaxNumber" => $this->taxNumber,
                "PixKeyType" => $this->pixKeyType,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description This method can be used for pix key change.
     * @document https://dev.fitbank.com.br/reference/295
     *
     * @param string $toBusinessUnitId
     * @param string $toBank
     * @param string $toBankBranch
     * @param string $toBankAccount
     * @param string $toBankAccountDigit
     *
     * @return object
     * @throws GuzzleException
     */
    public function change(
        string $toBusinessUnitId,
        string $toBank,
        string $toBankBranch,
        string $toBankAccount,
        string $toBankAccountDigit
    ): object
    {
        return $this->call(
            'ChangePixKey',
            array_filter([
                "TaxNumber" => $this->taxNumber,
                "FromBank" => $this->bank,
                "FromBankBranch" => $this->bankBranch,
                "FromBankAccount" => $this->bankAccount,
                "FromBankAccountDigit" => $this->bankAccountDigit,
                "PixKey" => $this->pixKeyValue,
                "ToBusinessUnitId" => $toBusinessUnitId,
                "ToBank" => $toBank,
                "ToBankBranch" => $toBankBranch,
                "ToBankAccount" => $toBankAccount,
                "ToBankAccountDigit" => $toBankAccountDigit,
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @description
     * @return object
     * @throws GuzzleException
     */
    public function getKeys(): object
    {
        return $this->call(
            'GetPixKeys',
            array_filter([
                "TaxNumber" => $this->taxNumber,
                "Bank" => $this->bank,
                "BankBranch" => $this->bankBranch,
                "BankAccount" => $this->bankAccount,
                "BankAccountDigit" => $this->bankAccountDigit,
            ], function ($v) {
                return $v !== null;
            }),
            self::CONTEXT
        );
    }

    /**
     * @param string $pixKey
     * @param int $pixKeyType
     * @param string $taxNumber
     * @param bool $confirmation
     * @return object
     */
    public function replyExternalPixKeyClaim(
        string $pixKey,
        int $pixKeyType,
        string $taxNumber,
        bool $confirmation
    ): object {
        return $this->call('ReplyExternalPixKeyClaim', array_filter(
            [
                "PixKey" => $pixKey,
                "PixKeyType" => $pixKeyType,
                "TaxNumber" => $taxNumber,
                "Confirmation" => $confirmation
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
    public function cancelPixKeyClaim(
        string $pixKey,
        string $taxNumber,
        int $pixKeyType,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit
    ): object {
        return $this->call('CancelPixKeyClaim', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PixKeyType" => $pixKeyType,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $pixKey
     * @param string $taxNumber
     * @param int $pixKeyType
     * @param string $bank
     * @param string $bankBranch
     * @param string $bankAccount
     * @param string $bankAccountDigit
     * @return object
     */
    public function claimPixKey(
        string $pixKey,
        string $taxNumber,
        int $pixKeyType,
        string $bank,
        string $bankBranch,
        string $bankAccount,
        string $bankAccountDigit
    ): object {
        return $this->call('ClaimPixKey', array_filter(
            [
                "PixKey" => $pixKey,
                "TaxNumber" => $taxNumber,
                "PixKeyType" => $pixKeyType,
                "Bank" => $bank,
                "BankBranch" => $bankBranch,
                "BankAccount" => $bankAccount,
                "BankAccountDigit" => $bankAccountDigit
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}
