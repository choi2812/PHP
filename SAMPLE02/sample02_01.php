<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>フォームのデータをPOSTで受け取る</title>
</head>
<body>
<?php
	if (empty($_POST ["text1"])){
		$var1="";
	}else{
		$var1=$_POST ["text1"];
	}

	echo "<p>入力内容:{$var1}";

?>
</body>
</html>