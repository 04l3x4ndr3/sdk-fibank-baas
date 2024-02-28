<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Beneficiary
{
    private ?string $name;
    private ?int $gender;
    private ?int $maritalStatus;
    private ?string $motherFullName;
    private ?string $occupation;
    private ?string $nationality;
    private ?string $country;
    private ?string $birthCity;
    private ?string $birthState;
    private ?string $birthDate;
    private ?int $companyType;
    private ?string $companyActivity;
    private ?string $constitutionDate;
    private ?ContactInfo $contactInfo;
    private ?AccountInfo $accountInfo;

    public function __construct()
    {
        $this->name = null;
        $this->birthDate = null;
        $this->occupation = null;
        $this->motherFullName = null;
        $this->nationality = null;
        $this->country = null;
        $this->birthCity = null;
        $this->birthState = null;
        $this->gender = null;
        $this->maritalStatus = null;
        $this->companyType = null;
        $this->companyActivity = null;
        $this->constitutionDate = null;
        $this->contactInfo = null;
        $this->accountInfo = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): void
    {
        $this->gender = $gender;
    }

    public function getMaritalStatus(): ?int
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(?int $maritalStatus): void
    {
        $this->maritalStatus = $maritalStatus;
    }

    public function getMotherFullName(): ?string
    {
        return $this->motherFullName;
    }

    public function setMotherFullName(?string $motherFullName): void
    {
        $this->motherFullName = $motherFullName;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): void
    {
        $this->occupation = $occupation;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): void
    {
        $this->nationality = $nationality;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    public function setBirthCity(?string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    public function getBirthState(): ?string
    {
        return $this->birthState;
    }

    public function setBirthState(?string $birthState): void
    {
        $this->birthState = $birthState;
    }

    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getCompanyType(): ?int
    {
        return $this->companyType;
    }

    public function setCompanyType(?int $companyType): void
    {
        $this->companyType = $companyType;
    }

    public function getCompanyActivity(): ?string
    {
        return $this->companyActivity;
    }

    public function setCompanyActivity(?string $companyActivity): void
    {
        $this->companyActivity = $companyActivity;
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
            "Name" => $this->name,
            "Gender" => $this->gender,
            "MaritalStatus" => $this->maritalStatus,
            "Occupation" => $this->occupation,
            "Nationality" => $this->nationality,
            "Country" => $this->country,
            "BirthCity" => $this->birthCity,
            "BirthState" => $this->birthState,
            "BirthDate" => $this->birthDate,
            "CompanyType" => $this->companyType,
            "CompanyActivity" => $this->companyActivity,
            "ConstitutionDate" => $this->constitutionDate,
            "ContactInfo" => $this->contactInfo->toArray(),
            "AccountInfo" => $this->accountInfo->toArray()
        ], function ($v) {
            return $v !== null;
        });
    }
}
