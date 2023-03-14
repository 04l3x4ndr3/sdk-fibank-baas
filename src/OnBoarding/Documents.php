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
     * @return Document|bool
     * @throws GuzzleException
     */
    public function getDocument(string $taxNumber, int $documentType): Document|bool
    {
        $resp = $this->call('GetDocument', array_filter(['TaxNumber' => $taxNumber, 'DocumentType' => $documentType]));

        if ($resp->Success !== "true") {
            return false;
        }

        return new Document(
            $resp->Document,
            ListValues::getDocumentFormatKey($resp->Extension),
            $resp->FileName,
            $documentType,
            $resp->Description,
            $resp->ExpirationDate,
            $resp->DocumentStatus
        );
    }

    /**
     * @param string $taxNumber
     * @param array  $documents
     *
     * @return object
     * @throws GuzzleException
     */
    public function resendDocuments(string $taxNumber, array $documents, ?string $holderTaxNumber = null): object
    {
        $docs = [];

        foreach ($documents as $doc) {
            $docs[] = $doc->toArray();
        }

        if (empty($holderTaxNumber)) {
            $holderTaxNumber = $taxNumber;
        }

        return $this->call('ResendDocuments', array_filter(['TaxNumber' => $taxNumber, 'HolderTaxNumber' => $holderTaxNumber, 'Documents' => $docs]));
    }
}
