<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0106.php</title>
</head>
<body>

<table cellspacing="1" cellpadding="1">
<caption>ex0106</caption>
<?php
	$count =0;
	for($i = 1;$i < 10; $i++){
		echo"<tr>";
		for($j=1;$j<10;$j++){
			$count= $i *$j;
			echo "<td>";
			echo"$count";
			echo"</td>\n";
		}
		echo"</tr>\n";
	}
?>
</table>

</body>
</html>