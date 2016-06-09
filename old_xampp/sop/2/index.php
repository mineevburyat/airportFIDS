<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Стойки
// инфа для стойки №2
$qre2 = mysql_query ("select reis from st where nst='2'");
$fre2 = mysql_fetch_array($qre2);
$re2 = $fre2['reis'];
$qnrch2 = mysql_query ("select nrch from tables where reis='$re2'");
$fnrch2 = mysql_fetch_array($qnrch2);
$nrch2 = $fnrch2['nrch'];
$qkrch2 = mysql_query ("select krch from tables where reis='$re2'");
$fkrch2 = mysql_fetch_array($qkrch2);
$krch2 = $fkrch2['krch']; 
$qvvch2 = mysql_query ("select vvch from tables where reis='$re2'");
$fvvch2 = mysql_fetch_array($qvvch2);
$vvch2 = $fvvch2['vvch'];
$qnrm2 = mysql_query ("select nrm from tables where reis='$re2'");
$fnrm2 = mysql_fetch_array($qnrm2);
$nrm2 = $fnrm2['nrm'];
$qkrm2 = mysql_query ("select krm from tables where reis='$re2'");
$fkrm2 = mysql_fetch_array($qkrm2);
$krm2 = $fkrm2['krm']; 
$qvvm2 = mysql_query ("select vvm from tables where reis='$re2'");
$fvvm2 = mysql_fetch_array($qvvm2);
$vvm2 = $fvvm2['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset2() {
	document.getElementById("reis2").selectedIndex = 
	document.getElementById("reis2").length = 47;
	document.getElementById("nrch2").selectedIndex = 
	document.getElementById("nrch2").value = '';
	document.getElementById("krch2").selectedIndex = 
	document.getElementById("krch2").value = '';
	document.getElementById("vvch2").selectedIndex = 
	document.getElementById("vvch2").value = '';
	document.getElementById("nrm2").selectedIndex = 
	document.getElementById("nrm2").value = '';
	document.getElementById("krm2").selectedIndex = 
	document.getElementById("krm2").value = '';
	document.getElementById("vvm2").selectedIndex = 
	document.getElementById("vvm2").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №2</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis2' id='reis2'>";
echo "<option VALUE='$re2'>$re2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++)
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset2()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch2" type="text" name="nrch2" class="POST" value="<?php echo "$nrch2" ?>"/>ч.<input style="width: 30px" id="nrm2" type="text" name="nrm2" class="POST" value="<?php echo "$nrm2" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch2" type="text" name="krch2" class="POST" value="<?php echo "$krch2" ?>"/>ч.<input style="width: 30px" id="krm2" type="text" name="krm2" class="POST" value="<?php echo "$krm2" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch2" type="text" name="vvch2" class="POST" value="<?php echo "$vvch2" ?>"/>ч.<input style="width: 30px" id="vvm2" type="text" name="vvm2" class="POST" value="<?php echo "$vvm2" ?>"/>мин.<br>
</center></TD>

</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="width:200px; height:50px;">
</FORM>

</body> 
</html>

