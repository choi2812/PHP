<?php
//エラーを表示するためのPHPの設定
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHPエラーの表示・非表示</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<form method="post" action="sample09_1.php">
	    <ul>
	        <li><label>データを入力:<input type="text" name="data1" /></label></li>
	        <li><label>データを表示:
<?php
//あまり良い書き方じゃありません…
//echo @$_POST["data1"]."</label><li>\n";
$data1=isset($_POST["data1"])?$_POST["data1"]."</label></li>\n":"</label></li>\n";
echo $data1;

?>
</ul><input type="submit" value="送信" />
	</form>
</body>
</html>