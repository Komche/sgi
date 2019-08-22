<?php
include_once('model/class/RoleManager.php');

function addRoles($data)
{

    $url = API_ROOT_PATH. "/object/roles";
    $res = RoleManager::addRole($url, $data);

    $res = json_decode($res, true);

    if (!$res['error']) {
        header('Location: index.php');
    }else {
        return $res['message'];
    }
}

function showError($var)
{
    die(print_r($var));
}