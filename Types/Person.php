<?php

namespace two_plug\sdk_fitbank;

class Person
{
    private string $name;
    private string $taxNumber;
    private string $occupation;
    private string $mail;
    private string $phone;
    private string $phoneNumber;
    private int $personRoleType;
    private string $motherFullName;
    private string $fatherFullName;
    private string $nationality;
    private string $birthCity;
    private string $birthState;
    private string $birthDate;
    private int $gender;
    private int $maritalStatus;
    private string $spouseName;
    private string $identityDocument;
    private string $personName;
    private string $nickname;
    private bool $publiclyExposedPerson;
    private array $personDocuments;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTaxNumber(): string
    {
        return $this->taxNumber;
    }

    /**
     * @param string $taxNumber
     */
    public function setTaxNumber(string $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getPersonRoleType(): int
    {
        return $this->personRoleType;
    }

    /**
     * @param int $personRoleType
     */
    public function setPersonRoleType(int $personRoleType): void
    {
        $this->personRoleType = $personRoleType;
    }

    /**
     * @return string
     */
    public function getMotherFullName(): string
    {
        return $this->motherFullName;
    }

    /**
     * @param string $motherFullName
     */
    public function setMotherFullName(string $motherFullName): void
    {
        $this->motherFullName = $motherFullName;
    }

    /**
     * @return string
     */
    public function getFatherFullName(): string
    {
        return $this->fatherFullName;
    }

    /**
     * @param string $fatherFullName
     */
    public function setFatherFullName(string $fatherFullName): void
    {
        $this->fatherFullName = $fatherFullName;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality(string $nationality): void
    {
        $this->nationality = $nationality;
    }

    /**
     * @return string
     */
    public function getBirthCity(): string
    {
        return $this->birthCity;
    }

    /**
     * @param string $birthCity
     */
    public function setBirthCity(string $birthCity): void
    {
        $this->birthCity = $birthCity;
    }

    /**
     * @return string
     */
    public function getBirthState(): string
    {
        return $this->birthState;
    }

    /**
     * @param string $birthState
     */
    public function setBirthState(string $birthState): void
    {
        $this->birthState = $birthState;
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return int
     */
    public function getMaritalStatus(): int
    {
        return $this->maritalStatus;
    }

    /**
     * @param int $maritalStatus
     */
    public function setMaritalStatus(int $maritalStatus): void
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * @return string
     */
    public function getSpouseName(): string
    {
        return $this->spouseName;
    }

    /**
     * @param string $spouseName
     */
    public function setSpouseName(string $spouseName): void
    {
        $this->spouseName = $spouseName;
    }

    /**
     * @return string
     */
    public function getIdentityDocument(): string
    {
        return $this->identityDocument;
    }

    /**
     * @param string $identityDocument
     */
    public function setIdentityDocument(string $identityDocument): void
    {
        $this->identityDocument = $identityDocument;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getPersonName(): string
    {
        return $this->personName;
    }

    /**
     * @param string $personName
     */
    public function setPersonName(string $personName): void
    {
        $this->personName = $personName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return bool
     */
    public function getPubliclyExposedPerson(): bool
    {
        return $this->publiclyExposedPerson;
    }

    /**
     * @param bool $publiclyExposedPerson
     */
    public function setPubliclyExposedPerson(bool $publiclyExposedPerson): void
    {
        $this->publiclyExposedPerson = $publiclyExposedPerson;
    }

    /**
     * @return array
     */
    public function getPersonDocuments(): array
    {
        return $this->personDocuments;
    }

    /**
     * @param Document $personDocuments
     * @return Person
     */
    public function addPersonDocuments(Document $personDocuments): static
    {
        $this->personDocuments[] = $personDocuments->toArray();
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
            "Mail" => $this->mail,
            "Occupation" => $this->occupation,
            "Phone" => $this->phone,
            "PersonRoleType" => $this->personRoleType,
            "MotherFullName" => $this->motherFullName,
            "FatherFullName" => $this->fatherFullName,
            "Nationality" => $this->nationality,
            "BirthCity" => $this->birthState,
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
            "PersonDocuments" => $this->personDocuments
        ];
    }
}