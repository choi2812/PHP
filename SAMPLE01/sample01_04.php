<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ifの書き方</title>
</head>
<body>
<?php
//Trueの判定

$result='加瀬典子は18歳';
echo $result . "<br/>";

if ($result == true){
	echo "それは真実です <br/>";
}else{
	echo "…うそつきは泥棒の始まりです <br/>";
}

$result2=0;
echo "<br/>".$result2 . "<br/>";

if ($result2== true){
	echo "True <br/>";
}else{
	echo "False <br/>";
}


//文字列「False」の判定

$result="false";
echo "<br/>".$result . "<br/>";

if ($result== true){
	echo "True <br/>";
}else{
	echo "False <br/>";
}
?>
</body>
</html>