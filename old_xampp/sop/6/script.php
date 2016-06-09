<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis6=$_POST["reis6"];
$nrch6=$_POST["nrch6"];
$krch6=$_POST["krch6"];
$vvch6=$_POST["vvch6"];
$nrm6=$_POST["nrm6"];
$krm6=$_POST["krm6"];
$vvm6=$_POST["vvm6"];
}

$query36  = "UPDATE tables SET nrch='$nrch6' WHERE reis='$reis6'";
$query37  = "UPDATE tables SET krch='$krch6' WHERE reis='$reis6'";
$query38  = "UPDATE tables SET vvch='$vvch6' WHERE reis='$reis6'";
$query39  = "UPDATE tables SET nrm='$nrm6' WHERE reis='$reis6'";
$query40  = "UPDATE tables SET krm='$krm6' WHERE reis='$reis6'";
$query41  = "UPDATE tables SET vvm='$vvm6' WHERE reis='$reis6'";
$query42  = "UPDATE st SET reis='$reis6' WHERE nst=6";

$result = mysql_query($query36);
$result = mysql_query($query37);
$result = mysql_query($query38);
$result = mysql_query($query39);
$result = mysql_query($query40);
$result = mysql_query($query41);
$result = mysql_query($query42);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>