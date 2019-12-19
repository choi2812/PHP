<?php
session_start();
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションを使う</title>
</head>
<body>
<?php


$_SESSION["test"] = "でーただよん";

echo "セッション変数に[".$_SESSION["test"] ."]をセット!<br />";

?>
<a href="sample08_02.php">確認する</a>
</body>
</html>

