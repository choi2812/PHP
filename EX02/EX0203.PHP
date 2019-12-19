<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0203.php</title>
</head>
<body>
<?php
$price = htmlspecialchars($_GET["price"],ENT_QUOTES,'UTF-8');
$qty = htmlspecialchars($_GET["qty"],ENT_QUOTES,'UTF-8');
$price_len = strlen($price);
$qty_len=strlen($qty);
$sum_all=0;
$sum=0;
$pri=0;
$num=0;
$sum_1=0;
if ($price_len==0){
	echo "単価:未入力<br>";
}elseif(ctype_digit($price) ==false){
	$pri=$price;
	echo"単価:&yen;$pri<br>";
}elseif(is_numeric($price)){
	$pri=number_format($price);
	echo"単価:&yen;$pri<br>";
}
if ($qty_len==0){
	echo "数量:未入力<br>";
}elseif(ctype_digit($qty) ==false){
	$num=$qty;
	echo"数量:$num<br>";
}else{
	$num=number_format($qty);
	echo"数量:$num<br>";
}
if(ctype_digit($price)==true){
	if(ctype_digit($qty) ==true){
		if ($qty_len!=0 && $price_len!=0){
			if (is_numeric($price) or   is_numeric($qty)){
				$sum=$price*$qty;
				$sum_1=number_format($sum);
				echo "金額:&yen;{$sum_1}<br>";
				$sum_all=$sum+($sum*0.08);

				$sum_all=floor($sum_all);

				$sum_all=number_format($sum_all);

				echo "税込金額:&yen;{$sum_all}<br>";
			}
		}
	}
}

?>
<p><a href="ex0203h.php">再入力</a></p>
</body>
</html>