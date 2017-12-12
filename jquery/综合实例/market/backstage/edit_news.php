<?php
include_once "checkLogin.php";
include_once("Smarty_Config.php");
include_once "../model/news_model.php";
include("include/fckeditor/fckeditor.php");
//
//ini_set('display_errors', 1);
$newsModel = new News_model();
//
$edit = "f";

if (isset($_GET['edit']) && $_GET['edit'] == 't') {
    $bcjyz = $newsModel->find_one($_GET['id']);
    $edit = "t";
    $oFCKeditor = new FCKeditor ( 'content' );
    $oFCKeditor->BasePath = "include/fckeditor/";
    $oFCKeditor->ToolbarSet = 'Default';
    $oFCKeditor->Value = $bcjyz['content'];
    $oFCKeditor->Width = 650;
    $oFCKeditor->Height = 350;
    $smarty->assign("editor",$oFCKeditor->CreateHtml());
    $smarty->assign("bcjyz",$bcjyz);
}
$bcjyzs = $newsModel->find_many();
$smarty->assign("edit",$edit);
$smarty->assign("bcjyzs",$bcjyzs);
$smarty->display("edit_news.html");
