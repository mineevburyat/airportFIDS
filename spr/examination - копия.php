<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");

// Запрос данных для строки №1
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=1");
$fre = mysql_fetch_array($qre);
$reis1 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis1'");
$fp = mysql_fetch_array($qp);
$punkt1 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis1'");
$fvv = mysql_fetch_array($qvv);
$npos1 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis1'");
$fv = mysql_fetch_array($qv);
$okpos1 = $fv['okon_pos'];

// Запрос данных для строки №2
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=2");
$fre = mysql_fetch_array($qre);
$reis2 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis2'");
$fp = mysql_fetch_array($qp);
$punkt2 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis2'");
$fvv = mysql_fetch_array($qvv);
$npos2 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis2'");
$fv = mysql_fetch_array($qv);
$okpos2 = $fv['okon_pos'];

// Запрос данных для строки №3
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=3");
$fre = mysql_fetch_array($qre);
$reis3 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis3'");
$fp = mysql_fetch_array($qp);
$punkt3 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis3'");
$fvv = mysql_fetch_array($qvv);
$npos3 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis3'");
$fv = mysql_fetch_array($qv);
$okpos3 = $fv['okon_pos'];

// Запрос данных для строки №4
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=4");
$fre = mysql_fetch_array($qre);
$reis4 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis4'");
$fp = mysql_fetch_array($qp);
$punkt4 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis4'");
$fvv = mysql_fetch_array($qvv);
$npos4 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis4'");
$fv = mysql_fetch_array($qv);
$okpos4 = $fv['okon_pos'];

// Запрос данных для строки №5
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=5");
$fre = mysql_fetch_array($qre);
$reis5 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis5'");
$fp = mysql_fetch_array($qp);
$punkt5 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis5'");
$fvv = mysql_fetch_array($qvv);
$npos5 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis5'");
$fv = mysql_fetch_array($qv);
$okpos5 = $fv['okon_pos'];

// Запрос данных для строки №6
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=6");
$fre = mysql_fetch_array($qre);
$reis6 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis6'");
$fp = mysql_fetch_array($qp);
$punkt6 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis6'");
$fvv = mysql_fetch_array($qvv);
$npos6 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis6'");
$fv = mysql_fetch_array($qv);
$okpos6 = $fv['okon_pos'];

// Запрос данных для строки №7
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=7");
$fre = mysql_fetch_array($qre);
$reis7 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis7'");
$fp = mysql_fetch_array($qp);
$punkt7 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis7'");
$fvv = mysql_fetch_array($qvv);
$npos7 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis7'");
$fv = mysql_fetch_array($qv);
$okpos7 = $fv['okon_pos'];

// Запрос данных для строки №8
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=8");
$fre = mysql_fetch_array($qre);
$reis8 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis8'");
$fp = mysql_fetch_array($qp);
$punkt8 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis8'");
$fvv = mysql_fetch_array($qvv);
$npos8 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis8'");
$fv = mysql_fetch_array($qv);
$okpos8 = $fv['okon_pos'];

