<?php
namespace O4l3x4ndr3\SdkFitbank\Common;

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

    private ?bool $wasSigned;
    private ?string $signatureDate;

    public function __construct()
    {
        $this->name = null;
        $this->taxNumber = null;
        $this->mail = null;
        $this->personRoleType = null;
        $this->birthDate = null;
        $this->occupation = null;
        $this->phone = null;
        $this->motherFullName = null;
        $this->fatherFullName = null;
        $this->nationality = null;
        $this->birthCity = null;
        $this->birthState = null;
        $this->gender = null;
        $this->maritalStatus = null;
        $this->spouseName = null;
        $this->identityDocument = null;
        $this->personName = null;
        $this->phoneNumber = null;
        $this->nickname = null;
        $this->publiclyExposedPerson = null;
        $this->personDocuments = null;
        $this->wasSigned = true;
        $this->signatureDate = date('Y-m-d\TH:i:s');
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
     *
     * @return Person
     */
    public function setName(?string $name):Person
    {
        $this->name = $name;
        return $this;
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
     *
     * @return Person
     */
    public function setTaxNumber(?string $taxNumber):Person
    {
        $this->taxNumber = $taxNumber;
        return $this;
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
     *
     * @return Person
     */
    public function setOccupation(?string $occupation):Person
    {
        $this->occupation = $occupation;
        return $this;
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
     *
     * @return Person
     */
    public function setMail(?string $mail):Person
    {
        $this->mail = $mail;
        return $this;
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
     *
     * @return Person
     */
    public function setPhone(?string $phone):Person
    {
        $this->phone = $phone;
        return $this;
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
     *
     * @return Person
     */
    public function setPhoneNumber(?string $phoneNumber):Person
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
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
     *
     * @return Person
     */
    public function setPersonRoleType(?int $personRoleType):Person
    {
        $this->personRoleType = $personRoleType;
        return $this;
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
     *
     * @return Person
     */
    public function setMotherFullName(?string $motherFullName):Person
    {
        $this->motherFullName = $motherFullName;
        return $this;
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
     *
     * @return Person
     */
    public function setFatherFullName(?string $fatherFullName):Person
    {
        $this->fatherFullName = $fatherFullName;
        return $this;
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
     *
     * @return Person
     */
    public function setNationality(?string $nationality):Person
    {
        $this->nationality = $nationality;
        return $this;
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
     *
     * @return Person
     */
    public function setBirthCity(?string $birthCity):Person
    {
        $this->birthCity = $birthCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthState(): ?string
    {
        return $this->birthState;
    }

    /**
     * @param int|null $birthState
     *
     * @return Person
     */
    public function setBirthState(?string $birthState):Person
    {
        $this->birthState = $birthState;
        return $this;
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
     *
     * @return Person
     */
    public function setBirthDate(?string $birthDate):Person
    {
        $this->birthDate = $birthDate;
        return $this;
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
     *
     * @return Person
     */
    public function setGender(?int $gender):Person
    {
        $this->gender = $gender;
        return $this;
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
     *
     * @return Person
     */
    public function setMaritalStatus(?int $maritalStatus):Person
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
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
     *
     * @return Person
     */
    public function setSpouseName(?string $spouseName):Person
    {
        $this->spouseName = $spouseName;
        return $this;
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
     *
     * @return Person
     */
    public function setIdentityDocument(?string $identityDocument):Person
    {
        $this->identityDocument = $identityDocument;
        return $this;
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
     *
     * @return Person
     */
    public function setPersonName(?string $personName):Person
    {
        $this->personName = $personName;
        return $this;
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
     *
     * @return Person
     */
    public function setNickname(?string $nickname):Person
    {
        $this->nickname = $nickname;
        return $this;
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
     *
     * @return Person
     */
    public function setPubliclyExposedPerson(?bool $publiclyExposedPerson):Person
    {
        $this->publiclyExposedPerson = $publiclyExposedPerson;
        return $this;
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
     *
     * @return Person
     */
    public function addPersonDocuments(Document $document):Person
    {
        $this->personDocuments[] = $document;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWasSigned(): ?bool
    {
        return $this->wasSigned;
    }

    /**
     * @param bool|null $wasSigned
     *
     * @return Person
     */
    public function setWasSigned(?bool $wasSigned): Person
    {
        $this->wasSigned = $wasSigned;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignatureDate(): ?string
    {
        return $this->signatureDate;
    }

    /**
     * @param string|null $signatureDate
     *
     * @return Person
     */
    public function setSignatureDate(?string $signatureDate): Person
    {
        $this->signatureDate = $signatureDate;
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
                $_documents[] = array_filter($document->toArray(), function ($v) {
                    return !is_null($v);
                });
            }
        }

        return array_filter([
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
        ], function ($v) {
            return $v !== null;
        });
    }
}
