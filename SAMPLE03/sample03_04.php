<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>未入力チェックを行う(テキスト)</title>
</head>
<body>
<?php
//データを受け取る
$var1 = $_GET["data1"] ;

$var1_len = strlen($var1);
echo "<p>入力されたデータの長さ:$var1_len</p>";

//入力された文字の長さでチェックする。
if(!$var1_len == 0){
	echo "<p>データが入力されていません</p>";
}else{
	echo "<p>入力された内容:${var1}</p>";
}


 ?>
<a href ="sample03_04h.php">戻る</a>
</body>
</html>