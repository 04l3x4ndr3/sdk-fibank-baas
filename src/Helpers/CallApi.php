<?php

namespace O4l3x4ndr3\SdkFitbank\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;

class CallApi
{
    private Configuration $config;
    private ?array $header;
    private ?array $credential;
    private $requestBody = '';

    private mixed $message;
    private mixed $validation;


    /**
     * @param Configuration|null $config
     */
    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredential();
        $b64 = base64_encode("{$this->credential['username']}:{$this->credential['password']}");
        $this->header = [
            'User-Agent' => 'SDKFitbank/1.0',
            'Accept' => 'Application/json',
            'Authorization' => "Basic {$b64}"
        ];
        $this->message = null;
        $this->validation = null;
    }

    /**
     * @return mixed
     */
    public function getMessage(): mixed
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getValidation(): mixed
    {
        return $this->validation;
    }

    /**
     * @param string $method
     * @param array  $data
     *
     * @return object
     * @throws GuzzleException
     */
    public function call(string $method, array $data): object
    {
        $body = array_merge($data, [
            'Method' => $method,
            'PartnerId' => $this->credential['patternId'],
            'BusinessUnitId' => $this->credential['businessUnitId'],
            'MktPlaceId' => $this->credential['mktPlaceId']
        ]);

        $client = new Client();
        $options = [
            'headers' => $this->header,
            'json' => $body
        ];

        $this->requestBody = json_encode($body);

        $res = $client->request('POST', $this->config->getUrl(), $options);

        $body = json_decode($res->getBody());

        if (isset($body->Success) && $body->Success === 'false') {
            $this->message = $body->Message ?? null;
            $this->validation = $body->Validation ?? null;
        }

        return $body;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    public function getRequestBody(): string
    {
        return $this->requestBody;
    }
}
