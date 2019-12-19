<?php
require_once 'db_connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang=ja>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>ファイルのインクルード</title>
	<style type="text/css">
		<!--
		body {
			margin-left: 0px;
			margin-top: 0px;
		}
		a:link {
			color: #986417;
		}
		a:visited {
			color: #986417;
		}
		a:hover {
			color: #986417;
		}
		a:active {
			color: #986417;
		}
		-->
	</style>
</head>
<body>
	<form method="post" action="nameSearch.php">
		<br>
		<table width="200" border="0" align="right" cellpadding="0" cellspacing="0">
			<tr>
				<td height="40" style="background-color:#44F14A" align="center"><font color="white"><strong>LOG-IN</strong></font></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>ID<input type="text" name="id" size="20"></td>
			</tr>
				<td> </td>
			<tr>
			</tr>
			<tr>
				<td>PASS<input type="text" name="id" size="20"></td>
			</tr>
			<tr>
				<td><input type="button" value="ID/PASSを探す>>" onClick="document.location='test.php'">&nbsp;<input type="button" value="ログイン" onClick="document.location='test.php'"></td>
			</tr>
		</table>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<!--ログインしたら出てくる画面-->
		<table width="160" border="0" align="right" ccellpadding="0" cellspacing="0">
			<tr>
				<th height="30" style="background-color:#46F469" align="center"><font color="white"><strong>My Library</strong></font></th>
			</tr>
			<tr>
				<td><a href="test.php"">個人情報管理</a></td>
			</tr>
			<tr>
				<td><a href="test.php"">図書貸し出し状況</a></td>
			</tr>
			<tr>
				<td><a href="test.php"">図書貸し出し予約</a></td>
			</tr>
			<tr>
				<td><a href="test.php"">図書買い取り申し込み</a></td>
			</tr>
		</table>
	</form>
</body>
</html>