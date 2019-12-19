<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>チェックボックスで受け取る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
<p>
あなたが持っているのは
<ul>
<?php

$var1= isset($_POST["chk1"])?$_POST["chk1"]:array("どれも持ってない");

foreach ( $var1 as $key => $value ) {
	echo "<li>$value </li>";
}

?>
</ul></ul>
</p>
	<p>
		<a href="sample02_06h.php">回答しなおす</a>
	</p>
</body>
</html>