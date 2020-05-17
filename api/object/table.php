<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/ccfn/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Content-Type: application/json');

include_once('../config/Configuration.php');
include_once('../model/table.php');
include_once('../model/function.php');
include_once('../model/HttpRequest.php');

// get url request values
$request = new HttpRequest();
$request->setBaseUrl($_SERVER['SCRIPT_NAME']);
$request->createRequest();
$url_request =   $request->getParameters();

// get configuration values
$database = new Configuration();
$db = $database->getConnection();
$config = $database->getConfig();
$table_key = 0;

//get input data
$data = json_decode(file_get_contents('php://input'), true);
if (empty($data)) {
    $data = $_POST;
}

// check if table_1 existe in database
if (in_array($url_request['table_1'], $config['tables']) || ($url_request['table_1'] == "custom")) {
    $current_table = $url_request['table_1'];
} else {
    Table::throwError(null, $url_request['table_1'] . "  n'existe dans la base de donnée", true);
}
    $table_field = '';
    $property = '';
    $val='';
if ($current_table != "custom") {
    // check if property_1 existe in database
    $table_field = getSimpleArray($config['tables'][$current_table]);
    if (!empty(trim($url_request['property_1']))) {
        if (in_array($url_request['property_1'], $table_field)) {
            $property = $url_request['property_1'];
        } else {
            Table::throwError(null, $url_request['property_1'] . " n'existe dans la table $current_table", true);
        }
    } else {
        $property = null;
    }

    // check  val_1 existe 
    $table_field = getSimpleArray($config['tables'][$current_table]);
    if (!empty($url_request['val_1'])) {
        $val = $url_request['val_1'];
    } else {
        $val = null;
    }
}

// create instance of Table
$table = new Table($db, $current_table, $table_field, $data, $property, $val, $config['jwt'], $config['key']);

// check required field
$required = "";
if ($current_table!="custom") {
    if (array_key_exists('required', $config['tables'][$current_table])) {
        $required = $config['tables'][$current_table]['required'];
    } else {
        $required = null;
    }
}

// get method
$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_method) {
    case 'GET':
        header("Access-Control-Allow-Methods: GET");
        if ($current_table == "custom") {
            if ($url_request['property_1']=="list_project") {
                $sql  = "SELECT * FROM projet p, equipe e, region r, files f, note n 
                WHERE p.equipe = e.id_equipe AND e.region = r.id_region AND f.id = p.file  
                AND p.id_projet = n.projet AND etat_retenu=? GROUP BY p.id_projet";
                echo $table->getMultiplesRecords($sql, ['Oui']);
            }elseif ($url_request['property_1']=="projects_by_date") {
                $sql = "SELECT COUNT(*) as nb, date_post FROM projet WHERE DATE(date_post) = ?";
                for ($i=20200515; $i <= date("Ymd"); $i++) { 
                    echo $table->getMultiplesRecords($sql, [$i]);
                    die;
                }
            }
           
        } else {

            echo $table->getData();
        }
        break;

    case 'POST':
        header("Access-Control-Allow-Methods: POST");
        echo $table->insert($required);
        break;

    case 'PUT':
        header("Access-Control-Allow-Methods: PUT");

        if (!empty($val)) {
            echo $table->update();
        } else {
            $table->throwError(503, "Vous avez oublié de donner l'identifiant de la table à modifier", true);
        }
        break;
    case 'DELETE':
        header("Access-Control-Allow-Methods: DELETE");
        echo $table->delete();
        break;

    default:
        header('HTTP/1.0 405 Method Not Allowed');
        break;
}
