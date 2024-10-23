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
            18 => 'Termo do chefe da legislatura municipal',
            19 => 'Termo do chefe do poder executivo municipal',
            20 => 'Ato de Nomeação do representante máximo',
            21 => 'Faturamento mensal',
            22 => 'Certificado Digital',
            23 => 'Estatuto do Sindicato',
            24 => 'Ata da Assembleia de Posse Eleitoral',
            25 => 'Declaração de Faturamento',
            26 => 'Estatuto de Organização Religiosa',
            27 => 'Ata de Nomeação',
            28 => 'Ata de Incorporação',
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
            17 => "Entidade Sindical",
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
            2 => 'QR Code estático',
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


    public static function boletoStatus(?int $key = null, string $lang = 'en'): string|array|null
    {
        $values = [
            0 => ['pt-br'=>'Emitido', 'en'=> 'Created'],
            1 => ['pt-br'=>'Em registro', 'en'=> 'Registering'],
            3 => ['pt-br'=>'Registrado', 'en'=> 'Registered'],
            5 => ['pt-br'=>'Pago', 'en'=> 'Paid'],
            7 => ['pt-br'=>'Cancelado', 'en'=> 'Canceled'],
            8 => ['pt-br'=>'Falhou', 'en'=> 'Fail'],
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][$lang];
    }

    public static function getBoletoStatusKey(string $value, string $lang = 'en'): false|string|int
    {
        foreach (self::boletoStatus() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
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

    /**
     * Retrieves the account conditions types.
     *
     * @param int|null $key The key of the condition type to retrieve (optional).
     * @param string $lang The language code for the condition type value (default: 'en').
     * @return string|array|null The condition type value if $key is provided, or an array of all condition types if $key is not provided. Returns null if the $key is invalid.
     */
    public static function accountConditionsTypes(?int $key = null, string $lang = 'en'): string|array|null
    {
        $values = [
            ['pt-br' => 'Em Análise', 'en' => 'Created'],
            ['pt-br' => 'Limitada', 'en' => 'Limited'],
            ['pt-br' => 'Aprovada', 'en' => 'Verified'],
            ['pt-br' => 'Bloqueada', 'en' => 'Blocked'],
            ['pt-br' => 'Encerrada', 'en' => 'Terminated'],
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][$lang];
    }

    /**
     * Retrieves the condition type code for a specified condition type value.
     *
     * @param string $value The condition type value to search for.
     * @param string $lang The language code for the condition type value (default: 'en').
     * @return false|int The condition type code associated with the condition type value,
     *                  or false if the value is not found.
     */
    public static function getAccountConditionsTypes(string $value, string $lang = 'en'): false|int
    {
        foreach (self::accountConditionsTypes() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }


    /**
     * Retrieves the status code or status values for a specified account key.
     *
     * @param int|null $key The account key to retrieve the status for.
     * @param string $lang The language code for the status value (default: 'en').
     * @return string|array|null If $key is null, returns an array of all status values. If $key exists in the array, returns the corresponding status value. If $key is not found, returns null.
     */
    public static function accountStatus(?int $key = null, string $lang = 'en'): string|array|null
    {
        $values = [
            ['pt-br' => 'Desabilitado', 'en' => 'Disabled'],
            ['pt-br' => 'Habilitado', 'en' => 'Enabled'],
            ['pt-br' => 'Tipo de condição de conta', 'en' => 'AccountConditionType'],
            ['pt-br' => 'Criado', 'en' => 'Created'],
            ['pt-br' => 'Limitado', 'en' => 'Limited'],
            ['pt-br' => 'Verificado', 'en' => 'Verified'],
            ['pt-br' => 'Bloqueado', 'en' => 'Blocked'],
            ['pt-br' => 'Terminado', 'en' => 'Terminated'],
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][$lang];
    }

    /**
     * Retrieves the status code for a specified account status value.
     *
     * @param string $value The account status value to search for.
     * @param string $lang The language code for the status value (default: 'en').
     * @return false|int The status code associated with the account status value, or false if the value is not found.
     */
    public static function getAccountStatusKey(string $value, string $lang = 'en'): false|int
    {
        foreach (self::accountStatus() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }


    /**
     * Retrieves the document status for a specified key and language.
     *
     * @param int|null $key The key representing the document status (default: null).
     * @param string|null $lang The language code for the document status (default: 'en').
     * @return string|array|null The document status or an array of all document statuses if the key is not specified.
     *                          Returns null if the key is not found.
     */
    public static function documentStatus(?int $key = null, ?string $lang = 'en'): string|array|null
    {
        $values = [
            0 => ['pt-br' => 'Esperando Validação', 'en' => 'Awaiting Validation'],
            1 => ['pt-br' => 'Validado', 'en' => 'Validated'],
            2 => ['pt-br' => 'Inválido', 'en' => 'Invalid'],
            3 => ['pt-br' => 'Expirado', 'en' => 'Expired'],
            4 => ['pt-br' => 'Enviado', 'en' => 'Sent'],
            5 => ['pt-br' => 'Reenviado', 'en' => 'Resubmitted'],
            6 => ['pt-br' => 'Reprovado', 'en' => 'Disapproved'],
            7 => ['pt-br' => 'Erro', 'en' => 'Error'],
            8 => ['pt-br' => 'Inexistente', 'en' => 'Inexistent'],
            9 => ['pt-br' => 'Suspenso', 'en' => 'Suspended'],
            10 => ['pt-br' => 'Tipificação de resultado', 'en' => 'TypificationResult']
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][$lang];
    }

    /**
     * Retrieves the status code for a specified document status value.
     *
     * @param string $value The document status value to search for.
     * @param string|null $lang The language code for the status value (default: 'en').
     * @return false|int The status code associated with the document status value, or false if the value is not found.
     */
    public static function getDocumentStatusKey(string $value, ?string $lang = 'en'): false|int
    {
        foreach (self::documentStatus() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }


    /**
     * Retrieves the justification limit type for a specified key and language.
     *
     * @param int|null $key The key to search for (default: null).
     * @param string|null $lang The language code for the justification limit type (default: 'en').
     * @return string|array|null The justification limit type associated with the key and language, or the entire array of justification limit types if key is null, or null if the key is not found.
     */
    public static function justificationLimitType(?int $key = null, ?string $lang = 'en'): string|array|null
    {
        $values = [
            0 => ["pt-br" => "Negócio", "en" => "Business"],
            ["pt-br" => "Renda", "en" => "Income"],
            ["pt-br" => "Emergência", "en" => "Emergency"],
            ["pt-br" => "Education", "en" => "Education"],
            ["pt-br" => "Saúde", "en" => "Health"],
            ["pt-br" => "Viagem", "en" => "Travel"],
            ["pt-br" => "Reforma", "en" => "Renovation"],
            ["pt-br" => "Outros", "en" => "Others"],
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][strtolower($lang)];
    }

    /**
     * Retrieves the type key for a specified justification limit value.
     *
     * @param string $value The justification limit value to search for.
     * @param string|null $lang The language code for the type value (default: 'en').
     * @return false|int The type key associated with the justification limit value, or false if the value is not found.
     */
    public static function getJustificationLimitTypeKey(string $value, ?string $lang = 'en'): false|int
    {
        foreach (self::justificationLimitType() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }


    /**
     * Retrieves the status value or values associated with a specified Pix Key status code.
     *
     * @param int|null $key The status code to search for.
     * @param string $lang The language code for the status value (default: 'en').
     * @return string|array|null The status value or values associated with the specified Pix Key status code, or null if the code is not found. If $key is not provided, an array of all status values will be returned.
     *
     */
    public static function pixKeyStatus(?int $key = null, string $lang = 'en'): string|array|null
    {
        $values = [
            0 => ["pt-br" => 'Criada', "en" => "Created"],
            ["pt-br" => 'Registrando', "en" => "Registering"],
            ["pt-br" => 'Registrada', "en" => "Registered"],
            ["pt-br" => 'Desativada', "en" => "Disabled"],
            ["pt-br" => 'Cancelada', "en" => "Canceled"],
            ["pt-br" => 'Erro', "en" => "Error"],
            ["pt-br" => 'Reivindicada', "en" => "Claiming"],
            ["pt-br" => 'Erro de propriedade', "en" => "ErrorOwnership"],
            ["pt-br" => 'Erro de portabilidade', "en" => "ErrorPortability"]
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][strtolower($lang)];
    }

    /**
     * Retrieves the status code for a specified Pix Key value.
     *
     * @param string $value The Pix Key value to search for.
     * @param string $lang The language code for the status value (default: 'en').
     * @return false|int The status code associated with the Pix Key value, or false if the value is not found.
     */
    public static function getPixKeyStatusCode(string $value, string $lang = 'en'): false|int
    {
        foreach (self::pixKeyStatus() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }


    /**
     * Retrieves the status of a given action key in PIXEL.
     *
     * @param int|null $key The key indicating the action status. If null, returns all action statuses.
     * @param string $lang The language to retrieve the status in. Default is 'en'.
     *
     * @return string|array|null The status of the action key. If $key is null, returns an array of all action statuses.
     *                          If $key is not found, returns null.
     */
    public static function pixKeyActionStatus(?int $key = null, string $lang = 'en'): string|array|null
    {
        $values = [
            0 => ['pt-br' => 'Criada', 'en' => 'Created'],
            ['pt-br' => 'Processado', 'en' => 'Processed'],
            ['pt-br' => 'Erro', 'en' => 'Error'],
            ['pt-br' => 'Cancelada', 'en' => 'Canceled'],
            ['pt-br' => 'Registrando', 'en' => 'Registering'],
            ['pt-br' => 'Pode ser Cancelado', 'en' => 'CanBeCancel'],
            ['pt-br' => 'Registado', 'en' => 'Registered'],
            ['pt-br' => 'Pode ser completado', 'en' => 'CanBeCompleted'],
            ['pt-br' => 'Pode ser processado', 'en' => 'CanBeProcessed'],
            ['pt-br' => 'Esperado', 'en' => 'Expected'],
        ];

        if (!isset($key)) {
            return $values;
        }
        if (!isset($values[$key])) {
            return null;
        }

        return $values[$key][strtolower($lang)];
    }

    /**
     * Retrieves the status code for a given action status value.
     *
     * @param string $value The action status value.
     * @param string $lang The language code. Defaults to 'en'.
     * @return false|int The status code as an integer, false if not found, or the entire status array if no value is provided.
     */
    public static function getPixKeyActionStatusCode(string $value, string $lang = 'en'): false|int
    {
        foreach (self::pixKeyActionStatus() as $key => $status) {
            if (strtolower($status[strtolower($lang)]) == strtolower($value)) {
                return intval($key);
            }
        }
        return false;
    }
}
