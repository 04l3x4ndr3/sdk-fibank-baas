<?php

namespace TwoPlug\SdkFitbank\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use TwoPlug\SdkFitbank\Configuration as Config;
use TwoPlug\SdkFitbank\Errors\ClientError;

class CallApi
{
    private Client $client;
    private array $credential;
    private bool $httpErrors;
    private array $header;
    private array $postData;

    /**
     * @param Config $configuration
     */
    public function __construct(Config $configuration)
    {
        $this->client = new Client([
            'base_uri' => $configuration->getUrl(),
            'timeout' => 60
        ]);

        $this->credential = $configuration->getCredential();
        $username = $this->credential['username'];
        $password = $this->credential['password'];
        $b64 = base64_encode("{$username}:{$password}");

        $this->httpErrors = $configuration->showHttpErrors();

        $this->header = [
            'User-Agent' => 'SDKFitbank/1.0',
            'Accept' => 'Application/json',
            'Authorization' => "Basic {$b64}"
        ];
    }

    /**
     * @param Client $client
     * @return void
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @param string $method
     * @param array $data
     * @return object
     * @throws GuzzleException
     */
    public function call(string $method, array $data): object
    {
        $data = array_merge($data, [
            'Method' => $method,
            'PartnerId' => $this->credential['patternId'],
            'BusinessUnitId' => $this->credential['bussinesUnitId'],
            'MktPlaceId' => $this->credential['mktPlaceId']
        ]);

        $data = [
            'http_erros' => $this->httpErrors,
            'headers' => $this->header,
            'json' => $data
        ];

        $this->postData = $data;

        try {
            $response = $this->client->post('', $data);
            return $this->parseResponse($response);
        } catch (ClientError $e) {
            $response = $e->getResponse();
            return $this->parseResponse($response);
        }
    }

    /**
     * @return array|null
     */
    public function getPostData(): ?array
    {
        return $this->postData;
    }

    /**
     * @param $response
     * @return stdClass
     */
    private function parseResponse($response): object
    {
        return json_decode($response->getBody()->getContents());
    }
}