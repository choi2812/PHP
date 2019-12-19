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
   <script src="script.js"></script>
   <title>日本電子中央図書館</title>
</head>
<body>
<script>
	function button2_click(number) {
			alert("蔵書番号"+number+"予約取り消し完了しました。");
			history.go(-1);
	}
</script>
<?php
$book=(empty($_GET["booknumber"])?null:htmlspecialchars($_GET["booknumber"],ENT_NOQUOTES,'UTF-8'));
//입하일 있고
//뒤에 예약자가 없을 경우 플러그 세움

	$sql1 = $dbh ->prepare( 'DELETE FROM Booking
								WHERE UserNumber= ?
								and LibraryNumber= ? ');
	$sql1->execute(array($_SESSION['ses_userid'],$book));

	$sql = $dbh ->prepare( 'select RegisterDate from Booking
								where UserNumber= ?
								and LibraryNumber= ? ');
	$sql->execute(array($_SESSION['ses_userid'],$book));
	$row = $sql->fetch( PDO::FETCH_ASSOC);
	if ($row != false) {
		$sql2 = $dbh ->prepare( 'select * from Booking
								where LibraryNumber= ? ');
		$sql2->execute(array($book));
		$row = $sql2->fetch( PDO::FETCH_ASSOC);
		if ($row == false) {
			$sql3 = $dbh ->prepare( 'update Library
				set BorrowFlag= ?
				where LibraryNumber= ? ');
			$sql3->execute(array('0',$book));
		}
	}
	 echo("<script language='javascript'>button2_click('".$book."');</script>");


?>
</body>
</html>