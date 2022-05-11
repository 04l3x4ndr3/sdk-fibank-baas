<?php

namespace two_plug\sdk_fitbank;

class Configuration
{
    const API_USERNAME = "c0712dd8-465e-4c91-ad23-a2b7a2d8a68c";
    const API_PASSWORD = "2617f4b3-b932-417b-ac5a-f41aa7b6e6a8";
    const PATTERN_ID = "606";
    const BUSINESS_UNIT_ID = "629";
    const MKT_PLACE_ID = "32977";
    const ENV_SANDBOX = "sandbox";
    const ENV_PRODUCTION = "production";
    const URL_SANDBOX = "https://sandboxapi.fitbank.com.br/main/execute";
    const URL_PRODUCTION = "https://api.fitbank.com.br/main/execute";

    private string $environment = self::ENV_SANDBOX;
    private array $credentials = [
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
    public function setCredentials(string $username, string $password, string $patternId, string $bussinesUnitId, string $mktPlaceId): void
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
