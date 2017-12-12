<?php
include_once("Smarty/Smarty.class.php");
$smarty = new Smarty();

$smarty->template_dir = dirname(__FILE__).'/Smarty/templates'; //模板目录

$smarty->config_dir = dirname(__FILE__).'/Smarty/config';

$smarty->compile_dir = dirname(__FILE__).'/Smarty/templates_c';

$smarty->cache_dir = dirname(__FILE__).'/Smarty/cache';

$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";

//$smarty->assign("smarty",$smarty);
