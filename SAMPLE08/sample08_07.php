<?php

session_start();

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>セッションIDを使う</title>
</head>
<body>
<?php
echo '$_SESSION["sid"]:'.$_SESSION["sid"].'<br/>';
echo 'session_id():　　　'.session_id();
?>

</body>
</html>