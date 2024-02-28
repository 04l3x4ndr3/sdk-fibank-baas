<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Collection;

use O4l3x4ndr3\SdkFitbank\Common\AccountInfo;

class CollectionCustomer
{
    private ?string $name;
    private ?AccountInfo $accountInfo;

    public function __construct()
    {
        $this->name = null;
        $this->accountInfo = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getAccountInfo(): ?AccountInfo
    {
        return $this->accountInfo;
    }

    public function setAccountInfo(?AccountInfo $accountInfo): void
    {
        $this->accountInfo = $accountInfo;
    }
    public function toArray(): array
    {
        return array_filter([
            "Name" => $this->getName(),
            "CustomerAccountInfo" => $this->getAccountInfo()->toArray()
        ], function ($v) {
            return !empty($v);
        });
    }
}
