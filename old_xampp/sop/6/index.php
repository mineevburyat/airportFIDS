<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// инфа для стойки №6
$qre6 = mysql_query ("select reis from st where nst='6'");
$fre6 = mysql_fetch_array($qre6);
$re6 = $fre6['reis'];
$qnrch6 = mysql_query ("select nrch from tables where reis='$re6'");
$fnrch6 = mysql_fetch_array($qnrch6);
$nrch6 = $fnrch6['nrch'];
$qkrch6 = mysql_query ("select krch from tables where reis='$re6'");
$fkrch6 = mysql_fetch_array($qkrch6);
$krch6 = $fkrch6['krch']; 
$qvvch6 = mysql_query ("select vvch from tables where reis='$re6'");
$fvvch6 = mysql_fetch_array($qvvch6);
$vvch6 = $fvvch6['vvch'];
$qnrm6 = mysql_query ("select nrm from tables where reis='$re6'");
$fnrm6 = mysql_fetch_array($qnrm6);
$nrm6 = $fnrm6['nrm'];
$qkrm6 = mysql_query ("select krm from tables where reis='$re6'");
$fkrm6 = mysql_fetch_array($qkrm6);
$krm6 = $fkrm6['krm']; 
$qvvm6 = mysql_query ("select vvm from tables where reis='$re6'");
$fvvm6 = mysql_fetch_array($qvvm6);
$vvm6 = $fvvm6['vvm'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset6() {
	document.getElementById("reis6").selectedIndex = 
	document.getElementById("reis6").length = 47;
	document.getElementById("nrch6").selectedIndex = 
	document.getElementById("nrch6").value = '';
	document.getElementById("krch6").selectedIndex = 
	document.getElementById("krch6").value = '';
	document.getElementById("vvch6").selectedIndex = 
	document.getElementById("vvch6").value = '';
	document.getElementById("nrm6").selectedIndex = 
	document.getElementById("nrm6").value = '';
	document.getElementById("krm6").selectedIndex = 
	document.getElementById("krm6").value = '';
	document.getElementById("vvm6").selectedIndex = 
	document.getElementById("vvm6").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойка регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №6</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?php
echo "Рейс №<SELECT NAME='reis6' id='reis6'>";
echo "<option VALUE='$re6'>$re6</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset6()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch6" type="text" name="nrch6" class="POST" value="<?php echo "$nrch6" ?>"/>ч.<input style="width: 30px" id="nrm6" type="text" name="nrm6" class="POST" value="<?php echo "$nrm6" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch6" type="text" name="krch6" class="POST" value="<?php echo "$krch6" ?>"/>ч.<input style="width: 30px" id="krm6" type="text" name="krm6" class="POST" value="<?php echo "$krm6" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch6" type="text" name="vvch6" class="POST" value="<?php echo "$vvch6" ?>"/>ч.<input style="width: 30px" id="vvm6" type="text" name="vvm6" class="POST" value="<?php echo "$vvm6" ?>"/>мин.<br>
</center></TD>
</TABLE>
<br>
<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style=" width:200px; height:50px;">
</FORM>

</body> 
</html>

