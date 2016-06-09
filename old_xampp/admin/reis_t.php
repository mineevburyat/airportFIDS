<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis=$_POST["r"];
$nr=$_POST["nr"];
$kr=$_POST["kr"];
$vv=$_POST["vv"];
}

$query  = "UPDATE tables SET nr='$nr' WHERE reis='$reis'";
$query2  = "UPDATE tables SET kr='$kr' WHERE reis='$reis'";
$query3  = "UPDATE tables SET vv='$vv' WHERE reis='$reis'";

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
