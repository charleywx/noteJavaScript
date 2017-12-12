<?php
include_once "../model/admin_model.php";
    $admin_model = new Admin_model();
if(isset($_POST['submit']) && $_POST['submit']!=""){
    $admin_user = $_POST['admin_user'];
    $password = $_POST['admin_pass'];
    $addtime = date("Y-m-d H:i:s");
    $data = array(
        'admin_user' => $admin_user,
        'admin_pass' => $password,
        'addtime' => $addtime,
    );
    $insert = $admin_model->insert($data);
    redirect('edit_admin.php');
}

if(isset($_POST['submite']) && $_POST['submite']!=""){
    $id = $_POST['bcjyzid'];
    $admin_user = $_POST['admin_user'];
    $admin_pass = $_POST['admin_pass'];
    $addtime = date("Y-m-d H:i:s");
	$data = array(
            'id'  =>$id,
            'admin_user' => $admin_user,
            'admin_pass' => $admin_pass,
            'addtime' => $addtime
        );
    $admin_model->update($data);
    redirect('edit_admin.php');
}

if(isset($_GET['del']) && $_GET['del'] == 't'){
    $id = $_GET['id'];
    $admin_model->delete($id);
    redirect('edit_admin.php');
}
function redirect($url) {
    echo "<script>";
    echo "location.href='".$url."';";
    echo "</script>";
    echo "exit;";
}

?>
