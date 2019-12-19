
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0201.php</title>
</head>
<body>
<?php
$name = htmlspecialchars($_GET["name"],ENT_QUOTES,'UTF-8');
if (isset($name) && $name != "") {
	echo("ようこそ");
	echo($name);
	echo("さん！");
} else {
	echo("名前を入力してください");
}
?>
<p>
<a href ="ex0201h.php">再入力</a>
</p>
</body>
</html>
