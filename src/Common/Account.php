<?php

namespace TwoPlug\SdkFitbank\Common;

class Account
{
    private AccountHolder $holder;

    /**
     * @return AccountHolder
     */
    public function getHolder(): AccountHolder
    {
        return $this->holder;
    }

    /**
     * @param AccountHolder $holder
     */
    public function setHolder(AccountHolder $holder): void
    {
        $this->holder = $holder;
    }


    /**
     * @return array|null
     */
    public function toArray(): ?array
    {
        return $this->holder->toArray();
    }
}