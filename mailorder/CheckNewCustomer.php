<?php
// セッションの開始
session_start ();

// DB設定ファイル
try {
	$dbh = new PDO ( "sqlsrv:server=Webserver02;database=14jydb", "manager", "manager" );
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	print "接続エラー: " . $e->getMessage () . "<br/>";
	die ();
}

?>
<?php
$isExistErr = false;

$isExistErr = chkData('cname',"お名前を入力してください。",$isExistErr);
$isExistErr = chkData('cadrs',"住所を入力してください。",$isExistErr);

$_SESSION['CEntData']['ctel'] =empty($_POST['ctel'])?"": htmlspecialchars($_POST['ctel'],ENT_NOQUOTES,'UTF-8');
if(!$isExistErr =chkData('cmail',"メールアドレスを入力してください。",$isExistErr)){
	$para [] =  $_SESSION['CEntData']['cmail'];
	$sql = "select count(*) as cnt  from \"JYNET\\14jy0123\".Customer  where EMail = ?";
	$prepare = $dbh->prepare ( $sql );
	$prepare->execute ( $para );
	$result = $prepare->fetch ( PDO::FETCH_ASSOC );
	if ( $result['cnt'] > 0 ) {
		$_SESSION['CEntErrMsg']['cmail'] = "このメールアドレスは既に登録済みです。";
		$isExistErr = true;
	}

}

$isExistErr = chkData('cpass',"パスワードを入力してください。",$isExistErr);

if ( strlen($_SESSION['CEntData']['cpass']) > 10 ){
	$_SESSION['CEntErrMsg']['cpass'] = "パスワードの長さが10文字を超えています";
	$isExistErr = true;
}


$isExistErr= chkData( 'cpass2',"",$isExistErr);

if ($_SESSION['CEntData']['cpass'] != $_SESSION['CEntData']['cpass2'] ){
	$_SESSION['CEntErrMsg']['cpass2'] = "再入力の値が一致しません";
	$isExistErr = true;
}

	if ( $isExistErr ) {
		header("Location: Registercustomer.php");//エラー時
		exit;
	} else {
		header("Location: ConfirmNewCustomer.php");//正常時
		exit;
	}

function chkData($iptName,$msg,$eFlg){ //入力値の空値チェック
	if(empty($_POST[$iptName])){
		$_SESSION['CEntErrMsg'][$iptName] = $msg;
		$_SESSION['CEntData'][$iptName] ="";
		$eFlg = true;//エラーフラグの書き換え
	}else{
		 $_SESSION['CEntData'][$iptName] = htmlspecialchars($_POST[$iptName]);//xss	対策のため入力値をエスケープ
	}
	return $eFlg;
}

function patMail($string){//メールの正規表現チェック
    $pattern = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD';
    if(!preg_match($pattern,$string)){
        $_SESSION['CEntErrMsg']['cmail']="メールアドレス形式が間違っています";
        $eFlg=true;
    }
    return $eFlg;

}

?>
