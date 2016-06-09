<?php
mysql_connect("localhost", "edit", "123987");
mysql_select_db("airport") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

$qr = mysql_query ("select reis from examination where nst='1'");
$fr = mysql_fetch_array($qr);
$r1 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='2'");
$fr = mysql_fetch_array($qr);
$r2 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='3'");
$fr = mysql_fetch_array($qr);
$r3 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='4'");
$fr = mysql_fetch_array($qr);
$r4 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='5'");
$fr = mysql_fetch_array($qr);
$r5 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='6'");
$fr = mysql_fetch_array($qr);
$r6 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='7'");
$fr = mysql_fetch_array($qr);
$r7 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='8'");
$fr = mysql_fetch_array($qr);
$r8 = $fr['reis'];
$qr = mysql_query ("select reis from examination where nst='9'");
$fr = mysql_fetch_array($qr);
$r9 = $fr['reis'];

if($_POST)
{
$reis1=$_POST["reis1"];
$npos1=$_POST["npos1"];
$okpos1=$_POST["okpos1"];
$reis2=$_POST["reis2"];
$npos2=$_POST["npos2"];
$okpos2=$_POST["okpos2"];
$reis3=$_POST["reis3"];
$npos3=$_POST["npos3"];
$okpos3=$_POST["okpos3"];
$reis4=$_POST["reis4"];
$npos4=$_POST["npos4"];
$okpos4=$_POST["okpos4"];
$reis5=$_POST["reis5"];
$npos5=$_POST["npos5"];
$okpos5=$_POST["okpos5"];
$reis6=$_POST["reis6"];
$npos6=$_POST["npos6"];
$okpos6=$_POST["okpos6"];
$reis7=$_POST["reis7"];
$npos7=$_POST["npos7"];
$okpos7=$_POST["okpos7"];
$reis8=$_POST["reis8"];
$npos8=$_POST["npos8"];
$okpos8=$_POST["okpos8"];
$reis9=$_POST["reis9"];
$npos9=$_POST["npos9"];
$okpos9=$_POST["okpos9"];

$query1  = "UPDATE examination SET reis='$reis1' WHERE nst=1";
$result = mysql_query($query1);
$query2  = "UPDATE examination SET reis='$reis2' WHERE nst=2";
$result = mysql_query($query2);
$query3  = "UPDATE examination SET reis='$reis3' WHERE nst=3";
$result = mysql_query($query3);
$query4  = "UPDATE examination SET reis='$reis4' WHERE nst=4";
$result = mysql_query($query4);
$query5  = "UPDATE examination SET reis='$reis5' WHERE nst=5";
$result = mysql_query($query5);
$query6  = "UPDATE examination SET reis='$reis6' WHERE nst=6";
$result = mysql_query($query6);
$query7  = "UPDATE examination SET reis='$reis7' WHERE nst=7";
$result = mysql_query($query7);
$query8  = "UPDATE examination SET reis='$reis8' WHERE nst=8";
$result = mysql_query($query8);
$query9  = "UPDATE examination SET reis='$reis9' WHERE nst=9";
$result = mysql_query($query9);

if ($reis1==$r1)  { 
$query10  = "UPDATE reis SET nach_pos='$npos1' WHERE reis='$reis1'";
$query11  = "UPDATE reis SET okon_pos='$okpos1' WHERE reis='$reis1'";
$result = mysql_query($query10);
$result = mysql_query($query11);
}
if ($reis2==$r2)  { 
$query12  = "UPDATE reis SET nach_pos='$npos2' WHERE reis='$reis2'";
$query13  = "UPDATE reis SET okon_pos='$okpos2' WHERE reis='$reis2'";
$result = mysql_query($query12);
$result = mysql_query($query13);
}
if ($reis3==$r3)  { 
$query14  = "UPDATE reis SET nach_pos='$npos3' WHERE reis='$reis3'";
$query15  = "UPDATE reis SET okon_pos='$okpos3' WHERE reis='$reis3'";
$result = mysql_query($query14);
$result = mysql_query($query15);
}
if ($reis4==$r4)  { 
$query16  = "UPDATE reis SET nach_pos='$npos4' WHERE reis='$reis4'";
$query17  = "UPDATE reis SET okon_pos='$okpos4' WHERE reis='$reis4'";
$result = mysql_query($query16);
$result = mysql_query($query17);
}
if ($reis5==$r5)  { 
$query18  = "UPDATE reis SET nach_pos='$npos5' WHERE reis='$reis5'";
$query19  = "UPDATE reis SET okon_pos='$okpos5' WHERE reis='$reis5'";
$result = mysql_query($query18);
$result = mysql_query($query19);
}
if ($reis6==$r6)  { 
$query20  = "UPDATE reis SET nach_pos='$npos6' WHERE reis='$reis6'";
$query21  = "UPDATE reis SET okon_pos='$okpos6' WHERE reis='$reis6'";
$result = mysql_query($query20);
$result = mysql_query($query21);
}
if ($reis7==$r7)  { 
$query22  = "UPDATE reis SET nach_pos='$npos7' WHERE reis='$reis7'";
$query23  = "UPDATE reis SET okon_pos='$okpos7' WHERE reis='$reis7'";
$result = mysql_query($query22);
$result = mysql_query($query23);
}
if ($reis8==$r8)  { 
$query24  = "UPDATE reis SET nach_pos='$npos8' WHERE reis='$reis8'";
$query25  = "UPDATE reis SET okon_pos='$okpos8' WHERE reis='$reis8'";
$result = mysql_query($query24);
$result = mysql_query($query25);
}
if ($reis9==$r9)  { 
$query26  = "UPDATE reis SET nach_pos='$npos9' WHERE reis='$reis9'";
$query27  = "UPDATE reis SET okon_pos='$okpos9' WHERE reis='$reis9'";
$result = mysql_query($query26);
$result = mysql_query($query27);
}
}


?>


<html>
<head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=examination.php">
 </head>
</html>