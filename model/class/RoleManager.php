<?php
require("Manager.php");
require_once("model/global.php");

class RoleManager  extends Manager
{
    private static function verif($data)
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
            if (is_numeric($value)) {
                $res['message'] = 'Un rôle doit être écrit avec du text';
                return $res;
            }

            if (strlen($value) < 3) {
                $res['message'] = 'Votre texte est trop cours';
                return $res;
            }
        }

        return 1;
    }


    public static function addRole($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

    public static function addModule($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }

}
