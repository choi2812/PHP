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
				<td>クラス:</td>
				<td>
					<?php
						if ($_POST["kurasu"] == "***クラス***") {
							echo("*回答なし*");
						} else {
							echo($_POST["kurasu"]);
						}
					?>
				</td>
			</tr>
			<tr>		
				<td>学籍番号:</td>
				<td>
					<?php
						if (strlen($_POST["gakuseki"]) < 8) {
							echo("*番号エラー*");
						} else {
							echo($_POST["gakuseki"]);
						}
					?>
				</td>
			</tr>
			<tr>
				<td>性別:</td>
				<td><?= $_POST["seibetsu"] ?></td>
			</tr>
			<tr>
				<td>興味のあること(複数回答可）:</td>
				<td>
					<?php
						if (isset($_POST["kyoumi"])) {
							foreach ($_POST["kyoumi"] as $val){
								echo "$val ";
							}
						} else {
							echo("*回答なし*");
						}
					?>
				</td>
			</tr>
		</table>
		<p>意見:
				<?php
					if ($_POST["iken"] == "" || $_POST["iken"] =="自由に意見をお書きください") {
						echo("*回答なし*");
					} else {
						echo($_POST["iken"]);
					}
				?>
		</p>
	</body>
</html>
