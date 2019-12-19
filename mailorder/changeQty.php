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
var_dump($_POST["num"]);
var_dump($_POST["goodid"]);
if(ctype_digit($_POST["num"])==false){
     $_POST["num"] = 1;
}
try{
	$sql = $dbh ->prepare('UPDATE "JYNET\\14jy0123".Cart SET CartAmount= ? WHERE GoodsID = ? ');
	$sql->execute(array($_POST["num"],$_POST["goodid"]));
	$dbh = null;
	} catch ( PDOException $e ) {
		$arr = $sql->errorInfo ();
		var_dump($arr);
		switch ($arr [1]) {
			case 50000 :
				$_SESSION["error"]= "在庫がありません";
				break;
			case 248:
				$_SESSION["error"]= "在庫がありません";
				break;
			default ://想定していないエラーの場合
				print "申し訳ありません。エラーです!ほんとごめんね(;_:) <br/>\n";
				//システムのログに書き出す処理を書く
				die ();
		}
	}
	//header('Location: displayCart.php?gid='.$_GET["gid"]);
	header('Location: displayCart.php?gid='.$_POST["goodid"]);

?>
</body>
</html>