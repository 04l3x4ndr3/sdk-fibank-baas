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

        #$arrHolder = $this->holder->toArray();

        /*return array_filter([
            "PersonName" => $arrHolder['PersonName'],
            "PhoneNumber" => $arrHolder['PhoneNumber'],
            "TaxNumber" => $arrHolder['TaxNumber'],
            "Mail" => $arrHolder['Mail'],
            "IdentityDocument" => $arrHolder['IdentityDocument'],
            "MotherFullName" => $arrHolder['MotherFullName'],
            "FatherFullName" => $arrHolder['FatherFullName'],
            "Nationality" => $arrHolder['Nationality'],
            "BirthState" => $arrHolder['BirthState'],
            "Gender" => $arrHolder['Gender'],
            "MaritalStatus" => $arrHolder['MaritalStatus'],
            "SpouseName" => $arrHolder['SpouseName'],
            "Occupation" => $arrHolder['Occupation'],
            "BirthDate" => $arrHolder['BirthDate'],
            "PubliclyExposedPerson" => $arrHolder['PubliclyExposedPerson'],
            "CompanyType" => $arrHolder['CompanyType'],
            "IsCompany" => $arrHolder['IsCompany'],
            "Nickname" => $arrHolder['Nickname'],
            "CheckPendingTransfers" => $arrHolder['CheckPendingTransfers'],
            "CompanyActivity" => $arrHolder['CompanyActivity'],
            "ConstitutionDate" => $arrHolder['ConstitutionDate'],
            "Bank" => $arrHolder['Bank'],
            "BankBranch" => $arrHolder['BankBranch'],
            "BankAccount" => $arrHolder['BankAccount'],
            "BankAccountDigit" => $arrHolder['BankAccountDigit'],
            "Addresses" => $arrHolder['Addresses'],
            "Documents" => $arrHolder['Documents'],
            "Persons" => $arrHolder['Persons']
        ]);*/
    }
}