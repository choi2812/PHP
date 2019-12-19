<?php
	require_once 'db_connect.php';
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>日電通販サイト商品名検索</title>
<link rel="stylesheet" type="text/css" href="css/basic.css">
</head>
<body>
<?php
echo"<h1><a href=\"index.php\">日電通販サイト</a></h1>";
echo"<h2>商品一覧検索結果</h2>";

$CategoryID=$_GET["CategoryID"];
$CategoryName=$_GET["CategoryName"];
$cunt=0;
$maker=null;
$web=null;
//var_dump($CategoryName);
$sql = $dbh ->prepare( 'select COUNT(*) as "cnt" from "JYNET\\14jy0123".Goods where CategoryID = :id1 and Price is not null');
$sql->bindValue(":id1",$CategoryID,PDO::PARAM_STR);
$sql->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
echo"<h3>" . $CategoryName . "で検索</h3>";
echo"<p class=\"label\">検索結果：".$row["cnt"]."件見つかりました。</p>";
echo"<p class=\"description\">※商品は詳細画面から購入できます。</p>";
echo"<a href=\"javascript:history.go(-1)\">戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./index.php\">topに戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./DisplayCart.php\">買い物カゴを見る</a>&nbsp;&nbsp;";

echo"<table border=\"1\">";
echo"<tr>";
echo"<th class=\"result\">メーカ名</th>";
echo"<th class=\"result\">商品名</th>";
echo"<th class=\"result\">単価</th>";
echo"<th class=\"result\">在庫数</th>";
echo"<th class=\"result\">&nbsp;</th>";
echo"</tr>";
$row = null;
$sql = $dbh ->prepare( 'SELECT  G.GoodsID,C.CategoryName,G.GoodsName,G.Price,G.CostPrice,M.MakerName,G.Stock,M.MakerURL
  						FROM    "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Category as C,"JYNET\\14jy0123".Maker as M
  						WHERE   G.CategoryID = C.CategoryID and G.MakerID = M.MakerID
						and (C.CategoryID = ? ) ');
$sql->execute(array($CategoryID));
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	if ($row ["Price"]==null) {
			continue;
	}else{
	echo "<tr>\n";
	if ($maker !=$row ["MakerName"]) {
		$web=$row ["MakerURL"];
		if ($row ["MakerURL"] != null) {
			echo "<td class=\"result\"><a href =\"$web\">" . $row ["MakerName"] . "</a></td>\n";
		}else{
			echo "<td class=\"result\">" . $row ["MakerName"] . "</td>\n";
		}
		$maker=$row ["MakerName"];
	}else{
		echo "<td class=\"result\">&nbsp;</td>\n";
	}
	echo "<td class=\"result\">" . $row ["GoodsName"] . "</td>\n";
	echo "<td class=\"resultCur\">&yen".number_format( floor($row ["Price"])) ."</td>\n";
	echo "<td class=\"resultCur\">" . $row ["Stock"] . "</td>\n";
	echo "<td class=\"result\"><input type=\"button\" value=\"詳細\" onClick=\"document.location='./GoodsDetail.php?gid={$row['GoodsID']}'\"></td>\n";
	echo "</tr>\n";
	}
}
echo"</table>";
echo"<a href=\"javascript:history.go(-1)\">戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./index.php\">topに戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./DisplayCart.php\">買い物カゴを見る</a>&nbsp;";

$dbh = null;
?>

</body>
</html>