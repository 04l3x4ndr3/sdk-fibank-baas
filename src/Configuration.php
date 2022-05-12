<?php

namespace TwoPlug\SdkFitbank;

class Configuration
{
    const API_USERNAME = "[your API_USERNAME number]";
    const API_PASSWORD = "[your API_PASSWORD number]";
    const PATTERN_ID = "[your PATTERN_ID number]";
    const BUSINESS_UNIT_ID = "[your BUSINESS_UNIT_ID number]";
    const MKT_PLACE_ID = "[your ]";
    const ENV_SANDBOX = "sandbox";
    const ENV_PRODUCTION = "production";
    const URL_SANDBOX = "https://sandboxapi.fitbank.com.br/main/execute";
    const URL_PRODUCTION = "https://api.fitbank.com.br/main/execute";

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_OTHER = 2;

    const MARITAL_STATUS_NOTMARRIED = 0;
    const MARITAL_STATUS_MARRIED = 1;
    const MARITAL_STATUS_DIVORCED = 2;
    const MARITAL_STATUS_SEPARATE = 3;
    const MARITAL_STATUS_WIDOWER = 4;
    const MARITAL_STATUS_SINGLE = 5;
    const MARITAL_STATUS_OTHER = 6;

    const COMPANY_TYPE_SA = 0;
    const COMPANY_TYPE_LTDA = 1;
    const COMPANY_TYPE_MEI = 2;

    const DOCUMENT_TYPE_IDENTITY_DOCUMENT_FRONT = 0;
    const DOCUMENT_TYPE_TAXNUMBER = 1;
    const DOCUMENT_TYPE_PROOF_OF_RESIDENCE = 2;
    const DOCUMENT_TYPE_CNH = 3;
    const DOCUMENT_TYPE_CNPJ = 4;
    const DOCUMENT_TYPE_SOCIAL_CONTRACT = 5;
    const DOCUMENT_TYPE_LETTER_OF_ATTORNE = 6;
    const DOCUMENT_TYPE_IDENTITY_DOCUMENT_VERSE = 7;
    const DOCUMENT_TYPE_IDENTITY_DOCUMENT = 10;
    const DOCUMENT_TYPE_MINUTE_OF_CONSTITUTION = 11;

    const DOCUMENT_FORMAT_PDF = 0;
    const DOCUMENT_FORMAT_JPG = 1;
    const DOCUMENT_FORMAT_JPEG = 2;
    const DOCUMENT_FORMAT_TXT = 3;
    const DOCUMENT_FORMAT_PNG = 4;

    const ADDRESS_TYPE_COMERCIAL = 0;
    const ADDRESS_TYPE_RESIDENCIAL = 1;

    const PERSON_ROLE_TYPE_HOLDER = 0;
    const PERSON_ROLE_TYPE_PROCURATOR = 1;
    const PERSON_ROLE_TYPE_BEARER = 2;
    const PERSON_ROLE_TYPE_ASSOCIATE = 3;

    private ?string $environment = self::ENV_SANDBOX;
    private ?array $credentials = [
        'username' => self::API_USERNAME,
        'password' => self::API_PASSWORD,
        'patternId' => self::PATTERN_ID,
        'bussinesUnitId' => self::BUSINESS_UNIT_ID,
        'mktPlaceId' => self::MKT_PLACE_ID
    ];

    /**
     * @param string $environment
     * @param string $username
     * @param string $password
     * @param string $patternId
     * @param string $bussinesUnitId
     * @param string $mktPlaceId
     */
    public function __construct(string $environment = self::ENV_SANDBOX,
                                string $username = self::API_USERNAME,
                                string $password = self::API_PASSWORD,
                                string $patternId = self::PATTERN_ID,
                                string $bussinesUnitId = self::BUSINESS_UNIT_ID,
                                string $mktPlaceId = self::MKT_PLACE_ID)
    {
        $this->setEnvironment($environment);
        $this->setCredential($username, $password, $patternId, $bussinesUnitId, $mktPlaceId);
    }

    public function getCredential(): array
    {
        return $this->credentials;
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $patternId
     * @param string $bussinesUnitId
     * @param string $mktPlaceId
     * @return void
     */
    public function setCredential(string $username, string $password, string $patternId, string $bussinesUnitId, string $mktPlaceId): void
    {
        $this->credentials = [
            'username' => $username,
            'password' => $password,
            'patternId' => $patternId,
            'bussinesUnitId' => $bussinesUnitId,
            'mktPlaceId' => $mktPlaceId
        ];
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     * @return void
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        if ($this->getEnvironment() === self::ENV_PRODUCTION) {
            return self::URL_PRODUCTION;
        }

        return self::URL_SANDBOX;
    }

}
