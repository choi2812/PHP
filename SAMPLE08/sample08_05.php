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

echo "session_id:".session_id()."<br />";
?>
</body>
</html>