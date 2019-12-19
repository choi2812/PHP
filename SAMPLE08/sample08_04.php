<?php
session_start();
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッション変数を削除する</title>
</head>
<body>
<?php


	echo '<p>$_SESSION["test"]=' .$_SESSION["test"]. "</p>";
	echo '<p>$_SESSION["test2"]=' .$_SESSION["test2"]. "</p>";


	//セッション変数すべて削除
	$_SESSION = array();



	echo "<p>セッション変数を削除しました。</p>";


	echo '<p>$_SESSION["test"]=' .$_SESSION["test"]. "</p>";
	echo '<p>$_SESSION["test2"]=' .$_SESSION["test2"]. "</p>";



?>

</body>
</html>