<?php

namespace TwoPlug\SdkFitbank\Common;

use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\OnBoarding\Document;

class AccountHolder extends Person
{
    private Configuration $configuration;

    private ?int $companyType;
    private ?int $isCompany;
    private ?int $checkPendingTransfers;
    private ?string $companyActivity;
    private ?string $constitutionDate;
    private ?string $monthlyIncome;
    private ?string $bank;
    private ?string $bankBranch;
    private ?string $bankAccount;
    private ?string $bankAccountDigit;
    private ?array $documents;
    private ?array $addresses;
    private ?array $persons;

    public function __construct(
        ?string $personName = null,
        ?string $phoneNumber = null,
        ?string $taxNumber = null,
        ?string $mail = null,
        ?string $identityDocument = null,
        ?string $motherFullName = null,
        ?string $fatherFullName = null,
        ?string $nationality = null,
        ?string $birthState = null,
        ?int    $gender = null,
        ?int    $maritalStatus = null,
        ?string $spouseName = null,
        ?string $occupation = null,
        ?string $birthDate = null,
        ?bool   $publiclyExposedPerson = null,
        ?int    $companyType = null,
        ?int    $isCompany = null,
        ?string $nickname = null,
        ?int    $checkPendingTransfers = null,
        ?string $companyActivity = null,
        ?string $constitutionDate = null,
        ?string $monthlyIncome = null,
        ?string $bank = null,
        ?string $bankBranch = null,
        ?string $bankAccount = null,
        ?string $bankAccountDigit = null,
        ?array  $addresses = null,
        ?array  $documents = null,
        ?array  $persons = null,
    )
    {
        parent::__construct(
            $personName,
            $taxNumber,
            $mail,
            $occupation,
            $phoneNumber,
            null,
            $motherFullName,
            $fatherFullName,
            $nationality,
            null,
            $birthState,
            $gender,
            $maritalStatus,
            $spouseName,
            $identityDocument,
            $birthDate,
            $personName,
            $phoneNumber,
            $nickname,
            $publiclyExposedPerson,
            $documents
        );

        $this->configuration = new Configuration();
        $this->companyType = $companyType;
        $this->isCompany = $isCompany;
        $this->checkPendingTransfers = $checkPendingTransfers;
        $this->companyActivity = $companyActivity;
        $this->constitutionDate = $constitutionDate;
        $this->monthlyIncome = $monthlyIncome;
        $this->bank = $bank;
        $this->bankBranch = $bankBranch;
        $this->bankAccount = $bankAccount;
        $this->bankAccountDigit = $bankAccountDigit;
        $this->documents = $documents;
        $this->addresses = $addresses;
        $this->persons = $persons;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }


    /**
     * @return int
     */
    public function getCompanyType(): int
    {
        return $this->companyType;
    }

    /**
     * @param int $companyType
     */
    public function setCompanyType(int $companyType): void
    {
        $this->companyType = $companyType;
    }

    /**
     * @return int
     */
    public function getIsCompany(): int
    {
        return $this->isCompany;
    }

    /**
     * @param int $isCompany
     */
    public function setIsCompany(int $isCompany): void
    {
        $this->isCompany = $isCompany;
    }

    /**
     * @return int
     */
    public function getCheckPendingTransfers(): int
    {
        return $this->checkPendingTransfers;
    }

    /**
     * @param int $checkPendingTransfers
     */
    public function setCheckPendingTransfers(int $checkPendingTransfers): void
    {
        $this->checkPendingTransfers = $checkPendingTransfers;
    }

    /**
     * @return string
     */
    public function getCompanyActivity(): string
    {
        return $this->companyActivity;
    }

    /**
     * @param string $companyActivity
     */
    public function setCompanyActivity(string $companyActivity): void
    {
        $this->companyActivity = $companyActivity;
    }

    /**
     * @return string
     */
    public function getConstitutionDate(): string
    {
        return $this->constitutionDate;
    }

    /**
     * @param string $constitutionDate
     */
    public function setConstitutionDate(string $constitutionDate): void
    {
        $this->constitutionDate = $constitutionDate;
    }

    /**
     * @return string|null
     */
    public function getMonthlyIncome(): ?string
    {
        return $this->monthlyIncome;
    }

    /**
     * @param string|null $monthlyIncome
     */
    public function setMonthlyIncome(?string $monthlyIncome): void
    {
        $this->monthlyIncome = $monthlyIncome;
    }

    /**
     * @return array
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }

    /**
     * @param array $documents
     */
    public function setDocuments(array $documents): void
    {
        $this->documents = $documents;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @return array
     */
    public function getPersons(): array
    {
        return $this->persons;
    }

    /**
     * @param array $persons
     */
    public function setPersons(array $persons): void
    {
        $this->persons = $persons;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     */
    public function setBank(string $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getBankBranch(): string
    {
        return $this->bankBranch;
    }

    /**
     * @param string $bankBranch
     */
    public function setBankBranch(string $bankBranch): void
    {
        $this->bankBranch = $bankBranch;
    }

    /**
     * @return string
     */
    public function getBankAccount(): string
    {
        return $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     */
    public function setBankAccount(string $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string
     */
    public function getBankAccountDigit(): string
    {
        return $this->bankAccountDigit;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function setBankAccountDigit(string $bankAccountDigit): void
    {
        $this->bankAccountDigit = $bankAccountDigit;
    }

    /**
     * @param Document $document
     * @return $this
     */
    public function addDocument(Document $document): static
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * @param Address $address
     * @return $this
     */
    public function addAddresse(Address $address): static
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * @param Person $person
     * @return $this
     */
    public function addPerson(Person $person): static
    {
        $this->persons[] = $person;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $_addresses = [];
        $_documents = [];
        $_persons = [];

        if (isset($this->addresses)) {
            foreach ($this->addresses as $address) {
                $_addresses[] = $address->toArray();
            }
        }

        if (isset($this->documents)) {
            foreach ($this->documents as $document) {
                $_documents[] = $document->toArray();
            }
        }

        if (isset($this->persons)) {
            foreach ($this->persons as $person) {
                $_persons[] = $person->toArray();
            }
        }

        return [
            "PersonName" => parent::getPersonName(),
            "PhoneNumber" => parent::getPhoneNumber(),
            "TaxNumber" => parent::getTaxNumber(),
            "Mail" => parent::getMail(),
            "IdentityDocument" => parent::getIdentityDocument(),
            "MotherFullName" => parent::getMotherFullName(),
            "FatherFullName" => parent::getFatherFullName(),
            "Nationality" => parent::getNationality(),
            "BirthState" => parent::getBirthState(),
            "Gender" => parent::getGender(),
            "MaritalStatus" => parent::getMaritalStatus(),
            "SpouseName" => parent::getSpouseName(),
            "Occupation" => parent::getOccupation(),
            "BirthDate" => parent::getBirthDate(),
            "PubliclyExposedPerson" => parent::getPubliclyExposedPerson(),
            "CompanyType" => $this->companyType,
            "IsCompany" => $this->isCompany,
            "Nickname" => parent::getNickname(),
            "CheckPendingTransfers" => $this->checkPendingTransfers,
            "CompanyActivity" => $this->companyActivity,
            "ConstitutionDate" => $this->constitutionDate,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "Addresses" => array_filter($_addresses),
            "Documents" => array_filter($_documents),
            "Persons" => array_filter($_persons)
        ];
    }
}