<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title>特定のタグを許可する</title>
</head>
<body>
<?php
$var1 = $_POST["text1"];
$var2 = strip_tags($var1);
$var3 = strip_tags($var1,'<p><b>');



echo "<p>エスケープ前:$var1</p>\n";
echo "<p>エスケープ後:$var2</p>\n";

// <p> と <b> は許可します

echo "<p>エスケープ後(pタグとbタグを除く):$var3</p>\n";
?>
<br>
<a href ="sample05_02h.php">戻る</a>
</body>
</html>