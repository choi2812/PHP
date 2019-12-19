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


	$uid = $_POST["userid"];
	$pwd = $_POST["pass"];
	$_SESSION["login"] = $_POST["login"];
	$_SESSION["new"] = $_POST["new"];
	$_SESSION["search"] = $_POST["search"];
	
	if ($uid == "" or $uid == "14jy") {
		header("Location: {$_SESSION["new"]}");
		exit;
	} else {

	
		$sql = "select * from user_table where userid='$uid'";
		$res = mysql_query($sql, $con);
		$num_rows = mysql_num_rows($res);
		if ($num_rows == 0) {
			header("Location: {$_SESSION["login"]}");
		} else {
			$row = mysql_fetch_array($res);
			if ($row["password"] == $pwd) {
				header("Location: {$_SESSION["search"]}");
			} else {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
	<p>パスワードが違います。ログインしなおしてください。</p>
	<a href="<?= $_SESSION["login"] ?>">ログイン画面に戻る</a>
</body>
</html>
<?php
			}
		}
	}
?>
