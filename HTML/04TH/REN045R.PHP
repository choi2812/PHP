<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォーム(受け取り側）***ドロップダウンリスト***</title>
</head>
<body>
<p>あなたは
<?php
			if ($_POST["prefecture"] == "その他") {
				echo "首都圏外に住んでいるのですね…通学ご苦労様です♪";
		   } else {
				echo $_POST["prefecture"]."に住んでいるのですね。";
		   }
?>
</p>
</body>
</html>
