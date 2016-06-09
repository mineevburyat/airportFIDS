<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");


// инфа для стойки №7
$qre7 = mysql_query ("select reis from st where nst='7'");
$fre7 = mysql_fetch_array($qre7);
$re7 = $fre7['reis'];
$qnrch7 = mysql_query ("select nrch from tables where reis='$re7'");
$fnrch7 = mysql_fetch_array($qnrch7);
$nrch7 = $fnrch7['nrch'];
$qkrch7 = mysql_query ("select krch from tables where reis='$re7'");
$fkrch7 = mysql_fetch_array($qkrch7);
$krch7 = $fkrch7['krch']; 
$qvvch7 = mysql_query ("select vvch from tables where reis='$re7'");
$fvvch7 = mysql_fetch_array($qvvch7);
$vvch7 = $fvvch7['vvch'];
$qnrm7 = mysql_query ("select nrm from tables where reis='$re7'");
$fnrm7 = mysql_fetch_array($qnrm7);
$nrm7 = $fnrm7['nrm'];
$qkrm7 = mysql_query ("select krm from tables where reis='$re7'");
$fkrm7 = mysql_fetch_array($qkrm7);
$krm7 = $fkrm7['krm']; 
$qvvm7 = mysql_query ("select vvm from tables where reis='$re7'");
$fvvm7 = mysql_fetch_array($qvvm7);
$vvm7 = $fvvm7['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset7() {
	document.getElementById("reis7").selectedIndex = 
	document.getElementById("reis7").length = 77;
	document.getElementById("nrch7").selectedIndex = 
	document.getElementById("nrch7").value = '';
	document.getElementById("krch7").selectedIndex = 
	document.getElementById("krch7").value = '';
	document.getElementById("vvch7").selectedIndex = 
	document.getElementById("vvch7").value = '';
	document.getElementById("nrm7").selectedIndex = 
	document.getElementById("nrm7").value = '';
	document.getElementById("krm7").selectedIndex = 
	document.getElementById("krm7").value = '';
	document.getElementById("vvm7").selectedIndex = 
	document.getElementById("vvm7").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №7</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis7' id='reis7'>";
echo "<option VALUE='$re7'>$re7</option>";
$r=mysql_query("select reis from tables"); 
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset7()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch7" type="text" name="nrch7" class="POST" value="<?php echo "$nrch7" ?>"/>ч.<input style="width: 30px" id="nrm7" type="text" name="nrm7" class="POST" value="<?php echo "$nrm7" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch7" type="text" name="krch7" class="POST" value="<?php echo "$krch7" ?>"/>ч.<input style="width: 30px" id="krm7" type="text" name="krm7" class="POST" value="<?php echo "$krm7" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch7" type="text" name="vvch7" class="POST" value="<?php echo "$vvch7" ?>"/>ч.<input style="width: 30px" id="vvm7" type="text" name="vvm7" class="POST" value="<?php echo "$vvm7" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="width:200px; height:50px;">
</FORM>

</body> 
</html>

