<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
    <title>escape</title>
</head>
<body><?php
$var1 = $_POST["text1"];
$var2 = escapeshellcmd($var1);


$var3 = "dir " . $var2;


echo exec($var3);




?>
</br>
<a href ="sample05_04h.php">back</a>
</body>
</html>