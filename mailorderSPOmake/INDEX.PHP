<?php
	require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>日電通販サイト(index)</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
</head>
<body>
	<form method="post" action="nameSearch.php">
	<h1><a href="index.php">日電通販サイト</a></h1>
	<h2>商品検索</h2>
	<p class="description">商品名の一部またはすべてを入力してください。
	空白のままで全商品を表示します。<br/>
	*大文字、小文字を区別するので注意してください。</p>
		<label class="label">商品名：<input type="text" name="str" size="45"></label><br/>
		<font class="label">大文字・小文字の区別</font>
		<input type="radio" name="radio1" checked ="checked" value ="1">する
		<input type="radio" name="radio1"  value = "2">しない
		<input type="submit" value="検索">

	<h2>カテゴリ検索</h2>
	<p class="description">お探しの商品の種類をクリックしてください。</p>
<?php
$ary1 = array();
$sql = $dbh->prepare('select CategoryID,CategoryName from "JYNET\\14jy0123".Category order by CategoryID ASC ');
$sql->execute();
for($i=0;$i < $row = $sql->fetch(PDO::FETCH_ASSOC);$i++){
	$k=$row ["CategoryID"];
	$v=$row ["CategoryName"];
	$ary1["$k"] = "$v";
}
echo"<ul>";
foreach ($ary1 as $key => $value) {
echo "<li><a href=\"categoryseach.php?CategoryID={$key}&CategoryName={$value}\">$value</a></li>";
}
echo"</ul>";
$dbh = null;
?>
</form>
</body>
</html>

