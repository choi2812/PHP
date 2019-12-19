<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータをまとめて送る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<form method="post" action="sample02_04.php">
		<fieldset>
			<legend>データをまとめて送る</legend>
			<ul>
				<li>text1:<input type="text" name="text1" value="" /></li>
				<li>text2:<input type="text" name="text2" value="" /></li>
				<li>text3:<input type="text" name="text3" value="" /></li>
			</ul>
		</fieldset>
		<input type="submit" value="送信" name="sub1" />
	</form>
</body>
</html>