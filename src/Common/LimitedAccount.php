<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class LimitedAccount
{
    private ?string $name;
    private ?string $nickname;
    private ?string $phone;
    private ?string $birthDate;
    private ?string $taxNumber;
    private ?string $mail;
    private ?string $legalName;
    private ?string $constitutionDate;
    private ?array $persons;

    /**
     * @param string|null $name
     * @param string|null $nickname
     * @param string|null $phone
     * @param string|null $birthDate
     * @param string|null $taxNumber
     * @param string|null $mail
     * @param string|null $legalName
     * @param string|null $constitutionDate
     * @param array|null $persons
     */
    public function __construct(?string $name = null,
                                ?string $nickname = null,
                                ?string $phone = null,
                                ?string $birthDate = null,
                                ?string $taxNumber = null,
                                ?string $mail = null,
                                ?string $legalName = null,
                                ?string $constitutionDate = null,
                                ?array  $persons = null)
    {
        $this->name = $name;
        $this->nickname = $nickname;
        $this->phone = $phone;
        $this->birthDate = $birthDate;
        $this->taxNumber = $taxNumber;
        $this->mail = $mail;
        $this->legalName = $legalName;
        $this->constitutionDate = $constitutionDate;
        $this->persons = $persons;
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
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    /**
     * @param string|null $legalName
     */
    public function setLegalName(?string $legalName): void
    {
        $this->legalName = $legalName;
    }

    /**
     * @return string|null
     */
    public function getConstitutionDate(): ?string
    {
        return $this->constitutionDate;
    }

    /**
     * @param string|null $constitutionDate
     */
    public function setConstitutionDate(?string $constitutionDate): void
    {
        $this->constitutionDate = $constitutionDate;
    }

    /**
     * @return array|null
     */
    public function getPersons(): ?array
    {
        return $this->persons;
    }

    /**
     * @param array|null $persons
     */
    public function setPersons(?array $persons): void
    {
        $this->persons = $persons;
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
            "Person" => $this->persons
        ]);
    }
}