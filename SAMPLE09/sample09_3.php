<?php
session_start ();
// DB設定ファイル
try {
	define ( "DB_SERVER", "sqlsrv:server=Webserver02;database=14jydb" );
	define ( "USER_NAME", 'inetuser' );
	define ( "PASS", 'inetuser' );
	$dbh = new PDO ( DB_SERVER, USER_NAME, PASS );
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
<title>SQLエラーの表示・非表示</title>
</head>
<body>
<?php
try {
	$sql = $dbh->prepare ( 'insert into "JYNET\\14jy0100".Cart  values(2,201,500)' );
	$sql->execute ();
	echo "データを追加しました。";

	$dbh = null;
} catch ( PDOException $e ) {
	$arr = $sql->errorInfo ();
	switch ($arr [1]) {
		case 547 :
			print "商品番号が誤っています<br/>\n";
			break;
		case 2627 :
			print "すでに登録されています<br/>\n";
			break;
		case 50000 :
			print "在庫がありません<br/>\n";
			break;
		default ://想定していないエラーの場合
			print "申し訳ありません。エラーです!ほんとごめんね(;_:) <br/>\n";
			//システムのログに書き出す処理を書く
			die ();
	}
}
?>
</body>
</html>