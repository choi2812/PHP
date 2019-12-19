<?php
	session_start();
	require_once 'db_connect.php';
?>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>日電通販サイト(商品名検索)</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
</head>
<style type="text/css">
</style>
<body>
	<h1><a href="index.php">日電通販サイト</a></h1>
	<h2>商品一覧検索結果</h2>
<?php
$gname_len=strlen($_POST["str"]);
$gname1=empty($_POST["str"])?null:htmlspecialchars($_POST["str"],ENT_NOQUOTES,'UTF-8');
$key_gname="%".$gname1."%";
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
	$sql =$dbh ->prepare('exec "JYNET\\14jy0123".Goodsinfo ?');
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
		echo "<h3>全商品で検索</h3>";
	}else{
	    echo "<h3>".$gname1."で検索</h3>";
	}
	echo"<p class=\"label\">検索結果：".$row_cnt."件見つかりました。</p>";
	echo"<p class=\"description\">※商品は詳細画面から購入できます。</p>";
	echo"<table class=\"result\" border=\"1\">";
	$row= null;
	echo"<tr>";
	echo"<td class=\"result\">メーカ名</td>";
	echo"<td class=\"result\">商品名</td>";
	echo"<td class=\"result\">単価</td>";
	echo"<td class=\"result\">在庫数</td>";
	echo"<td class=\"result\">&nbsp;</td>";
	echo"</tr>";

	$sql =$dbh ->prepare('exec "JYNET\\14jy0123".Goodsinfo ?');
	$sql->execute(array($key_gname));
	while($row = $sql->fetch( PDO::FETCH_ASSOC)){
		if ($row ["Price"]==null) {
			continue;
		}else{
			echo "<tr>\n";
			echo "<td class=\"result\">" . $row ["MakerName"] . "</td>\n";
			echo "<td class=\"result\">" . $row ["GoodsName"] . "</td>\n";
			echo "<td class=\"resultCur\">&yen" .number_format( floor($row ["Price"])) . "</td>\n";
			echo "<td class=\"resultCur\">" . $row ["Stock"] . "</td>\n";
			echo "<td class=\"result\"><input type=\"button\" value=\"詳細\" onClick=\"document.location='./GoodsDetail.php?gid={$row['GoodsID']}'\"></td>\n";
			$_SESSION["gid"]=$row['GoodsID'];
			echo "</tr>\n";
		}
	}
}
if ($row_cnt!=0){
	echo"</table>";
}else{
	echo "<h3>".$gname1."で検索</h3>";
	echo "<p class=\"label\">お探しの商品は見つかりませんでした。</p>\n";
}
echo"<a href=\"javascript:history.go(-1)\">戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./index.php\">topに戻る</a>&nbsp;&nbsp;";
echo"<a href=\"./DisplayCart.php\">買い物カゴを見る</a>&nbsp;&nbsp;";

$dbh = null;
?>
</body>
</html>

