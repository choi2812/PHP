<?php
session_start();
$entData = $_SESSION['CEntData'];

mb_language ( "japanese" );
mb_internal_encoding ( "UTF-8" );

$to = $entData['cmail'];

$subject ="[日電WEBショッピング]会員登録情報にお知らせ";

$mail="
{$entData['cname']}様
【日電Webショッピング】のご利用ありがとうございます。
あなたの会員情報は以下のとおりです。
ご確認していただき、不明な点がありましたら弊社カスタマーサポートセンターまでご連絡ください

■メールアドレス：{$entData['cmail']}      …お問い合わせの際に必要です。
■パスワード：{$entData['cpass']}   …ログイン時に必要です。
■会員名：{$entData['cname']}
■住所  ：{$entData['cadrs']}
■電話番号：{$entData['ctel']}
■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□
■問い合わせ先
■株式会社  日電　＜nichiden@161net.jp＞
■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□
■注意事項
■商品購入後のお問い合わせ等は上記の連絡先にお願いします。
■このメールはコンピュータシステムによって自動的に送信しています。
■このため、お問い合わせ等をこのメールに返信いただいても回答できません。
";

$body =$mail;

mb_send_mail ( $to, $subject, $body, "From:14jy0123@jynet.jec.ac.jp" );

?>
<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>送信確認</title>
</head>
<body>
	<h1><a href="index.php">日電通販サイト</a></h1>
	<h2>会員登録完了</h2>
	<center>
	<p>ありがとうございます。 ご登録のメールアドレスに確認メールをお送りいたしました。 ご確認ください。</p>
	<br>
	<p>ひきつづき購入手続きへ進みます.</p>
	<br>
	<A href="./SelectPayment.php"><img border = "0" src = "img/Order_Button.gif" alt = "è³¼å…¥ç”»é¢ã¸"></A><br>
	</center>
	</body>

</html>
