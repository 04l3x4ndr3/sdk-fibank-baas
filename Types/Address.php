<?php

namespace two_plug\sdk_fitbank;

class Address
{
    private string $addressLine;
    private string $addressLine2;
    private string $zipCode;
    private string $neighborhood;
    private int $cityCode;
    private string $cityName;
    private string $state;
    private int $addressType;
    private string $country;
    private string $complement;

    public function __construct(string $addressLine = null,
                                string $addressLine2 = null,
                                string $zipCode = null,
                                string $neighborhood = null,
                                int    $cityCode = null,
                                string $cityName = null,
                                string $state = null,
                                int    $addressType = null,
                                string $country = null,
                                string $complement = null)
    {
        $this->addressLine = $addressLine;
        $this->addressLine2 = $addressLine2;
        $this->zipCode = $zipCode;
        $this->neighborhood = $neighborhood;
        $this->cityCode = $cityCode;
        $this->cityName = $cityName;
        $this->state = $state;
        $this->addressType = $addressType;
        $this->country = $country;
        $this->complement = $complement;
    }

    /**
     * @return string|null
     */
    public function getAddressLine(): ?string
    {
        return $this->addressLine;
    }

    /**
     * @param string|null $addressLine
     */
    public function setAddressLine(?string $addressLine): void
    {
        $this->addressLine = $addressLine;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     */
    public function setNeighborhood(?string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * @return int|null
     */
    public function getCityCode(): ?int
    {
        return $this->cityCode;
    }

    /**
     * @param int|null $cityCode
     */
    public function setCityCode(?int $cityCode): void
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string|null $cityName
     */
    public function setCityName(?string $cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return int|null
     */
    public function getAddressType(): ?int
    {
        return $this->addressType;
    }

    /**
     * @param int|null $addressType
     */
    public function setAddressType(?int $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement;
    }

    /**
     * @param string|null $complement
     */
    public function setComplement(?string $complement): void
    {
        $this->complement = $complement;
    }


    public function toArray(): array
    {
        return [
            "AddressLine" => $this->addressLine,
            "AddressLine2" => $this->addressLine2,
            "ZipCode" => $this->zipCode,
            "Neighborhood" => $this->neighborhood,
            "CityCode" => $this->cityCode,
            "CityName" => $this->cityName,
            "State" => $this->state,
            "AddressType" => $this->addressType,
            "Country" => $this->country,
            "Complement" => $this->complement
        ];
    }
}