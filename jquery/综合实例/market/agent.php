<?php
    include_once ("model/agent_model.php");
    include_once("Smarty_Config.php");
    $smarty->assign("id",$_GET['id']);
    $smarty->display("agent.html");
?>