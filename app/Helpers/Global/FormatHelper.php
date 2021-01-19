<?php

if (! function_exists('short_description')) {
    function short_description($text, $limit)
    {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]).'...';
        }

        return $text;
    }
}

if (! function_exists('formatDocumento')) {
    function formatDocumento($doc, $type)
    {
        switch ($type) {
            case '1':
                $format = formatCedula($doc);

                break;

            case '2':
                $format = formatRnc($doc);

                break;

            case '3':
                $format = cleanPasaporte($doc);

                break;

            default:
                $format = $doc;
        }

        return $format;
    }
}

if (! function_exists('cleanPhone')) {
    function cleanPhone($phone)
    {
        return cleanNonDigits($phone);
    }
}

if (! function_exists('cleanCedula')) {
    function cleanCedula($cedula)
    {
        return cleanNonDigits($cedula);
    }
}

if (! function_exists('formatCedula')) {
    function formatCedula($cedula)
    {
        // Input: 00116262669
        // Output: 001-1626266-9
        return substr($cedula, 0, 3) . '-' .
            substr($cedula, 3, 7) . '-' .
            substr($cedula, 10, 1);
    }
}

if (! function_exists('formatTelefono')) {
    function formatTelefono($telefono)
    {
        // Input: 8095656565
        // Output: (809) 565-6565
        return "(".substr($telefono, 0, 3).") ".substr($telefono, 3, 3)."-" . substr($telefono, 4, 4);
    }
}

if (! function_exists('formatPhoneNumber')) {
    function formatPhoneNumber($phoneNumber)
    {
        if (strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
            $areaCode = substr($phoneNumber, -10, 3);
            $nextThree = substr($phoneNumber, -7, 3);
            $lastFour = substr($phoneNumber, -4, 4);

            $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
        } elseif (strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);

            $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
        } elseif (strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);

            $phoneNumber = $nextThree.'-'.$lastFour;
        }

        return $phoneNumber;
    }
}

if (! function_exists('cleanRnc')) {
    function cleanRnc($rnc)
    {
        return cleanNonDigits($rnc);
    }
}

if (! function_exists('formatRnc')) {
    function formatRnc($rnc)
    {
        // Input: 131265499
        // Output: 1-31-26549-9
        return substr($rnc, 0, 1) . '-' .
            substr($rnc, 1, 2) . '-' .
            substr($rnc, 3, 5) . '-' .
            substr($rnc, 8, 1);
    }
}

if (! function_exists('cleanPasaporte')) {
    function cleanPasaporte($pasaporte)
    {
        return cleanNonAlphanumeric($pasaporte);
    }
}

if (! function_exists('cleanNonDigits')) {
    function cleanNonDigits($string)
    {
        // remueve todos los caracteres que no sean digitos del 0 al 9 para almacenamiento
        return preg_replace('~\D~', '', $string);
    }
}

if (! function_exists('cleanNonAlphaNumeric')) {
    function cleanNonAlphanumeric($string)
    {
        // remueve todo lo que no sea letra de A-Z y numero de 0-9
        return preg_replace("/[^[:alnum:][:space:]]/ui", '', $string);
    }
}

if (! function_exists('cleanMoney')) {
    function cleanMoney($value)
    {
        // Remueve signo de ($) y (,)
        return preg_replace('/[\$,]/', '', $value);
    }
}
