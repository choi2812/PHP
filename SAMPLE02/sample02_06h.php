<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>チェックボックスでデータを送る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<form method="post" action="sample02_06.php">
		<fieldset>
			<legend>持っているモバイルフォン</legend>
			<ul>
				<li><label><input type="checkbox" name="chk1[]" value="Windows Phone" />Windows Phone</label></li>
				<li><label><input type="checkbox" name="chk1[]" value="Android" />Android</label></li>
				<li><label><input type="checkbox" name="chk1[]" value="iPhone" />iPhone</label></li>
			</ul>
		</fieldset>
		<input type="submit" value="回答" name="sub1">


	</form>
</body>
</html>