<?php
include_once "checkLogin.php";
include_once "../model/review_model.php";

if(isset($_GET['del']) && $_GET['del'] == 't'){
    $id = $_GET['id'];
    $reviewModel = new Review_model();
    $reviewModel->delete($id);
    redirect('edit_reviews.php?product_id='.$_GET['product_id']);
}
function redirect($url) {
    echo "<script>";
    echo "location.href='".$url."';";
    echo "</script>";
    echo "exit;";
}

?>
