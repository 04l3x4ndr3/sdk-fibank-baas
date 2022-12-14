<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Common\Document;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Helpers\ListValues;

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
     * @return Document
     * @throws GuzzleException
     */
    public function getDocument(string $taxNumber, int $documentType): Document
    {
        $doc = $this->call(
            'GetDocument', array_filter([
                'TaxNumber' => $taxNumber,
                'DocumentType' => $documentType
            ])
        );

        return new Document(
            $doc->AddressLine ?? null,
                ListValues::getDocumentFormatIdByValue(strtoupper(preg_replace('/\W/', '', $doc->Extension ?? null))),
            $doc->FileName ?? null,
                $documentType,
            $doc->Description ?? null,
            $doc->ExpirationDate ?? null
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
