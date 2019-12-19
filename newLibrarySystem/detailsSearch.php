<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style_1.css">
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
	<h2>詳細検索</h2>
	<p>
		<select name="select">
			<option value="ie6.x">分類番号</option>
			<option value="ie6.x">ISBN</option>
			<option value="ie6.x">書名(タイトル)</option>
			<option value="ie5.x">書名(タイトル)よみがな</option>
			<option value="ie4.x">副書名(サブタイトル)</option>
			<option value="ie4.x">副書名(サブタイトル)よみがな</option>
			<option value="ie4.x">著者名よみがな</option>
			<option value="ie4.x">出版社</option>
			<option value="ie4.x">出版社よみがな</option>
		</select>
		<input type="text" name="fisrtBox" size="60">
		<input type="checkbox" name="allMatch" value="完全一致">完全一致
		&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<select name="selectCon">
			<option value="and">○○　と　○○ </option>
			<option value="or">○○　又は　○○</option>
			<option value="not">○○ ではなく　○○</option>
		</select>
	</p> 
	<p>
		<select name="select">
			<option value="ie6.x">分類番号</option>
			<option value="ie6.x">ISBN</option>
			<option value="ie6.x">書名(タイトル)</option>
			<option value="ie5.x">書名(タイトル)よみがな</option>
			<option value="ie4.x">副書名(サブタイトル)</option>
			<option value="ie4.x">副書名(サブタイトル)よみがな</option>
			<option value="ie4.x">著者名よみがな</option>
			<option value="ie4.x">出版社</option>
			<option value="ie4.x">出版社よみがな</option>
		</select>
		<input type="text" name="fisrtBox" size="60">
		<input type="checkbox" name="allMatch" value="完全一致">完全一致
		&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<select name="selectCon">
			<option value="and">○○　と　○○ </option>
			<option value="or">○○　又は　○○</option>
			<option value="not">○○ ではなく　○○</option>
		</select>
	</p> 
	<p>
		<select name="select">
			<option value="ie6.x">分類番号</option>
			<option value="ie6.x">ISBN</option>
			<option value="ie6.x">書名(タイトル)</option>
			<option value="ie5.x">書名(タイトル)よみがな</option>
			<option value="ie4.x">副書名(サブタイトル)</option>
			<option value="ie4.x">副書名(サブタイトル)よみがな</option>
			<option value="ie4.x">著者名よみがな</option>
			<option value="ie4.x">出版社</option>
			<option value="ie4.x">出版社よみがな</option>
		</select>
		<input type="text" name="fisrtBox" size="60">
		<input type="checkbox" name="allMatch" value="完全一致">完全一致
		&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
		<select name="selectCon">
			<option value="and">○○　と　○○ </option>
			<option value="or">○○　又は　○○</option>
			<option value="not">○○ ではなく　○○</option>
		</select>
	</p> 
	<p>発行年
<?php
$year=0;
$today=getdate();
echo '<select name=\"startYear\">';
for($Syear=$today['year']-11; $Syear < $today['year']+1 ; $Syear ++){
	echo '<option>'.$Syear.'</option>';
}
echo '</select>';
echo '&#160;&#160;-&#160;&#160;';
echo '<select name=\"endYear\">';
for($Eyear=$today['year']; $Eyear+1 > $today['year']-11 ; $Eyear --){
	echo '<option>'.$Eyear.'</option>';
}
echo '</select>';
?>
<input type="checkbox" name="allMatch" value="すべての期間">すべての期間
	</p>
<p><input type="submit" value="検索">&#160;&#160;&#160;&#160;<input type="reset" value="リセット"></p>


	</div>
	
	
</div>
</body>
</html>
