<?php
include_once ("model/product_model.php");
include_once("Smarty_Config.php");
$productModel = new Product_model();
$productImagesDir = "productImages";
if(isset($_POST['keyword']) && $_POST['keyword'] != ''){
    $key = trim($_POST['keyword']);
    $result = $productModel->searchProduct($key);
    if($result == 0){
        echo "<script>alert('没有找到该产品，请重新输入!');history.go(-1);</script>";
    }else{
        $products = $result;
    }
}else{
    $products = $productModel->find_many();
}
if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = $_GET['id'];
}else{
    $id = '';
}
$smarty->assign("id",$id);
$smarty->assign("products",$products);
$smarty->assign("productImagesDir",$productImagesDir);
$smarty->display("product_list.html");
?>