<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body  style="background-color: #fcfcfc">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<div class="wrd">


    <div class="textd" style="padding-top: 85px;"><div class="textdd1"><a href="add_admin.php"  class="a2" target="mainwindow">添加管理员</a></div></div>
    <div class="textd" style="margin-top: -34px;"><div class="textdd2"><a href="edit_admin.php"  class="a2" target="mainwindow">管理管理员</a></div></div>



    <div class="textd" style="padding-top: 15px;"><div class="textdd3"><a href="add_news.php" class="a2" target="mainwindow">添加新闻</a></div></div>
    <div class="textd" style="padding-top: 5px;"><div class="textdd2"><a href="edit_news.php" class="a2" target="mainwindow">管理新闻</a></div></div>

    <div class="textd" style="padding-top: 15px;"><div class="textdd3"><a href="add_products.php" class="a2" target="mainwindow">添加产品</a></div></div>
    <div class="textd" style="padding-top: 5px;"><div class="textdd2"><a href="edit_products.php" class="a2" target="mainwindow">管理产品</a></div></div>

</div>

<script src="../js/jquery.js"></script>

<script language="javascript">
    function showDhList(x){
        $("#"+x).slideToggle('fast');
    }
</script>
</body>
</html>