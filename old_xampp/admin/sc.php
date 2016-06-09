<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$zst=$_POST["zst"];
$zreis=$_POST["zreis"];
$ztn=$_POST["ztn"];
$ztk=$_POST["ztk"];
}

$query  = "UPDATE sc SET reis='$zreis' WHERE st='$zst'";
$query2  = "UPDATE sc SET tn='$ztn' WHERE st='$zst'";
$query3  = "UPDATE sc SET tk='$ztk' WHERE st='$zst'";

$result = mysql_query($query);
$result = mysql_query($query2);
$result = mysql_query($query3);
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>
