<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

use TwoPlug\SdkFitbank\Common\Address;
use TwoPlug\SdkFitbank\Configuration;

class NominalCard
{
    private Configuration $configuration;

    private string $identifierProduct;
    private string $cardUsageType;
    private string $cardOwnerTaxNumber;
    private string $cardOwnerFullName;
    private string $cardOwnerMail;
    private string $cardOwnerPhone;
    private string $cardHolderTaxNumber;
    private string $cardHolderNationality;
    private string $cardHolderMotherName;
    private string $cardHolderGender;
    private string $cardHolderFullName;
    private string $cardHolderBirthDate;
    private string $cardHolderMaritalStatus;
    private string $cardHolderContactMail;
    private string $cardHolderContactPhone;
    private Address $cardDeliveryAddress;
    private Address $billingAddress;

    /**
     * @param string|null $identifierProduct
     * @param string|null $cardUsageType
     * @param string|null $cardOwnerTaxNumber
     * @param string|null $cardOwnerFullName
     * @param string|null $cardOwnerMail
     * @param string|null $cardOwnerPhone
     * @param string|null $cardHolderTaxNumber
     * @param string|null $cardHolderNationality
     * @param string|null $cardHolderMotherName
     * @param string|null $cardHolderGender
     * @param string|null $cardHolderFullName
     * @param string|null $cardHolderBirthDate
     * @param string|null $cardHolderMaritalStatus
     * @param string|null $cardHolderContactMail
     * @param string|null $cardHolderContactPhone
     * @param Address|null $cardDeliveryAddress
     * @param Address|null $billingAddress
     */
    public function __construct(?string  $identifierProduct = null,
                                ?string  $cardUsageType = null,
                                ?string  $cardOwnerTaxNumber = null,
                                ?string  $cardOwnerFullName = null,
                                ?string  $cardOwnerMail = null,
                                ?string  $cardOwnerPhone = null,
                                ?string  $cardHolderTaxNumber = null,
                                ?string  $cardHolderNationality = null,
                                ?string  $cardHolderMotherName = null,
                                ?string  $cardHolderGender = null,
                                ?string  $cardHolderFullName = null,
                                ?string  $cardHolderBirthDate = null,
                                ?string  $cardHolderMaritalStatus = null,
                                ?string  $cardHolderContactMail = null,
                                ?string  $cardHolderContactPhone = null,
                                ?Address $cardDeliveryAddress = null,
                                ?Address $billingAddress = null)
    {
        $this->configuration = new Configuration();

        $this->identifierProduct = $identifierProduct;
        $this->cardUsageType = $cardUsageType;
        $this->cardOwnerTaxNumber = $cardOwnerTaxNumber;
        $this->cardOwnerFullName = $cardOwnerFullName;
        $this->cardOwnerMail = $cardOwnerMail;
        $this->cardOwnerPhone = $cardOwnerPhone;
        $this->cardHolderTaxNumber = $cardHolderTaxNumber;
        $this->cardHolderNationality = $cardHolderNationality;
        $this->cardHolderMotherName = $cardHolderMotherName;
        $this->cardHolderGender = $cardHolderGender;
        $this->cardHolderFullName = $cardHolderFullName;
        $this->cardHolderBirthDate = $cardHolderBirthDate;
        $this->cardHolderMaritalStatus = $cardHolderMaritalStatus;
        $this->cardHolderContactMail = $cardHolderContactMail;
        $this->cardHolderContactPhone = $cardHolderContactPhone;
        $this->cardDeliveryAddress = $cardDeliveryAddress;
        $this->billingAddress = $billingAddress;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    /**
     * @return string
     */
    public function getIdentifierProduct(): string
    {
        return $this->identifierProduct;
    }

    /**
     * @param string $identifierProduct
     */
    public function setIdentifierProduct(string $identifierProduct): void
    {
        $this->identifierProduct = $identifierProduct;
    }

    /**
     * @return string
     */
    public function getCardUsageType(): string
    {
        return $this->cardUsageType;
    }

    /**
     * @param string $cardUsageType
     */
    public function setCardUsageType(string $cardUsageType): void
    {
        $this->cardUsageType = $cardUsageType;
    }

    /**
     * @return string
     */
    public function getCardOwnerTaxNumber(): string
    {
        return $this->cardOwnerTaxNumber;
    }

    /**
     * @param string $cardOwnerTaxNumber
     */
    public function setCardOwnerTaxNumber(string $cardOwnerTaxNumber): void
    {
        $this->cardOwnerTaxNumber = $cardOwnerTaxNumber;
    }

    /**
     * @return string
     */
    public function getCardOwnerFullName(): string
    {
        return $this->cardOwnerFullName;
    }

    /**
     * @param string $cardOwnerFullName
     */
    public function setCardOwnerFullName(string $cardOwnerFullName): void
    {
        $this->cardOwnerFullName = $cardOwnerFullName;
    }

    /**
     * @return string
     */
    public function getCardOwnerMail(): string
    {
        return $this->cardOwnerMail;
    }

    /**
     * @param string $cardOwnerMail
     */
    public function setCardOwnerMail(string $cardOwnerMail): void
    {
        $this->cardOwnerMail = $cardOwnerMail;
    }

    /**
     * @return string
     */
    public function getCardOwnerPhone(): string
    {
        return $this->cardOwnerPhone;
    }

    /**
     * @param string $cardOwnerPhone
     */
    public function setCardOwnerPhone(string $cardOwnerPhone): void
    {
        $this->cardOwnerPhone = $cardOwnerPhone;
    }

    /**
     * @return string
     */
    public function getCardHolderTaxNumber(): string
    {
        return $this->cardHolderTaxNumber;
    }

    /**
     * @param string $cardHolderTaxNumber
     */
    public function setCardHolderTaxNumber(string $cardHolderTaxNumber): void
    {
        $this->cardHolderTaxNumber = $cardHolderTaxNumber;
    }

    /**
     * @return string
     */
    public function getCardHolderNationality(): string
    {
        return $this->cardHolderNationality;
    }

    /**
     * @param string $cardHolderNationality
     */
    public function setCardHolderNationality(string $cardHolderNationality): void
    {
        $this->cardHolderNationality = $cardHolderNationality;
    }

    /**
     * @return string
     */
    public function getCardHolderMotherName(): string
    {
        return $this->cardHolderMotherName;
    }

    /**
     * @param string $cardHolderMotherName
     */
    public function setCardHolderMotherName(string $cardHolderMotherName): void
    {
        $this->cardHolderMotherName = $cardHolderMotherName;
    }

    /**
     * @return string
     */
    public function getCardHolderGender(): string
    {
        return $this->cardHolderGender;
    }

    /**
     * @param string $cardHolderGender
     */
    public function setCardHolderGender(string $cardHolderGender): void
    {
        $this->cardHolderGender = $cardHolderGender;
    }

    /**
     * @return string
     */
    public function getCardHolderFullName(): string
    {
        return $this->cardHolderFullName;
    }

    /**
     * @param string $cardHolderFullName
     */
    public function setCardHolderFullName(string $cardHolderFullName): void
    {
        $this->cardHolderFullName = $cardHolderFullName;
    }

    /**
     * @return string
     */
    public function getCardHolderBirthDate(): string
    {
        return $this->cardHolderBirthDate;
    }

    /**
     * @param string $cardHolderBirthDate
     */
    public function setCardHolderBirthDate(string $cardHolderBirthDate): void
    {
        $this->cardHolderBirthDate = $cardHolderBirthDate;
    }

    /**
     * @return string
     */
    public function getCardHolderMaritalStatus(): string
    {
        return $this->cardHolderMaritalStatus;
    }

    /**
     * @param string $cardHolderMaritalStatus
     */
    public function setCardHolderMaritalStatus(string $cardHolderMaritalStatus): void
    {
        $this->cardHolderMaritalStatus = $cardHolderMaritalStatus;
    }

    /**
     * @return string
     */
    public function getCardHolderContactMail(): string
    {
        return $this->cardHolderContactMail;
    }

    /**
     * @param string $cardHolderContactMail
     */
    public function setCardHolderContactMail(string $cardHolderContactMail): void
    {
        $this->cardHolderContactMail = $cardHolderContactMail;
    }

    /**
     * @return string
     */
    public function getCardHolderContactPhone(): string
    {
        return $this->cardHolderContactPhone;
    }

    /**
     * @param string $cardHolderContactPhone
     */
    public function setCardHolderContactPhone(string $cardHolderContactPhone): void
    {
        $this->cardHolderContactPhone = $cardHolderContactPhone;
    }

    /**
     * @return Address
     */
    public function getCardDeliveryAddress(): Address
    {
        return $this->cardDeliveryAddress;
    }

    /**
     * @param Address $cardDeliveryAddress
     */
    public function setCardDeliveryAddress(Address $cardDeliveryAddress): void
    {
        $this->cardDeliveryAddress = $cardDeliveryAddress;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     */
    public function setBillingAddress(Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "IdentifierProduct" => $this->identifierProduct,
            "CardUsageType" => $this->cardUsageType,
            "CardOwner" => [
                "OwnerTaxNumber" => $this->cardOwnerTaxNumber,
                "FullName" => $this->cardOwnerFullName,
                "Mail" => $this->cardOwnerMail,
                "Phone" => $this->cardOwnerPhone
            ],
            "CardHolder" => [
                "HolderTaxNumber" => $this->cardHolderTaxNumber,
                "Nationality" => $this->cardHolderNationality,
                "MotherName" => $this->cardHolderMotherName,
                "Gender" => $this->cardHolderGender,
                "FullName" => $this->cardHolderFullName,
                "BirthDate" => $this->cardHolderBirthDate,
                "MaritalStatus" => $this->cardHolderMaritalStatus
            ],
            "CardHolderContact" => [
                "Mail" => $this->cardHolderContactMail,
                "Phone" => $this->cardHolderContactPhone
            ],
            "CardDeliveryAddress" => $this->cardDeliveryAddress->toArray(),
            "BillingAddress" => $this->billingAddress->toArray()
        ];
    }

    /**
     * @param NominalCard $card
     * @return object
     */
    public function requestCard(?NominalCard $card = null): object
    {
        $http = new CallApi($this->configuration);
        $data = (isset($card)) ? $card->toArray() : $this->toArray();
        return $http->call('RequestCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @return object
     */
    public function confirmCardRequest(string $IdentifierCard): object
    {
        $http = new CallApi($this->configuration);
        $data = ["IdentifierCard" => $IdentifierCard];
        return $http->call('ConfirmCardRequest', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @return object
     */
    public function getCardByIdentifierCard(string $IdentifierCard): object
    {
        $http = new CallApi($this->configuration);
        $data = ["IdentifierCard" => $IdentifierCard];
        return $http->call('GetCardByIdentifierCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param int $Action
     * @return object
     */
    public function getCardActionStatus(string $IdentifierCard, int $Action): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "Action" => $Action
        ];
        return $http->call('GetCardActionStatus', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @return object
     */
    public function activateCard(string $IdentifierCard): object
    {
        $http = new CallApi($this->configuration);
        $data = ["IdentifierCard" => $IdentifierCard];
        return $http->call('ActivateCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param string $Pin
     * @param int $Reason
     * @return object
     */
    public function blockCard(string $IdentifierCard, string $Pin, int $Reason): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "Pin" => $Pin,
            "ReasonCode" => $Reason
        ];
        return $http->call('BlockCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param string $Pin
     * @return object
     */
    public function unblockCard(string $IdentifierCard, string $Pin): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "Pin" => $Pin
        ];
        return $http->call('UnblockCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param string $CurrentPin
     * @param string $Pin
     * @param string $PinCheck
     * @return object
     */
    public function changePinCard(string $IdentifierCard, string $CurrentPin, string $Pin, string $PinCheck): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "CurrentPin" => $CurrentPin,
            "Pin" => $Pin,
            "PinCheck" => $PinCheck,
        ];
        return $http->call('ChangePinCard', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param int $ConsumeType
     * @return object
     */
    public function updateConsumeType(string $IdentifierCard, int $ConsumeType): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "ConsumeType" => $ConsumeType
        ];
        return $http->call('UpdateConsumeType', array_filter($data));
    }

    /**
     * @param string $IdentifierCard
     * @param string $Pin
     * @param int $ReasonCode
     * @return object
     */
    public function inactivateAndReissueCard(string $IdentifierCard, string $Pin, int $ReasonCode): object
    {
        $http = new CallApi($this->configuration);
        $data = [
            "IdentifierCard" => $IdentifierCard,
            "Pin" => $Pin,
            "ReasonCode" => $ReasonCode
        ];
        return $http->call('InactivateAndReissueCard', array_filter($data));
    }
}