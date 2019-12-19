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
		<table border="1">
			<tr>
				<th>予約日付</th>
				<th>蔵書番号</th>
				<th>蔵書名</th>
				<th>著者名</th>
				<th>出版社</th>
				<th>予約者人数</th>
				<th>予約取り消し</th>
			</tr>
			<tr>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day-7, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day-7, $year ))))]);?></td>
				<td>01364236-0<?php $current_member0 = "01364236-0";?></td>
				<td>わたしを離さないで </td>
				<td>カズオ・イシグロ  </td>
				<td>早川書房</td>
				<td>0</td>
				<td>
					<script type="text/javascript">
						function next0(){
							if(confirm("蔵書番号<?php echo($current_member0);?>予約を取り消します。")){	
								//location.href="http://localhost/newLibrarySystem/topMain.php";
								alert("蔵書番号<?php echo($current_member0);?>予約取り消し完了しました。");
							}
						}
						</script>
					<input type="button" value="予約取り消し" onClick="next0();">
				</td>
			</tr>
			<tr>
				<td><?php echo date("Y-m-d", mktime( 0, 0, 0, $month, $day-4, $year )).($yoil[date('w', strtotime(date("Y-m-d", mktime( 0, 0, 0, $month, $day-4, $year ))))]);?></td>
				<td>01364492-0<?php $current_member1 = "01364492-0";?></td>
				<td>下町ロケット</td>
				<td>池井戸 潤</td>
				<td>小学館</td>
				<td>1</td>
				<td>
					<script type="text/javascript">
						function next1(){
							if(confirm("蔵書番号<?php echo($current_member1);?>予約を取り消します。")){	
								//location.href="http://localhost/newLibrarySystem/topMain.php";
								alert("蔵書番号<?php echo($current_member1);?>予約取り消し完了しました。");
							}
						}
						</script>
					<input type="button" value="予約取り消し" onClick="next1();">
				</td>
			</tr>
			<tr>
				<td><?php echo date("Y-m-d",time()).($yoil[date('w', strtotime(date("Y-m-d",time())))])."<br>\n";?></td>
				<td>01364335-0<?php $current_member2 = "01364335-0";?></td>
				<td>さあ、才能(じぶん)に目覚めよう </td>
				<td>マーカス バッキンガム,ドナルド・O. クリフトン </td>
				<td>日本経済新聞出版社</td>
				<td>3</td>
				<td>
					<script type="text/javascript">
						function next2(){
							if(confirm("蔵書番号<?php echo($current_member2);?>予約を取り消します。")){	
								//location.href="http://localhost/newLibrarySystem/topMain.php";
								alert("蔵書番号<?php echo($current_member2);?>予約取り消し完了しました。");
							}
						}
						</script>
					<input type="button" value="予約取り消し" onClick="next2();">
				</td>
			</tr>
	</table>
	
	</div>
	
	
</div>
</body>
</html>
