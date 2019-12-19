<?php
	require_once 'db_connect.php';
	session_start();
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style_1.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>日本電子中央図書館</title>
</head>
<body>
<script>
function button2_click(number) {
	alert("すでに予約した蔵書です。");
	location.replace("./topMain_login.php");
	}
function button3_click(number) {
		alert("蔵書番号"+number+"予約完了しました。");
		location.replace("./topMain_login.php");
}
function button4_click(number) {
	alert("すでに予約した蔵書です。\n メールアドレスはパスワードにはなりません。");
	location.replace("./passTransForm.php");
	}
function button5_click(number) {
		alert("蔵書番号"+number+"予約完了しました。\n メールアドレスはパスワードにはなりません。");
		location.replace("./passTransForm.php");
}
</script>
<?php
$year = date('Y');
$month = date('m');
$day = date('d');
$id=(empty($_POST["fuserid"])?null:htmlspecialchars($_POST["fuserid"],ENT_NOQUOTES,'UTF-8'));
$pass=(empty($_POST["fpasswd"])?null:htmlspecialchars($_POST["fpasswd"],ENT_NOQUOTES,'UTF-8'));
$sql = $dbh ->prepare( 'select UserNumber,MailAddress,UserPassWord from LibraryUser
						where UserNumber like ? and UserPassWord like ? ');
$sql->execute(array($id,$pass));
$row = $sql->fetch( PDO::FETCH_ASSOC);
//var_dump($row);
if ($row != false) {
	if($row ["MailAddress"]==$pass){
		$_SESSION['ses_userid']=$id;
		$_SESSION['ses_pass']=$pass;
		if (isset($_SESSION['booknumber'])) {
			$book=$_SESSION['booknumber'];
			$_SESSION['booknumber']=null;
			$sql1 = $dbh ->prepare( 'select * FROM Booking
								WHERE UserNumber= ?
								and LibraryNumber= ?');
			$sql1->execute(array($_SESSION['ses_userid'],$book));
			$row = $sql1->fetch( PDO::FETCH_ASSOC);
			if ($row != false) {//ari
				echo("<script language='javascript'>button4_click('".$book."');</script>");
		
			}else{
				$sql1 = $dbh ->prepare( 'INSERT INTO Booking (UserNumber,RegisterDate,BookingDate,LibraryNumber)
									VALUES( ? ,null, ? , ? )');
				$sql1->execute(array($_SESSION['ses_userid'],date("Y-m-d",time()),$book));
				echo"<script language='javascript'>button5_click('".$book."');</script>";
			}
		}else{
			header("Pragma: no-cache");
			header("Cache-Control: no-cache,must-revalidate");
			header('Location: passTransForm.php');
		}
	}else{
		$_SESSION['ses_userid']=$id;
		$_SESSION['ses_pass']=$pass;
		if (isset($_SESSION['booknumber'])) {
			$book=$_SESSION['booknumber'];
			$_SESSION['booknumber']=null;
			$sql1 = $dbh ->prepare( 'select * FROM Booking
								WHERE UserNumber= ?
								and LibraryNumber= ?');
			$sql1->execute(array($_SESSION['ses_userid'],$book));
			$row = $sql1->fetch( PDO::FETCH_ASSOC);
			if ($row != false) {//ari
				echo("<script language='javascript'>button2_click('".$book."');</script>");
				
			}else{
				$sql1 = $dbh ->prepare( 'INSERT INTO Booking (UserNumber,RegisterDate,BookingDate,LibraryNumber)
									VALUES( ? ,null, ? , ? )');
				$sql1->execute(array($_SESSION['ses_userid'],date("Y-m-d",time()),$book));
				echo"<script language='javascript'>button3_click('".$book."');</script>";
			}
		}else{
		header("Pragma: no-cache");
		header("Cache-Control: no-cache,must-revalidate");
		header('Location: topMain_login.php');
		}
	}
}else{
	header('Location: topMain.php');
	$_SESSION['err']=1;
}
?>
</body>
</html>