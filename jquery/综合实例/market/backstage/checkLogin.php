<?php
session_start();
if(!(isset($_SESSION['back_user_id']) && $_SESSION['back_user_id']!="" && isset($_SESSION['back_password']) && $_SESSION['back_password']!="")){
    echo "<script>alert('请正确登录！'); window.location.href='index.php';</script>";
}