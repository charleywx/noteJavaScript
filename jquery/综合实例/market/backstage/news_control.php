<?php
include_once "../model/news_model.php";
$news_model = new News_model();
if(isset($_POST['submit']) && $_POST['submit']!=""){
    $title = $_POST['title'];
    if(!get_magic_quotes_gpc())
    {
        $content = addslashes($_POST['content']);
    }else{
        $content = $_POST['content'];
    }
    $addtime = date("Y-m-d H:i:s");
    $data = array(
        'title' => $title,
        'content' => $content,
        'addtime' => $addtime,
    );
    $insert = $news_model->insert($data);
    if($insert == 1){
        echo "<script>alert('添加新闻成功！');</script>";
    }else{
        echo "<script>alert('添加新闻失败！');</script>";
    }
    redirect('edit_news.php');
}

if(isset($_POST['submite']) && $_POST['submite']!=""){
    $id = $_POST['bcjyzid'];
    $title = $_POST['title'];
    if(!get_magic_quotes_gpc())
    {
        $content = addslashes($_POST['content']);
    }else{
        $content = $_POST['content'];
    }
    $addtime = date("Y-m-d H:i:s");
    $data = array(
        'id'  =>$id,
        'title' => $title,
        'content' => $content,
        'addtime' => $addtime,
    );
    if($news_model->update($data) == 1){
        echo "<script>alert('修改新闻成功！');</script>";
    }else{
        echo "<script>alert('修改新闻失败！');</script>";
    }
    redirect('edit_news.php');
}

if(isset($_GET['del']) && $_GET['del'] == 't'){
    $id = $_GET['id'];
    if($news_model->delete($id) == 1){
        echo "<script>alert('删除产品成功！');</script>";
    }else{
        echo "<script>alert('删除产品失败！');</script>";
    }
    redirect('edit_news.php');
}
function redirect($url) {
    echo "<script>";
    echo "location.href='".$url."';";
    echo "</script>";
    echo "exit;";
}
?>
