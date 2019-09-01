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
        $dbname = 'akoybizc_saroapp';
        $user = 'akoybizcom';
        $pass = '@damoukomche';
        $host = 'localhost';
        if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $dbname = 'saroapp';
            $user = 'root';
            $pass = '';
            $host = 'localhost';
        }
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$user", "$pass", $pdo_options);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
        return $bdd;
    }

    public static function getMultiplesRecords($sql, $params = [])
    {
        $req = self::bdd()->prepare($sql);
        if (!empty($params) && !empty($params)) { // parameters must exist before you call bind_param() method
            $req->execute($params);
        }
        if ($res = $req->fetchAll(PDO::FETCH_ASSOC)) {
            return $res;
        }
    }


    public static function is_not_empty($fields = [])
    {
        if (count($fields) != 0) {
            foreach ($fields as $key => $field) {
                if (empty($field) && trim($field) == "") {
                    return "un des champs est vide";
                }
            }
            return 1;
        }
    }

    public static function getDatas($table, $field = null, $value = null)
    {
        if ($field != null && $value != null) {
            $sql = "SELECT * FROM $table WHERE $field=?";
            return self::getMultipleRecords($sql, [$value]);
        } else {
            $url = API_ROOT_PATH . "/$table";
            $data = self::file_get_data($url);
            if ($data['error']) {
                return $data['message'];
            } else {
                return $data['data'];
            }
        }
    }

    public static function getData($table, $field, $value)
    {
        $url = API_ROOT_PATH . "/$table/$field/$value";
        $data = self::file_get_data($url);
        if ($data['error']) {
            return 0;
        } else {
            return $data['data'];
        }
    }

    public static function addoNTable($url, $data)
    {
        $res = self::verif($data);
        if ($res != 1) {
            return $res;
        }

        $res = self::file_post_contents($url, $data);
        return $res;
    }

    public static function correct($res)
    {
        $res = json_decode($res);
        $res = (array) $res;
        return $res;
    }

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
        /* $res = array();
        foreach ($data as $key => $value) {
            if (is_numeric($value)) {
                $res['message'] = "$key doit être écrit avec du text";
                return $res;
            }

            if (strlen($value) < 3 && !is_int($value)) {
                $res['message'] = 'Votre texte est trop cours';
                return $res;
            }
        } */

        return 1;
    }

    public static function messages($msg, $type_alerte)
    {
        // die(var_dump($msg));
        echo  '<div class="alert ' . $type_alerte . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Saroapp!</h4>
        ' . $msg . '
      </div>';
    }

    public static function showError($var)
    {
        die(var_dump($var));
    }

    public static function addHistory($table, $lastId)
    {
        $url = API_ROOT_PATH . "/history_data";
        $data = array();
        $data['created_by'] = $_SESSION['user']['id'];
        $data['action'] = 'ajout';
        $data['table_name'] = $table;
        $data['table_id'] = $lastId;
        $res = self::addoNTable($url, $data);
        $res = self::correct($res);
        if (isset($res['error'])) {
            return 1;
        } else {
            return $res['message'];
        }
    }
}
