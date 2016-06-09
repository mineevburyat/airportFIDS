<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$punkt = $fp['naznach'];

?>

<html>
<head>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<style>
   html { overflow:  hidden; }
     body { 
	background:#156fdf;
	cursor: none;
   }
    H14 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 100px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:normal;
   }

  </style>
 </head> 
<body >
<h14><center><?php echo "$punkt" ?></center></h14>


  
 </body>
 </html>
