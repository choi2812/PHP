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
<title>ex0302.php</title>
</head>
<body>
	<table border="1">
		<caption>ex0302.php</caption>
<tr>
<td>商品番号</td>
<td>カテゴリ番号</td>
<td>商品名</td>
<td>販売単価</td>
<td>原価</td>
<td>メーカー番号</td>
<td>在庫数</td>
<td>商品写真</td>
</tr>
<?php
$CategoryID=$_GET["CategoryID"];
$sql = $dbh ->prepare( 'select GoodsID,CategoryID,GoodsName,MakerID,Price,CostPrice,Stock,ImageName from "JYNET\\14jy0123".Goods where CategoryID = ?');
$sql->execute(array($CategoryID));
$sql->execute();

while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>\n";
	echo "<td>" . $row ["GoodsID"] . "</td>\n";
	echo "<td>" . $row ["CategoryID"] . "</td>\n";
	echo "<td>" . $row ["GoodsName"] . "</td>\n";
	echo "<td>" . $row ["MakerID"] . "</td>\n";
	echo "<td>" . $row ["Price"] . "</td>\n";
	echo "<td>" . $row ["CostPrice"] . "</td>\n";
	echo "<td>" . $row ["Stock"] . "</td>\n";
	echo "<td>" . $row ["ImageName"] . "</td>\n";
	echo "</tr>\n";
}

$dbh = null;
?>
</table>
<a href ="ex0302h.php">戻る</a>
</body>
</html>