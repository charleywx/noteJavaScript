<?php
include_once ("model/product_model.php");
include_once ("model/review_model.php");
include_once("Smarty_Config.php");

$productModel = new Product_model();               // 创建产品model
$product = $productModel->find_one($_GET['id']);   // 根据页面传递的id获取产品
$productImagesDir = "productImages";             // 存放后台上传图片的文件夹
$reviewModel = new Review_model();                 // 产品评分model
$recommend_product= $productModel->get_recommend_products();      // 获取推荐产品
$totalTmp = $reviewModel->getPageTotal($_GET['id']);
$total = $totalTmp[0]['total'];                    // 总分
$reviewtotalTmp = $reviewModel->getReviewTotal($_GET['id']);
$reviewavg = $reviewtotalTmp[0]['avg'];      // 平均分

$smarty->assign("reviewavg",$reviewavg);
$smarty->assign("gid",$_GET['id']);
if(isset($_POST['keyword']) && $_POST['keyword'] != ''){
    $key = trim($_POST['keyword']);
    $product_id = $productModel->searchProduct($key);
    if($product_id == 0){
        echo "<script>alert('没有查到这个产品!');</script>";
    }else{
        echo "<script>window.location.href='product_list.php?id=".$product_id."';</script>";
    }
}
$smarty->assign("productImagesDir",$productImagesDir);
$smarty->assign("recommend_product",$recommend_product);
$smarty->assign("product",$product);
$smarty->display("product_view.html");
?>
