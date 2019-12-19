<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>改行文字を挿入する</title>
</head>
<body>
<?php
$var1 = $_POST["text1"];
$var2 = nl2br($var1);


echo "<p>入力された値:{$var1}</p>";
echo "<p>改行挿入の値:<br />{$var2}</p>";

?>
<br>
<a href ="sample05_05.php">戻る</a>
</body>
</html>