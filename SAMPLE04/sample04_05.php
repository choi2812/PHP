<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>数値関係の関数</title>
</head>
<body><?php
$num1 = 12345.678;
$num2 = -12345.678;

//整数に丸める
echo '$num1:'.$num1.'→ round($num1):'.round($num1).'<br />';
//小数点第2位まで丸める
echo '$num1:'.$num1.'→ round($num1,2):'.round($num1,2).'<br />';
//10の位で丸める
echo '$num1:'.$num1.'→ round($num1,-1):'.round($num1,-1).'<br />';
//小数点以下を切り上げる
echo '$num1:'.$num1.'→ ceil($num1):'.ceil($num1).'<br />';
echo '$num2:'.$num2.'→ ceil($num2):'.ceil($num2).'<br />';
//小数点以下を切り捨てる
echo '$num1:'.$num1.'→ floor($num1):'.floor($num1).'<br />';
echo '$num2:'.$num2.'→ floor($num2):'.floor($num2).'<br />';
//3桁ごとにカンマで区切る
echo '$num1:'.$num1.'→ number_format($num1):'.number_format($num1).'<br />';
 ?>
</body>
</html>