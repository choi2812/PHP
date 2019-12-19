<?php
session_start();

if(empty($_POST["data1"])){
	header('Location: sample09_42.php');
}else{
	$_SESSION["data1"]=$_POST["data1"];
	header('Location: sample09_43.php');
}
?>
