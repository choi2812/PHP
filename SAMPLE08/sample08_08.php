<?php

session_start();

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションを破棄する</title>
</head>
<body>
<?php
$_SESSION["sid"]=session_id();
$_SESSION["test"] = "でーただよん";


echo "session_id:".$_SESSION["sid"]."<br />\n";
echo "セッション変数:[".$_SESSION["test"] ."]<br />\n
		";
?>
<a href="sample08_09.php">確認する</a>
</body>
</html>