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

    // upload's user profile profile picture and returns the name of the file
    public static function uploadProfilePicture($file)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        if (!empty($file) && !empty($file['name'])) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // upload image to folder
            if (move_uploaded_file($file['tmp_name'], $target)) {
                $url = API_ROOT_PATH."/files";
                $res = array();
                $res['file_name'] = $file['name'];
                $res['file_url'] = $target;
                $res['file_type'] = $file['type'];
                $res['file_size'] = $file['size'];
                //Manager::showError($res);
                $res = self::addoNTable($url, $res);
                $res = self::correct($res);
                if ($res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                }else {
                    return $res['lastId'];
                }
                exit();
            } else {
                return 'Erreur lors de l\'jout de la photo';
            }
        }
    }

    public static function addUser($data)
    {
        $res = self::is_not_empty($data);
        if ($res!=1) {
            return $res;
        }

        $data['photo'] = self::uploadProfilePicture($data['profile_picture']);
        $data['photo'] = intval($data['photo']);
        if (!is_int($data['photo']) && $data['photo']==0) {
            return $data['photo'];
        }
        
        unset($data['profile_picture']);
        $url = API_ROOT_PATH."/users";
        $res = self::addoNTable($url, $data);
        //Manager::showError($data);
        $res = self::correct($res);
        if ($res['error']) {
            Manager::showError($res);
            return $res;
        }
        
        return 1;
    }

}
