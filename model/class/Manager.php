<?php
require("api/model/Managers.php");
class Manager extends Managers
{

    protected $last_name;
    protected $first_name;
    protected $email;
    protected $phone_number;
    private static $results = [];


    protected static function bdd()
    {
        $dbname = 'akoybizc_saroapp';
        $user = 'akoybizcom';
        $pass = '@damoukomche';
        $host = 'localhost';
        if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $dbname = 'baseaemn';
            $user = 'root';
            $pass = '';
            $host = 'localhost';
        }
        try {
            $pdo_options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_PERSISTENT => true
               );
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


    

   /* public static function getDatas($table, $field = null, $value = null)
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
    }*/

    /**
     * get data format json
     * 
     * @return json_encode($result)
     */
    public static function getData($table, $property=null, $val=null, $many=false)
    {
        $query = "SELECT * FROM $table ";
        if ($property != null && $val != null) {
            if ($val === 'last') {
                self::lastID($table, $property);
            } elseif ($val === 'distinct') {
                self::distinct($table, $property);
            } elseif ($val === 'exist') {
                echo self::is_not_use($table, $property, $_GET['val']);
            }elseif ($many) {
                $query .= "WHERE $property=:$property";

                $req = self::bdd()->prepare($query);

                $req->execute([$property => $val]);
                if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                    return self::$results;
                } else {
                   echo self::throwError(404, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            }elseif (!empty($_GET['prop']) && !empty($_GET['val'])) {
                extract($_GET);
                $query .= "WHERE $property=:$property AND $prop=:$prop";

                $req = self::bdd()->prepare($query);

                $req->execute([$property => $val, $prop=>$val]);
                if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                    return self::$results;
                } else {
                   echo self::throwError(404, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            } else {
                $query .= "WHERE $property=:$property";

                $req = self::bdd()->prepare($query);
                $req->execute([$property => $val]);
                if (self::$results['data'] = $req->fetch(PDO::FETCH_ASSOC)) {
                    return self::$results;
                } else {
                   echo self::throwError(404, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
                }
            }
        } else {
            $req = self::bdd()->query($query);
            if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
                    return self::$results;
            } else {
               echo self::throwError(404, "Une erreur s'est produite ou enregistrement non trouvé", true)['message'];
            }
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

    public static function verif($data)
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

    /**
     * check if fields is empty
     * 
     * @param array $fields
     * @return boolean
     */
    public function is_not_empty($fields = [])
    {
        if (count($fields) != 0) {
            foreach ($fields as $key => $field) {
                if (empty($field) && trim($field) == "") {
                    $this->throwError(503, "$key est vide");
                    return false;
                }
            }
            return true;
        }
    }

    /**
     * get the last id of table
     * 
     * @param mixed $table
     * @param mixed $field
     * @return array
     */
    public function lastID($table, $fields)
    {
        $sql = "SELECT $fields FROM $table ORDER BY $fields DESC LIMIT 1;";
        $req = $this->db->query($sql);

        if (self::$results['data'] = $req->fetch(PDO::FETCH_ASSOC)) {
            echo json_encode(self::$results);
        }
    }

    /**
     * get the last id of table
     * 
     * @param mixed $table
     * @param mixed $field
     * @return array
     */
    public function distinct($table, $fields)
    {
        $sql = "SELECT DISTINCT $fields FROM $table ORDER BY $fields DESC;";
        $req = $this->db->query($sql);

        if (self::$results['data'] = $req->fetchAll(PDO::FETCH_ASSOC)) {
            echo json_encode(self::$results);
        }
    }

    /**
     * check if row exist in a table
     * 
     * @param mixed $table
     * @param mixed $field
     * @param mixed $value
     * @return boolean
     */
    public function is_not_use($table, $field, $value)
    {
        $sql = "SELECT * FROM $table WHERE $field=:value";

        $req = $this->db->prepare($sql);
        $req->execute(array('value' => $value));
        if ($req->fetch()) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * error manager
     * 
     * @param int|null $code
     * @param mixed $message
     * @param boolean|false $is_error
     * @return json_encode($result)
     */
    public static function throwError($code = null, $message, $is_error = false, $lastId=null)
    {
        if (array_key_exists('data', self::$results))
            unset(self::$results['data']);
        self::$results['error'] = $is_error;
        self::$results['message'] = $message;
        self::$results['lastId'] = $lastId;
        return  self::$results;
        
    }

    public  function insert($object)
    {
        $table = get_object_vars($object);
        $table_name = strtolower(get_class($object));
        //var_dump($table); die($table_name);
        if (count($table) > 0) {
            end($table);
            $last = key($table);
            $sql = "INSERT INTO $table_name(";
            foreach ($table as $key => $field) {
                if ($last != $key) {
                    $sql .= $key . ", ";
                } else {
                    $sql .= $key . ") ";
                }
            }
            $sql .= "VALUES(";
            foreach ($table as $key => $field) {
                if ($last != $key) {
                    $sql .= ":$key, ";
                } else {
                    $sql .= ":$key)";
                }
            }

            $req = self::bdd()->prepare($sql);
            if ($this->is_not_empty($table)) {
                try {
                    $req->execute($table);
                    $lastId = self::bdd()->lastInsertId();
                    return $this->throwError(201, "Enregistrement effectué avec succès", false, $lastId)['lastid'];
                } catch (PDOException $e) {
                    return $this->throwError(503, "Enregistrement échoué; $e", true)[''];
                }
                
            } else {
                return $this->throwError(400, "Un ou plusieurs champs mal renseigner", true);
            }
        }
    }

}
