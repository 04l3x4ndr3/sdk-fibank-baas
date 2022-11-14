<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace O4l3x4ndr3\SdkFitbank;

class Configuration
{
    public const ENV_SANDBOX = "sandbox";
    public const ENV_PRODUCTION = "production";
    public const URL_SANDBOX = "https://sandboxapi.fitbank.com.br/main/execute";
    public const URL_PRODUCTION = "https://api.fitbank.com.br/main/execute";

    /* # gender types
     const GENDER_MALE = 0;
     const GENDER_FEMALE = 1;
     const GENDER_OTHER = 2;

     # matial status
     const MARITAL_STATUS_NOTMARRIED = 0;
     const MARITAL_STATUS_MARRIED = 1;
     const MARITAL_STATUS_DIVORCED = 2;
     const MARITAL_STATUS_SEPARATE = 3;
     const MARITAL_STATUS_WIDOWER = 4;
     const MARITAL_STATUS_SINGLE = 5;
     const MARITAL_STATUS_OTHER = 6;

     # company types
     const COMPANY_TYPE_SA = 0;
     const COMPANY_TYPE_LTDA = 1;
     const COMPANY_TYPE_MEI = 2;

     # address types
     const ADDRESS_TYPE_BUSINESS = 0;
     const ADDRESS_TYPE_HOME = 1;

     # document types
     const DOCUMENT_TYPE_IDENTITY_DOCUMENT_FRONT = 0;
     const DOCUMENT_TYPE_TAXNUMBER = 1;
     const DOCUMENT_TYPE_PROOF_ADDRESS = 2;
     const DOCUMENT_TYPE_CNH = 3;
     const DOCUMENT_TYPE_CNPJ = 4;
     const DOCUMENT_TYPE_SOCIAL_CONTRACT = 5;
     const DOCUMENT_TYPE_LETTER_OF_ATTORNE = 6;
     const DOCUMENT_TYPE_IDENTITY_DOCUMENT_VERSE = 7;
     const DOCUMENT_TYPE_IDENTITY_DOCUMENT = 10;
     const DOCUMENT_TYPE_MINUTE_OF_CONSTITUTION = 11;

     # document formats
     const DOCUMENT_FORMAT_PDF = 0;
     const DOCUMENT_FORMAT_JPG = 1;
     const DOCUMENT_FORMAT_JPEG = 2;
     const DOCUMENT_FORMAT_TXT = 3;
     const DOCUMENT_FORMAT_PNG = 4;

     # Person role types
     const PERSON_ROLE_TYPE_HOLDER = 0;
     const PERSON_ROLE_TYPE_PROCURATOR = 1;
     const PERSON_ROLE_TYPE_BEARER = 2;
     const PERSON_ROLE_TYPE_ASSOCIATE = 3;*/

    private ?string $environment;
    private ?array $credentials = [
        'username' => null,
        'password' => null,
        'patternId' => null,
        'bussinesUnitId' => null,
        'mktPlaceId' => null
    ];

    public function __construct()
    {
        $this->setCredential(
            $_SERVER['FITBANK_API_USERNAME'],
            $_SERVER['FITBANK_API_PASSWORD'],
            $_SERVER['FITBANK_PATTERN_ID'],
            $_SERVER['FITBANK_BUSINESS_UNIT_ID'],
            $_SERVER['FITBANK_MKT_PLACE_ID']
        );

        $this->setEnvironment($_SERVER['FITBANK_ENVIRONMENT'] ?? self::ENV_SANDBOX);
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
    public function setCredential(
        string $username,
        string $password,
        string $patternId,
        string $bussinesUnitId,
        string $mktPlaceId
    ): void {
        $this->credentials = [
            'username' => $username,
            'password' => $password,
            'patternId' => $patternId,
            'bussinesUnitId' => $bussinesUnitId,
            'mktPlaceId' => $mktPlaceId
        ];
    }

    /**
     * @param bool $val
     * @return bool
     */
    public function showHttpErrors(bool $val = false): bool
    {
        return $val;
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
