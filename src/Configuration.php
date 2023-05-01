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

    /**
     * @deprecated
     */
    public const URL_SANDBOX = "https://sandboxapi.fitbank.com.br/main/execute";

    /**
     * @deprecated
     */
    public const URL_PRODUCTION = "https://apiv2.fitbank.com.br/main/execute";

    private array $URL_PRODUCTION
        = [
            "default" => 'https://apiv2.fitbank.com.br/main/execute',
            "payments" => "https://apiv2.payments.fitbank.com.br/main/execute"
        ];

    private array $URL_SANDBOX
        = [
            "default" => 'https://sandboxapi.fitbank.com.br/main/execute',
            "payments" => "https://sandboxapi.fitbank.com.br/main/execute"
        ];

    private ?string $environment;
    private ?array $credentials;
    private ?array $httpHeader;

    public function __construct(
        ?string $username = null, ?string $password = null, ?string $patternId = null, ?string $bussinesUnitId = null, ?string $mktPlaceId = null
    )
    {
        $this->environment = $_SERVER['FITBANK_ENVIRONMENT'] ?? self::ENV_SANDBOX;
        $this->credentials = [
            'username' => $_SERVER['FITBANK_API_USERNAME'] ?? $username,
            'password' => $_SERVER['FITBANK_API_PASSWORD'] ?? $password,
            'patternId' => $_SERVER['FITBANK_PATTERN_ID'] ?? $patternId,
            'businessUnitId' => $_SERVER['FITBANK_BUSINESS_UNIT_ID'] ?? $bussinesUnitId,
            'mktPlaceId' => $_SERVER['FITBANK_MKT_PLACE_ID'] ?? $mktPlaceId
        ];
        $this->httpHeader = [];
    }

    /**
     * @return array
     */
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
     *
     * @return void
     */
    public function setCredential(string $username, string $password, string $patternId, string $bussinesUnitId, string $mktPlaceId): void
    {
        $credentials = array_merge($this->credentials, [
            'username' => $username,
            'password' => $password,
            'patternId' => $patternId,
            'bussinesUnitId' => $bussinesUnitId,
            'mktPlaceId' => $mktPlaceId
        ]);
        $this->credentials = $credentials;
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
     *
     * @return void
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): void
    {
        $this->httpHeader = $httpHeader;
    }

    /**
     * @param string $context
     *
     * @return string
     */
    public function getUrl(string $context = 'default'): string
    {
        if ($this->getEnvironment() === self::ENV_PRODUCTION) {
            return $this->URL_PRODUCTION[$context];
            // return self::URL_PRODUCTION; <-- deprecated
        }

        return $this->URL_SANDBOX[$context];
        // return self::URL_SANDBOX; <-- deprecated
    }
}
