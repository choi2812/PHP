<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォーム(受け取り側）***長い文章を入力する***</title>
</head>
<body>
	<p>あなたは
	<?php
			if ($_POST["selfintroduction"] == "" || $_POST["selfintroduction"] == "自己紹介を書いてください") {
				echo "どんな人かわかりません。";
			} else {
				echo "「".$_POST["selfintroduction"]."」な人なんですね。";
			}
	?>
	</p>
</body>
</html>
