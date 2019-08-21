<?php
require("Manager.php");

class RoleManager  extends Manager
{
    private static function verifRole($data)
    {
        if (!is_array($data) || !is_object($data)) {
            return 'Une erreur s\'est produite';
        }

        $res = self::is_not_empty($data);
        if ($res != 1) {
            return $res;
        }

        foreach ($data as $key => $value) {
            if (is_numeric($value[$key])) {
                return 'Un rôle doit être écrit avec du text';
            }

            if (strlen($value[$key]) < 3) {
                return 'Votre text est trop cours';
            }
        }
    }


    public static function addRole($url, $data)
    {
        $res = self::verifRole($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
    }
}
