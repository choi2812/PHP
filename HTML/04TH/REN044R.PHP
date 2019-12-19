<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
	<title>フォーム(受け取り側）***チェックボックス***</title>
	</head>
	<body>
		<p>あなたは
		<?php
		   if ($_POST["belongings"] == "") {
				echo "何も持っていませんね。";
		   } else {
				foreach ($_POST["belongings"] as $val){
					echo stripslashes($val)."、";      // 日本語の一部「ソ」が「ソ\」と表示されるので、関数でアンエスケープしました
				}
				echo  "を持ってますね。";
		   }
		?>
		</p>
	</body>
</html>
