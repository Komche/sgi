<?php
class Manager
{

    protected $last_name;
    protected $first_name;
    protected $email;
    protected $phone_number;


    protected function bdd()
    {
        $dbname = 'akoybizc_aemn';
        $user = 'akoybizc_attaher';
        $pass = '@aemn2019';
        if ($_SERVER["SERVER_NAME"] == 'localhost') {
            $dbname = 'aemn';
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


    protected function verif($last_name, $first_name, $email, $phone_number, $code = null)
    {
        if ($code != null) {
            if (strlen($last_name) >= 3 && strlen($first_name) >= 3) {

                $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
                if (preg_match($syntaxe, $email)) {
                    if (strlen($phone_number) >= 8) {
                        return 'ok';
                    } else {
                        return $erreur = "Le numéro de téléphone doit avoir au moins 8 chiffres";
                    }

                } else {
                    return $erreur = "Votre email n\'est pas au bon format";
                }


            } else {
                return $erreur = "Le nom et le prénom doivent avoir au moins trois(3) caractères";
            }
        } else {
            if (strlen($last_name) >= 3 && strlen($first_name) >= 3) {

                $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
                if (preg_match($syntaxe, $email)) {
                    if (strlen($phone_number) >= 8) {
                        return 'ok';
                    } else {
                        return $erreur = "Le numéro de téléphone doit avoir au moins 8 chiffres";
                    }

                } else {
                    return $erreur = "Votre email n\'est pas au bon format";
                }


            } else {
                return $erreur = "Le nom et le prénom doivent avoir au moins trois(3) caractères";
            }
        }
    }


    public static function is_not_empty($fields = [], $not_required = [null])
    {
        if (count($fields) != 0) {
            foreach ($fields as $key => $field) {
                if (empty($field) && trim($field) == "") {
                    if (count($not_required) != 0) {
                        foreach ($not_required as $nkey => $nvalue) {
                            if ($key != $nkey) {
                                return "$key est vide";
                            }
                        }
                    } else {
                        return "$key est vide";
                    }
                }
            }
            return 1;
        }
    }

    public function messages($msg, $type_alerte)
    {
       echo  `<div class="alert $type_alerte alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Saroapp!</h4>
        $msg
      </div>`;
    }
}
    
