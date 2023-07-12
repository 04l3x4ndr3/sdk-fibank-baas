<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class AccountHolder extends Person
{
    private ?int $companyType;
    private ?int $isCompany;
    private ?bool $checkPendingTransfers;
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
    private ?bool $wasSigned;
    private ?string $signatureDate;

    public function __construct()
    {
        parent::__construct();
        $this->companyType = null;
        $this->isCompany = null;
        $this->checkPendingTransfers = null;
        $this->companyActivity = null;
        $this->constitutionDate = null;
        $this->monthlyIncome = null;
        $this->bank = null;
        $this->bankBranch = null;
        $this->bankAccount = null;
        $this->bankAccountDigit = null;
        $this->documents = null;
        $this->addresses = null;
        $this->persons = null;
        $this->wasSigned = true;
        $this->signatureDate = date('Y-m-d\TH:i:s');
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
     *
     * @return AccountHolder
     */
    public function setCompanyType(int $companyType): self
    {
        $this->companyType = $companyType;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setIsCompany(int $isCompany): self
    {
        $this->isCompany = $isCompany;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckPendingTransfers(): bool
    {
        return $this->checkPendingTransfers;
    }

    /**
     * @param int $checkPendingTransfers
     */
    public function setCheckPendingTransfers(bool $checkPendingTransfers): self
    {
        $this->checkPendingTransfers = $checkPendingTransfers;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setCompanyActivity(string $companyActivity): self
    {
        $this->companyActivity = $companyActivity;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setConstitutionDate(string $constitutionDate): self
    {
        $this->constitutionDate = $constitutionDate;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setMonthlyIncome(?string $monthlyIncome): self
    {
        $this->monthlyIncome = $monthlyIncome;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setDocuments(array $documents): self
    {
        $this->documents = $documents;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setAddresses(array $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setPersons(array $persons): self
    {
        $this->persons = $persons;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setBank(string $bank): self
    {
        $this->bank = $bank;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setBankBranch(string $bankBranch): self
    {
        $this->bankBranch = $bankBranch;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setBankAccount(string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
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
     *
     * @return AccountHolder
     */
    public function setBankAccountDigit(string $bankAccountDigit): self
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param Document $document
     *
     * @return $this
     */
    public function addDocument(Document $document): self
    {
        $this->documents[] = $document;
        return $this;
    }

    /**
     * @param Address $address
     *
     * @return $this
     */
    public function addAddresse(Address $address): self
    {
        $this->addresses[] = $address;
        return $this;
    }

    /**
     * @param Person $person
     *
     * @return $this
     */
    public function addPerson(Person $person): self
    {
        $this->persons[] = $person;
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
        $_addresses = null;
        $_documents = null;
        $_persons = null;

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

        return array_filter([
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
            "MonthlyIncome" => $this->monthlyIncome,
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "Addresses" => $_addresses,
            "Documents" => $_documents,
            "Persons" => $_persons,
            "WasSigned" => $this->wasSigned,
            "SignatureDate" => $this->signatureDate
        ], function ($v) {
            return $v !== null;
        });
    }
}
