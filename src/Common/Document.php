<?php
/*
 * Copyright (c) 2022.
 * @authorAlexandre G R Alves
 * Author Github: https://github.com/04l3x4ndr3
 * Project Github:  https://github.com/04l3x4ndr3/sdk-fibank-baas
 */

namespace TwoPlug\SdkFitbank\Common;

class Document
{
    private ?string $documentFile;
    private ?int $documentFormat;
    private ?string $documentName;
    private ?string $documentType;
    private ?int $description;
    private ?string $expirationDate;

    /**
     * @param string|null $documentFile
     * @param int|null $documentFormat
     * @param string|null $documentName
     * @param string|null $documentType
     * @param int|null $description
     * @param string|null $expirationDate
     */
    public function __construct(?string $documentFile,
                                ?int $documentFormat,
                                ?string $documentName,
                                ?string $documentType,
                                ?int $description,
                                ?string $expirationDate)
    {
        $this->documentFile = $documentFile;
        $this->documentFormat = $documentFormat;
        $this->documentName = $documentName;
        $this->documentType = $documentType;
        $this->description = $description;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string|null
     */
    public function getDocumentFile(): ?string
    {
        return $this->documentFile;
    }

    /**
     * @param string|null $documentFile
     */
    public function setDocumentFile(?string $documentFile): void
    {
        $this->documentFile = $documentFile;
    }

    /**
     * @return int|null
     */
    public function getDocumentFormat(): ?int
    {
        return $this->documentFormat;
    }

    /**
     * @param int|null $documentFormat
     */
    public function setDocumentFormat(?int $documentFormat): void
    {
        $this->documentFormat = $documentFormat;
    }

    /**
     * @return string|null
     */
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }

    /**
     * @param string|null $documentName
     */
    public function setDocumentName(?string $documentName): void
    {
        $this->documentName = $documentName;
    }

    /**
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * @param string|null $documentType
     */
    public function setDocumentType(?string $documentType): void
    {
        $this->documentType = $documentType;
    }

    /**
     * @return int|null
     */
    public function getDescription(): ?int
    {
        return $this->description;
    }

    /**
     * @param int|null $description
     */
    public function setDescription(?int $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * @param string|null $expirationDate
     */
    public function setExpirationDate(?string $expirationDate): void
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