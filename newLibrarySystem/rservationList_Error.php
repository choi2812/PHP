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
<?php

$year = date('Y');
$month = date('m');
$day = date('d');
$yoil = array("日","月","火","水","木","金","土");
//echo date("Y-m-d", mktime( 0, 0, 0, $month, $day-7, $year ));//이전
//echo($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day-7, $year ))))])."<br>\n";
//echo date("Y-m-d",time());
//echo($yoil[date('w', strtotime(date("Y-m-d",time())))])."<br>\n";
//echo date("Y-m-d", mktime( 0, 0, 0, $month, $day+7, $year ));//이후
//echo($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day+7, $year ))))])."<br>\n";

?>	
	<h2>14jy0123 様の予約貸し出しリスト</h2>
	<h3 align="center" style="color:red;">貸し出し予約が登録されていません</h3>	
	
	</div>
	
	
</div>
</body>
</html>
