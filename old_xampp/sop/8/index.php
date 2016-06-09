<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №8
$qre8 = mysql_query ("select reis from st where nst='8'");
$fre8 = mysql_fetch_array($qre8);
$re8 = $fre8['reis'];
$qnrch8 = mysql_query ("select nrch from tables where reis='$re8'");
$fnrch8 = mysql_fetch_array($qnrch8);
$nrch8 = $fnrch8['nrch'];
$qkrch8 = mysql_query ("select krch from tables where reis='$re8'");
$fkrch8 = mysql_fetch_array($qkrch8);
$krch8 = $fkrch8['krch']; 
$qvvch8 = mysql_query ("select vvch from tables where reis='$re8'");
$fvvch8 = mysql_fetch_array($qvvch8);
$vvch8 = $fvvch8['vvch'];
$qnrm8 = mysql_query ("select nrm from tables where reis='$re8'");
$fnrm8 = mysql_fetch_array($qnrm8);
$nrm8 = $fnrm8['nrm'];
$qkrm8 = mysql_query ("select krm from tables where reis='$re8'");
$fkrm8 = mysql_fetch_array($qkrm8);
$krm8 = $fkrm8['krm']; 
$qvvm8 = mysql_query ("select vvm from tables where reis='$re8'");
$fvvm8 = mysql_fetch_array($qvvm8);
$vvm8 = $fvvm8['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset8() {
	document.getElementById("reis8").selectedIndex = 
	document.getElementById("reis8").length = 47;
	document.getElementById("nrch8").selectedIndex = 
	document.getElementById("nrch8").value = '';
	document.getElementById("krch8").selectedIndex = 
	document.getElementById("krch8").value = '';
	document.getElementById("vvch8").selectedIndex = 
	document.getElementById("vvch8").value = '';
	document.getElementById("nrm8").selectedIndex = 
	document.getElementById("nrm8").value = '';
	document.getElementById("krm8").selectedIndex = 
	document.getElementById("krm8").value = '';
	document.getElementById("vvm8").selectedIndex = 
	document.getElementById("vvm8").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №8</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis8' id='reis8'>";
echo "<option VALUE='$re8'>$re8</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset8()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch8" type="text" name="nrch8" class="POST" value="<?php echo "$nrch8" ?>"/>ч.<input style="width: 30px" id="nrm8" type="text" name="nrm8" class="POST" value="<?php echo "$nrm8" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch8" type="text" name="krch8" class="POST" value="<?php echo "$krch8" ?>"/>ч.<input style="width: 30px" id="krm8" type="text" name="krm8" class="POST" value="<?php echo "$krm8" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch8" type="text" name="vvch8" class="POST" value="<?php echo "$vvch8" ?>"/>ч.<input style="width: 30px" id="vvm8" type="text" name="vvm8" class="POST" value="<?php echo "$vvm8" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style=" width:200px; height:50px;">
</FORM>

</body> 
</html>

