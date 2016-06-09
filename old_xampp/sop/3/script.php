<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{

$reis3=$_POST["reis3"];
$nrch3=$_POST["nrch3"];
$krch3=$_POST["krch3"];
$vvch3=$_POST["vvch3"];
$nrm3=$_POST["nrm3"];
$krm3=$_POST["krm3"];
$vvm3=$_POST["vvm3"];
}

$query15  = "UPDATE tables SET nrch='$nrch3' WHERE reis='$reis3'";
$query16  = "UPDATE tables SET krch='$krch3' WHERE reis='$reis3'";
$query17  = "UPDATE tables SET vvch='$vvch3' WHERE reis='$reis3'";
$query18  = "UPDATE tables SET nrm='$nrm3' WHERE reis='$reis3'";
$query19  = "UPDATE tables SET krm='$krm3' WHERE reis='$reis3'";
$query20  = "UPDATE tables SET vvm='$vvm3' WHERE reis='$reis3'";
$query21  = "UPDATE st SET reis='$reis3' WHERE nst=3";

$result = mysql_query($query15);
$result = mysql_query($query16);
$result = mysql_query($query17);
$result = mysql_query($query18);
$result = mysql_query($query19);
$result = mysql_query($query20);
$result = mysql_query($query21);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>