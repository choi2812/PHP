<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>switchの書き方</title>
</head>
<body>
<?php
//switch文の書き方

$var1= 20;

switch($var1){
	case 10:
		echo "10です";
		break;
	case 20:
		echo "20です";
		break;
	case 30:
		echo "30です";
		break;
	default:
		echo "その他";
}


 ?>
</body>
</html>