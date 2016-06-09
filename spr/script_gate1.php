<?php
mysql_connect("localhost", "edit", "123987");
mysql_select_db("airport") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

$nexit='1';

if($_POST)
{
$reis=$_POST["reis"];
}

$query1  = "UPDATE gate SET reis='$reis' WHERE nexit='$nexit'";
$result = mysql_query($query1);


?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=gate1.php">
  <title></title>
 </head>
</html>