<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis22=$_POST["reis22"];
$nrch22=$_POST["nrch22"];
$krch22=$_POST["krch22"];
$vvch22=$_POST["vvch22"];
$nrm22=$_POST["nrm22"];
$krm22=$_POST["krm22"];
$vvm22=$_POST["vvm22"];
}

$query322  = "UPDATE tables SET nrch='$nrch22' WHERE reis='$reis22'";
$query37  = "UPDATE tables SET krch='$krch22' WHERE reis='$reis22'";
$query38  = "UPDATE tables SET vvch='$vvch22' WHERE reis='$reis22'";
$query39  = "UPDATE tables SET nrm='$nrm22' WHERE reis='$reis22'";
$query40  = "UPDATE tables SET krm='$krm22' WHERE reis='$reis22'";
$query41  = "UPDATE tables SET vvm='$vvm22' WHERE reis='$reis22'";
$query42  = "UPDATE st SET reis='$reis22' WHERE nst=22";

$result = mysql_query($query322);
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