<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Extras;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;
use TwoPlug\TopUp\TopUp;

class TopUps
{
    private CallApi $httpCli;

    public function __construct(Configuration $configuration)
    {
        $this->httpCli = new CallApi($configuration);
    }

    /**
     * @param TopUp $topUp
     * @return object
     * @throws GuzzleException
     */
    public function getTopUpProducts(TopUp $topUp): object
    {
        return $this->httpCli->call('GetTopUpProducts', [
            'ProductType' => $topUp->getProductType(),
            'ProductSubType' => $topUp->getProductSubType(),
            'ProductValue' => $topUp->getProductValue()
        ]);
    }

    /**
     * @param TopUp $topUp
     * @return object
     * @throws GuzzleException
     */
    public function generateTopUp(TopUp $topUp): object
    {
        return $this->httpCli->call('GenerateTopUp', [
            'ContractIdentifier' => $topUp->getContractIdentifier(),
            'TaxNumber' => $topUp->getTaxNumber(),
            'ProductType' => $topUp->getProductType(),
            'OriginNSU' => $topUp->getOriginNSU(),
            'BatchIdentifier' => $topUp->getBatchIdentifier(),
            'ProductKey' => $topUp->getProductKey(),
            'ProductValue' => $topUp->getProductValue(),
            'Tags' => $topUp->getTags(),
        ]);
    }

    /**
     * @param TopUp $topUp
     * @return object
     * @throws GuzzleException
     */
    public function getTopUpById(TopUp $topUp): object
    {
        return $this->httpCli->call('GetTopUpById', [
            'DocumentNumber' => $topUp->getDocumentNumber(),
            'OriginNS' => $topUp->getOriginNS()
        ]);
    }

    /**
     * @param TopUp $topUp
     * @return object
     * @throws GuzzleException
     */
    public function authorizeTopUp(TopUp $topUp): object
    {
        return $this->httpCli->call('AuthorizeTopUp', [
            'DocumentNumber' => $topUp->getDocumentNumber(),
            'OriginNS' => $topUp->getOriginNS()
        ]);
    }
}