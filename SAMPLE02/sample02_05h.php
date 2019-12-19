<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ラジオボタンでデータを送る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<form method="post" action="sample02_05.php">
		<fieldset>
			<legend>ラジオボタンでデータを送る</legend>
			<ul>
				<li><label><input type="radio" name="radio1" value="1" />男</label></li>
				<li><label><input type="radio" name="radio1" value="2" />女</label></li>
			</ul>
		</fieldset>
		<input type="submit" value="回答" name="sub1">
	</form>
</body>
</html>