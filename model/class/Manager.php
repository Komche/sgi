<?php
require("api/model/Managers.php");
class Manager extends Managers
{

    protected $last_name;
    protected $first_name;
    protected $email;
    protected $phone_number;


    protected static function bdd()
    {
        $dbname = 'akoybizc_aemn';
        $user = 'akoybizc_attaher';
        $pass = '@aemn2019';
        if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $dbname = 'saroapp';
            $user = 'root';
            $pass = '';
        }
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", "$user", "$pass", $pdo_options);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
        return $bdd;
    }


    public static function is_not_empty($fields = [], $not_required = [null])
    {
        if (count($fields) != 0) {
            foreach ($fields as $key => $field) {
                if (empty($field) && trim($field) == "") {
                    return "$key est vide";
                    
                }
            }
            return 1;
        }
    }

    public static function getDatas($table)
    {
        $url = API_ROOT_PATH."/$table";
        $data = self::file_get_data($url);
        if ($data['error']) {
            return $data['message'];
        }else {
            return $data['data'];
        }
    }

    public static function getData($table, $field)
    {
        $url = API_ROOT_PATH."/$table";
        $data = self::file_get_data($url);
        if ($data['error']) {
            return $data['message'];
        }else {
            return $data['data'];
        }
    }

    public static function messages($msg, $type_alerte)
    {
       // die(var_dump($msg));
       echo  '<div class="alert '.$type_alerte.' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Saroapp!</h4>
        '.$msg.'
      </div>';
    }

    public static function showError($var)
    {
        die(var_dump($var));
    }
}
    
