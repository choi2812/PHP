<?php
	define( "DB_SERVER",	"10.64.144.30");		//サーバ名
	define( "DB_NAME",		"htmldb");	//データベース名
	define( "DB_IUSER",		"htmldb");	//ユーザID
	define( "DB_IPASS",		"htmldb");	//パスワード

	session_start();

	// DBに接続する
	$con = mysql_connect(DB_SERVER, DB_IUSER, DB_IPASS) or die("接続エラー");
	mysql_select_db(DB_NAME, $con);
	$sql = "SET NAMES utf8";
	mysql_query($sql);


	$cond = mb_convert_encoding($_GET["jouken"] , "utf8" , "utf8");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題5****検索結果****</title>
</head>
<body>
<?php

	$sql = "select * from GOODS where G_NAME like '%" . $cond . "%'";

	$res = mysql_query($sql, $con);
	$num_rows = mysql_num_rows($res);
	if ($num_rows == 0) {
		echo "<p>検索結果に該当するものが見当たりません。</p>";
	} else {
		echo "<h2>検索結果</h2>";
		echo "<table border=\"1\">";
		echo "<tr><th>商品番号</th><th>商品名</th><th>値段</th></tr>";
		while ($row = mysql_fetch_array( $res )){
			echo "<tr><td>" . $row["G_CODE"] . "</td>";
			echo "<td>" . $row["G_NAME"] . "</td>";
			echo "<td>" . "\\" . number_format($row["G_WHOLESALE"]) . "</td></tr>";
		}
		echo "</table>";
	}
?>
	<a href="<?= $_SESSION["search"] ?>">検索画面に戻る</a>
</body>
</html>
