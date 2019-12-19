<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータを配列で受け取る</title>
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
// count(配列) …配列の要素数を返す
for($i = 0; $i < count ( $_POST ["text1"] ); $i ++) {
	echo "<li>入力内容:[$i]" . $_POST ["text1"] [$i] . "</li>";
}
?>
</ul>
</body>
</html>