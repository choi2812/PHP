<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ifの書き方</title>
</head>
<body>
<?php
// Trueの省略
$result = true;

if ($result == true) {
	echo "True <br/>";
}

if ($result) {
	echo "True,too <br/>";
}

// Falseの判断
$result = false;

if ($result == false) {
	echo "False <br/>";
}

if (! $result) {
	echo "Fales,too <br/>";
}

?>
</body>
</html>