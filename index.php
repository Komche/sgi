<?php 
session_start();
require('controller/Administration.php');

if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}


if (isset($_SESSION['user'])) {
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
        } elseif($action=='module') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'module');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/moduleView.php");
        } elseif($action=='permission') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'actions');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/permissionView.php");
        }elseif($action=='regional_group') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'regional_group');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/regionalGroupView.php");
        }elseif($action=='roleModule') {
            require_once("view/roleModuleView.php");
        }
    }else {
        require_once("view/roleView.php");
    }
}else {
    if (!empty($_POST)) {
        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        }else {
            header('Location: index.php?action=role');
        }
    }
    require('view/loginView.php');
}