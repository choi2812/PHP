<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>配列の使用</title>
</head>
<body>
<?php
$ary1 = array();
var_dump($ary1);

$ary2 = array(1,2,3,4,5);
$ary3 = array("A","B","C","E");
$ary3[0]="Z";
$ary3[0]="A";
var_dump($ary3);


//配列の最後に追加
$ary2[]=6;

//要素を指定して追加
$ary2[6]=7;

//関数を使って追加
array_push($ary2, 8);

var_dump($ary2);

$length1 = count( $ary1);
$length2 = sizeof( $ary2);

echo "count={$length1}<br />\nsizeof={$length2}\n";



 ?>
</body>
</html>