<?php
$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");


$qre = mysql_query ("select reis from st where nst='1'");
$fre = mysql_fetch_array($qre);
$re1 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re1'");
$fnr = mysql_fetch_array($qnr);
$nr1 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re1'");
$fkr = mysql_fetch_array($qkr);
$kr1 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re1'");
$fvv = mysql_fetch_array($qvv);
$vv1 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re1'");
$fc = mysql_fetch_array($qc);
$c1 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re1'");
$fp = mysql_fetch_array($qp);
$p1 = $fp[punkt];

$qre = mysql_query ("select reis from st where nst='2'");
$fre = mysql_fetch_array($qre);
$re2 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re2'");
$fnr = mysql_fetch_array($qnr);
$nr2 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re2'");
$fkr = mysql_fetch_array($qkr);
$kr2 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re2'");
$fvv = mysql_fetch_array($qvv);
$vv2 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re2'");
$fc = mysql_fetch_array($qc);
$c2 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re2'");
$fp = mysql_fetch_array($qp);
$p2 = $fp[punkt];

$qre = mysql_query ("select reis from st where nst='3'");
$fre = mysql_fetch_array($qre);
$re3 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re3'");
$fnr = mysql_fetch_array($qnr);
$nr3 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re3'");
$fkr = mysql_fetch_array($qkr);
$kr3 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re3'");
$fvv = mysql_fetch_array($qvv);
$vv3 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re3'");
$fc = mysql_fetch_array($qc);
$c3 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re3'");
$fp = mysql_fetch_array($qp);
$p3 = $fp[punkt];

$qre = mysql_query ("select reis from st where nst='4'");
$fre = mysql_fetch_array($qre);
$re4 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re4'");
$fnr = mysql_fetch_array($qnr);
$nr4 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re4'");
$fkr = mysql_fetch_array($qkr);
$kr4 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re4'");
$fvv = mysql_fetch_array($qvv);
$vv4 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re4'");
$fc = mysql_fetch_array($qc);
$c4 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re4'");
$fp = mysql_fetch_array($qp);
$p4 = $fp[punkt];

$qre = mysql_query ("select reis from st where nst='5'");
$fre = mysql_fetch_array($qre);
$re5 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re5'");
$fnr = mysql_fetch_array($qnr);
$nr5 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re5'");
$fkr = mysql_fetch_array($qkr);
$kr5 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re5'");
$fvv = mysql_fetch_array($qvv);
$vv5 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re5'");
$fc = mysql_fetch_array($qc);
$c5 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re5'");
$fp = mysql_fetch_array($qp);
$p5 = $fp[punkt];

$qre = mysql_query ("select reis from st where nst='6'");
$fre = mysql_fetch_array($qre);
$re6 = $fre[reis];
$qnr = mysql_query ("select nr from tables where reis='$re6'");
$fnr = mysql_fetch_array($qnr);
$nr6 = $fnr[nr];
$qkr = mysql_query ("select kr from tables where reis='$re6'");
$fkr = mysql_fetch_array($qkr);
$kr6 = $fkr[kr]; 
$qvv = mysql_query ("select vv from tables where reis='$re6'");
$fvv = mysql_fetch_array($qvv);
$vv6 = $fvv[vv];
// Компания
$qc = mysql_query ("select company from tables where reis='$re6'");
$fc = mysql_fetch_array($qc);
$c6 = $fc[company];
// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re6'");
$fp = mysql_fetch_array($qp);
$p6 = $fp[punkt];
?>


<TABLE border=1>
	<TR>
	  <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №1</b>
<br><br>
<b><? echo "$c1$re1" ?><br>
<? echo "$p1" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr1" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr1" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv1" ?></b></font>
</center></TD>
      <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №2</b>
<br><br>
<b><? echo "$c2$re2" ?><br>
<? echo "$p2" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr2" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr2" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv2" ?></b></font>
</center></TD>
    </TR>
     <TR>
	  <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №3</b>
<br><br>
<b><? echo "$c3$re3" ?><br>
<? echo "$p3" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr3" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr3" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv3" ?></b></font>
</center></TD>
      <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №4</b>
<br><br>
<b><? echo "$c4$re4" ?><br>
<? echo "$p4" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr4" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr4" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv4" ?></b></font>
</center></TD>
    </TR>
	<TR>
	  <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №5</b>
<br><br>
<b><? echo "$c5$re5" ?><br>
<? echo "$p5" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr5" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr5" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv5" ?></b></font>
</center></TD>
      <TD WIDTH=400><center>
<br><font size=4>
<b>СТОЙКА РЕГИСТРАЦИИ №6</b>
<br><br>
<b><? echo "$c6$re6" ?><br>
<? echo "$p6" ?></b>
<br><br>
Начало регистрации: <b><? echo ' '."$nr6" ?></b>
<br>
Окончание регистрации: <b><? echo ' '."$kr6" ?></b>
<br>
Время вылета: <b><? echo ' '."$vv6" ?></b></font>
</center></TD>
    </TR>
</TABLE>

<br>
<center><input type="submit" value="Вернуться на прошлую страницу " onclick=" location.href='http://172.17.10.120/admin/'" ></input></center>