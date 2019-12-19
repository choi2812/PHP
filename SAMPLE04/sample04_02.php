<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>連想配列</title>
</head>
<body>
<?php
// 配列に値をセットする
$ary1 = array("japan" => "日本", "china" => "中国", "america" => "アメリカ");

var_dump($ary1);

$ary2["japan"] = "日本";
$ary2["china"] = "中国";
$ary2["america"] = "アメリカ";

var_dump($ary2);
$ary4=array("xdf","ghg","hhds");
var_dump($ary4);

$ary3[0] = "日本";
$ary3[1] = "中国";
$ary3[2] = "アメリカ";

var_dump($ary3);

foreach ( $ary1 as $key => $value) {
	echo "{$key}を日本語で言うと{$value}<br />\n";
}

 ?>
</body>
</html>