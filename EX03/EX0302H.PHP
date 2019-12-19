<?php
try {
 	$dsn = 'sqlsrv:server=Webserver02;database=14jydb';
 	$user = 'inetuser';
 	$password = 'inetuser';
	$dbh = new PDO ( $dsn, $user, $password );
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	print "接続エラー!: " . $e->getMessage () . "<br/>";
	die ();
}

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>課題3-2</title>
</head>
<body>
	<table border="1">
		<caption>ex0302h.php</caption>
<tr>
<td>カテゴリ名</td>
</tr>
<?php
$ary1 = array();
$sql = $dbh->prepare('select CategoryID,CategoryName from "JYNET\\14jy0123".Category');
$sql->execute();
for($i=0;$i < $row = $sql->fetch(PDO::FETCH_ASSOC);$i++){
	$k=$row ["CategoryID"];
	$v=$row ["CategoryName"];
	$ary1["$k"] = "$v";

}
foreach ($ary1 as $key => $value) {
	echo"<tr>";
	echo"<td>";
	echo "<a href=\"ex0302.php?CategoryID={$key}\">$value</a>";
	echo"</td>";
	echo"</tr>";
}
$dbh = null;

?>
</table>
</body>
</html>