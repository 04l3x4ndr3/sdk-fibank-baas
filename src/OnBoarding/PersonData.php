<?php

namespace O4l3x4ndr3\SdkFitbank\OnBoarding;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkFitbank\Configuration;
use O4l3x4ndr3\SdkFitbank\Helpers\CallApi;
use O4l3x4ndr3\SdkFitbank\Common\FullAccount;

class PersonData extends CallApi
{

    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * @param FullAccount $account
     *
     * @return object
     * @throws GuzzleException
     */
    public function updatePersonData(FullAccount $account): object
    {
        return $this->call(
            'UpdatePersonData',
            array_filter($account->toArray(), function ($v) {
                return $v !== null;
            })
        );
    }
    /**
     * @param string $taxNumber
     * @param array $personInfos
     * @param string|null $holderTaxNumber
     * @return object
     */
    public function changePersonInfo (
        string $taxNumber,
        array $personInfos,
        ?string $holderTaxNumber
    ) : object {
        if (empty($holderTaxNumber)) {
            $holderTaxNumber = $taxNumber;
        }
        return $this->call(
            'ChangePersonInfo',
            array_filter([
                "TaxNumber" => $taxNumber,
                "HolderTaxNumber" => $holderTaxNumber,
                "PersonInfos" => $personInfos
            ], function ($v) {
                return !empty($v);
            })
        );
    }
    /**
     * @param string $usn
     * @return object
     */
    public function getChangeInfo (
        string $usn
    ) : object {
        return $this->call(
            'GetChangeInfo',
            array_filter([
                "USN" => $usn
            ], function ($v) {
                return !empty($v);
            })
        );
    }
}
