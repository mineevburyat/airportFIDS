<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №5
$qre5 = mysql_query ("select reis from st where nst='5'");
$fre5 = mysql_fetch_array($qre5);
$re5 = $fre5['reis'];
$qnrch5 = mysql_query ("select nrch from tables where reis='$re5'");
$fnrch5 = mysql_fetch_array($qnrch5);
$nrch5 = $fnrch5['nrch'];
$qkrch5 = mysql_query ("select krch from tables where reis='$re5'");
$fkrch5 = mysql_fetch_array($qkrch5);
$krch5 = $fkrch5['krch']; 
$qvvch5 = mysql_query ("select vvch from tables where reis='$re5'");
$fvvch5 = mysql_fetch_array($qvvch5);
$vvch5 = $fvvch5['vvch'];
$qnrm5 = mysql_query ("select nrm from tables where reis='$re5'");
$fnrm5 = mysql_fetch_array($qnrm5);
$nrm5 = $fnrm5['nrm'];
$qkrm5 = mysql_query ("select krm from tables where reis='$re5'");
$fkrm5 = mysql_fetch_array($qkrm5);
$krm5 = $fkrm5['krm']; 
$qvvm5 = mysql_query ("select vvm from tables where reis='$re5'");
$fvvm5 = mysql_fetch_array($qvvm5);
$vvm5 = $fvvm5['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset5() {
	document.getElementById("reis5").selectedIndex = 
	document.getElementById("reis5").length = 47;
	document.getElementById("nrch5").selectedIndex = 
	document.getElementById("nrch5").value = '';
	document.getElementById("krch5").selectedIndex = 
	document.getElementById("krch5").value = '';
	document.getElementById("vvch5").selectedIndex = 
	document.getElementById("vvch5").value = '';
	document.getElementById("nrm5").selectedIndex = 
	document.getElementById("nrm5").value = '';
	document.getElementById("krm5").selectedIndex = 
	document.getElementById("krm5").value = '';
	document.getElementById("vvm5").selectedIndex = 
	document.getElementById("vvm5").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №5</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis5' id='reis5'>";
echo "<option VALUE='$re5'>$re5</option>";
$r=mysql_query("select reis from tables"); 
for($i=0; $i<mysql_num_rows($r); $i++)  
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset5()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch5" type="text" name="nrch5" class="POST" value="<?php echo "$nrch5" ?>"/>ч.<input style="width: 30px" id="nrm5" type="text" name="nrm5" class="POST" value="<?php echo "$nrm5" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch5" type="text" name="krch5" class="POST" value="<?php echo "$krch5" ?>"/>ч.<input style="width: 30px" id="krm5" type="text" name="krm5" class="POST" value="<?php echo "$krm5" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch5" type="text" name="vvch5" class="POST" value="<?php echo "$vvch5" ?>"/>ч.<input style="width: 30px" id="vvm5" type="text" name="vvm5" class="POST" value="<?php echo "$vvm5" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="width:200px; height:50px;">
</FORM>

</body> 
</html>

