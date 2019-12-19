<?php
session_start();
require_once 'db_connect.php';
?>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/basic.css">
<title>カート表示</title>
</head>
<body>
	<h1>
		<a href="index.php">日電通販サイト</a>
	</h1>
	<h2>カートの内容</h2>

<?php
$price_sum=0;
$stock_sum=0;
$sql = $dbh ->prepare('SELECT G.GoodsID,G.GoodsName,G.Price,C.CartAmount,(G.Price*C.CartAmount) as goukei FROM "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Cart as C WHERE G.GoodsID=C.GoodsID and C.SessionID= ? ' );
$sql->execute(array($_SESSION["SessionID"]));
$row = $sql->fetch(PDO::FETCH_ASSOC);
if ($row==false) {
	echo "<p class=\"description\">カートの中に商品はありません。</p>";
}else{
$sql = $dbh ->prepare('SELECT G.GoodsID,G.GoodsName,G.Price,C.CartAmount,(G.Price*C.CartAmount) as goukei FROM "JYNET\\14jy0123".Goods as G,"JYNET\\14jy0123".Cart as C WHERE G.GoodsID=C.GoodsID and C.SessionID= ? ' );
$sql->execute(array($_SESSION["SessionID"]));
echo"<table class=\"result\">";
echo"<thead>";
echo"<tr>";
	echo"<th class=\"result\">商品名</th>";
	echo"<th class=\"result\">単価</th>";
	echo"<th class=\"result\">個数</th>";
	echo"<th class=\"result\">金額</th>";
	echo"<th class=\"result\">&nbsp;</th>";
echo"</tr>";
echo"</thead>";
	while($row = $sql->fetch(PDO::FETCH_ASSOC)){
		echo"<tbody>";
			echo"<tr>";
					echo"<td class=\"result\">".$row ["GoodsName"]."</td>";
					echo"<td class=\"resultCur\">".number_format( floor($row ["Price"])) ."</td>";
					echo"<td class=\"result\">";
					echo"<form method=\"post\" action=\"changeQty.php?gid={$row ["GoodsID"]}\">";
					echo"<input name=\"{$row ["GoodsID"]}\" type=\"text\" class=\"num\" value=".$row ["CartAmount"]."> <input type=\"submit\" value=\"変更\">";
					echo"</form>";
					$stock_sum=$stock_sum+$row ["CartAmount"];
					echo"</td>";
					echo"<td class=\"resultCur\">".number_format( floor($row ["goukei"])) ."</td>";
					$price_sum=$price_sum+$row ["goukei"];
					$gid=$_SESSION["gid"];
					echo"<td class=\"result\"><a href=\"deleteGoods.php?gid={$row ["GoodsID"]}\">商品を削除</a></td>";
			echo"</tr>";
	}
			echo"</tbody>";
			echo"<tfoot>";
				echo"<tr>";
					echo"<td class=\"result\" colSpan=\"2\">合計</td>";
					echo"<td class=\"resultCur\">".$stock_sum."</td>";
					echo"<td class=\"resultCur\">".number_format( floor($price_sum))."</td>";
					echo"<td>&nbsp;</td>";
				echo"</tr>";
			echo"</tfoot>";
		echo"</table>";
		echo"<br />";
		echo"<table>";
			echo"<tr>";
				echo"<td><p class=\"description\">商品を注文するには右のボタンをクリックして注文ページに進んでください。</p></td>";
				echo"<td><input type=\"button\" value=\"商品を注文する\" onClick=\"document.location='./Login.php'\"></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><p class=\"description\">買い物カゴを空にするには右のボタンをクリックしてください。</p></td>";
				echo "<td><input type=\"button\" value=\"買い物カゴを空にする\" onClick=\"document.location='AllDelete.php'\"></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td class=\"errMessage\"></td>";
			echo "</tr>";
		echo "</table>";
}
echo "<a href=\"javascript:history.go(-1)\">戻る</a>&nbsp;&nbsp;&nbsp;";
echo "<a href=\"./index.php\">topに戻る</a>&nbsp;&nbsp;&nbsp;";
echo "<a href=\"./DisplayCart.php\">買い物カゴを見る</a>&nbsp;&nbsp;&nbsp;";

?>
</body>
</html>
