<?php 
require('controller/Administration.php');

if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='addRole') {
        if (!empty($_POST)) {
            $data = $_POST;
            $res = addRoles($data);

            if ($res != 1) {
                $_SESSION['messages'] = $res;
            }
        }
        require_once("view/addRoleView.php");
    }
}else {
    require_once("view/addRoleView.php");
}