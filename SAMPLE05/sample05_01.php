<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>特殊文字を回避する</title>
</head>
<body>
<?php

$var1 = $_POST["text1"] ;
echo "<p>htmlspecialcharsの使用<br/ >\n";
echo "エスケープ前のデータ:$var1</p>\n";

$var2 = htmlspecialchars($var1);

echo "<p>エスケープ後のデータ:$var2</p>\n";

$var3 = htmlspecialchars($var1,ENT_QUOTES,'UTF-8');

$var4  = htmlspecialchars($var1,ENT_NOQUOTES,'UTF-8');

echo "<p>エスケープ後のデータ(ENT_QUOTES):$var3</p>\n";
echo "<p>エスケープ後のデータ(ENT_NOQUOTES):$var4</p>\n";



 ?>
<a href ="sample05_01h.php">戻る</a>
</body>
</html>