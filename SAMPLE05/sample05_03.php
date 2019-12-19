<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
    <title>escape</title>
</head>
<body><?php
$var1 = $_POST["text1"];

$var3 = "dir " . $var1;

echo exec($var3);



?>
</br>
<a href ="sample05_03h.php">back</a>
</body>
</html>
//z:| testapp.exe