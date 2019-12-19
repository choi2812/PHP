<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex0105h.php</title>
</head>
<body>
	<form method="post" action="ex0105.php">
	<p>アンケートにご協力お願いいたします。</p>
		<p>
			<label>Q1.あなたの名前<input type="text" name="Q1" /></label>
		</p></br>
		<p>
			<fieldset>
					<legend>Q2.あなたの血液型</legend>
						<label><input type="radio" name="Q2" value="A型" />A型</label>
						<label><input type="radio" name="Q2" value="B型" />B型</label>
						<label><input type="radio" name="Q2" value="AB型" />AB型</label>
						<label><input type="radio" name="Q2" value="O型" />O型</label>
						<label><input type="radio" name="Q2" value="わからない" />わからない</label>
			</fieldset>
		</P>
		<P>
				<fieldset>
					<legend>Q3.好きな食事</legend>
						<label><input type="checkbox" name="Q3[]" value="和食" />和食</label>
						<label><input type="checkbox" name="Q3[]" value="洋食" />洋食</label>
						<label><input type="checkbox" name="Q3[]" value="中華" />中華</label>
				</fieldset>
			<input type="submit" value="回答" name="sub1" />
		</P></br>

	</form>

</body>
</html>