<?php

namespace O4l3x4ndr3\SdkFitbank\Errors;

use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ClientError extends ClientException {

	public function __construct(string $message, RequestInterface $request, ResponseInterface $response, \Throwable $previous = NULL, array $handlerContext = [])
	{
		parent::__construct($message, $request, $response, $previous, $handlerContext);
	}
}
