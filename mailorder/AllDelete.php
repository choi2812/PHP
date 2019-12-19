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
$sql = $dbh ->prepare('delete from "JYNET\\14jy0123".Cart WHERE SessionID = ?' );
$sql->execute(array($_SESSION["SessionID"]));
header('Location: displayCart.php?gid='.$_GET["gid"]);
?>
</body>
</html>