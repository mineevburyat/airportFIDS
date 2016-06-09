<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №3
$qre3 = mysql_query ("select reis from st where nst='3'");
$fre3 = mysql_fetch_array($qre3);
$re3 = $fre3['reis'];
$qnrch3 = mysql_query ("select nrch from tables where reis='$re3'");
$fnrch3 = mysql_fetch_array($qnrch3);
$nrch3 = $fnrch3['nrch'];
$qkrch3 = mysql_query ("select krch from tables where reis='$re3'");
$fkrch3 = mysql_fetch_array($qkrch3);
$krch3 = $fkrch3['krch']; 
$qvvch3 = mysql_query ("select vvch from tables where reis='$re3'");
$fvvch3 = mysql_fetch_array($qvvch3);
$vvch3 = $fvvch3['vvch'];
$qnrm3 = mysql_query ("select nrm from tables where reis='$re3'");
$fnrm3 = mysql_fetch_array($qnrm3);
$nrm3 = $fnrm3['nrm'];
$qkrm3 = mysql_query ("select krm from tables where reis='$re3'");
$fkrm3 = mysql_fetch_array($qkrm3);
$krm3 = $fkrm3['krm']; 
$qvvm3 = mysql_query ("select vvm from tables where reis='$re3'");
$fvvm3 = mysql_fetch_array($qvvm3);
$vvm3 = $fvvm3['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset3() {
	document.getElementById("reis3").selectedIndex = 
	document.getElementById("reis3").length = 47;
	document.getElementById("nrch3").selectedIndex = 
	document.getElementById("nrch3").value = '';
	document.getElementById("krch3").selectedIndex = 
	document.getElementById("krch3").value = '';
	document.getElementById("vvch3").selectedIndex = 
	document.getElementById("vvch3").value = '';
	document.getElementById("nrm3").selectedIndex = 
	document.getElementById("nrm3").value = '';
	document.getElementById("krm3").selectedIndex = 
	document.getElementById("krm3").value = '';
	document.getElementById("vvm3").selectedIndex = 
	document.getElementById("vvm3").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №3</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis3' id='reis3'>";
echo "<option VALUE='$re3'>$re3</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++)
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset3()' value='X' title='Очистить стойку'>"; 
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch3" type="text" name="nrch3" class="POST" value="<?php echo "$nrch3" ?>"/>ч.<input style="width: 30px" id="nrm3" type="text" name="nrm3" class="POST" value="<?php echo "$nrm3" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch3" type="text" name="krch3" class="POST" value="<?php echo "$krch3" ?>"/>ч.<input style="width: 30px" id="krm3" type="text" name="krm3" class="POST" value="<?php echo "$krm3" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch3" type="text" name="vvch3" class="POST" value="<?php echo "$vvch3" ?>"/>ч.<input style="width: 30px" id="vvm3" type="text" name="vvm3" class="POST" value="<?php echo "$vvm3" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style=" width:200px; height:50px;">
</FORM>

</body> 
</html>

