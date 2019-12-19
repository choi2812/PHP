<?php
	session_start();
	// DB設定ファイル
try {
define( "DB_SERVER","sqlsrv:server=Webserver02;database=14jydb");		//DBMS:SQLServer 接続サーバ名：Webserver02 DB:13jydb
define( "USER_NAME",'inetuser');
define( "PASS",'inetuser');
	$dbh = new PDO ( DB_SERVER, USER_NAME, PASS );



	//エラーを例外として出力
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//エラーを出力しない（デフォルト）
	//$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);

	//エラーを標準出力する
	//$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);


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
	$sql = $dbh->prepare('insert into "JYNET\\14jy0100".Cart  values(1,101,500)');
	$sql->execute();
	echo "データを追加しました。";

	$dbh = null;
} catch ( PDOException $e ) {
	var_dump($sql->errorInfo());
	print "SQLエラー!: " . $e->getMessage () . "<br/>";
	die ();
}
?>
</body>
</html>
