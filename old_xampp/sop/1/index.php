<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Стойки
// инфа для стойки №1
$qre1 = mysql_query ("select reis from st where nst='1'");
$fre1 = mysql_fetch_array($qre1);
$re1 = $fre1['reis'];
$qnrch1 = mysql_query ("select nrch from tables where reis='$re1'");
$fnrch1 = mysql_fetch_array($qnrch1);
$nrch1 = $fnrch1['nrch'];
$qkrch1 = mysql_query ("select krch from tables where reis='$re1'");
$fkrch1 = mysql_fetch_array($qkrch1);
$krch1 = $fkrch1['krch']; 
$qvvch1 = mysql_query ("select vvch from tables where reis='$re1'");
$fvvch1 = mysql_fetch_array($qvvch1);
$vvch1 = $fvvch1['vvch'];
$qnrm1 = mysql_query ("select nrm from tables where reis='$re1'");
$fnrm1 = mysql_fetch_array($qnrm1);
$nrm1 = $fnrm1['nrm'];
$qkrm1 = mysql_query ("select krm from tables where reis='$re1'");
$fkrm1 = mysql_fetch_array($qkrm1);
$krm1 = $fkrm1['krm']; 
$qvvm1 = mysql_query ("select vvm from tables where reis='$re1'");
$fvvm1 = mysql_fetch_array($qvvm1);
$vvm1 = $fvvm1['vvm'];

?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset1() {
	document.getElementById("reis1").selectedIndex = 
	document.getElementById("reis1").length = 47;
	document.getElementById("nrch1").selectedIndex = 
	document.getElementById("nrch1").value = '';
	document.getElementById("krch1").selectedIndex = 
	document.getElementById("krch1").value = '';
	document.getElementById("vvch1").selectedIndex = 
	document.getElementById("vvch1").value = '';
	document.getElementById("nrm1").selectedIndex = 
	document.getElementById("nrm1").value = '';
	document.getElementById("krm1").selectedIndex = 
	document.getElementById("krm1").value = '';
	document.getElementById("vvm1").selectedIndex = 
	document.getElementById("vvm1").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №1</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis1' id='reis1'>";
echo "<option VALUE='$re1'>$re1</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset1()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch1" type="text" name="nrch1" class="POST" value="<?php echo "$nrch1" ?>"/>ч.<input style="width: 30px" id="nrm1" type="text" name="nrm1" class="POST" value="<?php echo "$nrm1" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch1" type="text" name="krch1" class="POST" value="<?php echo "$krch1" ?>"/>ч.<input style="width: 30px" id="krm1" type="text" name="krm1" class="POST" value="<?php echo "$krm1" ?>"/>мин.<br>
Время .выл.: <input style="width: 30px" id="vvch1" type="text" name="vvch1" class="POST" value="<?php echo "$vvch1" ?>"/>ч.<input style="width: 30px" id="vvm1" type="text" name="vvm1" class="POST" value="<?php echo "$vvm1" ?>"/>мин.<br>
</center></TD>

</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="width:200px; height:50px;">
</FORM>

</body> 
</html>

