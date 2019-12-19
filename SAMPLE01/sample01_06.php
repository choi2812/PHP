<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>switchの書き方　その２</title>
</head>
<body>
<?php
//式を使ったswitch文の書き方

$base = 10;

$var1= 30;

switch($var1){
	case $base:
		echo "等しいです";
		break;
	case $base + 10:
		echo "10大きいです";
		break;
	case $base + 20:
		echo "20大きいです";
		break;
	default:
		echo "その他";
}


 ?>
</body>
</html>