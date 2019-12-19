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
		<h2>パスワード変更申し込み</h2>
		<p><img src="img/passTrans1.png" width="800" height="100" alt="pic_Error"/></p>
		<fieldset>
			<legend><strong>パスワード変更フォーム</strong></legend>
				<p>新しいパスワードを 入力してください。</p>
				<table border="1" >
					<tr>
						<th>パスワード【必須】</th> 
						<td><input type="text"  size="35"name="yourname"><p style="color:red; font-size:15px">※メールアドレスはパスワードにはなりません。<br>※パスワード入力必須です。</p><p style="color:blue; font-size:15px">登録メ-ルアドレス使用できません。<br>半角英数字(英数まぜ)で６桁以上30桁以内</p></td>    
					</tr>
					<tr>
						<th>パスワードもう一度入力【必須】</th>
						<td><input type="text"size="35"  name="yourname"><p style="color:red; font-size:15px">※パスワードが一致しません。<br>※パスワードもう一度入力は必須です。</p><p style="color:blue; font-size:15px">確認のためもう一度入力してください。</p></td> 
					</tr>
				</table>
				<p><input style="margin-left:250px;"type="submit" value="パスワード確認＞＞"></p>
		</fieldset>
	</div>	
</div>
</body>
</html>