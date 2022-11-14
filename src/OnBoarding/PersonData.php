<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Common\FullAccount;

class PersonData extends CallApi {

	public function __construct(?Configuration $configuration = NULL)
	{
		parent::__construct($configuration);
	}

	/**
	 * @param FullAccount $account
	 * @return object
	 * @throws GuzzleException
	 */
	public function updatePersonData(FullAccount $account): object
	{
		return $this->call('UpdatePersonData', array_filter($account->toArray(), function ($v) {
			return $v !== NULL;
		}));
	}
}