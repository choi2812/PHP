<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>switchの書き方　その３</title>
</head>
<body>
<?php
//文字列を使ったswitch文の書き方


$str1= "春";

switch($str1){
	case "春":
		echo "暖かいです";
		break;
	case "夏":
		echo "暑いです";
		break;
	case "秋":
		echo "涼しいです";
		break;
	case "冬":
		echo "寒いです";
		break;
	default:
		echo "異常気象です";
}


 ?>
</body>
</html>