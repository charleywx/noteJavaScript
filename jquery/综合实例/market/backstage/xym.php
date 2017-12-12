<?php
$num=$_GET['num'];
 $address="../img/code/".$num.".gif";
 $fp=fopen($address,"r");
 echo fread($fp,filesize($address));
 fclose($fp); 
?>



