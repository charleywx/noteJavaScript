<?php
include_once "checkLogin.php";
include_once "../model/review_model.php";
//
include_once("Smarty_Config.php");

$reviewModel = new Review_model();

$product_reviews = $reviewModel->find_by_product_id($_GET['product_id']);
$smarty->assign("product_reviews",$product_reviews);
$smarty->assign("pid",$_GET['product_id']);
$smarty->display("edit_reviews.html");