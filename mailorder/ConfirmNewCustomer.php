<?php
	// session利用
session_cache_limiter('nocache');
session_start();
header("Expires: Thu, 01 Dec 1994 16:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s"). " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

	$entData = 	$_SESSION['CEntData'];

//exit();
?>
<html>
<head>
	<meta HTTP-EQUIV="Content-Type" Content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<title>日電通販サイト</title>
</head>
<body>
	<h1><a href="index.php">日電通販サイト</a></h1>
	<h2>顧客情報入力</h2>
	<h3>お客様の情報を確認してください。</h3>
	<p class="description">以下の登録情報で間違いがなければ「次へ&gt;&gt;」ボタンを押して登録してください。</br>
	間違いがあった場合、「&lt;&lt;戻る」ボタンで前画面へ戻り、修正してください。</p>


	<table id="table1" class="login">
		<tr><th>お名前</th><td><?= $entData['cname'] ?></td></tr>
		<tr><th>住所</th><td><?= $entData['cadrs'] ?></td></tr>
		<tr><th>電話番号</th><td><?= $entData['ctel'] ?></td></tr>
		<tr><th>メールアドレス</th><td><?= $entData['cmail'] ?></td></tr>
				<tr><th>パスワード</th><td><?= $entData['cpass'] ?></td></tr>
	</table>
	<br />
	<form action="AddNewCustomer.php" method="post">
		<input type="button" value="<<戻る" onclick="history.back();" />
		&nbsp;&nbsp;&nbsp;
		<input type="submit" value="次へ>>" />
	</form>
</body>
</html>