// Запрос данных для строки №9
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=9");
$fre = mysql_fetch_array($qre);
$reis9 = $fre['reis'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis9'");
$fp = mysql_fetch_array($qp);
$punkt9 = $fp['naznach'];
// Начало посадки 
$qvv = mysql_query ("select nach_pos from reis where reis='$reis9'");
$fvv = mysql_fetch_array($qvv);
$npos9 = $fvv['nach_pos'];
// Окончание посадки 
$qv = mysql_query ("select okon_pos from reis where reis='$reis9'");
$fv = mysql_fetch_array($qv);
$okpos9 = $fv['okon_pos'];
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
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.maskedinput-1.2.2.min.js" ></script>
<script language="JavaScript" type="text/javascript">
jQuery(function($) {
$.mask.definitions['H']='[012]';
$.mask.definitions['M']='[012345]';
$('#npos1').mask('H9:M9');
$('#okpos1').mask('H9:M9');
$('#npos2').mask('H9:M9');
$('#okpos2').mask('H9:M9');
$('#npos3').mask('H9:M9');
$('#okpos3').mask('H9:M9');
$('#npos4').mask('H9:M9');
$('#okpos4').mask('H9:M9');
$('#npos5').mask('H9:M9');
$('#okpos5').mask('H9:M9');
$('#npos6').mask('H9:M9');
$('#okpos6').mask('H9:M9');
$('#npos7').mask('H9:M9');
$('#okpos7').mask('H9:M9');
$('#npos8').mask('H9:M9');
$('#okpos8').mask('H9:M9');
$('#npos9').mask('H9:M9');
$('#okpos9').mask('H9:M9');
});
</script>
<script>
function Res1() {
	document.getElementById("reis1").selectedIndex = 
	document.getElementById("reis1").length = 47;
	document.getElementById("npos1").selectedIndex = 
	document.getElementById("npos1").value = '';
	document.getElementById("okpos1").selectedIndex = 
	document.getElementById("okpos1").value = '';
}
function Res2() {
	document.getElementById("reis2").selectedIndex = 
	document.getElementById("reis2").length = 45;
	document.getElementById("npos2").selectedIndex = 
	document.getElementById("npos2").value = '';
	document.getElementById("okpos2").selectedIndex = 
	document.getElementById("okpos2").value = '';
}
function Res3() {
	document.getElementById("reis3").selectedIndex = 
	document.getElementById("reis3").length = 45;
	document.getElementById("npos3").selectedIndex = 
	document.getElementById("npos3").value = '';
	document.getElementById("okpos3").selectedIndex = 
	document.getElementById("okpos3").value = '';
}
function Res4() {
	document.getElementById("reis4").selectedIndex = 
	document.getElementById("reis4").length = 45;
	document.getElementById("npos4").selectedIndex = 
	document.getElementById("npos4").value = '';
	document.getElementById("okpos4").selectedIndex = 
	document.getElementById("okpos4").value = '';
}
function Res5() {
	document.getElementById("reis5").selectedIndex = 
	document.getElementById("reis5").length = 45;
	document.getElementById("npos5").selectedIndex = 
	document.getElementById("npos5").value = '';
	document.getElementById("okpos5").selectedIndex = 
	document.getElementById("okpos5").value = '';
}
function Res6() {
	document.getElementById("reis6").selectedIndex = 
	document.getElementById("reis6").length = 45;
	document.getElementById("npos6").selectedIndex = 
	document.getElementById("npos6").value = '';
	document.getElementById("okpos6").selectedIndex = 
	document.getElementById("okpos6").value = '';
}
function Res7() {
	document.getElementById("reis7").selectedIndex = 
	document.getElementById("reis7").length = 45;
	document.getElementById("npos7").selectedIndex = 
	document.getElementById("npos7").value = '';
	document.getElementById("okpos7").selectedIndex = 
	document.getElementById("okpos7").value = '';
}
function Res8() {
	document.getElementById("reis8").selectedIndex = 
	document.getElementById("reis8").length = 45;
	document.getElementById("npos8").selectedIndex = 
	document.getElementById("npos8").value = '';
	document.getElementById("okpos8").selectedIndex = 
	document.getElementById("okpos8").value = '';
}
function Res9() {
	document.getElementById("reis9").selectedIndex = 
	document.getElementById("reis9").length = 45;
	document.getElementById("npos9").selectedIndex = 
	document.getElementById("npos9").value = '';
	document.getElementById("okpos9").selectedIndex = 
	document.getElementById("okpos9").value = '';
}

</script>
 </head>
<body>
<br>
<center><font size=5 color="#555"><b>Зона досмотра</b></font></center><br>

<center>
<TABLE border="1" id="demoTable" >
<tr>
<th><center><b>Рейс</b></center></th>
<th WIDTH=120><center><b>Направление</b></center></th>
<th><center><b>Начало посадки</b></center></th>
<th><center><b>Окончание посадки</b></center></th>
<th width='25px'></th>
</tr>
<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis1' id='reis1' >";
echo "<option VALUE='$reis1' >$reis1</option>";
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
<center><?php echo "$punkt1" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos1" type="time2" name="npos1" class="POST" value="<?php echo "$npos1" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos1" type="time2" name="okpos1" class="POST" value="<?php echo "$okpos1" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res1();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis2' id='reis2' >";
echo "<option VALUE='$reis2' >$reis2</option>";
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
<center><?php echo "$punkt2" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos2" type="time2" name="npos2" class="POST" value="<?php echo "$npos2" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos2" type="time2" name="okpos2" class="POST" value="<?php echo "$okpos2" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res2();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis3' id='reis3' >";
echo "<option VALUE='$reis3' >$reis3</option>";
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
<center><?php echo "$punkt3" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos3" type="time2" name="npos3" class="POST" value="<?php echo "$npos3" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos3" type="time2" name="okpos3" class="POST" value="<?php echo "$okpos3" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res3();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis4' id='reis4' >";
echo "<option VALUE='$reis4' >$reis4</option>";
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
<center><?php echo "$punkt4" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos4" type="time2" name="npos4" class="POST" value="<?php echo "$npos4" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos4" type="time2" name="okpos4" class="POST" value="<?php echo "$okpos4" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res4();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis5' id='reis5' >";
echo "<option VALUE='$reis5' >$reis5</option>";
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
<center><?php echo "$punkt5" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos5" type="time2" name="npos5" class="POST" value="<?php echo "$npos5" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos5" type="time2" name="okpos5" class="POST" value="<?php echo "$okpos5" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res5();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis6' id='reis6' >";
echo "<option VALUE='$reis6' >$reis6</option>";
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
<center><?php echo "$punkt6" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos6" type="time2" name="npos6" class="POST" value="<?php echo "$npos6" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos6" type="time2" name="okpos6" class="POST" value="<?php echo "$okpos6" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res6();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis7' id='reis7' >";
echo "<option VALUE='$reis7' >$reis7</option>";
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
<center><?php echo "$punkt7" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos7" type="time2" name="npos7" class="POST" value="<?php echo "$npos7" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos7" type="time2" name="okpos7" class="POST" value="<?php echo "$okpos7" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res7();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis8' id='reis8' >";
echo "<option VALUE='$reis8' >$reis8</option>";
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
<center><?php echo "$punkt8" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos8" type="time2" name="npos8" class="POST" value="<?php echo "$npos8" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos8" type="time2" name="okpos8" class="POST" value="<?php echo "$okpos8" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res8();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>

<tr><td style="background: #eee";>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis9' id='reis9' >";
echo "<option VALUE='$reis9' >$reis9</option>";
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
<center><?php echo "$punkt9" ?></center>
</td>
<td>
<center><input style="width: 75px" id="npos9" type="time2" name="npos9" class="POST" value="<?php echo "$npos9" ?>"/></center>
</td>
<td>
<center><input style="width: 75px" id="okpos9" type="time2" name="okpos9" class="POST" value="<?php echo "$okpos9" ?>"/></center>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res9();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>
</table>
<br><br>
<INPUT class="button" TYPE="submit" name="confirm" VALUE="Сохранить" style=" width:150px; height:30px;border-radius: 4px;">
</center>
</FORM>

</body> 
</html>

