<?php

namespace two_plug\sdk_fitbank;

class Account
{
    private AccountHolder $holder;
    private string $bank;
    private string $bankBranch;
    private string $bankAccount;
    private string $bankAccountDigit;
    private array $documents;
    private array $addresses;
    private array $persons;


    /**
     * @return AccountHolder
     */
    public function getHolder(): AccountHolder
    {
        return $this->holder;
    }

    /**
     * @param AccountHolder $holder
     */
    public function setHolder(AccountHolder $holder): void
    {
        $this->holder = $holder;
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
        $this->documents[] = $document->__toArray();
        return $this;
    }

    /**
     * @param Address $address
     * @return $this
     */
    public function addAddresse(Address $address): static
    {
        $this->addresses[] = $address->__toArray();
        return $this;
    }

    /**
     * @param Person $person
     * @return $this
     */
    public function addPerson(Person $person): static
    {
        $this->addresses[] = $person->__toArray();
        return $this;
    }

    /**
     * @return array|null
     */
    public function toArray(): ?array
    {
        return array_filter([
            "PersonName" => $this->holder->getName(),
            "PhoneNumber" => $this->holder->getPhoneNumber(),
            "TaxNumber" => $this->holder->getTaxNumber(),
            "Mail" => $this->holder->getMail(),
            "IdentityDocument" => $this->holder->getIdentityDocument(),
            "MotherFullName" => $this->holder->getMotherFullName(),
            "FatherFullName" => $this->holder->getFatherFullName(),
            "Nationality" => $this->holder->getNationality(),
            "BirthState" => $this->holder->getBirthState(),
            "Gender" => $this->holder->getGender(),
            "MaritalStatus" => $this->holder->getMaritalStatus(),
            "SpouseName" => $this->holder->getSpouseName(),
            "Occupation" => $this->holder->getOccupation(),
            "BirthDate" => $this->holder->getBirthDate(),
            "PubliclyExposedPerson" => $this->holder->getPubliclyExposedPerson(),
            "CompanyType" => $this->holder->getCompanyType(),
            "IsCompany" => $this->holder->getIsCompany(),
            "Nickname" => $this->holder->getNickname(),
            "CheckPendingTransfers" => $this->holder->getCheckPendingTransfers(),
            "CompanyActivity" => $this->holder->getCompanyActivity(),
            "ConstitutionDate" => $this->holder->getConstitutionDate(),
            "Bank" => $this->bank,
            "BankBranch" => $this->bankBranch,
            "BankAccount" => $this->bankAccount,
            "BankAccountDigit" => $this->bankAccountDigit,
            "Addresses" => array_filter($this->addresses),
            "Documents" => array_filter($this->documents),
            "Persons" => array_filter($this->persons)
        ]);
    }
}