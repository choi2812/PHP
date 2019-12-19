<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
		<title>アンケート結果</title>
	</head>
	<body>
		<h2>
			<?php
				if (isset($_POST["shimei"]) && $_POST["shimei"] != "") {
					echo($_POST["shimei"]);
				} else {
					echo("*名無し*");
				}
			?>
			さんの回答
		</h2>
		<table>
			<tr>
				<td>会社名：</td>
				<td><?= $_POST["company"] ?></td>
			</tr>
			<tr>
				<td>ご担当者名：</td>
				<td><?= $_POST["name"] ?></td>
			</tr>
			<tr>
				<td>メールアドレス：</td>
				<td><?= $_POST["mail"] ?></td>
			</tr>
			<tr>
				<td>ホームページアドレス：</td>
				<td><?= $_POST["name"] ?></td>
			</tr>
			<tr>
				<td>〒：</td>
				<td><?= $_POST["post"] ?></td>
			</tr>
			<tr>
				<td>住所：</td>
				<td><?= $_POST["address"] ?></td>
			</tr>
			<tr>
				<td>電話番号：</td>
				<td><?php
					echo($_POST["tel1"]);
					echo("-");
					echo($_POST["tel2"]);
					echo("-");
					echo($_POST["tel3"]);
				?>
				</td>
			</tr>
			<tr>
				<td>来訪希望日：</td>
				<td><?= $_POST["visitdate"] ?></td>
			</tr>
			<tr>
				<td>来訪希望時間：</td>
				<td><?= $_POST["visittime"] ?></td>
			</tr>
		</table>
	</body>
</html>
