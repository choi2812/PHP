<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータを配列で送る</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
	<form method="post" action="sample02_03.php">

		<fieldset>
			<legend>データを配列で送る</legend>
			<ul>
				<li><label>text1[0]:<input type="text" name="text1[]" placeholder="必ず入力してください" required/></label></li>
				<li><label>text1[1]:<input type="text" name="text1[]" /></label></li>
				<li><label>text1[2]:<input type="text" name="text1[]" /></label></li>
			</ul>
		</fieldset>
		<input type="submit" value="送信" name="sub1" />

	</form>
</body>
</html>