<?php
session_start();

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションを使う</title>
</head>
<body>
<?php


if(isset($_SESSION["test"])){
	echo '$_SESSION["test"]=' .$_SESSION["test"]. "<br />";

}else{
	echo "セッション変数はセットされていません";
}
?>

</body>
</html>
