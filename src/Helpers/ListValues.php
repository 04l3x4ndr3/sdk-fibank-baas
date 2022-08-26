<?php

namespace TwoPlug\SdkFitbank\Helpers;

class ListValues
{
    # API LIST VALUES

    public static function documentTypes(): array
    {
        return [
            0 => 'Identity Document Front',
            1 => 'TaxNumber',
            2 => 'Proof Address',
            3 => 'CNH',
            4 => 'CNPJ',
            5 => 'Contract',
            6 => 'Letter Of Attorne',
            7 => 'Identity Document Verse',
            10 => 'Identity Document',
            11 => 'Minute Of Constitution',
        ];
    }

    public static function getDocumentTypeById(int $id): string
    {
        $docTypes = self::documentTypes();
        return $docTypes[$id];
    }

    public static function getDocumentTypeIdByValue(string $value): string
    {
        return array_search($value, self::documentTypes());
    }


    public static function documentFormats(): array
    {
        return [
            0 => 'PDF',
            1 => 'JPG',
            2 => 'JPEG',
            3 => 'TXT',
            4 => 'PNG',
        ];
    }

    public static function getDocumentFormatById(int $id): string
    {
        $arr = self::documentFormat();
        return $arr[$id];
    }

    public static function getDocumentFormatIdByValue(string $value): string
    {
        return array_search($value, self::documentFormats());
    }


    public static function genders(): array
    {
        return [
            0 => 'Male',
            1 => 'Famale',
            2 => 'Other',
        ];
    }

    public static function getGenderById(int $id): string
    {
        $genders = self::genders();
        return $genders[$id];
    }

    public static function getGenderIdByValue(string $value): string
    {
        return array_search($value, self::genders());
    }


    public static function maritalStatus(): array
    {
        return [
            'NotMarried',
            'Married',
            'Divorced',
            'Separate',
            'Widower',
            'Single',
            'Other'
        ];
    }

    public static function getMaritalStatusById(int $id): string
    {
        $maritalStatus = self::maritalStatus();
        return $maritalStatus[$id];
    }

    public static function getMaritalStatusIdByValue(string $value): string
    {
        return array_search($value, self::maritalStatus());
    }


    public static function companyTypes(): array
    {
        return [
            'SA',
            'LTDA',
            'MEI',
        ];
    }

    public static function getCompanyTypeById(int $id): string
    {
        $companyTypes = self::companyTypes();
        return $companyTypes[$id];
    }

    public static function getCompanyTypeIdByValue(string $value): string
    {
        return array_search($value, self::companyTypes());
    }


    # WEBHOOK LIST VALUES

    public static function accountConditionsTypes(): array
    {
        return [
            'Created',
            'Limited',
            'Verified',
            'Blocked',
            'Terminated',
        ];
    }

    public static function getAccountConditionTypeById(int $id): string
    {
        $companyTypes = self::accountConditionsTypes();
        return $companyTypes[$id];
    }

    public static function getAccountConditionTypeIdByValue(string $value): string
    {
        return array_search($value, self::accountConditionsTypes());
    }


    public static function accountStatus(): array
    {
        return [
            'Disabled',
            'Enabled',
        ];
    }

    public static function getAccountStatusById(int $id): string
    {
        $companyTypes = self::accountStatus();
        return $companyTypes[$id];
    }

    public static function getAccountStatusIdByValue(string $value): string
    {
        return array_search($value, self::accountStatus());
    }


    public static function personRoleTypes(): array
    {
        return [
            'Holder',
            'Procurator',
            'Bearer',
            'Associate',
        ];
    }

    public static function getPersonRoleTypesById(int $id): string
    {
        $companyTypes = self::personRoleTypes();
        return $companyTypes[$id];
    }

    public static function getPersonRoleTypesIdByValue(string $value): string
    {
        return array_search($value, self::personRoleTypes());
    }
}