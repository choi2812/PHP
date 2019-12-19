<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>日本電子中央図書館</title>
   <script type="text/javascript">
	function next(){
		if(confirm("ログアウトしますか？")){
			location.href="http://localhost/newLibrarySystem/topMain.php";
		}
	}
	</script>
   <script type="text/javascript">
	function test(){
		alert("パスワードを忘れた場合は\n図書館で本人確認の上で初期化ができます。");
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
		<div id="topimage">
			<span class="hidden">バックパックサマーセール</span>	
		</div>
		<h2>簡易検索</h2>
		<p><input type="text" name="find" size="50">&#160;<input type="submit" value="検索" ></p>
		<p>会館時間 :AM　9時　-　PM　5時まで</p>
	</div>
	
	<div id="siderbar">
	<h3>LOG-IN</h3>
	<ul>
		<li>14jy0123 様</li>
		<li>ログインされました。</li>
		<li><input type="button" value="パスワード変更">&nbsp;<input type="button" value="ログアウト" onClick="next();"></li>
	</ul>
	<h3>My Library</h3>
	<ul>
		<li><a href="http://localhost/newLibrarySystem/borrowList.php">図書貸し出しリスト確認</a></li>
		<li><a href="http://localhost/newLibrarySystem/rservationList.php">図書貸し出し予約確認</a></li>
	</ul>
	
	<h3>PICK UP</h3>
	<a href="http://www.jec.ac.jp/"><img src="img/logo.gif" width="200" height="90" alt="pic_Error"/></a>
	<a href="https://sip3.jec.ac.jp/"><img src="img/info.GIF" width="200" height="90" alt="pic_Error"/></a>
	<a href="https://www.jh.jec.ac.jp"><img src="img/title_top.gif" width="200" height="90" alt="pic_Error"/></a>
	</div>
</div>
</body>
</html>
