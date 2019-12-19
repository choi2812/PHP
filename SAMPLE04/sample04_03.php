<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>型の変換(キャスト）</title>
</head>
<body><?php
$int = 123;
$float=123.456;
$string="123";

echo '$intの型:'.gettype($int).'<br />';
echo '$floatの型:'.gettype($float).'<br />';
echo '$stringの型:'.gettype($string).'<br />';

echo '<p>$int→float:'.gettype((float)$int)."\t";
echo '$intの内容:'.(float)$int.'<br /></p>';


echo '<p>$float→int:'.gettype((int)$float)."\t";
echo '$floatの内容:'.(int)$float.'<br /></p>';


echo '<p>$string→int:'.gettype((int)$string)."\t";
echo '$stringの内容:'.(int)$string.'<br /></p>';

 ?>
</body>
</html>