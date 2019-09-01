<?php
include_once('model/class/RoleManager.php');
include_once('model/class/UserManager.php');
include_once('model/class/EmergencyManager.php');
include_once('model/class/MenuManager.php');

function addData($data, $table)
{
    $url = API_ROOT_PATH. "/object/$table";
    $res = Manager::addoNTable($url, $data);
    $res = Manager::correct($res);
    if (isset($res['error'])) {
        if (!$res['error']) {
            $lastId = $res['lastId'];
            if (!empty($lastId)) {
                $res = Manager::addHistory($table, $lastId);
                if ($res != 1) {
                    return $res['message'];
                }else {
                    return 1;
                }
            }else {
                return $res['message'];
            }
        }else {
            return $res['message'];
        }
    }else {
        return $res['message'];
    }
}

function setActionUrl($name)
{
    $name = str_replace(' ', '_', $name);
    return $name;
}

function getModules()
{
    $res = Manager::getDatas('module_role', 'role_id', $_SESSION['user']['roleId']);
    $_SESSION['user']['roles']['modules'] = $res;
}

function getActions()
{
   $module = $_SESSION['user']['roles']['modules'];
   $res = array();
   // Manager::showError($module)
   $sql = "SELECT * FROM actions WHERE module=?";
   foreach ($module as $key => $value) {
       $res = Manager::getMultiplesRecords($sql, [$value['module']]);
   }
   return $res;
}