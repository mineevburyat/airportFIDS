<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №22
$qre22 = mysql_query ("select reis from st where nst='22'");
$fre22 = mysql_fetch_array($qre22);
$re22 = $fre22['reis'];
$qnrch22 = mysql_query ("select nrch from tables where reis='$re22'");
$fnrch22 = mysql_fetch_array($qnrch22);
$nrch22 = $fnrch22['nrch'];
$qkrch22 = mysql_query ("select krch from tables where reis='$re22'");
$fkrch22 = mysql_fetch_array($qkrch22);
$krch22 = $fkrch22['krch']; 
$qvvch22 = mysql_query ("select vvch from tables where reis='$re22'");
$fvvch22 = mysql_fetch_array($qvvch22);
$vvch22 = $fvvch22['vvch'];
$qnrm22 = mysql_query ("select nrm from tables where reis='$re22'");
$fnrm22 = mysql_fetch_array($qnrm22);
$nrm22 = $fnrm22['nrm'];
$qkrm22 = mysql_query ("select krm from tables where reis='$re22'");
$fkrm22 = mysql_fetch_array($qkrm22);
$krm22 = $fkrm22['krm']; 
$qvvm22 = mysql_query ("select vvm from tables where reis='$re22'");
$fvvm22 = mysql_fetch_array($qvvm22);
$vvm22 = $fvvm22['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset22() {
	document.getElementById("reis22").selectedIndex = 
	document.getElementById("reis22").length = 47;
	document.getElementById("nrch22").selectedIndex = 
	document.getElementById("nrch22").value = '';
	document.getElementById("krch22").selectedIndex = 
	document.getElementById("krch22").value = '';
	document.getElementById("vvch22").selectedIndex = 
	document.getElementById("vvch22").value = '';
	document.getElementById("nrm22").selectedIndex = 
	document.getElementById("nrm22").value = '';
	document.getElementById("krm22").selectedIndex = 
	document.getElementById("krm22").value = '';
	document.getElementById("vvm22").selectedIndex = 
	document.getElementById("vvm22").value = '';
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
echo "Рейс №<SELECT NAME='reis22' id='reis22'>";
echo "<option VALUE='$re22'>$re22</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset22()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch22" type="text" name="nrch22" class="POST" value="<?php echo "$nrch22" ?>"/>ч.<input style="width: 30px" id="nrm22" type="text" name="nrm22" class="POST" value="<?php echo "$nrm22" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch22" type="text" name="krch22" class="POST" value="<?php echo "$krch22" ?>"/>ч.<input style="width: 30px" id="krm22" type="text" name="krm22" class="POST" value="<?php echo "$krm22" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch22" type="text" name="vvch22" class="POST" value="<?php echo "$vvch22" ?>"/>ч.<input style="width: 30px" id="vvm22" type="text" name="vvm22" class="POST" value="<?php echo "$vvm22" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style=" width:200px; height:50px;">
</FORM>

</body> 
</html>

