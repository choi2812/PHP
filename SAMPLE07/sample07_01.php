<?php
	require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ファイルのインクルード</title>
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

	$sql = $dbh->prepare ( 'select MakerID,MakerName,MakerURL from "JYNET\\14jy0123".Maker' );
	$sql->execute ();

	$row_cnt = 0;
	while ( $row = $sql->fetch ( PDO::FETCH_ASSOC) ){
		echo "<tr>\n";
		echo "<td>" . $row ["MakerID"] . "</td>\n";
		echo "<td>" . $row ["MakerName"] . "</td>\n";
		echo "<td>" . $row ["MakerURL"] . "</td>\n";
		echo "</tr>\n";
		$row_cnt ++;
	}

	if($row_cnt == 0){
		echo "<tr>\n";
		echo "<td colspan=\"3\">データがありません</td>\n";
		echo "</tr>\n";
	}else{
		echo "<tr><td>".$row_cnt."件</td></tr>\n";
	}

	$dbh = null;

?>
</table>
</body>
</html>