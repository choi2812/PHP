<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SQLインジェクション対策</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<p>出力条件(プリペアドステートメント その2)</p>
	<form method="post" action="sample06_06.php">
		<ul>
			<li><label>開始メーカー番号<input type="text" name="startid" /></label></li>
			<li><label>終了メーカー番号<input type="text" name="endid" /></label></li>
			<li><input type="submit" value="送信" name="sub1" /></li>
		</ul>
	</form>
</body>
</html>