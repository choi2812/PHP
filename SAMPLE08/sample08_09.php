<?php

session_start();
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションを破棄する</title>
</head>
<body>
<table>
<?php
echo '<tr><td>破棄前</td><td></td></tr>';


echo '<tr><td>session_id():</td><td>'.session_id().'</td></tr>';

if(isset($_SESSION["sid"])){
	echo '<tr><td>$_SESSION["sid"]:</td><td>' .$_SESSION["sid"]. "</td></tr>";
}else{
	echo '<tr><td>$_SESSION["sid"]:</td><td>セッション変数はセットされていません</td></tr>';
}


if(isset($_SESSION["test"])){
	echo '<tr><td>$_SESSION["test"]:</td><td>' .$_SESSION["test"]. "</td></tr>";
}else{
	echo '<tr><td>$_SESSION["test"]:</td><td>セッション変数はセットされていません</td></tr>';
}

$_SESSION= array();
session_destroy();

echo '<tr><td>破棄後</td><td></td></tr>';
echo '<tr><td>session_id():</td><td>'.session_id().'</td></tr>';

if(isset($_SESSION["sid"])){
	echo '<tr><td>$_SESSION["sid"]:</td><td>' .$_SESSION["sid"]. "</td></tr>";
}else{
	echo '<tr><td>$_SESSION["sid"]:</td><td>セッション変数はセットされていません</td></tr>';
}


if(isset($_SESSION["test"])){
	echo '<tr><td>$_SESSION["test"]:</td><td>' .$_SESSION["test"]. "</td></tr>";
}else{
	echo '<tr><td>$_SESSION["test"]:</td><td>セッション変数はセットされていません</td></tr>';
}


?>
</table>
</body>
</html>
