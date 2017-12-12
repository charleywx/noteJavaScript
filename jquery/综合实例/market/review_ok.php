<?php
include_once ("model/review_model.php");
if(isset($_POST['customer_name']) && $_POST['customer_name']!=""){
    $customer_name = $_POST['customer_name'];
    $score = $_POST['score'];
    $product_id = $_POST['product_id'];
    $addtime = date("Y-m-d H:i:s");
    if(!get_magic_quotes_gpc())
    {
        $message = addslashes($_POST['content']);
    }else{
        $message = $_POST['content'];
    }
    $data = array(
        'customer_name' => $customer_name,
        'score' => $score,
        'message' => $message,
        'addtime' => $addtime,
        'product_id' => $product_id
    );
    $view_model = new Review_model();
    $insert = $view_model->insert($data);
    if($insert == 1){
        echo "评论成功！";
    }else{
        echo "评论失败，请重新评价！";
    }
}

?>
