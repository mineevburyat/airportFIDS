<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Начало регистрации
$qp = mysql_query ("select okon_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$okreg = $fp['okon_reg'];

 
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
   html { overflow:  hidden; }
     body { 
	background:#00BFFF;
	cursor: none;
   }
    H15 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 23px; /* Размер шрифта в процентах */ 
	color: #333;
	font-weight:bold;
   }
    H14 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 115px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
   }

  </style>
 </head> 
<body>
<h15><center>Окончание регистрации:</center></h15>
<h15><center>The end registration:</center></h15>
<h14><center><?php echo "$okreg" ?></center></h14>


  
 </body>
 </html>
