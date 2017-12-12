<?php
include_once "checkLogin.php";
include_once "../model/review_model.php";
include_once("Smarty_Config.php");
//

$reviewModel = new Review_model();
//
$review = $reviewModel->find_by_entity_id($_GET['entity_id']);
$smarty->assign("review",$review);
$smarty->display("preview_review.html");