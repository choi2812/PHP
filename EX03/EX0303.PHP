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
<title>ex0303.php</title>
</head>
<body>

<?php
$gname_len=strlen($_POST["GoodsName"]);
$gname=empty($_POST["GoodsName"])?null:htmlspecialchars($_POST["GoodsName"],ENT_NOQUOTES,'UTF-8');
$key_gname="%".$gname."%";
$sql = null;
$row_cnt = 0;

echo"<table border=\"1\">";
echo"<caption>検索結果</caption>";

if ($gname_len==0){
	$sql = 	$dbh ->prepare('exec "JYNET\\14jy0123".pro_Goods_info_all ');
	$sql->execute();

}else{
	$sql =$dbh ->prepare('exec "JYNET\\14jy0123".Goodsinfo ?');
	$sql->execute(array($key_gname));
}
$row = $sql->fetch(PDO::FETCH_ASSOC);
if ($row!=false) {
	$row= null;
	echo"<tr>";
	echo"<td>商品番号</td>";
	echo"<td>カテゴリ番号</td>";
	echo"<td>商品名</td>";
	echo"<td>販売単価</td>";
	echo"<td>原価</td>";
	echo"<td>メーカー番号</td>";
	echo"<td>在庫数</td>";
	echo"</tr>";

	$sql =$dbh ->prepare('exec "JYNET\\14jy0123".Goodsinfo ?');
	$sql->execute(array($key_gname));
	while($row = $sql->fetch( PDO::FETCH_ASSOC)){
		echo "<tr>\n";
		echo "<td>" . $row ["GoodsID"] . "</td>\n";
		echo "<td>" . $row ["CategoryName"] . "</td>\n";
		echo "<td>" . $row ["GoodsName"] . "</td>\n";
		echo "<td>" . $row ["Price"] . "</td>\n";
		echo "<td>" . $row ["CostPrice"] . "</td>\n";
		echo "<td>" . $row ["MakerName"] . "</td>\n";
		echo "<td>" . $row ["Stock"] . "</td>\n";
		echo "</tr>\n";
		$row_cnt++;
	}
}
if ($row_cnt!=0){
	echo"</table>";
	echo"検索結果は".$row_cnt."件です<br>";
}else{
	echo "<tr>\n";
	echo "<td colspan=\"3\">データがありません</td>\n";
	echo "</tr>\n";
	echo"</table>";
}
echo"<a href =\"ex0303h.php\">戻る</a>";
$dbh = null;
?>
</body>
</html>