<?php
mysql_connect("localhost", "edit", "123987");
mysql_select_db("airport") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

$nbag='1';

if($_POST)
{
$reis=$_POST["reis"];
}

$query1  = "UPDATE luggage SET reis='$reis' WHERE nbag='$nbag'";
$result = mysql_query($query1);


?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=luggage.php">
  <title></title>
 </head>
</html>