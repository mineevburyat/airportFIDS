<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №21
$qre21 = mysql_query ("select reis from st where nst='21'");
$fre21 = mysql_fetch_array($qre21);
$re21 = $fre21['reis'];
$qnrch21 = mysql_query ("select nrch from tables where reis='$re21'");
$fnrch21 = mysql_fetch_array($qnrch21);
$nrch21 = $fnrch21['nrch'];
$qkrch21 = mysql_query ("select krch from tables where reis='$re21'");
$fkrch21 = mysql_fetch_array($qkrch21);
$krch21 = $fkrch21['krch']; 
$qvvch21 = mysql_query ("select vvch from tables where reis='$re21'");
$fvvch21 = mysql_fetch_array($qvvch21);
$vvch21 = $fvvch21['vvch'];
$qnrm21 = mysql_query ("select nrm from tables where reis='$re21'");
$fnrm21 = mysql_fetch_array($qnrm21);
$nrm21 = $fnrm21['nrm'];
$qkrm21 = mysql_query ("select krm from tables where reis='$re21'");
$fkrm21 = mysql_fetch_array($qkrm21);
$krm21 = $fkrm21['krm']; 
$qvvm21 = mysql_query ("select vvm from tables where reis='$re21'");
$fvvm21 = mysql_fetch_array($qvvm21);
$vvm21 = $fvvm21['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset21() {
	document.getElementById("reis21").selectedIndex = 
	document.getElementById("reis21").length = 47;
	document.getElementById("nrch21").selectedIndex = 
	document.getElementById("nrch21").value = '';
	document.getElementById("krch21").selectedIndex = 
	document.getElementById("krch21").value = '';
	document.getElementById("vvch21").selectedIndex = 
	document.getElementById("vvch21").value = '';
	document.getElementById("nrm21").selectedIndex = 
	document.getElementById("nrm21").value = '';
	document.getElementById("krm21").selectedIndex = 
	document.getElementById("krm21").value = '';
	document.getElementById("vvm21").selectedIndex = 
	document.getElementById("vvm21").value = '';
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
echo "Рейс №<SELECT NAME='reis21' id='reis21'>";
echo "<option VALUE='$re21'>$re21</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset21()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch21" type="text" name="nrch21" class="POST" value="<?php echo "$nrch21" ?>"/>ч.<input style="width: 30px" id="nrm21" type="text" name="nrm21" class="POST" value="<?php echo "$nrm21" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch21" type="text" name="krch21" class="POST" value="<?php echo "$krch21" ?>"/>ч.<input style="width: 30px" id="krm21" type="text" name="krm21" class="POST" value="<?php echo "$krm21" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch21" type="text" name="vvch21" class="POST" value="<?php echo "$vvch21" ?>"/>ч.<input style="width: 30px" id="vvm21" type="text" name="vvm21" class="POST" value="<?php echo "$vvm21" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style=" width:200px; height:50px;">
</FORM>

</body> 
</html>

