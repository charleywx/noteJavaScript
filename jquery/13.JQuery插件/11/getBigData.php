[<?php
require_once "conn.php";
if(array_key_exists( 'id',$_REQUEST)) {      // 如果提交的数据中存在参数id
	$id=$_REQUEST['id'];              
}

// if ($id==null || $id=="") $id = 0;     

	$query=mysql_query("select * from tb_type where parentid=$id",$conn);
	$i = 0;
	while($info=mysql_fetch_assoc($query)){

	echo "{id:'".$info['id']."',name:'".$info['typename']."'}";   // 一个节点的JSON数据
	if ($i<count($info)-1) {              
		echo ",";               
	}
	$i++;
	}
?>]