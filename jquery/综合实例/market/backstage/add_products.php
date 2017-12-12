<?php
include_once "checkLogin.php";
include("include/fckeditor/fckeditor.php");
include_once("Smarty_Config.php");
$oFCKeditor = new FCKeditor ( 'description' );
$oFCKeditor->BasePath = "include/fckeditor/";
$oFCKeditor->ToolbarSet = 'easywolf';
$oFCKeditor->Value = $bcjyz [0]['description'];
$oFCKeditor->Width = 650;
$oFCKeditor->Height = 350;
$smarty->assign("editor",$oFCKeditor->CreateHtml());
$smarty->display("add_products.html");
?>