<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis8=$_POST["reis8"];
$nrch8=$_POST["nrch8"];
$krch8=$_POST["krch8"];
$vvch8=$_POST["vvch8"];
$nrm8=$_POST["nrm8"];
$krm8=$_POST["krm8"];
$vvm8=$_POST["vvm8"];
}

$query36  = "UPDATE tables SET nrch='$nrch8' WHERE reis='$reis8'";
$query37  = "UPDATE tables SET krch='$krch8' WHERE reis='$reis8'";
$query38  = "UPDATE tables SET vvch='$vvch8' WHERE reis='$reis8'";
$query39  = "UPDATE tables SET nrm='$nrm8' WHERE reis='$reis8'";
$query40  = "UPDATE tables SET krm='$krm8' WHERE reis='$reis8'";
$query41  = "UPDATE tables SET vvm='$vvm8' WHERE reis='$reis8'";
$query42  = "UPDATE st SET reis='$reis8' WHERE nst=8";

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