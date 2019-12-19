<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>ex0303h.php</title>
	</head>
	<body onfocus="inputform.GoodsName.focus();">
		<h1>取り扱い商品検索</h1>
			<p>商品名の一部または全てを入力してください。<br>
			*大文字・小文字を区別します。ご注意ください。</p>
		<form action="ex0303.php" method="POST" name="inputform">
			<label>商品名 <input type="text" name="GoodsName" ></label>
			        <input type="submit" value="検索" >
		</form>
	</body>
</html>
