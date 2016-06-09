<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{

$st=$_POST["st"];
$reis=$_POST["reis"];
$vp1=$_POST["vp1"];
$vp2=$_POST["vp2"];
$status=$_POST["status"];

}

$query  = "UPDATE tabp SET vp1='$vp1' WHERE st='$st'";
$query2  = "UPDATE tabp SET vp2='$vp2' WHERE st='$st'";
$query3  = "UPDATE tabp SET status='$status' WHERE st='$st'";
$query4  = "UPDATE tabp SET reis='$reis' WHERE st='$st'";

$result = mysql_query($query);
$result = mysql_query($query2);
$result = mysql_query($query3);
$result = mysql_query($query4);
?>

<html>
<head>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>
