<?php
session_start();
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションIDを使う</title>
</head>
<body>
<?php
$_SESSION["error"]=null;
$_SESSION["CartAmount"]=$_POST["num"];
$_SESSION["SessionID"] =session_id();
$_SESSION["gid"]=$_POST["gid"];
var_dump($_POST["gid"]);
if(ctype_digit($_SESSION["CartAmount"])==false){
	$_SESSION["error"]= "正しく個数を入力してください。";
	if($_SESSION["error"] != null){
		header('Location: GoodsDetail.php?gid='.$_POST["gid"]);
	}
	break;
}

	try{
		$sql = $dbh ->prepare('INSERT INTO "JYNET\\14jy0123".Cart(SessionID, GoodsID, CartAmount) VALUES( ? , ? , ? )');
		$sql->execute(array($_SESSION["SessionID"],$_SESSION["gid"],$_SESSION["CartAmount"]));
		$dbh = null;
	} catch ( PDOException $e ) {
		$arr = $sql->errorInfo ();
		var_dump($arr);
		switch ($arr [1]) {
			case 50000 :
				$_SESSION["error"]= "在庫がありません";
				break;
			case 2627 :
				$_SESSION["error"]="この商品はすでにカ-トに入っています。<br/>\n";
				break;
			default ://想定していないエラーの場合
				print "申し訳ありません。エラーです!ほんとごめんね(;_:) <br/>\n";
				//システムのログに書き出す処理を書く
				die ();
		}
	}
var_dump($_SESSION["gid"]);
var_dump($_SESSION["error"]);
if($_SESSION["error"] == null){
	header('Location: displayCart.php');
}else{
	header('Location: GoodsDetail.php?gid='.$_POST["gid"]);
}


?>
</body>
</html>