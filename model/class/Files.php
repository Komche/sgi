<?php
require_once("Manager.php");
require_once("model/global.php");

class Files
{
   
    public $file_name;
    public $file_url;
    public $file_type;
    public $file_size;
    
   
    
    // upload's user profile profile picture and returns the name of the file
    public function uploadFilePicture($file)
    {
        //Manager::showError($file['profile_picture']);
        // if file was sent from signup form ...
        if (!empty($file) && !empty($file['name'])) {
            // Get image name
            $profile_picture = date("Y.m.d.H.i.s") . $file['name'];
            // define Where image will be stored
            $target = "public/img/" . $profile_picture;
            // upload image to folder
            //Manager::showError($file);
            if (move_uploaded_file($file['tmp_name'], $target)) {
                $url = API_ROOT_PATH . "/files";
                $res = array();
                $this->file_name = $file['name'];
                $this->file_url = $target;
                $this->file_type = $file['type'];
                $this->file_size = $file['size'];
                $manager = new Manager();
                $res = $manager->insert($this);
                Manager::showError($res);
                //$res = self::addoNTable($url, $res);
                //$res = self::correct($res);
                if ($res['error']) {
                    return 'Erreur lors de l\'jout de la photo';
                } else {
                    return $res['lastId'];
                }
                exit();
            } else {
                return 'Erreur lors de l\'jout de la photo';
            }
        }
    }

    
}
