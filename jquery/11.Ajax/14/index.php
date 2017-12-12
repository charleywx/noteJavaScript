<?php
	if(!empty($_POST['username'])){
		$username = $_POST['username'];
		
		$age = $_POST['age'];
		
		$dataArray = array(
					"username"=>$username,
					"age"=>$age,
					);
		$jsonStr = json_encode($dataArray);
		echo $jsonStr;
	}
?>