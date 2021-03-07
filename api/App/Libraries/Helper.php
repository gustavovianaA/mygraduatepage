<?php

namespace App\Libraries;

class Helper
{

    //Validate request data
    public static function validate($data, $field)
    {
        if (isset($data) && (trim($data) != '')) {
            switch ($field) {
                case 'name':
                    break;               
                case 'id':
                    break;
            }
            return [true, ''];
        } else {
            return [false, 'Preencha todos os dados.'];
        }
    }

    /*public static function base64UrlEncode($data)
    {
        $b64 = base64_encode($data);
        if ($b64 === false) {
            return false;
        }
        $url = strtr($b64, '+/', '-_');
        return rtrim($url, '=');
    }*/
}
