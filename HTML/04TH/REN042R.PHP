<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォーム(受け取り側）***テキスト型***</title>
</head>
<body>
<p><?= $_POST["yourname"] ?>さんのお勧めサイトは
<a href="<?= $_POST['url'] ?>">
<?= $_POST["sitename"] ?></a> ですね。</p>
</body>
</html>
