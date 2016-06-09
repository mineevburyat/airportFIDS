<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis5=$_POST["reis5"];
$nrch5=$_POST["nrch5"];
$krch5=$_POST["krch5"];
$vvch5=$_POST["vvch5"];
$nrm5=$_POST["nrm5"];
$krm5=$_POST["krm5"];
$vvm5=$_POST["vvm5"];
}


$query29  = "UPDATE tables SET nrch='$nrch5' WHERE reis='$reis5'";
$query30  = "UPDATE tables SET krch='$krch5' WHERE reis='$reis5'";
$query31  = "UPDATE tables SET vvch='$vvch5' WHERE reis='$reis5'";
$query32  = "UPDATE tables SET nrm='$nrm5' WHERE reis='$reis5'";
$query33  = "UPDATE tables SET krm='$krm5' WHERE reis='$reis5'";
$query34  = "UPDATE tables SET vvm='$vvm5' WHERE reis='$reis5'";
$query35  = "UPDATE st SET reis='$reis5' WHERE nst=5";

$result = mysql_query($query29);
$result = mysql_query($query30);
$result = mysql_query($query31);
$result = mysql_query($query32);
$result = mysql_query($query33);
$result = mysql_query($query34);
$result = mysql_query($query35);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>