<?php

mb_language ( "japanese" );
mb_internal_encoding ( "UTF-8" );

$to = $_POST ["to"];
$subject = $_POST ["subject"];
$body = $_POST ["body"];
mb_send_mail ( $to, $subject, $body, "From:14jy0123@jynet.jec.ac.jp" );
var_dump($body);
var_dump($to );
?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>送信確認</title>
</head>
<body>
	<h1>メール送信</h1>
	<p>メールを送りました。 ご確認ください。</p>
	<a href="sample10_01h.html">戻る</a>
</body>
</html>
