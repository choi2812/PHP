<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>数値かどうかチェックする</title>
</head>
<body>
<?php
$data1= $_GET["text1"];

echo "<p>\"{$data1}\"のデータ型:" . gettype($data1)."</p>";

//is_numeric関数でチェックする。
echo "<p>is_numericでチェック:";
if (is_numeric($data1)){
	echo "数値です</p>";
}else{
	echo "数値じゃありません</p>";
}

//ctype_degitでチェックする
//実数(小数点が付いている数値）は「数値じゃない」と判断する
echo "<p>ctype_digitでチェック:";
if(ctype_digit($data1)){
	echo "数値です</p>";
}else{
	echo "数値じゃありません</p>";
}
var_dump(ctype_digit($data1));
 ?>
<a href ="sample04_06h.php">戻る</a>
</body>
</html>