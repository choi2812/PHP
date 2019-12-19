<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="stayle_left.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>日本電子中央図書館</title>
   <script type="text/javascript">
	function test(){
		alert("パスワードを忘れた場合は\n図書館で本人確認の上で初期化ができます。");
	}
	function login(){
		alert("学籍番号又はパスワードが間違ってログインできません。\n 学籍番号又はパスワードを確認してください。");
	}
	</script>
</head>
<body>
<div id="header">
	<h1><a href="http://localhost/newLibrarySystem/topMain.php" title="日本電子中央図書館"><span class="hidden">日本電子中央図書館</span></a></h1>
</div>

<div id='cssmenu'>
<ul>
   <li><a href='http://localhost/newLibrarySystem/topMain.php'><span>Home</span></a></li>
   <li class='active has-sub'><a href='http://localhost/newLibrarySystem/detailsSearch.php'><span>蔵書検索</span></a>
      <ul>
         <li class='has-sub'><a href='http://localhost/newLibrarySystem/detailsSearch.php'><span>詳細検索</span></a></li>
         <li class='has-sub'><a href='http://localhost/newLibrarySystem/newBookSearch.php'><span>新着資料検索</span></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='http://localhost/newLibrarySystem/libraryInfo.php'><span>図書館案内</span></a>
      <ul>
         <li class='has-sub'><a href='http://localhost/newLibrarySystem/libraryInfo.php'><span>図書館案内</span></a></li>
         <li class='has-sub'><a href='http://localhost/newLibrarySystem/donationInfo.php'><span>資料寄贈案内</span></a></li>
      </ul>
   </li>
   <li><a href='http://localhost/newLibrarySystem/FQAInfo.php'><span>FAQ</span></a></li>
</ul>
</div>
<div id="container">
	<div id="main">
		<h2>LOG-IN</h2>
		<fieldset>
			<legend><strong>LOG-INしてください！</strong></legend>
				<p>利用する前にはログインが必要です。</p>
				<table>
					<tr>
						<th>学籍番号：<input type="text"  size="35"name="yourname"></th> 
					</tr>
					<tr>
						<th>パスワード：<input type="text"size="35"  name="yourname"></th>
					</tr>
					<tr>
					<td><input type="submit" value="ログイン&gt;&gt;" style="width:150px; margin:30px 50px 0px 200px;" onclick="login();"></td>
					<td><input type="button" value="パスワードを忘れの方こちらからどうぞ" onclick="test();" style="margin:30px 0px 0px 50px;"></td>
				</tr>
					
				</table>
		</fieldset>
	</div>	
</div>
</body>
</html>