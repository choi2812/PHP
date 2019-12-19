<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>未入力チェックを行う(チェックボックス)</title>
</head>
<body>
<?php

if(isset($_GET["checkbox1"])){
	$var1 = $_GET["checkbox1"];

	foreach ($var1 as $key => $value){
		echo "<p>checkbox[{$key}]:{$value}</p>";
	}
}else{
	echo "<p>データが入力されていません(checkbox1)</p>";
}
 ?>
<a href ="sample03_06h.php">戻る</a>
</body>
</html>