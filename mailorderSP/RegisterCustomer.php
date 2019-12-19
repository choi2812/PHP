<?php

session_start ();

?>
<?php

$errName = setSession ('CEntErrMsg', 'cname' );
$errAdrs = setSession ( 'CEntErrMsg','cadrs' );
$errTel = setSession ( 'CEntErrMsg','ctel' );
$errMail = setSession ('CEntErrMsg', 'cmail' );
$errCred = setSession ( 'CEntErrMsg','ccred' );
$errPass = setSession ('CEntErrMsg', 'cpass' );
$errPass2 = setSession ( 'CEntErrMsg','cpass2' );

$_SESSION ['CEntErrMsg'] = array ();


$cname = setSession('CEntData','cname');
$cadrs = setSession('CEntData','cadrs');
$ctel = setSession('CEntData','ctel');
$cmail = setSession('CEntData','cmail');
$ccred = setSession('CEntData','ccred');


$_SESSION['CEntData'] = array();

function setSession($key,$dname) {
	return isset ( $_SESSION [$key] [$dname] ) ? $_SESSION [$key] [$dname] : "";
}


?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/basic.css">
<title>日電通販サイト</title>
</head>
<body>
	<h1>
		<a href="index.php">日電通販サイト</a>
	</h1>
	<h2>顧客情報入力</h2>
	<h3>お客様の情報を入力してください。</h3>
	<p class="description">以下のフォームにデータを入力し、「次へ&gt;&gt;」ボタンを押してください。</p>
	<form action="./CheckNewCustomer.php" method="post" name="frmInput"	class="login"onSubmit="return  checkNewCustomerForm()">
		<table id="table1">
			<tr>
				<td>お名前【必須】</td>
				<td><input type="text" id="cname" size="30" name="cname"
					value="<?=$cname?>" required placeholder="例:日本　電子" autofocus maxlength = "30"></td>
				<td class="errMessage"><?=$errName?></td>
			</tr>
			<tr>
				<td>住所【必須】</td>
				<td><input type="text" id="address" size="80" name="cadrs"
					value="<?=$cadrs?>" required placeholder="例:東京都新宿区百人町1-25-4 日本電子ビル 6F 161号室"></td>
				<td class="errMessage"><?=$errAdrs?></td>
			</tr>
			<tr>
				<td>電話番号</td>
				<td><input type="tel" id="tel" size="20" name="ctel"
					value="<?=$ctel?>" placeholder="03-3369-xxxx" maxlength= "20"></td>
				<td class="errMessage"><?=$errTel?></td>
			</tr>
			<tr>
				<td>e-mailアドレス【必須】</td>
				<td><input type="email" id="email" size="30" name="cmail"
					value="<?=$cmail?>" required placeholder="例:denshi@nichiden.com"></td>
				<td class="errMessage"><?=$errMail?></td>
			</tr>
						<tr>
				<td>パスワード【必須】<br><div style="font-size:small";>
						*(6文字以上10文字以下）</div></td>
				<td><input type="password" id="password" size="20" name="cpass" required minlength="6" maxlenght="10"> </td>
				<td class="errMessage"><?=$errPass?></td>
			</tr>
			<tr>
				<td>パスワードの確認<br><div style="font-size:small";>*(もう一度パスワードを入力してください)</div></td>
				<td><input type="password" id="passwordconf" size="20" name="cpass2" required></td>
				<td class="errMessage"><?=$errPass2?></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit"	value="次へ&gt;&gt;"></td>

			</tr>
		</table>
	</form>
</body>
</html>
