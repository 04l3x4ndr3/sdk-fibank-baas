<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class Document
{
    private ?string $documentFile;
    private ?int $documentFormat;
    private ?string $documentName;
    private ?int $documentType;
    private ?string $description;
    private ?string $expirationDate;
    private ?int $documentStatus;
    private ?string $documentKey;

    /**
     * @param string|null $documentFile
     * @param int|null $documentFormat
     * @param string|null $documentName
     * @param int|null $documentType
     * @param string|null $description
     * @param string|null $expirationDate
     * @param int|null $documentStatus
     * @param string|null $documentKey
     */
    public function __construct(
        ?string $documentFile = null,
        ?int    $documentFormat = null,
        ?string $documentName = null,
        ?int    $documentType = null,
        ?string $description = null,
        ?string $expirationDate = null,
        ?int    $documentStatus = null,
        ?string $documentKey = null
    )
    {
        $this->documentFile = $documentFile;
        $this->documentFormat = $documentFormat;
        $this->documentName = $documentName;
        $this->documentType = $documentType;
        $this->description = $description;
        $this->expirationDate = $expirationDate;
        $this->documentStatus = $documentStatus;
        $this->documentKey = $documentKey;
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
     *
     * @return Document
     */
    public function setDocumentFile(?string $documentFile): self
    {
        $this->documentFile = $documentFile;
        return $this;
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
     *
     * @return Document
     */
    public function setDocumentFormat(?int $documentFormat): self
    {
        $this->documentFormat = $documentFormat;
        return $this;
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
     *
     * @return Document
     */
    public function setDocumentName(?string $documentName): self
    {
        $this->documentName = $documentName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDocumentType(): ?int
    {
        return $this->documentType;
    }

    /**
     * @param int|null $documentType
     *
     * @return Document
     */
    public function setDocumentType(?int $documentType): self
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return Document
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
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
     *
     * @return Document
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDocumentStatus(): ?int
    {
        return $this->documentStatus;
    }

    /**
     * @param int|null $documentStatus
     *
     * @return Document
     */
    public function setDocumentStatus(?int $documentStatus): self
    {
        $this->documentStatus = $documentStatus;
        return $this;
    }

    public function getDocumentKey(): ?string
    {
        return $this->documentKey;
    }

    public function setDocumentKey(?string $documentKey): Document
    {
        $this->documentKey = $documentKey;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "DocumentFile" => $this->documentFile,
            "DocumentFormat" => $this->documentFormat,
            "DocumentName" => $this->documentName,
            "DocumentType" => $this->documentType,
            "Description" => $this->description,
            "ExpirationDate" => $this->expirationDate,
            "DocumentStatus" => $this->documentStatus,
            "DocumentKey" => $this->documentKey,
        ], function ($v) {
            return $v !== null;
        });
    }
}
