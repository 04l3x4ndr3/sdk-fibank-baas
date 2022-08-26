<?php

namespace TwoPlug\SdkFitbank\Common;

use TwoPlug\SdkFitbank\Configuration;

class Person
{
    private ?string $name;
    private ?string $taxNumber;
    private ?string $occupation;
    private ?string $mail;
    private ?string $phone;
    private ?string $phoneNumber;
    private ?int $personRoleType;
    private ?string $motherFullName;
    private ?string $fatherFullName;
    private ?string $nationality;
    private ?string $birthCity;
    private ?string $birthState;
    private ?string $birthDate;
    private ?int $gender;
    private ?int $maritalStatus;
    private ?string $spouseName;
    private ?string $identityDocument;
    private ?string $personName;
    private ?string $nickname;
    private ?bool $publiclyExposedPerson;
    private ?array $personDocuments;

    public function __construct(
        ?string $name = null,
        ?string $taxNumber = null,
        ?string $mail = null,
        ?int    $personRoleType = null,
        ?string $birthDate = null,
        ?array  $personDocuments = null,
        ?string $occupation = null,
        ?string $phone = null,
        ?string $motherFullName = null,
        ?string $fatherFullName = null,
        ?string $nationality = null,
        ?string $birthCity = null,
        ?string $birthState = null,
        ?int    $gender = null,
        ?int    $maritalStatus = null,
        ?string $spouseName = null,
        ?string $identityDocument = null,
        ?string $personName = null,
        ?string $phoneNumber = null,
        ?string $nickname = null,
        ?bool   $publiclyExposedPerson = null
    )
    {
        $this->name = $name;
        $this->taxNumber = $taxNumber;
        $this->occupation = $occupation;
        $this->mail = $mail;
        $this->phone = $phone;
        $this->phoneNumber = $phoneNumber;
        $this->personRoleType = $personRoleType;
        $this->motherFullName = $motherFullName;
        $this->fatherFullName = $fatherFullName;
        $this->nationality = $nationality;
        $this->birthCity = $birthCity;
        $this->birthState = $birthState;
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        $this->maritalStatus = $maritalStatus;
        $this->spouseName = $spouseName;
        $this->identityDocument = $identityDocument;
        $this->personName = $personName;
        $this->nickname = $nickname;
        $this->publiclyExposedPerson = $publiclyExposedPerson;
        $this->personDocuments = $personDocuments;
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
    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    /**
     * @param string|null $occupation
     */
    public function setOccupation(?string $occupation): void
    {
        $this->occupation = $occupation;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */
    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return int|null
     */
    public function getPersonRoleType(): ?int
    {
        return $this->personRoleType;
    }

    /**
     * @param int|null $personRoleType
     */
    public function setPersonRoleType(?int $personRoleType): void
    {
        $this->personRoleType = $personRoleType;
    }

    /**
     * @return string|null
     */
    public function getMotherFullName(): ?string
    {
        return $this->motherFullName;
    }

    /**
     * @param string|null $motherFullName
     */
    public function setMotherFullName(?string $motherFullName): void
    {
        $this->motherFullName = $motherFullName;
    }

    /**
     * @return string|null
     */
    public function getFatherFullName(): ?string
    {
        return $this->fatherFullName;
    }

    /**
     * @param string|null $fatherFullName
     */
    public function setFatherFullName(?string $fatherFullName): void
    {
        $this->fatherFullName = $fatherFullName;
    }

    /**
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * @param string|null $nationality
     */
    public function setNationality(?string $nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * @return string|null
     */
    public function getBirthCity(): ?string
    {
        return $this->birthCity;
    }

    /**
     * @param string|null $birthCity
     */
    public function setBirthCity(?string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    /**
     * @return string|null
     */
    public function getBirthState(): ?string
    {
        return $this->birthState;
    }

    /**
     * @param string|null $birthState
     */
    public function setBirthState(?string $birthState): void
    {
        $this->birthState = $birthState;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string|null $birthDate
     */
    public function setBirthDate(?string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }

    /**
     * @param int|null $gender
     */
    public function setGender(?int $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return int|null
     */
    public function getMaritalStatus(): ?int
    {
        return $this->maritalStatus;
    }

    /**
     * @param int|null $maritalStatus
     */
    public function setMaritalStatus(?int $maritalStatus): void
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * @return string|null
     */
    public function getSpouseName(): ?string
    {
        return $this->spouseName;
    }

    /**
     * @param string|null $spouseName
     */
    public function setSpouseName(?string $spouseName): void
    {
        $this->spouseName = $spouseName;
    }

    /**
     * @return string|null
     */
    public function getIdentityDocument(): ?string
    {
        return $this->identityDocument;
    }

    /**
     * @param string|null $identityDocument
     */
    public function setIdentityDocument(?string $identityDocument): void
    {
        $this->identityDocument = $identityDocument;
    }

    /**
     * @return string|null
     */
    public function getPersonName(): ?string
    {
        return $this->personName;
    }

    /**
     * @param string|null $personName
     */
    public function setPersonName(?string $personName): void
    {
        $this->personName = $personName;
    }

    /**
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param string|null $nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return bool|null
     */
    public function getPubliclyExposedPerson(): ?bool
    {
        return $this->publiclyExposedPerson;
    }

    /**
     * @param bool|null $publiclyExposedPerson
     */
    public function setPubliclyExposedPerson(?bool $publiclyExposedPerson): void
    {
        $this->publiclyExposedPerson = $publiclyExposedPerson;
    }

    /**
     * @return array|null
     */
    public function getPersonDocuments(): ?array
    {
        return $this->personDocuments;
    }

    /**
     * @param Document $document
     */
    public function addPersonDocuments(Document $document): void
    {
        $this->personDocuments[] = $document;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $_documents = [];
        if (isset($this->personDocuments)) {
            foreach ($this->personDocuments as $document) {
                $_documents[] = array_filter($document->toArray());
            }
        }

        return [
            "Name" => $this->name,
            "TaxNumber" => $this->taxNumber,
            "Mail" => $this->mail,
            "Occupation" => $this->occupation,
            "Phone" => $this->phone,
            "PersonRoleType" => $this->personRoleType,
            "MotherFullName" => $this->motherFullName,
            "FatherFullName" => $this->fatherFullName,
            "Nationality" => $this->nationality,
            "BirthCity" => $this->birthCity,
            "BirthState" => $this->birthState,
            "Gender" => $this->gender,
            "MaritalStatus" => $this->maritalStatus,
            "SpouseName" => $this->spouseName,
            "IdentityDocument" => $this->identityDocument,
            "BirthDate" => $this->birthDate,
            "PhoneNumber" => $this->phoneNumber,
            "Nickname" => $this->nickname,
            "PersonName" => $this->personName,
            "PubliclyExposedPerson" => $this->publiclyExposedPerson,
            "PersonDocuments" => $_documents
        ];
    }
}