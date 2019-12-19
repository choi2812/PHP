<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0105.php</title>
</head>
<body>
<?php

if (empty($_POST ["Q1"])){
	$var1="??";
}else{
	$var1=$_POST ["Q1"];
}

echo "<p>Q1 :{$var1}</br>\n";

if (empty($_POST ["Q2"])){
	$var2="??";
}else{
	$var2=$_POST ["Q2"];
}

echo "<p>Q2 :{$var2}</br>\n";

if (isset($_POST["Q3"])) {
	foreach ($_POST["Q3"] as $val){
		echo "<p>Q3 : $val</br>\n ";
	}
	} else {
		echo("*回答なし*</br>\n");
}

?>
<a href="ex0105h.php">回答しなおす</a>
</body>
</html>