<?php
session_start();
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションIDを使う</title>
</head>
<body>
<?php
echo$_POST["num"];
$sql = $dbh ->prepare('UPDATE "JYNET\\14jy0123".Cart SET CartAmount= ? WHERE GoodsID = ? AND SessionID = ? ' );
$sql->execute(array($_POST["num"],$_GET["gid"],$_SESSION["SessionID"]));
header('Location: displayCart.php?gid='.$_GET["gid"]);
?>
</body>
</html>

