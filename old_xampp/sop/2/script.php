<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis2=$_POST["reis2"];
$nrch2=$_POST["nrch2"];
$krch2=$_POST["krch2"];
$vvch2=$_POST["vvch2"];
$nrm2=$_POST["nrm2"];
$krm2=$_POST["krm2"];
$vvm2=$_POST["vvm2"];
}

$query8  = "UPDATE tables SET nrch='$nrch2' WHERE reis='$reis2'";
$query9  = "UPDATE tables SET krch='$krch2' WHERE reis='$reis2'";
$query10  = "UPDATE tables SET vvch='$vvch2' WHERE reis='$reis2'";
$query11  = "UPDATE tables SET nrm='$nrm2' WHERE reis='$reis2'";
$query12  = "UPDATE tables SET krm='$krm2' WHERE reis='$reis2'";
$query13  = "UPDATE tables SET vvm='$vvm2' WHERE reis='$reis2'";
$query14  = "UPDATE st SET reis='$reis2' WHERE nst=2";

$result = mysql_query($query8);
$result = mysql_query($query9);
$result = mysql_query($query10);
$result = mysql_query($query11);
$result = mysql_query($query12);
$result = mysql_query($query13);
$result = mysql_query($query14);
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>