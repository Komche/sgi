<?php
require_once("Manager.php");
require_once("model/global.php");

class UserManager  extends Manager
{

    public static function addModule($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

    private static function verifUser($data)
    {
        if (!is_array($data)) {
            return 'Une erreur s\'est produite';
        }

        $res = self::is_not_empty($data);
        if ($res != 1) {
            $res['message'] = $res;
            return $res;
        }

        $res = array();
        foreach ($data as $key => $value) {
            /* if (is_numeric($value)) {
                $res['message'] = "$key doit être écrit avec du text";
                return $res;
            } */

            if (strlen($value) < 3) {
                $res['message'] = 'Votre N° de téléphone est trop cours';
                return $res;
            }

            
        }

        if (strlen($data['password_']<6)) {
            $res['message'] = 'Votre N° de téléphone est trop cours';
                return $res;
        }

        return 1;
    }

    public static function connectUser($data)
    {
        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }
        $url = API_ROOT_PATH."/users/phone_number/".$data['phone_number'];
        $res = self::file_get_data($url);
        if ($res['error']) {
            return 'N° de téléphone ou mot de passe incorrecte';
        }else {
            
            $res = $res['data'];
            if (password_verify($data['password_'], $res['password_'])) {
                $_SESSION['user']['id'] = $res['id'];
                $_SESSION['user']['first_name'] = $res['first_name'];
                $_SESSION['user']['last_name'] = $res['last_name'];
                $_SESSION['user']['matricule'] = $res['matricule'];
                $_SESSION['user']['phone_number'] = $res['phone_number'];
                $_SESSION['user']['casern'] = $res['casern'];
                $_SESSION['user']['photo'] = $res['photo'];
                return 1;
            }else {
                return 'N° de téléphone ou mot de passe incorrecte';
            }
            return $res['data'];
        }
    }

}
