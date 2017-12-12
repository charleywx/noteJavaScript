<?php
include_once "checkLogin.php";
include_once "../model/admin_model.php";
include_once("Smarty_Config.php");
$adminModel = new Admin_model();
//
$edit = 'f';
if (isset($_GET['edit']) && $_GET['edit'] == 't') {
    $bcjyz = $adminModel->find_one($_GET['id']);
    $edit = "t";
    $smarty->assign("bcjyz",$bcjyz);
}
$bcjyzs = $adminModel->find_many();
$smarty->assign("edit",$edit);
$smarty->assign("bcjyzs",$bcjyzs);
$smarty->display("edit_admin.html");