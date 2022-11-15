<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;

class Documents extends CallApi
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param string $taxNumber
     * @param int    $documentType
     *
     * @return object
     * @throws GuzzleException
     */
    public function getDocument(string $taxNumber, int $documentType): object
    {
        return $this->call(
            'GetDocument', array_filter([
            'TaxNumber' => $taxNumber,
            'DocumentType' => $documentType
        ])
        );
    }

    /**
     * @param string $taxNumber
     * @param array  $documents
     *
     * @return object
     * @throws GuzzleException
     */
    public function resendDocuments(string $taxNumber, array $documents): object
    {
        $docs = [];
        foreach ($documents as $doc) {
            $docs[] = $doc->toArray();
        }

        return $this->call(
            'ResendDocuments', array_filter([
            'TaxNumber' => $taxNumber,
            'Documents' => $docs
        ])
        );
    }
}
