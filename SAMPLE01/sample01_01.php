<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>表示する</title>
</head>
<body>
<?php
/* コメントです */
// これもコメントです
echo "echoで表示しました<br/>";

print "printで表示しました<br/>\n";

$num = 100;

var_dump($num);

echo "変数の値は $num です。<br/>\n";

echo '変数名は $num です。<br/>' . "\n";

?>

<p> this is html </p>
<p>
<?php
$moji="abc";

echo $moji;
echo '変数$mojiの値は'.$moji.'です。'."\n";
echo "変数の値は{$moji}です。\n";
?>
</p>

<?= "短縮タグ使いました(式の出力に特化した書き方です)" ?>
<p><?=$num?></p>
</body>
</html>
