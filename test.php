<?php session_start();

function bdd()
    {
        $dbname = 'akoybizc_saroapp';
        $user = 'akoybizcom';
        $pass = '@damoukomche';
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

    function modifyRecord($sql, $params)
    {
        $req = bdd()->prepare($sql);
        $res = $req->execute($params);
        return $res;
    }

    $sql = "INSERT INTO users(first_name, last_name, matricule, phone_number, 
        casern, type_agent, photo, role, password_) VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $p = password_hash("@komchesaroapp2019", PASSWORD_BCRYPT);
    echo modifyRecord($sql, ['admin', 'Komche','AA00', '+22798960388',  1, 0, 0, 1, $p]);
   unset($_SESSION['user']);
   session_destroy();