<?php

namespace O4l3x4ndr3\SdkFitbank\Common;

class ContactInfo
{
    private ?string $mail;
    private ?string $phone;
    public function __construct()
    {
        $this->mail = null;
        $this->phone = null;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }
    public function toArray(): array
    {
        return array_filter([
            "Mail" => $this->mail,
            "Phone" => $this->phone
        ], function ($v) {
            return $v !== null;
        });
    }
}
