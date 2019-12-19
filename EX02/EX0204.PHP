<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>課題2-4</title>
</head>
<body>
<?php
$text_len=strlen($_POST["text1"]);
$var1 = $_POST["text1"];
$var3 = strip_tags($var1,'<p><i><b><br>');
$var2 = nl2br($var3);
if (empty($_POST ["radio1"])){
	echo"評価を入力してください<br>\n";
}else{
	$radio=$_POST ["radio1"];
	echo "<p>Ans1.あなたの評価:$radio</p>";
}
echo "<br>\n";
if ($text_len==0){
	echo "コメントしてください♪";
}else{
	echo"<p>Ans2.入力されたコメント:<br>$var2</p>";
}
?>
<br>
	<a href="ex0204h.php">書き直す</a>
</body>
</html>
