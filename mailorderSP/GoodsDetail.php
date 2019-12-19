<?php
	session_start();
	require_once 'db_connect.php';

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/basic.css">
<title>商品詳細</title>
</head>
<body>
	<h1>
		<a href="index.php">日電通販サイト</a>
	</h1>
	<h2>商品詳細</h2>
<form method="POST" action="./AddCart.php">
<?php
$gname1=empty($_GET["gid"])?null:htmlspecialchars($_GET["gid"],ENT_NOQUOTES,'UTF-8');
$key_gname="%".$gname1."%";
$sql = null;
$row_cnt = 0;
$maker=null;
$sql = $dbh ->prepare( 'SELECT  G.GoodsID,C.CategoryName,G.GoodsName,G.Price,G.CostPrice,M.MakerName,G.Stock
  							 FROM    "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Category as C,"JYNET\\14jy0123".Maker as M
  							WHERE   G.CategoryID = C.CategoryID and G.MakerID = M.MakerID
							and (G.GoodsID Like ? ) ');
$sql->execute(array($key_gname));
while($row = $sql->fetch( PDO::FETCH_ASSOC)){
	echo"<h3>". $row ["GoodsName"] ."</h3>";
	echo"<table>";
	$maker=$row ["MakerName"];
	$row=null;
}
$sql = $dbh->prepare('select GoodsID,CategoryID,GoodsName,MakerID,Price,CostPrice,Stock,ImageName from "JYNET\\14jy0123".Goods WHERE GoodsID Like ?');
$sql->execute(array($key_gname));
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	echo"<table>";
	echo"<tr>";
	echo"<td><img class=\"display\" src=\"img/{$row ['ImageName']}\"alt=\"{$row ['GoodsName']}\"></td>";
	echo"</tr>";
}
$row=null;
$sql = $dbh ->prepare( 'SELECT  G.GoodsID,C.CategoryName,G.GoodsName,G.Price,G.CostPrice,M.MakerName,G.Stock
  							 FROM    "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Category as C,"JYNET\\14jy0123".Maker as M
  							WHERE   G.CategoryID = C.CategoryID and G.MakerID = M.MakerID
							and (G.GoodsID Like ? ) ');
$sql->execute(array($key_gname));
while($row = $sql->fetch( PDO::FETCH_ASSOC)){
	echo "<table class=\"result\">";
	echo "<tr>";
	echo "<th class=\"result\">商品名</th>";
	echo "<th class=\"result\">カテゴリ名</th>";
	echo "<th class=\"result\">メーカ名</th>";
	echo "<th class=\"result\">価格</th>";
	echo "<th class=\"result\">在庫</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<input type=\"hidden\" name=\"gid\" value=".$row ["GoodsID"].">";
	$_SESSION["gid"]=$row['GoodsID'];
	echo "<td class=\"result\">". $row ["GoodsName"] ."</td>";
	echo "<td class=\"result\">". $row ["CategoryName"] ."</td>";
	echo "<td class=\"result\">". $row ["MakerName"] ."</td>";
	echo "<td class=\"resultCur\">&yen" .number_format( floor($row ["Price"])) . "</td>\n";
	echo "<td class=\"resultCur\">" . $row ["Stock"] . "</td>\n";
	echo "</tr>";
	echo "</table>";
}

echo"<input name=\"num\" type=\"text\" size=\"12\" class=\"num\" value=\"1\">&nbsp;&nbsp;";
echo"<input type=\"submit\" value=\"買い物カゴへ\"></br>";
if (isset($_SESSION["error"]) != false) {
	echo "<div class=\"errMessage\">".$_SESSION["error"]."</div>";
	$_SESSION["error"]=null;
}
echo"<a href=\"javascript:history.go(-1)\">戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./index.php\">topに戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./DisplayCart.php\">買い物カゴを見る</a>&nbsp;&nbsp;";

$dbh = null;
?>
</form>
</body>
</html>

