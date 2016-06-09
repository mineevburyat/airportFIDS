<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis4=$_POST["reis4"];
$nrch4=$_POST["nrch4"];
$krch4=$_POST["krch4"];
$vvch4=$_POST["vvch4"];
$nrm4=$_POST["nrm4"];
$krm4=$_POST["krm4"];
$vvm4=$_POST["vvm4"];
}

$query22  = "UPDATE tables SET nrch='$nrch4' WHERE reis='$reis4'";
$query23  = "UPDATE tables SET krch='$krch4' WHERE reis='$reis4'";
$query24  = "UPDATE tables SET vvch='$vvch4' WHERE reis='$reis4'";
$query25  = "UPDATE tables SET nrm='$nrm4' WHERE reis='$reis4'";
$query26  = "UPDATE tables SET krm='$krm4' WHERE reis='$reis4'";
$query27  = "UPDATE tables SET vvm='$vvm4' WHERE reis='$reis4'";
$query28  = "UPDATE st SET reis='$reis4' WHERE nst=4";

$result = mysql_query($query22);
$result = mysql_query($query23);
$result = mysql_query($query24);
$result = mysql_query($query25);
$result = mysql_query($query26);
$result = mysql_query($query27);
$result = mysql_query($query28);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>