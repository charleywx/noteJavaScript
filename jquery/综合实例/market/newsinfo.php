<?php
include_once ("model/news_model.php");
include_once("Smarty_Config.php");
$newsModel = new News_model();
$news = $newsModel->find_one($_GET['id']);
$smarty->assign("id",$_GET['id']);
$smarty->assign("news",$news);
$smarty->display("newsinfo.html");
?>
