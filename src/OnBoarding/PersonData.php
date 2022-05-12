<?php

namespace TwoPlug\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Common\AccountHolder;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class PersonData
{
    private CallApi $httpCli;

    public function __construct(Configuration $configuration)
    {
        $this->httpCli = new CallApi($configuration);
    }

    /**
     * @param AccountHolder $accountHolder
     * @return object
     * @throws GuzzleException
     */
    public function updatePersonData(AccountHolder $accountHolder): object
    {
        return $this->httpCli->call('UpdatePersonData', $accountHolder->toArray());
    }
}