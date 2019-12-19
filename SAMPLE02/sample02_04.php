<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータをまとめて受け取る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
<ul>
<?php
// 　$varname　…　データ名　$var　…　データの値
foreach ( $_POST as $varname => $var ) {
	echo "<li>$varname :$var </li>";
}

?>
</ul>
</body>
</html>