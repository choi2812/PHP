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
		<h2>パスワード変更確認</h2>
		<p><img src="img/passTrans2.png" width="800" height="100" alt="pic_Error"/></p>
		<fieldset>
			<legend><strong>パスワード変更確認フォーム</strong></legend>
				<p>新しいパスワードでパスワード変更します。</p>
				<table border="1" >
					<tr>
						<th>入力されたパスワード</th> 
						<td>nihon2345</td>    
					</tr>
					<tr>
						<th>再入力されたパスワード</th>
						<td>nihon2345</td> 
					</tr>
				</table>
				<p>パスワードをnihon2345に変更しますか。</p>
				<p><input type="submit" value="＜＜パスワード修正">&#160;&#160;&#160;<input type="submit" value="パスワード確定＞＞"></p>
		</fieldset>
	</div>	
</div>
</body>
</html>