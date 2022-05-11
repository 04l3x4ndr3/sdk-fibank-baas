<?php

namespace two_plug\sdk_fitbank;

class LimitedAccount
{
    private string $name;
    private string $nickname;
    private string $phone;
    private string $birthDate;
    private string $taxNumber;
    private string $mail;
    private string $legalName;
    private string $constitutionDate;
    private array $persons;

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
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param string $legalName
     */
    public function setLegalName(string $legalName): void
    {
        $this->legalName = $legalName;
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
     * @return array
     */
    public function getPersons(): array
    {
        return $this->persons;
    }

    /**
     * @param Person $persons
     * @return LimitedAccount
     */
    public function addPersons(Person $persons): static
    {
        $this->persons[] = $persons;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "Name" => $this->name,
            "Nickname" => $this->nickname,
            "Phone" => $this->phone,
            "BirthDate" => $this->birthDate,
            "TaxNumber" => $this->taxNumber,
            "Mail" => $this->mail,
            "LegalName" => $this->legalName,
            "ConstitutionDate" => $this->constitutionDate,
            "Person" => array_filter($this->persons)
        ]);
    }
}