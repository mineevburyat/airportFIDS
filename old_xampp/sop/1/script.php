<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis1=$_POST["reis1"];
$nrch1=$_POST["nrch1"];
$krch1=$_POST["krch1"];
$vvch1=$_POST["vvch1"];
$nrm1=$_POST["nrm1"];
$krm1=$_POST["krm1"];
$vvm1=$_POST["vvm1"];
}

$query  = "UPDATE tables SET nrch='$nrch1' WHERE reis='$reis1'";
$query2  = "UPDATE tables SET krch='$krch1' WHERE reis='$reis1'";
$query3  = "UPDATE tables SET vvch='$vvch1' WHERE reis='$reis1'";
$query4  = "UPDATE tables SET nrm='$nrm1' WHERE reis='$reis1'";
$query5  = "UPDATE tables SET krm='$krm1' WHERE reis='$reis1'";
$query6  = "UPDATE tables SET vvm='$vvm1' WHERE reis='$reis1'";
$query7  = "UPDATE st SET reis='$reis1' WHERE nst=1";

$result = mysql_query($query);
$result = mysql_query($query2);
$result = mysql_query($query3);
$result = mysql_query($query4);
$result = mysql_query($query5);
$result = mysql_query($query6);
$result = mysql_query($query7);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>