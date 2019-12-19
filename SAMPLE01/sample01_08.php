<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>switchの書き方　その４</title>
</head>
<body>
<?php
//複数条件のあるswitch文の書き方


$str1= "パパイヤ";

switch($str1){
	case "バナナ":
	case "リンゴ":
	case "パパイヤ":
		echo "果物です";
		break;
	case "きゅうり":
	case "キャベツ":
		echo "野菜です";
		break;
	default:
		echo "果実でも野菜でもありません";
}


 ?>
</body>
</html>