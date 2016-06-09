<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis7=$_POST["reis7"];
$nrch7=$_POST["nrch7"];
$krch7=$_POST["krch7"];
$vvch7=$_POST["vvch7"];
$nrm7=$_POST["nrm7"];
$krm7=$_POST["krm7"];
$vvm7=$_POST["vvm7"];
}

$query22  = "UPDATE tables SET nrch='$nrch7' WHERE reis='$reis7'";
$query23  = "UPDATE tables SET krch='$krch7' WHERE reis='$reis7'";
$query24  = "UPDATE tables SET vvch='$vvch7' WHERE reis='$reis7'";
$query25  = "UPDATE tables SET nrm='$nrm7' WHERE reis='$reis7'";
$query26  = "UPDATE tables SET krm='$krm7' WHERE reis='$reis7'";
$query27  = "UPDATE tables SET vvm='$vvm7' WHERE reis='$reis7'";
$query28  = "UPDATE st SET reis='$reis7' WHERE nst=7";

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