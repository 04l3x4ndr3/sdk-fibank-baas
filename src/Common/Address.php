<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Address
{
    private ?string $addressLine;
    private ?string $addressLine2;
    private ?string $zipCode;
    private ?string $neighborhood;
    private ?int $cityCode;
    private ?string $cityName;
    private ?string $state;
    private ?int $addressType;
    private ?string $country;
    private ?string $complement;
    private ?string $reference;

    public function __construct(
        ?string $addressLine = null,
        ?string $addressLine2 = null,
        ?string $zipCode = null,
        ?string $neighborhood = null,
        ?int $cityCode = null,
        ?string $cityName = null,
        ?string $state = null,
        ?int $addressType = null,
        ?string $country = null,
        ?string $complement = null,
        ?string $reference = null
    )
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
        $this->reference = $reference;
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
     *
     * @return Address
     */
    public function setAddressLine(?string $addressLine): self
    {
        $this->addressLine = $addressLine;
        return $this;
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
     *
     * @return Address
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;
        return $this;
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
     *
     * @return Address
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
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
     *
     * @return Address
     */
    public function setNeighborhood(?string $neighborhood): self
    {
        $this->neighborhood = $neighborhood;
        return $this;
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
     *
     * @return Address
     */
    public function setCityCode(?int $cityCode): self
    {
        $this->cityCode = $cityCode;
        return $this;
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
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
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
     *
     * @return Address
     */
    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
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
     *
     * @return Address
     */
    public function setAddressType(?int $addressType): self
    {
        $this->addressType = $addressType;
        return $this;
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
     *
     * @return Address
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
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
     *
     * @return Address
     */
    public function setComplement(?string $complement): self
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string|null $reference
     *
     * @return Address
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function toArray(): array
    {
        return array_filter([
            "AddressLine" => $this->addressLine,
            //"Line" => $this->addressLine,
            "AddressLine2" => $this->addressLine2,
            //"Line2" => $this->addressLine2,
            "ZipCode" => $this->zipCode,
            "Neighborhood" => $this->neighborhood,
            "CityCode" => $this->cityCode,
            "CityName" => $this->cityName,
            "State" => $this->state,
            //"AddressType" => $this->addressType,
            //"Type" => $this->addressType,
            "Country" => $this->country,
            "Complement" => $this->complement,
            "Reference" => $this->reference
        ], function ($v) {
            return $v !== null;
        });
    }
}
