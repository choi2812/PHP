<?php
try {
	$dsn = 'sqlsrv:server=Webserver02;database=14jydb';
	//$dsn =
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
<title>DBへの接続</title>
</head>
<body>
	<table border="1">
		<caption>メーカー一覧リスト</caption>
		<tr>
		<th>メーカーID</th><th>メーカー名</th><th>メーカーURL</th>
		</tr>
<?php
	$sql = 'select MakerID,MakerName,MakerURL from "JYNET\\14jy0123".Maker';
	$obj = $dbh->query($sql);

	if (($obj->fetchColumn() > 0)){

		$obj = $dbh->query($sql);

		foreach ( $obj as $row ) {
			echo "<tr>\n";
			echo "<td>" . $row ["MakerID"] . "</td>\n";
			echo "<td>" . $row ["MakerName"] . "</td>\n";
			echo "<td>" . $row ["MakerURL"] . "</td>\n";
			echo "</tr>\n";
 		}
	}else{

		echo "<tr>\n";
		echo "<td colspan=\"3\">データがありません</td>\n";
		echo "</tr>\n";
	}
	$dbh = null;
?>
</table>
</body>
</html>