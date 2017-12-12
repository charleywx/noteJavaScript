<?php
session_start();
include_once("Smarty_Config.php");
require_once "../model/admin_model.php";
if(isset($_POST['username']) && $_POST['username']!="" && isset($_POST['pwd']) && $_POST['pwd']!=""){
   $admin_obj = new Admin_model();
    $isfound = $admin_obj->isfound(trim($_POST['username']),trim($_POST['pwd']));
    if ($isfound) {
        $_SESSION['back_user_id'] = $_POST['username'];
        $_SESSION['back_password'] = $_POST['pwd'];
        echo "<script>window.location.href='aindex.php';</script>";
    }else{
        echo "<script>alert('登录失败，请检查您填写的账号和密码是否正确！');</script>";
    }
}
$smarty->display("index.html");
?>