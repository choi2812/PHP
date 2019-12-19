<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>課題2-4</title>
<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
</head>
<body>
<p>ガセ商店の品ぞろえについて</p>
<form method="post" action="ex0204.php">
<fieldset>
<legend>Ans1.評価</legend>
<ul>
<li><label><input type="radio" name="radio1" value="大変良い" />大変良い</label></li>
<li><label><input type="radio" name="radio1" value="良い" />良い</label></li>
<li><label><input type="radio" name="radio1" value="普通" />普通</label></li>
<li><label><input type="radio" name="radio1" value="悪い" />悪い</label></li>
<li><label><input type="radio" name="radio1" value="大変悪い" />大変悪い</label></li>
</ul>
</fieldset>

<p>
<label for="text1">Ans2.コメント</label><br>
<textarea name="text1" rows="10" cols="100" maxlength="200" ></textarea>
</p>

<p>
<input type="submit" value="送信" name="sub1" />
</p>

</form>
</body>
</html>