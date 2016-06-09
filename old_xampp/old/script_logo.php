<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis'");
$fl = mysql_fetch_array($ql);
$logo = $fl['kod_en'];

?>

<html>
<head>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<style>
   html { overflow:  hidden; }
     body { 
	background:#00BFFF;
	cursor: none;
   }
    H14 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 80px; /* Размер шрифта в процентах */ 
	color: white;
	font-weight:bold
   }

  </style>
 </head> 
<body >
<br><br>
<h14><center><img src="../../logo/<?php echo "$logo" ?>.jpg" width="370px" height="170px" style="border-radius: 25px;"></center></h14>
 </body>
 </html>
