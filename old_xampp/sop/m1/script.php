<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis21=$_POST["reis21"];
$nrch21=$_POST["nrch21"];
$krch21=$_POST["krch21"];
$vvch21=$_POST["vvch21"];
$nrm21=$_POST["nrm21"];
$krm21=$_POST["krm21"];
$vvm21=$_POST["vvm21"];
}

$query321  = "UPDATE tables SET nrch='$nrch21' WHERE reis='$reis21'";
$query37  = "UPDATE tables SET krch='$krch21' WHERE reis='$reis21'";
$query38  = "UPDATE tables SET vvch='$vvch21' WHERE reis='$reis21'";
$query39  = "UPDATE tables SET nrm='$nrm21' WHERE reis='$reis21'";
$query40  = "UPDATE tables SET krm='$krm21' WHERE reis='$reis21'";
$query41  = "UPDATE tables SET vvm='$vvm21' WHERE reis='$reis21'";
$query42  = "UPDATE st SET reis='$reis21' WHERE nst=21";

$result = mysql_query($query321);
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