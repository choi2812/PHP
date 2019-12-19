<?php
session_start();

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッション変数を削除する</title>
</head>
<body>
<?php
$_SESSION["test"] = "テストだよん";
$_SESSION["test2"] = "テストだよん2";

echo "セッション変数に[".$_SESSION["test"] ."]をセット!<br />";
echo "セッション変数に[".$_SESSION["test2"] ."]をセット!<br />";
?>
<a href="sample08_04.php">確認する</a>
</body>
</html>
