<?php

namespace TwoPlug\SdkFitbank\Common;

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
        ?string $occupation = null,
        ?string $phone = null,
        ?int    $personRoleType = null,
        ?string $motherFullName = null,
        ?string $fatherFullName = null,
        ?string $nationality = null,
        ?string $birthCity = null,
        ?string $birthState = null,
        ?int    $gender = null,
        ?int    $maritalStatus = null,
        ?string $spouseName = null,
        ?string $identityDocument = null,
        ?string $birthDate = null,
        ?string $personName = null,
        ?string $phoneNumber = null,
        ?string $nickname = null,
        ?bool   $publiclyExposedPerson = null,
        ?array  $personDocuments = null
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
        $this->personDocuments[] = $personDocuments;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $_documents = [];

        if (isset($this->personDocuments)) {
            foreach ($this->personDocuments as $document) {
                $_documents[] = $document->toArray();
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