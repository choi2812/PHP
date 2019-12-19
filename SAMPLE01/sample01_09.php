<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>処理を繰り返す</title>
</head>
<body>

<?php
//Whileでの繰り返し
echo "While <br/>\n";

$i = 1;
while($i <= 5){
	echo $i."回目の表示</br>\n";
	$i++; 
}
echo "<br/>for<br/>\n";

//forでの繰り返し
for($i = 1; $i <= 5; $i++){
	echo $i."回目の表示</br>\n";
}
 ?>
</body>
</html>