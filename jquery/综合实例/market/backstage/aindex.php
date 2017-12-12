<?php
require_once 'checkLogin.php';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>产品之家系统后台</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<noscript><iframe src="*.html"></iframe></noscript>
<frameset rows="*" cols="*,1011,*" frameborder="no" framespacing="0" border="0">
    <frame src="blank.php" name="BLFrame" scrolling="no" noresize>
    <frameset rows="128,*" frameborder="0">
        <frame src="aheader.php" name="headerwindow" scrolling="no">
        <frameset cols="272, *">
            <frame src="aleft.php" name="leftwindow" >
            <frame src="amain.php" name="mainwindow" >
        </frameset>
    </frameset>
    <frame src="blank.php" name="BLFrame" scrolling="no" noresize>
</frameset>
<noframes></noframes>
