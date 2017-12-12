<?php
include_once "checkLogin.php";
include("include/fckeditor/fckeditor.php");
include_once("Smarty_Config.php");
$oFCKeditor = new FCKeditor ( 'content' );
$oFCKeditor->BasePath = "include/fckeditor/";
$oFCKeditor->ToolbarSet = 'Default';
$oFCKeditor->Width = 650;
$oFCKeditor->Height = 350;
$smarty->assign("editor",$oFCKeditor->CreateHtml());
$smarty->display("add_news.html");
?>