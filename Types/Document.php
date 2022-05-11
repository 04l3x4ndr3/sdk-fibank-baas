<?php

namespace two_plug\sdk_fitbank;

class Document
{
    private string $documentFile;
    private int $documentFormat;
    private string $documentName;
    private int $documentType;
    private string $description;
    private string $expirationDate;

    public function __construct(string $documentFile = null,
                                int $documentFormat = null,
                                string $documentName = null,
                                int $documentType = null,
                                string $description = null,
                                string $expirationDate = null)
    {
        $this->documentFile = $documentFile;
        $this->documentFormat = $documentFormat;
        $this->documentName = $documentName;
        $this->documentType = $documentType;
        $this->description = $description;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function getDocumentFile(): ?string
    {
        return $this->documentFile;
    }

    /**
     * @param string $documentFile
     */
    public function setDocumentFile(string $documentFile): void
    {
        $this->documentFile = $documentFile;
    }

    /**
     * @return int
     */
    public function getDocumentFormat():int
    {
        return $this->documentFormat;
    }

    /**
     * @param int $documentFormat
     */
    public function setDocumentFormat(int $documentFormat): void
    {
        $this->documentFormat = $documentFormat;
    }

    /**
     * @return string
     */
    public function getDocumentName():string
    {
        return $this->documentName;
    }

    /**
     * @param string $documentName
     */
    public function setDocumentName(string $documentName): void
    {
        $this->documentName = $documentName;
    }

    /**
     * @return int
     */
    public function getDocumentType():int
    {
        return $this->documentType;
    }

    /**
     * @param int $documentType
     */
    public function setDocumentType(int $documentType): void
    {
        $this->documentType = $documentType;
    }

    /**
     * @return string
     */
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getExpirationDate():string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate(string $expirationDate): void
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "DocumentFile" => $this->documentFile,
            "DocumentFormat" => $this->documentFormat,
            "DocumentName" => $this->documentName,
            "DocumentType" => $this->documentType,
            "Description" => $this->description,
            "ExpirationDate" => $this->expirationDate
        ];
    }

}