<?php
mysql_connect("localhost", "edit", "123987");
mysql_select_db("airport") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

$nst='M1';

$qr = mysql_query ("select reis from stand where nst='$nst'");
$fr = mysql_fetch_array($qr);
$r1 = $fr['reis'];

if($_POST)
{
$reis=$_POST["reis"];
$nreg=$_POST["nreg"];
$okreg=$_POST["okreg"];
$class=$_POST["class"];
}

$query1  = "UPDATE stand SET reis='$reis' WHERE nst='$nst'";
$result = mysql_query($query1);
if ($reis==$r1)  { 
$query2  = "UPDATE reis SET nach_reg='$nreg' WHERE reis='$reis'";
$query3  = "UPDATE reis SET okon_reg='$okreg' WHERE reis='$reis'";
$query4  = "UPDATE stand SET class='$class' WHERE nst='$nst'";
$result = mysql_query($query2);
$result = mysql_query($query3);
$result = mysql_query($query4);
}

?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=index.php">
  <title></title>
 </head>
</html>