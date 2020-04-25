<?php
session_start();
require('controller/Administration.php');

if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}
// $test = "hh";
// //echo(Manager::print_var_name($test));  die();
// $roles = new roles();
// $roles->role(11, "Test", "Mon test");
// Manager::update($roles, "id", 11);
 //var_dump(Manager::getDatas(new region())->getIdregion(3)); die;

if (isset($_SESSION['user'])) {
    getModules();
    if (!empty($_GET['action'])) {
        extract($_GET);
        if ($action == 'role') {
            if (!empty($_POST)) {
                $data = $_POST;
                $roles = new roles($data);
                //var_dump($roles); die;
                $res = insert($roles);
                //$res = addData($data, 'roles');

                //if ($res['code'] != 1) {
                $_SESSION['messages'] = $res;
                // }
            }
            require_once("view/roleView.php");
        } elseif ($action == 'module') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'module');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/moduleView.php");
        } elseif ($action == 'permission') {
            if (!empty($_POST)) {
                $data = $_POST;
                $data['action_url'] = setActionUrl($data['name']);
                $res = addData($data, 'actions');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/permissionView.php");
        } elseif ($action == 'regional_group') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'regional_group');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/regionalGroupView.php");
        } elseif ($action == 'compagnie') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'company');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/companyView.php");
        } elseif ($action == 'rescue') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'rescue_center');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/rescueCenterView.php");
        } elseif ($action == 'region') {
            if (!empty($_POST)) {
                $data = $_POST;
                $region = new region($data);
                //var_dump($region); die;
                $res = insert($region);

                $_SESSION['messages'] = $res;
            }
            require_once("view/regionView.php");
        }elseif ($action == 'users' && !empty($_GET['role'])) {
          
            require_once("view/listeOrganisateurView.php");
        }elseif ($action == 'users') {
          
            require_once("view/UsersView.php");
        }elseif ($action == 'etablissement') {
            if (!empty($_POST)) {
                $data = $_POST;
                //$etablissement = new etablissement($data);
                //var_dump($etablissement); die;
                $res = insert($etablissement);

                $_SESSION['messages'] = $res;
            }
            require_once("view/etablissementView.php");
        } elseif ($action == 'type') {
            if (!empty($_POST)) {
                $data = $_POST;
                $res = addData($data, 'type_agent');

                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                }
            }
            require_once("view/typeAgentView.php");
        } elseif ($action == 'addUser') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $files = new file();
                $data['photo'] = $files->uploadFilePicture($_FILES['profile_picture']);

                $users = new users($data);
                //var_dump($users); die;
                $res = insert($users);
                //$res = addData($data, 'roles');

                //if ($res['code'] != 1) {
                $_SESSION['messages'] = $res;
                // }
                
            }
            require_once("view/addUserView.php");
        } elseif ($action == 'addEmergency') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $file = new file();
                var_dump($file->uploadFilePicture($_FILES['files']));
                die;
                $data['files'] = $_FILES['files'];
                $res = EmergencyManager::addEmergency($data);
                //Manager::showError($data);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=showEmergency');
                }
            }
            require_once("view/addEmergencyGestView.php");
        } elseif ($action == 'showEmergency') {

            require_once("view/showEmergencyGestView.php");
        } elseif ($action == 'ajout-plan') {
            //Manager::showError($_FILES);
            if (!empty($_POST) && !empty($_FILES)) {
                $data = $_POST;
                $data['file'] = $_FILES['file'];
                $res = EmergencyManager::addPlan($data);
                //Manager::showError($data);
                if ($res != 1) {
                    $_SESSION['messages'] = $res;
                } else {
                    header('Location: index.php?action=voir-plan');
                }
            }
            require_once("view/addPlanView.php");
        } elseif ($action == 'voir-plan') {

            require_once("view/showPlanView.php");
        } elseif ($action == 'showUser') {

            require_once("view/showUserView.php");
        } elseif ($action == 'roleModule') {
            require_once("view/roleModuleView.php");
        } elseif ($action == 'profile') {
            require_once("view/profileView.php");
        } elseif ($action == 'logout') {
            require_once("view/logout.php");
        }
    } else {
        require_once("view/profileView.php");
    }
} elseif (isset($_GET['signup'])) {
    if (!empty($_POST)) {
        $res = UserManager::activeUser($_POST);
        //print_r($_POST); die;
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php');
        }
    }
    require('view/registerView.php');
} else {
    if (!empty($_POST)) {

        $res = UserManager::connectUser($_POST);
        if ($res != 1) {
            $_SESSION['messages'] = $res;
        } else {
            header('Location: index.php?action=profile');
        }
    }
    require('view/loginView.php');
}
