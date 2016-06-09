<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");

$nst='5';

// Номер рейса
$qre = mysql_query ("select reis from stand where nst='$nst'");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Пункт назначения
$qp = mysql_query ("select naznach from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$punkt = $fp['naznach'];
// Класс
$ql = mysql_query ("select class from stand where nst='$nst'");
$fl = mysql_fetch_array($ql);
$class = $fl['class'];
// Начало регистрации
$qp = mysql_query ("select nach_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$nreg = $fp['nach_reg'];
// Окончание регистрации
$qp = mysql_query ("select okon_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$okreg = $fp['okon_reg'];

?>

<html>
<head>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  <style>
   table { 
    border: 1px double #999999; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   }
   
   th { 
    text-align: left; /* Выравнивание по левому краю */
    background: #2e8ce3; /* Цвет фона ячеек */
    padding: 1px; /* Поля вокруг содержимого ячеек */
    border: 1px solid #999999; /* Граница вокруг ячеек */
	color: #eee;
	}
   td { 
    padding: 1px; /* Поля вокруг содержимого ячеек */
    border: 1px solid #999999; /* Граница вокруг ячеек */
   }
.button {
	color: #2e8ce3;
	border: solid 1px #ccc;
	background: #eee;
}
.button:hover {
	color: black;
	background: #f47c20;
}
.button:active {
	color: #fcd3a5;
}

  </style>
<script>
function Res1() {
	document.getElementById("reis").selectedIndex = 
	document.getElementById("reis").length = 47;
	document.getElementById("nreg").selectedIndex = 
	document.getElementById("nreg").value = '';
	document.getElementById("okreg").selectedIndex = 
	document.getElementById("okreg").value = '';
}
</script>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/jquery.maskedinput-1.2.2.min.js" ></script>
<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$.mask.definitions['H']='[012]';
$.mask.definitions['M']='[012345]';
$('#nreg').mask('H9:M9');
$('#okreg').mask('H9:M9');
});
</script>
 </head>
<body>

<center><font size=5 color="#555"><b>Стойка регистрации №<?php echo $nst;?>:</b></font></center><br>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center>
<TABLE border="1" id="demoTable" >
<tr>
<th><center><b>Рейс</b></center></th>
<th WIDTH=120><center><b>Направление</b></center></th>
<th><center><b>Начало<br>регистрации</b></center></th>
<th><center><b>Окончание<br>регистрациии</b></center></th>
<th><center><b>Класс</b></center></th>
<th width='25px'></th>
</tr>
<tr>
<td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis' id='reis' >";
echo "<option VALUE='$reis' >$reis</option>";
$r=mysql_query("select reis from reis");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option  VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td>
<center><?php echo "$punkt" ?></center>
</td>
<td>
<input style="width: 100px" id="nreg" type="time" name="nreg" class="POST" value="<?php echo "$nreg" ?>"/>
</td>
<td>
<input style="width: 100px" id="okreg" type="time" name="okreg" class="POST" value="<?php echo "$okreg" ?>"/>
</td>
<td>
<SELECT NAME="class" id="class">
        <option  selected VALUE="<?php echo "$class" ?>"><?php echo "$class" ?></option>
        <OPTION VALUE="Economy">Economy</option>
        <OPTION VALUE="Business">Business</option>
		<OPTION VALUE="Discount ">Discount </option>
</SELECT>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../../img/work/del.gif" OnClick="Res1();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td>
</tr>
</table>
<br>
<INPUT class="button" TYPE="submit" name="confirm" VALUE="Сохранить" style="width:150px; height:30px;border-radius: 4px;">
</center>
<br>
<br>
<center><font size=2 color="#888888">&copy; Copyright</font></center>
</FORM>

</body> 
</html>

