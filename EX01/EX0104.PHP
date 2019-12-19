<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>ex0104.php</title>
</head>
<body><p>
<?php
	if (empty($_GET ["browser"])){
		$var1="??";
	}else{
		$var1=$_GET ["browser"];
	}

	echo "<p>{$var1}型<br/>\n";

	switch ($var1) {
		case "a" :
			echo "周囲との和を大切にする慎重派タイプ";
			break;
		case "A" :
			echo "周囲との和を大切にする慎重派タイプ";
			break;
		case "b" :
			echo "マイペースで行動的な自由人タイプ";
			break;
		case "B" :
			echo "マイペースで行動的な自由人タイプ";
			break;
		case "AB" :
			echo "ユニークな発想の合理主義タイプ";
			break;
		case "ab" :
			echo "ユニークな発想の合理主義タイプ";
			break;
		case "o" :
			echo "明るく人間味溢れる社交家タイプ";
			break;
		case "O" :
			echo "明るく人間味溢れる社交家タイプ";
		default:
			echo "自分の血液型を調べておくといいですよ♪";

	}

?>
<a href="ex0104h.php">もう1度占う？</a>
</body>
</html>