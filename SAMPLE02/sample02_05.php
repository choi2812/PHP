<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ラジオボタンで受け取る</title>
</head>
<body>
<p>性別は
<?php
var_dump($_POST);
$sei = isset ( $_POST ["radio1"] ) ? $_POST ["radio1"]:3 ;

switch ($sei) {
	case 1 :
		echo "男性ですね";
		break;
	case 2 :
		echo "女性ですね";
		break;
	case 3 :
		echo "素敵ですね";
}
?>
</p>
<p><a href="sample02_05h.php">回答しなおす</a></p>
</body>
</html>