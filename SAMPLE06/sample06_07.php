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
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title></title>
</head>
<body>
	<table border="1">
		<caption>商品情報</caption>
		<tr>
			<td>カテゴリー名</td>
			<td>メーカー名</td>
			<td>商品名</td>
		</tr>
<?php
	$sql = $dbh ->prepare('exec "JYNET\\14jy0123".pro_Goods_info_all');

	$sql->execute();

	$row_cnt = 0;
	while ( $row = $sql->fetch( PDO::FETCH_ASSOC) ){
		echo "<tr>\n";
		echo "<td>" . $row ["CategoryName"] . "</td>\n";
		echo "<td>" . $row ["MakerName"] . "</td>\n";
		echo "<td>" . $row ["GoodsName"] . "</td>\n";
		echo "</tr>\n";
		$row_cnt ++;
	}

	if(!$row_cnt){
		echo "<tr>\n";
		echo "<td colspan=\"3\">データがありません</td>\n";
		echo "</tr>\n";
	}
		$dbh = null;

?>
</table>
</body>
</html>