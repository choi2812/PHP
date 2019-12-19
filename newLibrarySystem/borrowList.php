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
	<h2>14jy0123 様の貸し出しリスト</h2>
		<table border="1">
			<tr>
				<th>蔵書番号</th>
				<th>蔵書名</th>
				<th>著者名</th>
				<th>出版社</th>
				<th>付属品</th>
				<th>貸し出し日</th>
				<th>返却予定日</th>
				<th>延長回数</th>
				<th>予約者有無</th>
				<th>貸し出し延長</th>
			</tr>
			<tr>
				<td>01544567-0<?php $current_member0 = "01544567-0";?></td>
				<td>嫌われる勇気</td>
				<td>岸見 一郎、古賀 史健 </td>
				<td>ダイヤモンド社</td>
				<td>なし</td>
				<td><?php echo date("Y-m-d",time()).($yoil[date('w', strtotime(date("Y-m-d",time())))])."<br>\n";?></td>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day+7, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day+7, $year ))))]);?></td>
				<td>0</td>
				<td>予約者なし</td>
				<td>
					<script type="text/javascript">
						function next0(){
							if(confirm("蔵書番号<?php echo($current_member0);?>延長しますか？")){	
								//location.href="http://localhost/newLibrarySystem/topMain.php";
								alert("蔵書番号<?php echo($current_member0);?>延長完了しました。");
							}
						}
						</script>
					<input type="button" value="延長" onClick="next0();">
				</td>
			</tr>
			<tr>
				<td>01593618-0</td>
				<td>TOEICテスト新公式問題集</td>
				<td>Educational Testing Service  </td>
				<td>国際ビジネスコミュニケーション協会</td>
				<td>CD</td>
				<td><?php echo date("Y-m-d",time()).($yoil[date('w', strtotime(date("Y-m-d",time())))])."<br>\n";?></td>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day+14, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day+14, $year ))))]);?></td>
				<td>1</td>
				<td>予約者なし</td>
				<td></td>
			</tr>
			<tr>
				<td>01496837-0</td>
				<td>人生がときめく片づけの魔法 </td>
				<td>近藤麻理恵 </td>
				<td>サンマーク出版</td>
				<td>なし</td>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day-5, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day-5, $year ))))]);?></td>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day+2, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day+2, $year ))))]);?></td>
				<td>0</td>
				<td>予約者あり</td>
				<td></td>
			</tr>
	</table>
	
	</div>
	
	
</div>
</body>
</html>
