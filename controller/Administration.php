<?php
include_once('model/class/RoleManager.php');

function addData($data, $table)
{
    $url = API_ROOT_PATH. "/object/$table";
    $res = RoleManager::addRole($url, $data);
    if (isset($res['error'])) {
        $res = json_decode($res, true);
        if (!$res['error']) {
            header('Location: index.php');
        }else {
            $_SESSION['messages'] = $res['message'];
        }
    }else {
        $_SESSION['messages'] = $res['message'];
    }
}