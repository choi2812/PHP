<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0201h.php</title>
</head>
<body>
<form method="post" action="ex0202.php">
<?php
// 配列に値をセットする
$ary1 = array("Sun" => "日", "Mon" => "月", "Tue" => "火","Wed" => "水","Thu" => "木","Fri" => "金","Sat" => "土");
if(empty($_POST["radio1"]) ) {
	echo("<p>英語表示</p>");
	foreach ($ary1 as $key => $value) {
		echo "{$key}&nbsp;";
	}
}elseif (($_POST["radio1"])=="en"){
	echo("<p>英語表示</p>");
	foreach ($ary1 as $key => $value) {
		echo "{$key}&nbsp;";
	}
}elseif (($_POST["radio1"])=="jpn"){
	echo("<p>日本語表示</p>");
	foreach ($ary1 as $key => $value) {
		echo "{$value}&nbsp;";
	}
}

?>

<p><a href="ex0202h.php">選びなおす</a></p>
</form>
</body>
</html>
