<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Collection;

use O4l3x4ndr3\SdkFitbank\Common\AccountInfo;
use O4l3x4ndr3\SdkFitbank\Common\Beneficiary;
use O4l3x4ndr3\SdkFitbank\Common\ContactInfo;

class CollectionPayer extends Beneficiary
{
    private ?float $splitValue;
    private ?string $name;
    private ?string $nickname;
    private ?string $legalName;
    private ?string $tradingName;
    private ?string $birthDate;
    private ?string $constitutionDate;
    private ?ContactInfo $contactInfo;
    private ?AccountInfo $accountInfo;
    public function __construct()
    {
        parent::__construct();
        $this->splitValue = null;
        $this->name = null;
        $this->nickname = null;
        $this->legalName = null;
        $this->tradingName = null;
        $this->birthDate = null;
        $this->constitutionDate = null;
        $this->contactInfo = null;
        $this->accountInfo = null;
    }

    public function getSplitValue(): ?float
    {
        return $this->splitValue;
    }

    public function setSplitValue(?float $splitValue): void
    {
        $this->splitValue = $splitValue;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    public function setLegalName(?string $legalName): void
    {
        $this->legalName = $legalName;
    }

    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }

    public function setTradingName(?string $tradingName): void
    {
        $this->tradingName = $tradingName;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getConstitutionDate(): ?string
    {
        return $this->constitutionDate;
    }

    public function setConstitutionDate(?string $constitutionDate): void
    {
        $this->constitutionDate = $constitutionDate;
    }

    public function getContactInfo(): ?ContactInfo
    {
        return $this->contactInfo;
    }

    public function setContactInfo(?ContactInfo $contactInfo): void
    {
        $this->contactInfo = $contactInfo;
    }

    public function getAccountInfo(): ?AccountInfo
    {
        return $this->accountInfo;
    }

    public function setAccountInfo(?AccountInfo $accountInfo): void
    {
        $this->accountInfo = $accountInfo;
    }
    public function toArray(): array
    {
        return array_filter([
            "SplitValue" => $this->splitValue,
            "Name" => $this->name,
            "Nickname" => $this->nickname,
            "LegalName" => $this->legalName,
            "TradingName" => $this->tradingName,
            "BirthDate" => $this->birthDate,
            "ConstitutionDate" => $this->constitutionDate,
            "ReceiverContactInfo" => $this->contactInfo->toArray(),
            "ReceiverAccountInfo" => $this->accountInfo->toArray()
        ], function ($v) {
            return !empty($v);
        });
    }
}
