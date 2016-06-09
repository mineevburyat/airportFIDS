<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];

?>
<html>  
<head>  
  <META HTTP-EQUIV="refresh" CONTENT='5;URL=rek.php'>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <style>
html { 
overflow:  hidden; 
cursor: none;
}
  </style>
   54545
</head> 
 <?php If ($reis==0) { 
echo "<script language='JavaScript'>window.close();</script>";
} ?>
</html> 



   