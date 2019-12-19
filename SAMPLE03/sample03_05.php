<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>未入力チェックを行うその2(テキスト)</title>
</head>
<body>
<?php
//データを受け取る
$var1 = $_GET["text1"] ;


//内容が空(empty)かどうかでチェックする。
//ただし　入力データが「0」でも空と判断されてしまう
if(empty($var1)){
	echo "<p>データが入力されていません(empty関数)</p>";
}else{
	echo "<p>入力された内容(empty関数):${var1}</p>";
}

 ?>
<a href ="sample03_05h
.php">戻る</a>
</body>
</html>