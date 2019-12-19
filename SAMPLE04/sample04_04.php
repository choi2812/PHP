<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>型の変換(関数）</title>
</head>
<body><?php
$int = 123;
$float=123.456;
$string="123";

echo '$intの型:'.gettype($int).'<br />';
echo '$floatの型:'.gettype($float).'<br />';
echo '$stringの型:'.gettype($string).'<br />';

echo '<p>$int→float:'.gettype(floatval($int))."\t";
echo '$intの内容:'.floatval($int).'<br /></p>';

echo '<p>$float→int:'.gettype(intval($float))."\t";
echo '$floatの内容:'.intval($float).'<br /></p>';

echo '<p>$string→int:'.gettype(intval($string))."\t";
echo '$stringの内容:'.intval($string).'<br /></p>';

 ?>
</body>
</html>