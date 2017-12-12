<?php
include_once "checkLogin.php";
include_once "../model/product_model.php";
include("include/fckeditor/fckeditor.php");
include_once("Smarty_Config.php");
$edit = "f";

$productModel = new Product_model();
//
if (isset($_GET['edit']) && $_GET['edit'] == 't') {
    $bcjyz = $productModel->find_one($_GET['id']);
    $edit = "t";
    $oFCKeditor = new FCKeditor ( 'description' );
    $oFCKeditor->BasePath = "include/fckeditor/";
    $oFCKeditor->ToolbarSet = 'easywolf';
    $oFCKeditor->Value = $bcjyz [0]['description'];
    $oFCKeditor->Width = 650;
    $oFCKeditor->Height = 350;
    $smarty->assign("editor",$oFCKeditor->CreateHtml());
    $smarty->assign("bcjyz",$bcjyz);
}

$bcjyzs = $productModel->find_many();
$smarty->assign("edit",$edit);
$smarty->assign("bcjyzs",$bcjyzs);
$smarty->display("edit_products.html");