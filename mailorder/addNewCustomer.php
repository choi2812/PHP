<?php
session_start();
require_once 'db_connect-1.php';
$entData = 	$_SESSION['CEntData'];
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>addNewCustomer.php</title>
</head>
<body>
<?php
$cnt=null;
	echo $entData['cname'];//お名前
		echo $entData['cadrs'] ;//住所
	echo $entData['ctel'] ;//電話番号
	$ctel_len=strlen($entData['ctel']);
	if ( $ctel_len==0 ) {
		$entData['ctel']=null;
	}
	echo $entData['cmail'];//メールアドレス
	echo $entData['cpass'] ;//パスワード
	$sql = $dbh ->prepare('select count(*)as x  from "JYNET\\14jy0123".Customer' );
	$sql->execute(array());
	$row = $sql->fetch(PDO::FETCH_ASSOC);
	if ($row["x"] == 0) {
		$sql = $dbh ->prepare('INSERT INTO "JYNET\\14jy0123".Customer(CustomerID, CustomerName, Address, TEL, EMail,Pass) VALUES( 1 , ? , ? , ? ,?, ? )');
		$sql->execute(array($entData['cname'],$entData['cadrs'],$entData['ctel'],$entData['cmail'],$entData['cpass']));

	}else{
		$cnt=$row["x"]+1;
		$sql = $dbh ->prepare('INSERT INTO "JYNET\\14jy0123".Customer(CustomerID, CustomerName, Address, TEL, EMail,Pass) VALUES( ? , ? , ? , ? ,?, ? )');
		$sql->execute(array($cnt,$entData['cname'],$entData['cadrs'],$entData['ctel'],$entData['cmail'],$entData['cpass']));

	}
header('Location: mailNewCustomer.php');
?>
</body>
</html>