<?
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Номер рейса (строка №1)
$qre = mysql_query ("select reis from sc2 where st=1");
$fre = mysql_fetch_array($qre);
$re1 = $fre[reis];
// Компания (строка №1)
$qc = mysql_query ("select company from tables where reis='$re1'");
$fc = mysql_fetch_array($qc);
$c1 = $fc[company];
// Пункт назначения (строка №1)
$qp = mysql_query ("select zd_p from tables where reis='$re1'");
$fp = mysql_fetch_array($qp);
$p1 = $fp[zd_p];
// Время вылета (начало) (строка №1)
$qvv = mysql_query ("select vp1 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp11 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp21 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp31 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp41 = $fvv[vp4];
// Номер рейса (строка №2)
$qre = mysql_query ("select reis from sc2 where st=2");
$fre = mysql_fetch_array($qre);
$re2 = $fre[reis];
// Компания (строка №2)
$qc = mysql_query ("select company from tables where reis='$re2'");
$fc = mysql_fetch_array($qc);
$c2 = $fc[company];
// Пункт назначения (строка №2)
$qp = mysql_query ("select zd_p from tables where reis='$re2'");
$fp = mysql_fetch_array($qp);
$p2 = $fp[zd_p];
// Время вылета (начало) (строка №2)
$qvv = mysql_query ("select vp1 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp12 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp22 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp32 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp42 = $fvv[vp4];
// Номер рейса (строка №3)
$qre = mysql_query ("select reis from sc2 where st=3");
$fre = mysql_fetch_array($qre);
$re3 = $fre[reis];
// Компания (строка №3)
$qc = mysql_query ("select company from tables where reis='$re3'");
$fc = mysql_fetch_array($qc);
$c3 = $fc[company];
// Пункт назначения (строка №3)
$qp = mysql_query ("select zd_p from tables where reis='$re3'"); 
$fp = mysql_fetch_array($qp);
$p3 = $fp[zd_p];
// Время вылета (начало) (строка №3)
$qvv = mysql_query ("select vp1 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp13 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp23 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp33 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp43 = $fvv[vp4];
// Номер рейса (строка №4)
$qre = mysql_query ("select reis from sc2 where st=4");
$fre = mysql_fetch_array($qre);
$re4 = $fre[reis];
// Компания (строка №4)
$qc = mysql_query ("select company from tables where reis='$re4'");
$fc = mysql_fetch_array($qc);
$c4 = $fc[company];
// Пункт назначения (строка №4)
$qp = mysql_query ("select zd_p from tables where reis='$re4'");
$fp = mysql_fetch_array($qp);
$p4 = $fp[zd_p];
// Время вылета (начало) (строка №4)
$qvv = mysql_query ("select vp1 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp14 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp24 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp34 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp44 = $fvv[vp4];
// Номер рейса (строка №5)
$qre = mysql_query ("select reis from sc2 where st=5");
$fre = mysql_fetch_array($qre);
$re5 = $fre[reis];
// Компания (строка №5)
$qc = mysql_query ("select company from tables where reis='$re5'");
$fc = mysql_fetch_array($qc);
$c5 = $fc[company];
// Пункт назначения (строка №5)
$qp = mysql_query ("select zd_p from tables where reis='$re5'");
$fp = mysql_fetch_array($qp);
$p5 = $fp[zd_p];
// Время вылета (начало) (строка №5)
$qvv = mysql_query ("select vp1 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp15 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp25 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp35 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp45 = $fvv[vp4];
// Номер рейса (строка №6)
$qre = mysql_query ("select reis from sc2 where st=6");
$fre = mysql_fetch_array($qre);
$re6 = $fre[reis];
// Компания (строка №6)
$qc = mysql_query ("select company from tables where reis='$re6'");
$fc = mysql_fetch_array($qc);
$c6 = $fc[company];
// Пункт назначения (строка №6)
$qp = mysql_query ("select zd_p from tables where reis='$re6'");
$fp = mysql_fetch_array($qp);
$p6 = $fp[zd_p];
// Время вылета (начало) (строка №6)
$qvv = mysql_query ("select vp1 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp16 = $fvv[vp1];
$qvv = mysql_query ("select vp2 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp26 = $fvv[vp2];

$qvv = mysql_query ("select vp3 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp36 = $fvv[vp3];
$qvv = mysql_query ("select vp4 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp46 = $fvv[vp4];

$e1=':';
$e2=':';
$e3=':';
$e4=':';
$e5=':';
$e6=':';

if ($re1==0) {
$re1='';
$e1='';
}
if ($re2==0) {
$re2='';
$e2='';
}
if ($re3==0) {
$re3='';
$e3='';
}
if ($re4==0) {
$re4='';
$e4='';
}
if ($re5==0) {
$re5='';
$e5='';
}
if ($re6==0) {
$re6='';
$e6='';
}

if ($re1==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn11='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn21='</b></marquee>';
}
if ($re2==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn12='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn22='</b></marquee>';
} 
if ($re3==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn13='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn23='</b></marquee>';
} 
if ($re4==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn14='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn24='</b></marquee>';
} 
if ($re5==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn15='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn25='</b></marquee>';
} 
if ($re6==(744 or 728 or 501 or 35 or 36 or 171 or 531 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn16='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn26='</b></marquee>';
} 



?>

<html>
<head>
<style>
.reis { 
	width: 524px; 
	height: 140px;

	margin-left:-0.8%;
	background:#d4d4d4;
   }
</style>
</head>
<body> 
<br>
<br>
<center>
<div class="reis">
<br>
<br>
<FORM ACTION="zd2_s.php" method="POST">
<SELECT NAME="st">
        <option disabled selected>Выберите № строки</option>
        <OPTION VALUE="1">1</option>
        <OPTION VALUE="2">2</option>
		<OPTION VALUE="3">3</option>
		<OPTION VALUE="4">4</option>
        <OPTION VALUE="5">5</option>
		<OPTION VALUE="6">6</option>
</SELECT> 
<SELECT NAME="reis">
        <option disabled selected>Выберите № рейса</option>
       	<OPTION VALUE="714">714</option>
		<OPTION VALUE="713">713</option>
		<OPTION VALUE="727">727</option>
		<OPTION VALUE="728">728</option>
		<OPTION VALUE="744">744</option>
       	<OPTION VALUE="414">414</option>
		<OPTION VALUE="413">413</option>
		<OPTION VALUE="116">116</option>
		<OPTION VALUE="115">115</option>
		<OPTION VALUE="916">916</option>
		<OPTION VALUE="915">915</option>
		<OPTION VALUE="533">533</option>
		<OPTION VALUE="530">530</option>
		<OPTION VALUE="529">529</option>
		<OPTION VALUE="531">531</option>
		<OPTION VALUE="510">510</option>
		<OPTION VALUE="511">511</option>
		<OPTION VALUE="512">512</option>
       	<OPTION VALUE="509">509</option>
		<OPTION VALUE="501">501</option>
		<OPTION VALUE="178">178</option>
		<OPTION VALUE="176">176</option>
		<OPTION VALUE="175">175</option>
		<OPTION VALUE="172">172</option>
		<OPTION VALUE="171">171</option>
		<OPTION VALUE="35">35</option>
		<OPTION VALUE="36">36</option>
		<OPTION VALUE="9728">9728</option>
		<OPTION VALUE="9153">9153</option>
		<OPTION VALUE="9154">9154</option>
		<OPTION VALUE="9155">9155</option>
		<OPTION VALUE="9156">9156</option>
		<OPTION VALUE="9133">9133</option>
		<OPTION VALUE="9757">9757</option>
		<OPTION VALUE="9758">9758</option>
		<OPTION VALUE="4339">4339</option>
		<OPTION VALUE="4340">4340</option>
		<OPTION VALUE="2526">2526</option>
		<OPTION VALUE="2525">2525</option>
		<OPTION VALUE="9154">9154</option>
		<OPTION VALUE="9156">9156</option>
		<OPTION VALUE="7R743">7R743</option>
		<OPTION VALUE="0">пусто</option>
</SELECT>
<br>
<br>
Начало посадки:    
ч.<INPUT TYPE="text" NAME="vp1" VALUE="" onclick="select();" size="5" ></input>
мин.<INPUT TYPE="text" NAME="vp2" VALUE="" onclick="select();" size="5" ></input>
<br>
<br>
Окончание посадки:    
ч.<INPUT TYPE="text" NAME="vp3" VALUE="" onclick="select();" size="5" ></input>
мин.<INPUT TYPE="text" NAME="vp4" VALUE="" onclick="select();" size="5" ></input>
<br>
<br>
<hr style="width:350px;">
<INPUT TYPE="submit" name="confirm" VALUE="OK">
</FORM>
</div>
<br>
<center><font color=red><b>После внесения данных в расписание, изменения происходят в течении минуты!</b></font></center>
<br>
<input type="submit" value="Обновить таблицу" onclick="javascript:location.reload(true)" ></input><font color=white>5555555</font><input type="submit" value="Вернуться на прошлую страницу" onclick=" location.href='http://172.17.10.120/admin/'" ></input>
<br>
<br>

<TABLE border=1>
	<TR>
	  <TD><center><b>№<br>СТРОКИ</b></center></TD>
      <TD WIDTH=80><center><b>№<br>РЕЙСА</b></center></TD>
      <TD WIDTH=200><center><b>ПУНКТ<br>НАЗНАЧЕНИЯ</b></center></TD>
      <TD WIDTH=130><center><b>НАЧАЛО<br>ПОСАДКИ</b></center></TD>
      <TD WIDTH=130><center><b>ОКОНЧАНИЕ<br>ПОСАДКИ</b></center></TD>
    </TR>
	<? if ($re1==0) { } else {?>
     <TR>
	  <TD><center>1.</center></TD>
      <TD><center><? echo "$c1".' '."$re1" ?></center></TD>
      <TD><center><? echo "$pn11"."$p1"."$pn21" ?></center></TD>
      <TD><center><? echo "$tvp11"."$e1"."$tvp21" ?></center></TD>
	  <TD><center><? echo "$tvp31"."$e1"."$tvp41" ?></center></TD>
    </TR>
	<? }?>
	<? if ($re2==0) { } else {?>
	 <TR>
	  <TD><center>2.</center></TD>
      <TD><center><? echo "$c2".' '."$re2" ?></center></TD>
      <TD><center><? echo "$pn12"."$p2"."$pn22" ?></center></TD>
      <TD><center><? echo "$tvp12"."$e2"."$tvp22" ?></center></TD>
	  <TD><center><? echo "$tvp32"."$e2"."$tvp42" ?></center></TD>
    </TR>
	<? }?>
	<? if ($re3==0) { } else {?>
	 <TR>
	  <TD><center>3.</center></TD>
      <TD><center><? echo "$c3".' '."$re3" ?></center></TD>
      <TD><center><? echo "$pn13"."$p3"."$pn23" ?></center></TD>
      <TD><center><? echo "$tvp13"."$e3"."$tvp23" ?></center></TD>
	  <TD><center><? echo "$tvp33"."$e3"."$tvp43" ?></center></TD>
    </TR>
	<? }?>
	<? if ($re4==0) { } else {?>
	 <TR>
	  <TD><center>4.</center></TD>
      <TD><center><? echo "$c4".' '."$re4" ?></center></TD>
      <TD><center><? echo "$pn14"."$p4"."$pn24" ?></center></TD>
      <TD><center><? echo "$tvp14"."$e4"."$tvp24" ?></center></TD>
	  <TD><center><? echo "$tvp34"."$e4"."$tvp44" ?></center></TD>
    </TR>
	<? }?>
	<? if ($re5==0) { } else {?>
	 <TR>
	  <TD><center>5.</center></TD>
      <TD><center><? echo "$c5".' '."$re5" ?></center></TD>
      <TD><center><? echo "$pn15"."$p5"."$pn25" ?></center></TD>
      <TD><center><? echo "$tvp15"."$e5"."$tvp25" ?></center></TD>
	  <TD><center><? echo "$tvp35"."$e5"."$tvp45" ?></center></TD>
    </TR>
	<? }?>
	<? if ($re6==0) { } else {?>
	 <TR>
	  <TD><center>6.</center></TD>
      <TD><center><? echo "$c6".' '."$re6" ?></center></TD>
      <TD><center><? echo "$pn16"."$p6"."$pn26" ?></center></TD>
      <TD><center><? echo "$tvp16"."$e6"."$tvp26" ?></center></TD>
	  <TD><center><? echo "$tvp36"."$e6"."$tvp46" ?></center></TD>
    </TR>
	<? }?>
  </TABLE>

</center>   
   </body> 
</html>

