<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$znst=$_POST["znst"];
$zreis=$_POST["zreis"];
$ztime=$_POST["ztime"];
}

$query  = "UPDATE st SET ztime='$ztime' WHERE nst='$znst'";
$query2  = "UPDATE st SET zreis='$zreis' WHERE nst='$znst'";

$result = mysql_query($query);
$result = mysql_query($query2);
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>
