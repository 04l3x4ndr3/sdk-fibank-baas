<?php

namespace TwoPlug\SdkFitbank\Helpers;

class ListValues
{
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

    public static function documentFormat(): array
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

    public static function genders(): array
    {
        return [
            0 => 'Male',
            1 => 'Famale',
            2 => 'Other',
        ];
    }

    public static function getGendersById(int $id): string
    {
        $genders = self::genders();
        return $genders[$id];
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

    public static function companyTypes(): array
    {
        return [
            'SA',
            'LTDA',
            'MEI',
        ];
    }

    public static function getCompanyTypesById(int $id): string
    {
        $companyTypes = self::companyTypes();
        return $companyTypes[$id];
    }
}