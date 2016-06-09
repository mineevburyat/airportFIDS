<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");


// инфа для стойки №4
$qre4 = mysql_query ("select reis from st where nst='4'");
$fre4 = mysql_fetch_array($qre4);
$re4 = $fre4['reis'];
$qnrch4 = mysql_query ("select nrch from tables where reis='$re4'");
$fnrch4 = mysql_fetch_array($qnrch4);
$nrch4 = $fnrch4['nrch'];
$qkrch4 = mysql_query ("select krch from tables where reis='$re4'");
$fkrch4 = mysql_fetch_array($qkrch4);
$krch4 = $fkrch4['krch']; 
$qvvch4 = mysql_query ("select vvch from tables where reis='$re4'");
$fvvch4 = mysql_fetch_array($qvvch4);
$vvch4 = $fvvch4['vvch'];
$qnrm4 = mysql_query ("select nrm from tables where reis='$re4'");
$fnrm4 = mysql_fetch_array($qnrm4);
$nrm4 = $fnrm4['nrm'];
$qkrm4 = mysql_query ("select krm from tables where reis='$re4'");
$fkrm4 = mysql_fetch_array($qkrm4);
$krm4 = $fkrm4['krm']; 
$qvvm4 = mysql_query ("select vvm from tables where reis='$re4'");
$fvvm4 = mysql_fetch_array($qvvm4);
$vvm4 = $fvvm4['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset4() {
	document.getElementById("reis4").selectedIndex = 
	document.getElementById("reis4").length = 47;
	document.getElementById("nrch4").selectedIndex = 
	document.getElementById("nrch4").value = '';
	document.getElementById("krch4").selectedIndex = 
	document.getElementById("krch4").value = '';
	document.getElementById("vvch4").selectedIndex = 
	document.getElementById("vvch4").value = '';
	document.getElementById("nrm4").selectedIndex = 
	document.getElementById("nrm4").value = '';
	document.getElementById("krm4").selectedIndex = 
	document.getElementById("krm4").value = '';
	document.getElementById("vvm4").selectedIndex = 
	document.getElementById("vvm4").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №4</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis4' id='reis4'>";
echo "<option VALUE='$re4'>$re4</option>";
$r=mysql_query("select reis from tables"); 
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset4()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch4" type="text" name="nrch4" class="POST" value="<?php echo "$nrch4" ?>"/>ч.<input style="width: 30px" id="nrm4" type="text" name="nrm4" class="POST" value="<?php echo "$nrm4" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch4" type="text" name="krch4" class="POST" value="<?php echo "$krch4" ?>"/>ч.<input style="width: 30px" id="krm4" type="text" name="krm4" class="POST" value="<?php echo "$krm4" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch4" type="text" name="vvch4" class="POST" value="<?php echo "$vvch4" ?>"/>ч.<input style="width: 30px" id="vvm4" type="text" name="vvm4" class="POST" value="<?php echo "$vvm4" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="width:200px; height:50px;">
</FORM>

</body> 
</html>

