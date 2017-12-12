<?php
include_once "checkLogin.php";
include_once "../model/product_model.php";
if(isset($_POST['submit']) && $_POST['submit']!=""){
    $product_name = $_POST['product_name'];          // 获取产品名称
    $price = $_POST['price'];             // 获取产品价格
    $weight = $_POST['weight'];           // 获取产品重量
    $methods = $_POST['methods'];        // 获取发货方式
    // 获取产品描述
    if(!get_magic_quotes_gpc())
    {
        $description = addslashes($_POST['description']);
    }else{
        $description = $_POST['description'];
    }
    $auth_code = $_POST['auth_code'];    // 获取产品防伪码
    $addtime = date("Y-m-d H:i:s");      // 添加时间
    $dir = "../productImages";          // 图片上传路径
    if (! is_dir($dir)) {
        @mkdir($dir);                     // 如果不存在该文件夹，则创建
    }

    $covername = $_FILES["cover"]["name"];   // 封面文件名称
    $icovername = date("YmdHis") . mt_rand(1000, 9999) . substr($covername, strrpos($covername, "."), strlen($covername) - strrpos($covername, "."));    // 将文件重命名为唯一的随机名称
    $cover_path = $dir . "/" . $icovername;     // 上传位置
    @move_uploaded_file($_FILES["cover"]["tmp_name"], $cover_path);    // 上传文件
    $cover = $icovername;
    $smallcovername = $_FILES["smallcover"]["name"];             // 封面小图名称
    $ismallcovername = date("YmdHis") . mt_rand(1000, 9999) . substr($covername, strrpos($covername, "."), strlen($smallcovername) - strrpos($smallcovername, ".")); // 将文件重命名为唯一的随机名称
    $smallcover_path = $dir . "/" . $ismallcovername;   // 上传位置
    @move_uploaded_file($_FILES["smallcover"]["tmp_name"], $smallcover_path);    // 上传文件
    $smallcover = $ismallcovername;

    $upfilename = $_FILES["picture"]["name"];          // 产品细节图名称
    $iupfilename = date("YmdHis") . mt_rand(1000, 9999) . substr($upfilename, strrpos($upfilename, "."), strlen($upfilename) - strrpos($upfilename, "."));   // 将文件重命名为唯一的随机名称
    $picture_path = $dir . "/" . $iupfilename;   // 上传位置
    @move_uploaded_file($_FILES["picture"]["tmp_name"], $picture_path);    // 上传图片
    $pic = $iupfilename;
    $data = array(
        'product_name' => $product_name,
        'description' => $description,
        'auth_code' => $auth_code,
        'addtime' => $addtime,
        'picture' =>$pic,
        'cover' => $cover,
        'smallcover' => $smallcover,
        'price'=>$price,
        'weight'=>$weight,
        'methods'=>$methods
    );
    $product_model = new Product_model();
    $insert = $product_model->insert($data);
    if($insert == 1){
        echo "<script>alert('添加产品成功！');</script>";
    }else{
        echo "<script>alert('添加产品失败！');</script>";
    }
    redirect('edit_products.php');
}

if(isset($_POST['submite']) && $_POST['submite']!=""){    // 修改产品
    $product_model = new Product_model();
    $id = $_POST['bcjyzid'];                     // 产品id
    $product_name = $_POST['product_name'];     // 产品名称
    if(!get_magic_quotes_gpc())
    {
        $description = addslashes($_POST['description']);  // 产品描述
    }else{
        $description = $_POST['description'];
    }
    $auth_code = $_POST['auth_code'];           // 产品防伪码
    $addtime = date("Y-m-d H:i:s");             // 添加时间
    $weight = $_POST['weight'];                  // 产品重量
    $methods = $_POST['methods'];                // 产品发货方式
    $price = $_POST['price'];                     // 产品价格
    if(isset($_FILES["cover"]["name"]) && $_FILES["cover"]["name"]!=""){   // 如果修改了封面图片
        $dir = "../productImages";
        $cover_upfilename = $_FILES["cover"]["name"];
        $cover_iupfilename = date("YmdHis") . mt_rand(1000, 9999) . substr($cover_upfilename, strrpos($cover_upfilename, "."), strlen($cover_upfilename) - strrpos($cover_upfilename, "."));
        $cover_address = $dir . "/" . $cover_iupfilename;
        $pcover = $_POST['oldcover'];
        @unlink($dir."/".$pcover);
        @move_uploaded_file($_FILES["cover"]["tmp_name"], $cover_address);
    }else{           // 未修改封面图片，则图片名称还是原来的文件名
        $cover_iupfilename = $_POST['oldcover'];
    }

    if(isset($_FILES["smallcover"]["name"]) && $_FILES["smallcover"]["name"]!=""){ // 如果修改了封面小图片
        $dir = "../productImages";
        $smallcover_upfilename = $_FILES["smallcover"]["name"];
        $smallcover_iupfilename = date("YmdHis") . mt_rand(1000, 9999) . substr($smallcover_upfilename, strrpos($smallcover_upfilename, "."), strlen($smallcover_upfilename) - strrpos($smallcover_upfilename, "."));
        $address = $dir . "/" . $smallcover_iupfilename;
        $p = $_POST['oldsmallcover'];
        @unlink($dir."/".$p);
        @move_uploaded_file($_FILES["smallcover"]["tmp_name"], $address);
    }else{   // 未修改封面小图片，则图片名称还是原来的文件名
        $smallcover_iupfilename = $_POST['oldsmallcover'];
    }

    if(isset($_FILES["picture"]["name"]) && $_FILES["picture"]["name"]!=""){    // 如果修改了细节图片
        $dir = "../productImages";
        $upfilename = $_FILES["picture"]["name"];
        $iupfilename = date("YmdHis") . mt_rand(1000, 9999) . substr($upfilename, strrpos($upfilename, "."), strlen($upfilename) - strrpos($upfilename, "."));
        $address = $dir . "/" . $iupfilename;
        $p = $_POST['oldpicture'];
        @unlink($dir."/".$p);
        @move_uploaded_file($_FILES["picture"]["tmp_name"], $address);
    }else{  // 未修改封面细节图，则图片名称还是原来的文件名
       $iupfilename = $_POST['oldpicture'];
    }
    $data = array(
        'id'  =>$id,
        'cover' =>$cover_iupfilename,
        'smallcover' =>$smallcover_iupfilename,
        'product_name' => $product_name,
        'description' => $description,
        'auth_code' =>$auth_code,
        'addtime' => $addtime,
        'picture' => $iupfilename,
        'price'=>$price,
        'weight'=>$weight,
        'methods'=>$methods
    );
    if($product_model->update($data) == 1){
        echo "<script>alert('修改产品成功！');</script>";
    }else{
        echo "<script>alert('修改产品失败！');</script>";
    }
    redirect('edit_products.php');
}

if(isset($_GET['del']) && $_GET['del'] == 't'){
    $id = $_GET['id'];
    $productModel = new Product_model();
    @unlink("../productImages/".$_GET['oldcover']);
    @unlink("../productImages/".$_GET['oldsmallcover']);
    @unlink("../productImages/".$_GET['oldpath']);
    if($productModel->delete($id) == 1){
        echo "<script>alert('删除产品成功！');</script>";
    }else{
        echo "<script>alert('删除产品失败！');</script>";
    }
    redirect('edit_products.php');
}
function redirect($url) {
    echo "<script>";
    echo "location.href='".$url."';";
    echo "</script>";
    echo "exit;";
}
?>
