<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Person {
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

	public function __construct()
	{
		$this->name = NULL;
		$this->taxNumber = NULL;
		$this->mail = NULL;
		$this->personRoleType = NULL;
		$this->birthDate = NULL;
		$this->occupation = NULL;
		$this->phone = NULL;
		$this->motherFullName = NULL;
		$this->fatherFullName = NULL;
		$this->nationality = NULL;
		$this->birthCity = NULL;
		$this->birthState = NULL;
		$this->gender = NULL;
		$this->maritalStatus = NULL;
		$this->spouseName = NULL;
		$this->identityDocument = NULL;
		$this->personName = NULL;
		$this->phoneNumber = NULL;
		$this->nickname = NULL;
		$this->publiclyExposedPerson = NULL;
		$this->personDocuments = NULL;
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
	 * @return Person
	 */
	public function setName(?string $name): self
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
	 * @return Person
	 */
	public function setTaxNumber(?string $taxNumber): self
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
	 * @return Person
	 */
	public function setOccupation(?string $occupation): self
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
	 * @return Person
	 */
	public function setMail(?string $mail): self
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
	 * @return Person
	 */
	public function setPhone(?string $phone): self
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
	 * @return Person
	 */
	public function setPhoneNumber(?string $phoneNumber): self
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
	 * @return Person
	 */
	public function setPersonRoleType(?int $personRoleType): self
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
	 * @return Person
	 */
	public function setMotherFullName(?string $motherFullName): self
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
	 * @return Person
	 */
	public function setFatherFullName(?string $fatherFullName): self
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
	 * @return Person
	 */
	public function setNationality(?string $nationality): self
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
	 * @return Person
	 */
	public function setBirthCity(?string $birthCity): self
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
	 * @param string|null $birthState
	 * @return Person
	 */
	public function setBirthState(?string $birthState): self
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
	 * @return Person
	 */
	public function setBirthDate(?string $birthDate): self
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
	 * @return Person
	 */
	public function setGender(?int $gender): self
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
	 * @return Person
	 */
	public function setMaritalStatus(?int $maritalStatus): self
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
	 * @return Person
	 */
	public function setSpouseName(?string $spouseName): self
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
	 * @return Person
	 */
	public function setIdentityDocument(?string $identityDocument): self
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
	 * @return Person
	 */
	public function setPersonName(?string $personName): self
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
	 * @return Person
	 */
	public function setNickname(?string $nickname): self
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
	 * @return Person
	 */
	public function setPubliclyExposedPerson(?bool $publiclyExposedPerson): self
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
	 * @return Person
	 */
	public function addPersonDocuments(Document $document): self
	{
		$this->personDocuments[] = $document;
		return $this;
	}

	/**
	 * @return array
	 */
	public function toArray(): array
	{
		$_documents = [];
		if (isset($this->personDocuments))
		{
			foreach ($this->personDocuments as $document)
			{
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
