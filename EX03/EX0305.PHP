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
$gname=strtolower(empty($_POST["GoodsName"])?null:htmlspecialchars($_POST["GoodsName"],ENT_NOQUOTES,'UTF-8'));
$gname1=empty($_POST["GoodsName"])?null:htmlspecialchars($_POST["GoodsName"],ENT_NOQUOTES,'UTF-8');
$key_gname="%".$gname."%";
$sql = null;
$row_cnt = 0;

//var_dump($gname_len);
if ($gname_len==0){
	$sql = 	$dbh ->prepare('exec "JYNET\\14jy0123".pro_Goods_info_all ');
	$sql->execute();
	while($row = $sql->fetch( PDO::FETCH_ASSOC)){
		if ($row ["Price"]==null) {
			continue;
		}else{
			$row_cnt=$row_cnt+1;
		}
	}
}else{
	$sql = $dbh ->prepare( 'SELECT  G.GoodsID,C.CategoryName,G.GoodsName,G.Price,G.CostPrice,M.MakerName,G.Stock
  							 FROM    "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Category as C,"JYNET\\14jy0123".Maker as M
  							WHERE   G.CategoryID = C.CategoryID and G.MakerID = M.MakerID
							and (LOWER(G.GoodsName) Like ? ) ');
	$sql->execute(array($key_gname));
	while($row = $sql->fetch( PDO::FETCH_ASSOC)){
		if ($row ["Price"]==null) {
			continue;
		}else{
			$row_cnt=$row_cnt+1;
		}
	}
}
if ($row_cnt!= 0) {
	if ($gname_len==0){
		echo "全検索の検索結果は".$row_cnt."件です";
	}else{
	    echo $gname1."の検索結果は".$row_cnt."件です";
	}
	echo"<table border=\"1\">";
	echo"<caption>検索結果</caption>";
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

	$sql = $dbh ->prepare( 'SELECT  G.GoodsID,C.CategoryName,G.GoodsName,G.Price,G.CostPrice,M.MakerName,G.Stock
  							 FROM    "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Category as C,"JYNET\\14jy0123".Maker as M
  							WHERE   G.CategoryID = C.CategoryID and G.MakerID = M.MakerID
							and (LOWER(G.GoodsName) Like ? )');
	$sql->execute(array($key_gname));
	while($row = $sql->fetch( PDO::FETCH_ASSOC)){
		if ($row ["Price"]==null) {
			continue;
		}else{
			echo "<tr>\n";
			
			echo "<td>" . $row ["GoodsID"] . "</td>\n";
			echo "<td>" . $row ["CategoryName"] . "</td>\n";
			echo "<td>" . $row ["GoodsName"] . "</td>\n";
			echo "<td>&yen" .number_format( floor($row ["Price"])) . "</td>\n";
			echo "<td>" . $row ["CostPrice"] . "</td>\n";
			echo "<td>" . $row ["MakerName"] . "</td>\n";
			echo "<td>" . $row ["Stock"] . "</td>\n";
			echo "</tr>\n";
		}
	}
}
if ($row_cnt!=0){
	echo"</table>";
}else{
	echo $gname1."の検索結果は".$row_cnt."件です";
	echo"<table border=\"1\">";
	echo"<caption>検索結果</caption>";
	echo "<tr>\n";
	echo "<td>デ－タがありません。</td>\n";
	echo "</tr>\n";
	echo"</table>";
}
echo"<a href =\"ex0305h.php\">戻る</a>";
$dbh = null;
?>
</body>
</html>