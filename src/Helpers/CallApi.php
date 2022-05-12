<?php

namespace TwoPlug\SdkFitbank\Helpers;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use TwoPlug\SdkFitbank\Configuration as Config;
use stdClass;

class CallApi
{
    private Client $client;
    private array $credential;
    private array $header;

    /**
     * @param Config $configuration
     */
    public function __construct(Config $configuration)
    {
        $this->client = new Client([
            'base_uri' => $configuration->getUrl(),
            'timeout' => 10
        ]);

        $this->credential = $configuration->getCredential();
        $username = $this->credential['username'];
        $password = $this->credential['password'];
        $b64 = base64_encode("{$username}:{$password}");

        $this->header = [
            'User-Agent' => 'SdkFitbank/1.0',
            'Accept' => 'application/json',
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
     * @return stdClass
     * @throws GuzzleException
     */
    public function call(string $method, array $data): object
    {
        $data = array_merge($data, [
            'Method' => $method,
            'PartnerId' => $this->credential['patternId'],
            'BusinessUnitId' => $this->credential['bussinesUnitId']
        ]);

        try {
            $response = $this->client->post('', [
                'headers' => $this->header,
                'json' => $data
            ]);

            return $this->parseResponse($response);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            return $this->parseResponse($response);
        }
    }

    /**
     * @param $response
     * @return stdClass
     */
    private function parseResponse($response): object
    {
        $responseObject = (object)[];
        $responseObject->data = json_decode($response->getBody()->getContents());
        $responseObject->statusCode = $response->getStatusCode();

        return $responseObject;
    }

}