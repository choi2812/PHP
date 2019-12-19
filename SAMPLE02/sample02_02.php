<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータをGETで受け取る</title>
</head>
<body>
<?php
	$var1=empty($_GET ["text2"])?"":$_GET ["text2"];

	echo "<p>入力内容:{$var1}";
?>
</body>
</html>