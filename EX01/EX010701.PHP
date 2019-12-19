<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex010701.php</title>
</head>
<body>
<form method="get" action="ex010702.php">
<p>カレンダー</p>
<p>年：<input type="number" name="year" min="1902" value="2015"/></p>
<p>月：<select name="month">
<?php
	for ($i=1; $i<13 ;$i++ ){
		echo("<option value=\"$i\">$i</option>");
	}
?>
</select>
</p>
<p><input type="submit" value="表示" name="sub1" ></p>
</form>

</body>
</html>

