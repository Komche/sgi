<?php
//echo file_get_contents('config/Configuration.php'); die();
require_once('api/config/Configuration.php');
$database = new Configuration();
global $db;
$db = $database->getConnection();

if (!empty($_POST)) {
    extract($_POST);

    $tables_list = getTables();

    if (is_array($tables_list) || is_object($tables_list)) {

        foreach ($tables_list as $tables) {
            $file = fopen("model/database/$tables.php", "w+");
            fclose($file);
            chmod("model/database/$tables.php", 0777);

            $fields = getFields($tables);
            $text_field = "<?php \nclass $tables {\n";

            if (is_array($fields) || is_object($fields)) {
                //(empty($text_field)) ? $text_field = '$this->config[\'tables\'][\'' . $tables . '\'] = [' : $text_field .= '$this->config[\'tables\'][\'' . $tables . '\'] = [';
                //(empty($text_field_id)) ? $text_field_id = '$this->config[\'tables\'][\'' . $tables . '\'][\'id\'] = [' : $text_field_id .= '$this->config[\'tables\'][\'' . $tables . '\'][\'id\'] = [';
                //$text_field .= '$this->config[\'tables\'][\'' . $tables . '\'] = [';

                $const = "
                public function __construct($$tables) {
                    if (is_array($$tables)) {
                         ";
                foreach ($fields as $key => $field) {
                    if ($key != 0) {
                        $text_field .= "\t public $" . $field . ";\n";
                        $const .= '$this->' . $field . " = isset($$tables" . "['" . $field . "']) ? $$tables" . "['" . $field . "'] : NULL;\n";
                    }
                }
                $const .= "
                    }
                }
                ";
                file_put_contents("model/database/$tables.php", "\n" . $text_field . PHP_EOL, FILE_APPEND | LOCK_EX, null);
                file_put_contents("model/database/$tables.php", "\n" . $const . PHP_EOL, FILE_APPEND | LOCK_EX, null);
                $get = "";
                $set = "";
                foreach ($fields as $key => $field) {
                    if ($key != 0) {
                        $get .= "
                    /**
                    * Get the value of $field
                    */ 
                    public function get" . ucfirst($field) . "()
                    {
                        return " . '$this->' . $field . ";
                    }";

                    $set .= "
                    /**
                    * Set the value of $field
                    *
                    * @return  self
                    */ 
                   public function set" . ucfirst($field) . "($$field)
                   {
                    " . '$this->' . $field . " = $$field;
               
                       return " . '$this' . ";
                   }";
                    }
                }
                $set .= "\n}";
                //$text_field_id .= '];';
                file_put_contents("model/database/$tables.php", "\n" . $get . PHP_EOL, FILE_APPEND | LOCK_EX, null);
                file_put_contents("model/database/$tables.php", "\n" . $set . PHP_EOL, FILE_APPEND | LOCK_EX, null);
                //file_put_contents("config/var.php", "\n" . $text_field_id . PHP_EOL, FILE_APPEND | LOCK_EX, null);
            }
        }
    } else {
        die("Aucune table trouvé dans votre base de donnée");
    }
}

function getTables()
{
    if (isset($_POST)) {
        extract($_POST);
    }
    global $db;
    $sql = "SHOW TABLES";
    $req = $db->prepare($sql);
    $req->execute();
    while ($res = $req->fetch()) {
        $data[] = $res["Tables_in_$db_name"];
    }
    return $data;
}

function getFields($table)
{
    global $db;
    $sql = "DESCRIBE $table";
    $req = $db->query($sql);
    while ($res = $req->fetch()) {
        $data[] = $res['Field'];
    }
    return $data;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>AkoyData</title>
</head>

<body>
    <form class="my-form" action="createTable.php" method="post">
        <div class="form-control">
            <label for="db_name">Nom de la base de nom</label>
            <input type="text" name="db_name">
        </div>
        <div class="form-control">
            <label for="host">Nom du hote</label>
            <input type="text" name="host">
        </div>
        <div class="form-control">
            <label for="username">Utilisateur de la base de donnée</label>
            <input type="text" name="username">
        </div>
        <div class="form-control">
            <label for="password_">mot de passe</label>
            <input type="password_" name="password_">
        </div>
        <input type="submit" value="Valider">
    </form>
</body>

</html>