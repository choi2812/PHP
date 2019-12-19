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
	$uname = mb_convert_encoding($_POST["username"] , "SJIS" , "utf8");
	$pwd = $_POST["pass"];
	$pwd2 = $_POST["pass2"];
	$birth = $_POST["birthday"];
	$addr = mb_convert_encoding($_POST["address"] , "SJIS" , "utf8");
	$prof = mb_convert_encoding($_POST["profile"] , "SJIS" , "utf8");

	$errno = array();
	if (strlen($uid) != 8) {
		$errno[] = 1;
	} else {
		$sql = "select * from user_table where userid='$uid'";
		$res = mysql_query($sql, $con);
		$num_rows = mysql_num_rows($res);
		if ($num_rows != 0) {
			$errno[] = 2;
		} else {
			if ($uname == "" || is_null($uname)) {
				$errno[] = 3;
			}
			if ($pwd == "" || is_null($pwd)) {
				$errno[] = 4;
			}
			if ($pwd != $pwd2) {
				$errno[] = 5;
			}
		}
	}
	
	if (count($errno) == 0) {
		if ($birth == "") {
			$birth = "NULL";
		} else {
			$birth = "'$birth'";
		}
		
		if ($prof == "") {
			$prof = "NULL";
		} else {
			$prof = "'$prof'";
		}
		
		if ($addr == "なし") {
			$addr = "NULL";
		} else {
			$addr = "'$addr'";
		}
//		$sql = "insert into user_table values('".$uid."','".$uname."','".$pwd."',".$birth.",".$addr.",".$prof.")";
		$sql = "insert into user_table values('$uid','$uname','$pwd',$birth,$addr,$prof)";
	
		$res = mysql_query($sql, $con);
		header("Location: {$_SESSION["search"]}");
	} else {
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
<p>エラーを修正して下さい。</p>
<table>
<?php  
		foreach ($errno as $errid) {
				$sql = "select * from err_table where errid=".$errid;
				$res = mysql_query($sql, $con);
		$row = mysql_fetch_array( $res);
				echo "<tr><td>".$row["errmessage"]."</td></tr>"; 
		}
	}
?>
	</table>
	<br />
	<a href="<?= $_SESSION["new"]?>">登録画面に戻る</a>
</body>
</html>
