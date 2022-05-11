<?php

namespace two_plug\sdk_fitbank;

use GuzzleHttp\Exception\GuzzleException;

class Documents
{
    private CallApi $httpCli;

    public function __construct(Configuration $configuration)
    {
        $this->httpCli = new CallApi($configuration);
    }

    /**
     * @param string $taxNumber
     * @param int $documentType
     * @return object
     * @throws GuzzleException
     */
    public function getDocuments(string $taxNumber, int $documentType): object
    {
        return $this->httpCli->call('ResendDocuments', [
            'TaxNumber' => $taxNumber,
            'DocumentType' => ListValues::getDocumentTypeById($documentType)
        ]);
    }

    /**
     * @param string $taxNumber
     * @param array $documents
     * @return object
     * @throws GuzzleException
     */
    public function resendDocuments(string $taxNumber, array $documents): object
    {
        $docs = [];
        foreach ($documents as $doc) {
            $docs[] = $doc->toArray();
        }

        return $this->httpCli->call('ResendDocuments', [
            'TaxNumber' => $taxNumber,
            'Documents' => $docs
        ]);
    }
}