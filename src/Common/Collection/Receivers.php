<?php

namespace O4l3x4ndr3\SdkFitbank\Common\Collection;

class Receivers
{
    private ?string $collectionOrderProductType;
    private ?array $receivers;

    public function __construct()
    {
        $this->collectionOrderProductType = null;
        $this->receivers = null;
    }

    public function getCollectionOrderProductType(): ?string
    {
        return $this->collectionOrderProductType;
    }

    public function setCollectionOrderProductType(?string $collectionOrderProductType): void
    {
        $this->collectionOrderProductType = $collectionOrderProductType;
    }
    public function addReceivers(Receiver $receiver): array {
        $this->receivers[] = $receiver->toArray();
        return $this->receivers;
    }
    public function toArray(): array
    {
        return array_filter([
            "CollectionOrderProductType" => $this->collectionOrderProductType,
            "Receiver" => $this->receivers
        ], function ($v) {
            return !empty($v);
        });
    }
}
