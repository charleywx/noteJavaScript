<?php
include_once ("model/product_model.php");
include_once ("model/review_model.php");
include_once("Smarty_Config.php");
$productModel = new Product_model();
$product = $productModel->find_one($_GET['id']);
$productImagesDir = "productImages";
$reviewModel = new Review_model();
$recommend_product = $reviewModel->get_recommend_products();
//print_r($recommend_product);exit;
$totalTmp = $reviewModel->getPageTotal($_GET['id']);
$total = $totalTmp[0]['total'];
$reviewtotalTmp = $reviewModel->getReviewTotal($_GET['id']);
$reviewavg = $reviewtotalTmp[0]['avg'];

$pagesize=5;
if($total>0){
    if(isset($_GET['page']) && $_GET['page'] != ''){
        $page=intval($_GET['page']);
    }else{
        $page=1;
    }


    if($total<$pagesize){
        $pagecount=1;
    }else{
        if($total%$pagesize==0){
            $pagecount=intval($total/$pagesize);
        }else{
            $pagecount=intval($total/$pagesize)+1;
        }
    }
    if(isset($_GET['type']) && $_GET['type'] != ''){
        $type = $_GET['type'];
    }else{
        $type = '';
    }
    $reviews = $reviewModel->getPageInfo($page,$pagesize,$_GET['id'],$type);
}
$smarty->assign("gid",$_GET['id']);
$smarty->assign("productImagesDir",$productImagesDir);
$smarty->assign("product",$product);
$smarty->assign("recommend_product",$recommend_product);
$smarty->assign("reviewavg",$reviewavg);
$smarty->assign("total",$total);
$smarty->assign("pagesize",$pagesize);
$smarty->assign("pagecount",$pagecount);
$smarty->assign("page",$page);
$smarty->assign("type",$type);
$smarty->assign("reviews",$reviews);
$smarty->display("product_review.html");

?>