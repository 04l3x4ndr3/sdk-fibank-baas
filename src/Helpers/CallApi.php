<?php

namespace O4l3x4ndr3\SdkFitbank\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;

class CallApi {
	private Configuration $config;
	private ?array $header;
	private ?array $credential;

	/**
	 * @param Configuration|null $config
	 */
	public function __construct(Configuration $config = NULL)
	{
		$this->config = $config ?? new Configuration();
		$this->credential = $this->config->getCredential();
		$b64 = base64_encode("{$this->credential['username']}:{$this->credential['password']}");
		$this->header = array_merge([
			'User-Agent' => 'SDKFitbank/1.0',
			'Accept' => 'Application/json',
			'Authorization' => "Basic {$b64}"
		], $config->getHttpHeader());
	}

	/**
	 * @param string $method
	 * @param array $data
	 * @return object
	 * @throws GuzzleException
	 */
	public function call(string $method, array $data): object
	{
		$body = array_merge($data, [
			'Method' => $method,
			'PartnerId' => $this->credential['patternId'],
			'BusinessUnitId' => $this->credential['bussinesUnitId'],
			'MktPlaceId' => $this->credential['mktPlaceId']
		]);

		$client = new Client();
		$options = array_filter([
			'headers' => $this->header,
			'json' => $body
		]);

		$res = $client->request($method, $this->config->getUrl(), $options);
		return json_decode($res->getBody());
	}

	/**
	 * @return Configuration
	 */
	public function getConfig(): Configuration
	{
		return $this->config;
	}
}
