<?php
// セッションの開始
session_start ();
//var_dump($_SESSION);
//exit();

$errMsgEmail=setMsg('loginErrEmail');
$errMsgPass=setMsg('loginErrPass');
$errMsg=setMsg('loginErrMessage');
$mail=setMsg('mail');

//初期化
$_SESSION['loginErrEmail'] = "";
$_SESSION['loginErrPass'] = "";
$_SESSION['loginErrMessage'] = "";
$_SESSION['mail'] = "";

function setMsg($name) {
		return isset ( $_SESSION[$name] ) ? $_SESSION[$name] : "";
}
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/basic.css">
	<title>ログイン</title>
	<style type="text/css">
ul li {
	list-style: none;
	margin-top: 10px;
}
</style>
	</head>
	<body>
	<h1><a href="index.php">日電通販サイト</a></h1>
	<h2>ログイン</h2>
	<h3>注文をするにはログインが必要です。</h3>
	<p class="description">E-mailアドレス・パスワードを入力してください。</p>
<form method="post" action="./LoginCheck.php" class="login">
			<table>
				<tr>
					<th>E-mailアドレス：</th>
					<td><input type="text"  name="mail" size="40" value="<?= $mail ?>" required></td>
					<td class="errMessage"><?= $errMsgEmail ?></td>
				</tr>
				<tr>
					<th>パスワード：</th>
					<td><input type="password"  name="pass" size="40" required></td>
					<td class="errMessage"><?= $errMsgPass ?></td>
				</tr>
				<tr>
					<td></td>
					<td class="errMessage"><?= $errMsg ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><input type="button" value="初めての方はこちらからどうぞ" style="width:180px;" onClick="document.location='RegisterCustomer.php'"></td>
					<td><input type="submit" value="次へ&gt;&gt;" style="width:180px;"></td>
				</tr>
			</table>
		</form>
<?php
include("/inc/link.php");
?>
	</body>
</html>
