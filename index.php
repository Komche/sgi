<?php 
require('controller/Administration.php');

if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}

if (!empty($_GET['action'])) {
    extract($_GET);
    if ($action=='role') {
        if (!empty($_POST)) {
            $data = $_POST;
            $res = addData($data, 'roles');

            if ($res != 1) {
                $_SESSION['messages'] = $res;
            }
        }
        require_once("view/roleView.php");
    } else {
        if (!empty($_POST)) {
            $data = $_POST;
            $res = addData($data, 'module');

            if ($res != 1) {
                $_SESSION['messages'] = $res;
            }
        }
        require_once("view/moduleView.php");
    }
}else {
    require_once("view/roleView.php");
}