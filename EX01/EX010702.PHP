<!DOCTYPE html>
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ex010702.php</title>
</head>
<body>
<p>カレンダー</p>
<table border="1" cellspacing="0" cellpadding="5" style="text-align:center;">

<?php
$month = ($_GET ["month"]);
$year = ($_GET ["year"]);

echo "<caption style=\"color:black; font-size:14px; padding:0px;\"> $year 年 $month 月のカレンダー";

	$color=array('#C30','black','black','black','black','black','#03C');
	$count =0;
	$timestemp=mktime(0,0,0,($_GET ["month"])+1,0,($_GET ["year"]));
	$timestemp1=mktime(0,0,0,($_GET ["month"]),1,($_GET ["year"]));
	$date=getdate($timestemp1);
	$lastday=intval(date('t',$timestemp));
	$last=0;
	$num=0;
	$all=0;

	echo"<tr>";
	echo"<th style=\"color:#C30\">日</th>";
	echo"<th style=\"color:black\">月</th>";
	echo"<th style=\"color:black\">火</th>";
	echo"<th style=\"color:black\">水</th>";
	echo"<th style=\"color:black\">木</th>";
	echo"<th style=\"color:black\">金</th>";
	echo"<th style=\"color:#03C\">土</th>";
	echo"</tr>\n";

	echo("<tr>");
	for($j=0;$j<$date['wday'];$j++){
		$num = $num+1;
		echo("<td>");
		echo(" ");
		echo("</td>\n");
	}
	for($i = 1;$i < $lastday+1; $i++){
		$num = $num+1;
		$all = $num % 7;
		if($all==0){
			echo"<td style=\"color:#30C\">";
		}elseif ($all==1){
			echo "<td style=\"color:#C03\">";
		}else{
			echo"<td style=\"color:black\">";
		}
		echo($i);
		echo("</td>\n");
		if ($num % 7==0){
			echo("</tr>\n");
			echo("<tr>");
			$num=0;
		}
	}
	$last=7-$num;
	if($num!=0){
		for($a=0;$a<$last;$a++ ){
			echo("<td>");
			echo(" ");
			echo("</td>\n");
		}
	}
	echo("</tr>\n");
	$num=0;
?>
</table>
</br>
</br>
<a href="ex010701.php">もう一度表示する</a>
</body>
</html>