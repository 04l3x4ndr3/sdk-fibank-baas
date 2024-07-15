<?php

namespace O4l3x4ndr3\SdkFitbank\Helpers;

class ListValues
{
    # API SET LIST VALUES

    public static function personRoleTypes(?int $key = null): string|array|null
    {
        $values = [
            3 => 'Associado',
            1 => 'Procurador'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getPersonRoleTypeKey(string $value): false|string|int
    {
        return array_search($value, self::personRoleTypes());
    }


    public static function brazilianStates(?int $key = null): string|array|null
    {
        $values = [
            0 => 'AC',
            1 => 'AL',
            2 => 'AP',
            3 => 'AM',
            4 => 'BA',
            5 => 'CE',
            6 => 'DF',
            7 => 'ES',
            8 => 'GO',
            9 => 'MA',
            10 => 'MT',
            11 => 'MS',
            12 => 'MG',
            13 => 'PA',
            14 => 'PB',
            15 => 'PR',
            16 => 'PE',
            17 => 'PI',
            18 => 'RJ',
            19 => 'RN',
            20 => 'RS',
            21 => 'RO',
            22 => 'RR',
            23 => 'SC',
            24 => 'SP',
            25 => 'SE',
            26 => 'TO'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getBrazilianStatesKey(string $value): false|string|int
    {
        return array_search($value, self::brazilianStates());
    }

    public static function documentTypes(?int $key = null): string|array|null
    {
        $values = [
            0 => 'RG (Frente)',
            1 => 'CPF',
            2 => 'Comprovante de domicílio',
            3 => 'CNH (Frente)',
            4 => 'CNPJ',
            5 => 'Contrato Social',
            6 => 'Procuração',
            7 => 'RG (Verso)',
            10 => 'RG',
            11 => 'Ata de Constituição',
            13 => 'Outros',
            14 => 'Selfie',
            15 => 'Ata de eleição',
            16 => 'CNH (Verso)',
            17 => 'Faturamento anual',
            21 => 'Faturamento mensal',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getDocumentTypeKey(string $value): false|string|int
    {
        return array_search($value, self::documentTypes());
    }


    public static function documentFormats(?int $key = null): string|array|null
    {
        $values = [
            0 => '.pdf',
            1 => '.jpg',
            2 => '.jpeg',
            3 => '.txt',
            4 => '.png',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getDocumentFormatKey(string $value): false|string|int
    {
        return array_search($value, self::documentFormats());
    }


    public static function genders(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Masculino',
            1 => 'Feminino',
            2 => 'Outros'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getGenderKey(string $value): false|string|int
    {
        return array_search($value, self::genders());
    }


    public static function maritalStatus(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Solteiro(a)',
            1 => 'Casado(a)',
            2 => 'Divorciado(a)',
            3 => 'Separado(a)',
            4 => 'Viúvo(a)',
            5 => 'Solteiro(a)',
            6 => 'Outros'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getMaritalStatusKey(string $value): false|string|int
    {
        return array_search($value, self::maritalStatus());
    }


    public static function companyTypes(?int $key = null): string|array|null
    {
        $values = [
            0 => "SA",
            1 => "LTDA",
            2 => "MEI",
            3 => "ME",
            4 => "EIRELI",
            5 => "Condomínio",
            6 => "SA Fechada",
            7 => "EIRELI Simples",
            9 => "SLU",
            10 => "FIDC",
            11 => "Sociedade Conta de Participação",
            12 => "Cooperativa",
            13 => "Associação Privada",
            14 => "Sociedade Simples Pura",
            15 => "Cartório",
            16 => "Órgão Público",
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function companyDocumentsType(?int $companyType): array
    {
        return match ($companyType) {
            2, 3 => [0, 2, 7],
            4, 9 => [2, 6, 11, 17],
            5 => [2, 6, 11, 15],
            10 => [2, 5, 6, 17, 13],
            default => [2, 5, 6, 17]
        };
    }

    public static function getCompanyTypesKey(string $value): false|string|int
    {
        return array_search($value, self::companyTypes());
    }

    public static function pixKeyTypes(?int $key = null): string|array|null
    {
        $values = [
            0 => 'CPF',
            1 => 'CNPJ',
            2 => 'E-mail',
            3 => 'Celular',
            4 => 'Chave aleatória',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getPixKeyTypesKey(string $value): false|string|int
    {
        return array_search($value, self::pixKeyTypes());
    }


    public static function pixInitiatonTypes(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Manual',
            1 => 'Chave Pix',
            2 => 'QR Code stático',
            3 => 'QR Code dinâmico',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getPixInitiatonTypesKey(string $value): false|string|int
    {
        return array_search($value, self::pixInitiatonTypes());
    }


    public static function boletoStatus(?int $key = null): string|array|null
    {
        $values = [
            3 => 'Registrado',
            5 => 'Pago',
            7 => 'Cancelado',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getBoletoStatusKey(string $value): false|string|int
    {
        return array_search($value, self::boletoStatus());
    }


    public static function rateValuesType(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Padrão',
            1 => 'Personalizado',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getRateValueTypeKey(string $value): false|string|int
    {
        return array_search($value, self::rateValuesType());
    }


    # WEBHOOK RETURN LIST VALUES

    public static function accountConditionsTypes(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Em Análise',  //Criada
            1 => 'Limitada',
            2 => 'Aprovada',    //Verificada
            3 => 'Bloqueada',
            4 => 'Encerrada'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getAccountConditionsTypes(string $value): false|string|int
    {
        return array_search($value, self::accountConditionsTypes());
    }


    public static function accountStatus(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Desativada',
            1 => 'Ativada',
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getAccountStatusKey(string $value): false|string|int
    {
        return array_search($value, self::accountStatus());
    }


    public static function documentStatus(?int $key = null): string|array|null
    {
        $values = [
            0 => 'Esperando Validação',
            1 => 'Validado',
            2 => 'Inválido',
            3 => 'Expirado',
            4 => 'Enviado',
            5 => 'Reenviado',
            6 => 'Reprovado',
            7 => 'Erro',
            8 => 'Inexistente',
            9 => 'Suspenso',
            10 => 'Tipificação de resultado'
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key];
    }

    public static function getDocumentStatusKey(string $value): false|string|int
    {
        return array_search($value, self::documentStatus());
    }

}
