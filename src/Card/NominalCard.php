<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

use O4l3x4ndr3\SdkFitbank\Common\CardOwner;
use O4l3x4ndr3\SdkFitbank\Common\ContactInfo;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Common\Address;
use O4l3x4ndr3\SdkFitbank\Configuration;

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

    /**
     * @param string $identifierProduct
     * @param string $usageType
     * @param string $consumeType
     * @param float $amount
     * @param Address $address
     * @return object
     */
    public function requestCardBatch(
        string $identifierProduct,
        string $usageType,
        string $consumeType,
        float $amount,
        Address $address,
    ): object {
        return (new CallApi())->call('RequestCardBatch', array_filter(
            [
                "IdentifierProduct" => $identifierProduct,
                "UsageType" => $usageType,
                "ConsumeType" => $consumeType,
                "Amount" => $amount,
                "Address" => [
                    "Line" => $address->getAddressLine(),
                    "Number" => $address->getAddressLine2(),
                    "Complement" => $address->getComplement(),
                    "Reference" => $address->getReference(),
                    "Neighborhood" => $address->getNeighborhood(),
                    "ZipCode" => $address->getZipCode(),
                    "City" => $address->getCityName(),
                    "State" => $address->getState(),
                    "Country" => $address->getCountry(),
                ],
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param CardOwner $cardOwner
     * @param Address $cardDeliveryAddress
     * @param string $identifierProduct
     * @param string|null $usageType
     * @param string|null $consumeType
     * @return object
     */
    public function requestUnnamedCard(
        CardOwner $cardOwner,
        Address $cardDeliveryAddress,
        string $identifierProduct,
        ?string $usageType,
        ?string $consumeType
    ): object {
        return (new CallApi())->call('RequestUnnamedCard', array_filter(
            [
                "CardOwner" => $cardOwner->ownerToArray(),
                "CardDeliveryAddress" => [
                    "Line" => $cardDeliveryAddress->getAddressLine(),
                    "Number" => $cardDeliveryAddress->getAddressLine2(),
                    "Complement" => $cardDeliveryAddress->getComplement(),
                    "Reference" => $cardDeliveryAddress->getReference(),
                    "Neighborhood" => $cardDeliveryAddress->getNeighborhood(),
                    "ZipCode" => $cardDeliveryAddress->getZipCode(),
                    "City" => $cardDeliveryAddress->getCityName(),
                    "State" => $cardDeliveryAddress->getState(),
                    "Country" => $cardDeliveryAddress->getCountry(),
                ],
                "IdentifierProduct" => $identifierProduct,
                "UsageType" => $usageType,
                "ConsumeType" => $consumeType
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param CardOwner $cardHolder
     * @param ContactInfo $cardHolderContact
     * @param string $identifierCard
     * @param CardOwner|null $cardOwner
     * @param string|null $usageType
     * @return object
     */
    public function bindUnnamedCard(
        CardOwner $cardHolder,
        ContactInfo $cardHolderContact,
        string $identifierCard,
        ?CardOwner $cardOwner,
        ?string $usageType
    ): object {
        return (new CallApi())->call('BindUnnamedCard', array_filter(
            [
                "CardOwner" => $cardOwner->ownerToArray(),
                "CardHolder" => $cardHolder->holderToArray(),
                "CardHolderContact" => $cardHolderContact->toArray(),
                "IdentifierCard" => $identifierCard,
                "UsageType" => $usageType
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @return object
     */
    public function cancelCardRequest(
        string $identifierCard
    ): object {
        return (new CallApi())->call('CancelCardRequest', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Cancela um cartão
     * @param string $identifierCard
     * @param string $pin
     * @return object
     */
    public function cancelCard(
        string $identifierCard,
        string $pin,
    ): object {
        return (new CallApi())->call('CancelCard', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "Pin" => $pin
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Retorna informações de um Lote
     * @param string $cardBatchId
     * @param int $pageSize
     * @param int $index
     * @return object
     */
    public function getCardBatchById(
        string $cardBatchId,
        int $pageSize,
        int $index
    ): object {
        return (new CallApi())->call('GetCardBatchById', array_filter(
            [
                "CardBatchId" => $cardBatchId,
                "PageSize" => $pageSize,
                "Index" => $index
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Consultar saldo do cartão
     * @param string $identifierCard
     * @return object
     */
    public function getCardBalance(
        string $identifierCard
    ): object {
        return (new CallApi())->call('GetCardBalance', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Retorna uma lista de cartões
     * @param int $pageSize
     * @param int $index
     * @return object
     */
    public function listCards(
        int $pageSize,
        int $index
    ): object {
        return (new CallApi())->call('ListCards', array_filter(
            [
                "PageSize" => $pageSize,
                "Index" => $index
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Retorna uma lista de cartões vinculados a um CPF
     * @param string $taxNumber
     * @return object
     */
    public function getCardList(
        string $taxNumber
    ): object {
        return (new CallApi())->call('GetCardList', array_filter(
            [
                "TaxNumber" => $taxNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Consulta movimentações do cartão
     * @param string $identifierCard
     * @param string $initialDate
     * @param string $finalDate
     * @return object
     */
    public function getCardEntry(
        string $identifierCard,
        string $initialDate,
        string $finalDate
    ): object {
        return (new CallApi())->call('GetCardEntry', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "InitialDate" => $initialDate,
                "FinalDate" => $finalDate
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param bool $allow
     * @param string $identifierCard
     * @return object
     */
    public function updateCardContactless(
        bool $allow,
        string $identifierCard
    ): object {
        return (new CallApi())->call('UpdateCardContactless', array_filter(
            [
                "Allow" => $allow,
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string|null $tdentifier
     * @return object
     */
    public function getCardTrackingByIdentifier(
        ?string $identifier
    ): object {
        return (new CallApi())->call('GetCardTrackingByIdentifier', array_filter(
            [
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Cadastra um portador
     * @param NominalCard $cardHolder
     * @return object
     */
    public function createCardHolder(
        NominalCard $cardHolder
    ): object {
        return (new CallApi())->call('CreateCardHolder', array_filter(
            [
                "HolderTaxNumber" => $cardHolder->getCardHolderTaxNumber(),
                "FullName" => $cardHolder->getCardHolderFullName(),
                "MotherName" => $cardHolder->getCardHolderMotherName(),
                "BirthDate" => $cardHolder->getCardHolderBirthDate(),
                "Gender" => $cardHolder->getCardHolderGender(),
                "Nationality" => $cardHolder->getCardHolderNationality(),
                "MaritalStatus" => $cardHolder->getCardHolderMaritalStatus(),
                "Phone" => $cardHolder->getCardHolderContactPhone(),
                "Mail" => $cardHolder->getCardHolderContactMail()
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Atualiza as informações do portador do cartão
     * @param NominalCard $cardHolder
     * @return object
     */
    public function updateCardHolder(
        NominalCard $cardHolder
    ): object {
        return (new CallApi())->call('UpdateCardHolder', array_filter(
            [
                "HolderTaxNumber" => $cardHolder->getCardHolderTaxNumber(),
                "FullName" => $cardHolder->getCardHolderFullName(),
                "MotherName" => $cardHolder->getCardHolderMotherName(),
                "BirthDate" => $cardHolder->getCardHolderBirthDate(),
                "Gender" => $cardHolder->getCardHolderGender(),
                "Nationality" => $cardHolder->getCardHolderNationality(),
                "MaritalStatus" => $cardHolder->getCardHolderMaritalStatus(),
                "Phone" => $cardHolder->getCardHolderContactPhone(),
                "Mail" => $cardHolder->getCardHolderContactMail()
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @return object
     */
    public function getCardHolders(): object {
        return (new CallApi())->call('GetCardHolders', []);
    }

    /**
     * @param string $prepaidCardId
     * @param string $taxNumber
     * @param float $rechargeValue
     * @param string $identifier
     * @param string $description
     * @return object
     */
    public function rechargeCard(
        string $prepaidCardId,
        string $taxNumber,
        float $rechargeValue,
        string $identifier,
        string $description
    ): object {
        return (new CallApi())->call('RechargeCard', array_filter(
            [
                "PrepaidCardId" => $prepaidCardId,
                "TaxNumber" => $taxNumber,
                "RechargeValue" => $rechargeValue,
                "Identifier" => $identifier,
                "Description" => $description
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifier
     * @param string $prepaidCardId
     * @param string|null $taxNumber
     * @param float|null $dischargeValue
     * @return object
     */
    public function dischargeCard(
        string $identifier,
        string $prepaidCardId,
        ?string $taxNumber,
        ?float $dischargeValue
    ): object {
        return (new CallApi())->call('DischargeCard', array_filter(
            [
                "Identifier" => $identifier,
                "PrepaidCardId" => $prepaidCardId,
                "TaxNumber" => $taxNumber,
                "DischargeValue" => $dischargeValue
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param int $documentNumber
     * @return object
     */
    public function getRechargeCard(
        string $identifierCard,
        int $documentNumber
    ): object {
        return (new CallApi())->call('GetRechargeCard', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param int $documentNumber
     * @return object
     */
    public function getDischargeCard(
        string $identifierCard,
        int $documentNumber
    ): object {
        return (new CallApi())->call('GetDischargeCard', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "DocumentNumber" => $documentNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param string $taxNumber
     * @return object
     */
    public function getCardOwner(
        string $identifierCard,
        string $taxNumber
    ): object {
        return (new CallApi())->call('GetCardOwner', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "TaxNumber" => $taxNumber
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param int $purchaseRuleId
     * @return object
     */
    public function createCardPurchaseRule(
        string $identifierCard,
        int $purchaseRuleId
    ): object {
        return (new CallApi())->call('CreateCardPurchaseRule', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "PurchaseRuleId" => $purchaseRuleId
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param int $purchaseRuleId
     * @return object
     */
    public function unbindCardPurchaseRule(
        string $identifierCard,
        int $purchaseRuleId
    ): object {
        return (new CallApi())->call('UnbindCardPurchaseRule', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "PurchaseRuleId" => $purchaseRuleId
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @param string $identifierCard
     * @param float $benefitFrom
     * @param float $benefitTo
     * @param float $value
     * @param string $identifier
     * @return object
     */
    public function cardBenefitTransfer(
        string $identifierCard,
        float $benefitFrom,
        float $benefitTo,
        float $value,
        string $identifier
    ): object {
        return (new CallApi())->call('CardBenefitTransfer', array_filter(
            [
                "IdentifierCard" => $identifierCard,
                "BenefitFrom" => $benefitFrom,
                "BenefitTo" => $benefitTo,
                "Value" => $value,
                "Identifier" => $identifier
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @return object
     */
    public function getPurchaseRules(): object {
        return (new CallApi())->call('GetPurchaseRules', []);
    }

    /**
     * @description Solicita um cartão virtual
     * @param string $embossingName
     * @param CardOwner $cardHolder
     * @param CardOwner|null $cardOwner
     * @return object
     */
    public function requestVirtualCard(
        string $embossingName,
        CardOwner $cardHolder,
        ?CardOwner $cardOwner
    ): object {
        return (new CallApi())->call('RequestVirtualCard', array_filter(
            [
                "EmbossingName" => $embossingName,
                "CardOwner" => $cardOwner->ownerToArray(),
                "CardHolder" => $cardHolder->holderToArray()
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Solicita bloqueio de cartão
     * @param string $identifierCard
     * @return object
     */
    public function blockVirtualCard(
        string $identifierCard
    ): object {
        return (new CallApi())->call('BlockVirtualCard', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Solicita desbloqueio um cartão virtual
     * @param string $identifierCard
     * @return object
     */
    public function unblockVirtualCard(
        string $identifierCard
    ): object {
        return (new CallApi())->call('UnblockVirtualCard', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Solicita o cancelamento de um cartão virtual
     * @param string $identifierCard
     * @return object
     */
    public function cancelVirtualCard(
        string $identifierCard
    ): object {
        return (new CallApi())->call('CancelVirtualCard', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Solicita um cartão virtual
     * @param string $identifierCard
     * @return object
     */
    public function getVirtualCardById(
        string $identifierCard
    ): object {
        return (new CallApi())->call('GetVirtualCardById', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }

    /**
     * @description Retorna uma lista de estabelecimentos permitidos
     * @param string $identifierCard
     * @return object
     */
    public function getEstablishmentsInWhitelist(
        string $identifierCard
    ): object {
        return (new CallApi())->call('GetEstablishmentsInWhitelist', array_filter(
            [
                "IdentifierCard" => $identifierCard
            ],
            function ($v) {
                return !is_null($v);
            }
        ));
    }
}