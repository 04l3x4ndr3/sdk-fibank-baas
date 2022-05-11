<?php

namespace two_plug\sdk_fitbank;

use GuzzleHttp\Exception\GuzzleException;

class PersonData
{
    private CallApi $httpCli;

    public function __construct(Configuration $configuration)
    {
        $this->httpCli = new CallApi($configuration);
    }

    /**
     * @param Account $account
     * @return object
     * @throws GuzzleException
     */
    public function updatePersonData(Account $account): object
    {
        return $this->httpCli->call('UpdatePersonData', $account->toArray());
    }
}