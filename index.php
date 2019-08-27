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
        }elseif($action=='compagnie') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'company');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/companyView.php");
        }elseif($action=='rescue') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'rescue_center');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/rescueCenterView.php");
        }elseif($action=='cities') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'city');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/cityView.php");
        }elseif($action=='type') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'type_agent');
    
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/typeAgentView.php");
        }elseif($action=='addUser') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $data['profile_picture'] = $_FILES['profile_picture'];
                $res = UserManager::addUser($data);
               // Manager::showError($res);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }else {
                    header('Location: index.php?action=showUser');
                }
            }
            require_once("view/addUserView.php");
        }elseif($action=='showUser') {
           
            require_once("view/showUserView.php");
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