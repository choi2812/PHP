<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>メールを送信する</title>
</head>
<body>
	<h1>メールの送信</h1>
	<form method="post" action="sample10_01.php">
	    <table>
	        <tr><td>宛先：</td><td><input type="text" name="to" style="width: 579px" /></td></tr>
	        <tr><td>件名：</td><td><input type="text" name="subject" style="width: 578px" /></td></tr>
			<tr><td>本文：</td><td><textarea name="body" rows="10" cols="80"></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="メール送信" /></td></tr>
	    </table>
	</form>
</body>
</html>
