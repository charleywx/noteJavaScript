<?php
include_once "model/agent_model.php";
$agent_model = new Agent_model();
if(isset($_POST['submit']) && $_POST['submit']!=""){
    $province = $_POST['province'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $companyname = $_POST['companyname'];
    $tel = $_POST['tel'];
    $mobile = $_POST['mobile'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $addtime = date("Y-m-d H:i:s");
    $data = array(
        'province' => $province,
        'city' => $city,
        'area' => $area,
        'companyname' => $companyname,
        'tel' => $tel,
        'mobile' => $mobile,
        'fax' => $fax,
        'email' => $email,
        'addtime' => $addtime,
    );
    $insert = $agent_model->insert($data);
    if($insert == 1){
        echo "<script>alert('代理信息添加成功！');</script>";
    }else{
        echo "<script>alert('代理信息添加失败！');</script>";
    }
    redirect('agent.php');
}
function redirect($url) {
    echo "<script>";
    echo "location.href='".$url."';";
    echo "</script>";
    echo "exit;";
}
?>
