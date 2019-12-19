<?php
try {
	$dsn = 'sqlsrv:server=Webserver02;database=14jydb';
	$user = 'inetuser';
	$password = 'inetuser';
	$dbh = new PDO ( $dsn, $user, $password );
	$dbh->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
	print "接続エラー!: " . $e->getMessage () . "<br/>";
	die ();
}

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DBへの接続 その３</title>
</head>
<body>
	<table border="1">
		<caption>メーカー一覧リスト</caption>
		<tr>
			<th>メーカーID</th>
			<th>メーカー名</th>
			<th>メーカーURL</th>
		</tr>
<?php
	$sql = $dbh->prepare ( 'select MakerID,MakerName,MakerURL from "JYNET\\14jy0123".Maker' );
	$sql->execute ();

	$row_cnt = 0;
	while ( $row = $sql->fetch ( PDO::FETCH_ASSOC) ){
		echo "<tr>\n";
			foreach($row as $column){
				echo "<td>" . $column . "</td>\n";
			}
		echo "</tr>\n";
		$row_cnt ++;
	}

	if(!$row_cnt){
		echo "<tr>\n";
		echo "<td colspan=\"3\">データがありません</td>\n";
		echo "</tr>\n";
	}else {
echo $row_cnt;
}

	$dbh = null;
?>
</table>
</body>
</html>