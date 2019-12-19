<?php

session_start();

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションIDを使う</title>
</head>
<body>
<?php
$_SESSION["sid"]=session_id();
echo "session_id:".$_SESSION["sid"]."<br />";
?>
<a href="sample08_07.php">確認する</a>
</body>
</html>
