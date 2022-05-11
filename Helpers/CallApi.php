<?php

namespace two_plug\sdk_fitbank;

use GuzzleHttp\Exception\GuzzleException;
use stdClass;
use GuzzleHttp\Client;
use two_plug\sdk_fitbank\Configuration as Config;

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

        $this->header = [
            'User-Agent' => 'sdk_fitbank/1.0',
            'Accept' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode("{$username}:{$password}")
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
    public function call(string $method, array $data): stdClass
    {
        array_merge($data, [
            'Method' => $method,
            'PartnerId' => $this->credential['patternId'],
            'BusinessUnitId' => $this->credential['bussinesUnitId']
        ]);

        try {
            $response = $this->client->post('', [
                'hearders' => $this->header,
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
    private function parseResponse($response): stdClass
    {
        $responseObject = new stdClass;
        $responseObject->body = json_decode($response->getBody()->getContents());
        $responseObject->statusCode = $response->getStatusCode();

        return $responseObject;
    }

}