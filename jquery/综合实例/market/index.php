<?php
include_once("Smarty_Config.php");
include_once ("model/product_model.php");
$productModel = new Product_model();
$products = $productModel->find_many();
$smarty->assign("products",$products);
$smarty->display("index.html");
?>
