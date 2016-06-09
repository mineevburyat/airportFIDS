<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod_en from reis where reis='$reis'");
$fc = mysql_fetch_array($qc);
$kod = $fc['kod_en'];
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
    font-size: 190px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
   }

  </style>
 </head> 
<body >

<h14><center><?php echo "$kod"."$reis" ?></center></h14>


  
 </body>
 </html>
