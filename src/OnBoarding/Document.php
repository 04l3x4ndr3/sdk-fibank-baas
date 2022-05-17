<?php

namespace TwoPlug\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration;
use TwoPlug\SdkFitbank\Helpers\CallApi;

class Document {
	private Configuration $configuration;

	private ?string $documentFile;
	private ?int $documentFormat;
	private ?string $documentName;
	private ?int $documentType;
	private ?string $description;
	private ?string $expirationDate;

	/**
	 * @param string|null $documentFile
	 * @param int|null $documentFormat
	 * @param string|null $documentName
	 * @param int|null $documentType
	 * @param string|null $description
	 * @param string|null $expirationDate
	 */
	public function __construct(?string $documentFile = NULL,
								?int    $documentFormat = NULL,
								?string $documentName = NULL,
								?int    $documentType = NULL,
								?string $description = NULL,
								?string $expirationDate = NULL)
	{
		$this->configuration = new Configuration();

		$this->documentFile = $documentFile;
		$this->documentFormat = $documentFormat;
		$this->documentName = $documentName;
		$this->documentType = $documentType;
		$this->description = $description;
		$this->expirationDate = $expirationDate;
	}

	/**
	 * @param Configuration $configuration
	 */
	public function setConfiguration(Configuration $configuration): void
	{
		$this->configuration = $configuration;
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
	 * @return int|null
	 */
	public function getDocumentType(): ?int
	{
		return $this->documentType;
	}

	/**
	 * @param int|null $documentType
	 */
	public function setDocumentType(?int $documentType): void
	{
		$this->documentType = $documentType;
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
	 */
	public function setDescription(?string $description): void
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

	/**
	 * @param string $taxNumber
	 * @param int $documentType
	 * @return object
	 * @throws GuzzleException
	 */
	public function getDocument(string $taxNumber, int $documentType): object
	{
		$http = new CallApi($this->configuration);
		$data = [
			'TaxNumber' => $taxNumber,
			'DocumentType' => $documentType
		];
		return $http->call('GetDocument', $data);
	}

	/**
	 * @param string $taxNumber
	 * @param array $documents
	 * @return object
	 * @throws GuzzleException
	 */
	public function resendDocuments(string $taxNumber, array $documents): object
	{
		$http = new CallApi($this->configuration);
		$docs = [];
		foreach ($documents as $doc)
		{
			$docs[] = $doc->toArray();
		}
		$data = [
			'TaxNumber' => $taxNumber,
			'Documents' => $docs
		];
		return $http->call('ResendDocuments', $data);
	}
}
