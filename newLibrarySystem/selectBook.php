<?php
	require_once 'db_connect.php';
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style_1.css">
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
$gname_len=strlen($_POST["find"]);
$gname=strtolower(empty($_POST["find"])?null:htmlspecialchars($_POST["find"],ENT_NOQUOTES,'UTF-8'));
$gname1=empty($_POST["find"])?null:htmlspecialchars($_POST["find"],ENT_NOQUOTES,'UTF-8');
$key_gname1="%".$gname1."%";
$key_gname="%".$gname."%";
$sql = null;
$row_cnt = 0;
$maker=null;
$web=null;
$cnt=0;
$cnt_book=1;
$sql = $dbh ->prepare( 'SELECT  count(*) as "cnt",L.LibraryNumber
						FROM Book as B, Library as L,OptionType as O,Genre as G,Publishcompany as P,Author as A
						WHERE   O.OptionNumber = B.OptionNumber
						and G.GNumber = B.GNumber
						and P.PNumber = B.PNumber
						and A.ANumber = B.ANumber
						and L.BookNumber = B.BookNumber
						and (
						(LOWER(L.LibraryNumber) Like ?)
						or (LOWER(B.ISBN) Like ?)
						or (LOWER(B.Title) Like LOWER( ? ))
						or (LOWER(B.TitleKana) Like LOWER( ? ))
						or (LOWER(B.SubTitle) Like LOWER( ? ))
						or (LOWER(B.SubTitleKana) Like LOWER( ? ))
						or (LOWER(A.AName) Like LOWER( ? ))
						or (LOWER(A.ANameKana) Like LOWER( ? ))
						or (LOWER(P.PName) Like LOWER( ? ))
						or (LOWER(P.PNameKana) Like LOWER( ? ))
						)
						GROUP BY L.LibraryNumber');
$sql->execute(array($gname,$gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname));
$row = $sql->fetch( PDO::FETCH_ASSOC);

$cnt=$row ["cnt"];
if ($cnt!= 0) {
	echo "<h2>[".$gname1."]の検索結果　全". $row ["cnt"]."件</h2>";
	echo"<table class=\"result\" border=\"1\">";
	$row= null;
	echo"<tr>";
	echo"<td><strong>番号</strong></td>";
	echo"<td><strong>署名(タイトル)</strong></td>";
	echo"<td><strong>副書名(サブタイトル)</strong></td>";
	echo"<td><strong>著者名</strong></td>";
	echo"<td><strong>出版社</strong></td>";
	echo"<td><strong>付属品</strong></td>";
	echo"<td><strong>貸し出し状態</strong></td>";
	echo"<td><strong>　</strong></td>";
	echo"</tr>";
	$sql = $dbh ->prepare( 'SELECT *
						FROM Book as B, Library as L,OptionType as O,Genre as G,Publishcompany as P,Author as A
						WHERE   O.OptionNumber = B.OptionNumber
						and G.GNumber = B.GNumber
						and P.PNumber = B.PNumber
						and A.ANumber = B.ANumber
						and L.BookNumber = B.BookNumber
						and (
						(LOWER(L.LibraryNumber) Like ?)
						or (LOWER(B.ISBN) Like ?)
						or (LOWER(B.Title) Like LOWER( ? ))
						or (LOWER(B.TitleKana) Like LOWER( ? ))
						or (LOWER(B.SubTitle) Like LOWER( ? ))
						or (LOWER(B.SubTitleKana) Like LOWER( ? ))
						or (LOWER(A.AName) Like LOWER( ? ))
						or (LOWER(A.ANameKana) Like LOWER( ? ))
						or (LOWER(P.PName) Like LOWER( ? ))
						or (LOWER(P.PNameKana) Like LOWER( ? ))
						) ');
	$sql->execute(array($gname,$gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname,$key_gname));
}
while($row = $sql->fetch( PDO::FETCH_ASSOC)){
	echo "<tr>\n";
	echo "<td>" . $cnt_book . "</td>\n";
	echo "<td>" . $row ["Title"] . "</td>\n";
	$subTitle=strlen($row ["SubTitle"]);
	if($subTitle == 0){
		echo "<td>なし</td>\n";
	}else{
		echo "<td>" .$row ["SubTitle"]. "</td>\n";
	}
	echo "<td>" . $row ["AName"] . "</td>\n";
	echo "<td>" . $row ["PName"] . "</td>\n";

	$option=strlen($row ["OptionName"]);
	if($option == 0){
		echo "<td>なし</td>\n";
	}else{
		echo "<td>あり</td>\n";
	}
	if($row ["BorrowFlag"]==0){
		echo "<td><strong>貸し出し可能</strong></td>\n";
	}else{
		echo "<td>貸し出し中 </td>\n";
	}
	$cnt_book++;
	echo "<td ><input type=\"button\" value=\"詳細\" onClick=\"document.location='./bookDetail.php?gid={$row['BookNumber']}'\"></td>\n";
	echo "</tr>\n";

}
if ($cnt!=0){
echo"</table>";
}else{
echo "<h2 style=\"color:red\">[".$gname1."]に一致する蔵書がありません。</h2>";
}
echo"<input type=\"button\" value=\"戻る\" onClick=\"javascript:history.go(-1)\">\n";
$dbh = null;
?>
	</div>
</div>
</body>
</html>
