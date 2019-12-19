<?php
try {
 	$dsn = 'sqlsrv:server=Webserver02;database=14jydb';
 	$user = 'inetuser';
 	$password = 'inetuser';
	$dbh = new PDO ( $dsn, $user, $password );
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	print "接続エラー!: " . $e->getMessage () . "<br/>";
	die ();
}

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0301.php</title>
</head>
<body>
<table border="1">
<caption>メーカー一覧リスト</caption>
<tr>
<th>メーカーID</th>
<th>メーカー名</th>
<th>メーカーURL</th>
</tr>
<?php
$sql = $dbh->prepare('select MakerID,MakerName,MakerURL from "JYNET\\14jy0123".Maker');
//var_dump($sql);
$sql->execute();
while($row = $sql->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>\n";
	echo "<td>" . $row ["MakerID"] . "</td>\n";
	echo "<td>" . $row ["MakerName"] . "</td>\n";
	$url=strlen($row ["MakerURL"]);
	if($url == 0){
		echo"<td>ホームページなし</td>\n";
	}else{
		$web=$row ["MakerURL"];
		echo "<td><a href =\"$web\">". $row ["MakerURL"] . "</a></td>\n";
	}
	echo "</tr>\n";
}
$dbh = null;
?>
</table>
</body>
</html>