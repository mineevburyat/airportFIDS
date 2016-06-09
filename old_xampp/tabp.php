<?php 
$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Номер рейса (строка №1)
$qre = mysql_query ("select reis from tabp where st=1");
$fre = mysql_fetch_array($qre);
$re1 = $fre['reis'];
// Компания (строка №1)
$qc = mysql_query ("select company from tables where reis='$re1'");
$fc = mysql_fetch_array($qc);
$c1 = $fc['company'];
// Пункт назначения (строка №1)
$qp = mysql_query ("select zd_p from tables where reis='$re1'");
$fp = mysql_fetch_array($qp);
$p1 = $fp['zd_p'];
// Время прилета  (строка №1)
$qvv = mysql_query ("select vp1 from tabp where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp11 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp21 = $fvv['vp2'];
// Статус  (строка №1)
$qvv = mysql_query ("select status from tabp where st=1");
$fvv = mysql_fetch_array($qvv);
$sta1 = $fvv['status'];

// Номер рейса (строка №2)
$qre = mysql_query ("select reis from tabp where st=2");
$fre = mysql_fetch_array($qre);
$re2 = $fre['reis'];
// Компания (строка №2)
$qc = mysql_query ("select company from tables where reis='$re2'");
$fc = mysql_fetch_array($qc);
$c2 = $fc['company'];
// Пункт назначения (строка №2)
$qp = mysql_query ("select zd_p from tables where reis='$re2'");
$fp = mysql_fetch_array($qp);
$p2 = $fp['zd_p'];
// Время прилета  (строка №2)
$qvv = mysql_query ("select vp1 from tabp where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp12 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp22 = $fvv['vp2'];
// Статус  (строка №2)
$qvv = mysql_query ("select status from tabp where st=2");
$fvv = mysql_fetch_array($qvv);
$sta2 = $fvv['status'];

// Номер рейса (строка №3)
$qre = mysql_query ("select reis from tabp where st=3");
$fre = mysql_fetch_array($qre);
$re3 = $fre['reis'];
// Компания (строка №3)
$qc = mysql_query ("select company from tables where reis='$re3'");
$fc = mysql_fetch_array($qc);
$c3 = $fc['company'];
// Пункт назначения (строка №3)
$qp = mysql_query ("select zd_p from tables where reis='$re3'");
$fp = mysql_fetch_array($qp);
$p3 = $fp['zd_p'];
// Время прилета  (строка №3)
$qvv = mysql_query ("select vp1 from tabp where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp13 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp23 = $fvv['vp2'];
// Статус  (строка №3)
$qvv = mysql_query ("select status from tabp where st=3");
$fvv = mysql_fetch_array($qvv);
$sta3 = $fvv['status'];

// Номер рейса (строка №4)
$qre = mysql_query ("select reis from tabp where st=4");
$fre = mysql_fetch_array($qre);
$re4 = $fre['reis'];
// Компания (строка №4)
$qc = mysql_query ("select company from tables where reis='$re4'");
$fc = mysql_fetch_array($qc);
$c4 = $fc['company'];
// Пункт назначения (строка №4)
$qp = mysql_query ("select zd_p from tables where reis='$re4'");
$fp = mysql_fetch_array($qp);
$p4 = $fp['zd_p'];
// Время прилета  (строка №4)
$qvv = mysql_query ("select vp1 from tabp where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp14 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp24 = $fvv['vp2'];
// Статус  (строка №4)
$qvv = mysql_query ("select status from tabp where st=4");
$fvv = mysql_fetch_array($qvv);
$sta4 = $fvv['status'];

// Номер рейса (строка №5)
$qre = mysql_query ("select reis from tabp where st=5");
$fre = mysql_fetch_array($qre);
$re5 = $fre['reis'];
// Компания (строка №5)
$qc = mysql_query ("select company from tables where reis='$re5'");
$fc = mysql_fetch_array($qc);
$c5 = $fc['company'];
// Пункт назначения (строка №5)
$qp = mysql_query ("select zd_p from tables where reis='$re5'");
$fp = mysql_fetch_array($qp);
$p5 = $fp['zd_p'];
// Время прилета  (строка №5)
$qvv = mysql_query ("select vp1 from tabp where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp15 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp25 = $fvv['vp2'];
// Статус  (строка №5)
$qvv = mysql_query ("select status from tabp where st=5");
$fvv = mysql_fetch_array($qvv);
$sta5 = $fvv['status'];

// Номер рейса (строка №6)
$qre = mysql_query ("select reis from tabp where st=6");
$fre = mysql_fetch_array($qre);
$re6 = $fre['reis'];
// Компания (строка №6)
$qc = mysql_query ("select company from tables where reis='$re6'");
$fc = mysql_fetch_array($qc);
$c6 = $fc['company'];
// Пункт назначения (строка №6)
$qp = mysql_query ("select zd_p from tables where reis='$re6'");
$fp = mysql_fetch_array($qp);
$p6 = $fp['zd_p'];
// Время прилета  (строка №6)
$qvv = mysql_query ("select vp1 from tabp where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp16 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp26 = $fvv['vp2'];
// Статус  (строка №6)
$qvv = mysql_query ("select status from tabp where st=6");
$fvv = mysql_fetch_array($qvv);
$sta6 = $fvv['status'];

// Номер рейса (строка №7)
$qre = mysql_query ("select reis from tabp where st=7");
$fre = mysql_fetch_array($qre);
$re7 = $fre['reis'];
// Компания (строка №7)
$qc = mysql_query ("select company from tables where reis='$re7'");
$fc = mysql_fetch_array($qc);
$c7 = $fc['company'];
// Пункт назначения (строка №7)
$qp = mysql_query ("select zd_p from tables where reis='$re7'");
$fp = mysql_fetch_array($qp);
$p7 = $fp['zd_p'];
// Время прилета  (строка №7)
$qvv = mysql_query ("select vp1 from tabp where st=7");
$fvv = mysql_fetch_array($qvv);
$tvp17 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=7");
$fvv = mysql_fetch_array($qvv);
$tvp27 = $fvv['vp2'];
// Статус  (строка №7)
$qvv = mysql_query ("select status from tabp where st=7");
$fvv = mysql_fetch_array($qvv);
$sta7 = $fvv['status'];

// Номер рейса (строка №8)
$qre = mysql_query ("select reis from tabp where st=8");
$fre = mysql_fetch_array($qre);
$re8 = $fre['reis'];
// Компания (строка №8)
$qc = mysql_query ("select company from tables where reis='$re8'");
$fc = mysql_fetch_array($qc);
$c8 = $fc['company'];
// Пункт назначения (строка №8)
$qp = mysql_query ("select zd_p from tables where reis='$re8'");
$fp = mysql_fetch_array($qp);
$p8 = $fp['zd_p'];
// Время прилета  (строка №8)
$qvv = mysql_query ("select vp1 from tabp where st=8");
$fvv = mysql_fetch_array($qvv);
$tvp18 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from tabp where st=8");
$fvv = mysql_fetch_array($qvv);
$tvp28 = $fvv['vp2'];
// Статус  (строка №8)
$qvv = mysql_query ("select status from tabp where st=8");
$fvv = mysql_fetch_array($qvv);
$sta8 = $fvv['status'];

$e1=':';
$e2=':';
$e3=':';
$e4=':';
$e5=':';
$e6=':';
$e7=':';
$e8=':';

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
if ($re7==0) {
$re7='';
$e7='';
}
if ($re8==0) {
$re8='';
$e8='';
}

if ($re1==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn11='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn21='</b></marquee>';
}
if ($re2==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn12='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn22='</b></marquee>';
} 
if ($re3==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn13='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn23='</b></marquee>';
} 
if ($re4==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn14='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn24='</b></marquee>';
} 
if ($re5==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn15='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn25='</b></marquee>';
} 
if ($re6==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn16='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn26='</b></marquee>';
} 
if ($re7==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn17='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn27='</b></marquee>';
} 
if ($re8==(727 or 9758 or 171 or 533 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn18='<marquee scrollamount="2" scrolldelay="30" style="margin-top: 1%; width: 440px; " scrollamount="4"><b>';
$pn28='</b></marquee>';
} 

if ($sta1==1) { $sta1='ПРИБЫЛ'; } else if ($sta1==2) { $sta1='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta1==3) { $sta1='ПОСАДКА'; } else if ($sta1==4) { $sta1='ОЖИДАЕТСЯ'; } else if ($sta1==5) { $sta1='ВЫЛЕТЕЛ'; } else if ($sta1==6) { $sta1='РЕГИСТРАЦИЯ'; } else if ($sta1==0) { $sta1=''; };
if ($sta2==1) { $sta2='ПРИБЫЛ'; } else if ($sta2==2) { $sta2='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta2==3) { $sta2='ПОСАДКА'; } else if ($sta2==4) { $sta2='ОЖИДАЕТСЯ'; } else if ($sta2==5) { $sta2='ВЫЛЕТЕЛ'; } else if ($sta2==6) { $sta2='РЕГИСТРАЦИЯ'; } else if ($sta2==0) { $sta2=''; };
if ($sta3==1) { $sta3='ПРИБЫЛ'; } else if ($sta3==2) { $sta3='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta3==3) { $sta3='ПОСАДКА'; } else if ($sta3==4) { $sta3='ОЖИДАЕТСЯ'; } else if ($sta3==5) { $sta3='ВЫЛЕТЕЛ'; } else if ($sta3==6) { $sta3='РЕГИСТРАЦИЯ'; } else if ($sta3==0) { $sta3=''; };
if ($sta4==1) { $sta4='ПРИБЫЛ'; } else if ($sta4==2) { $sta4='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta4==3) { $sta4='ПОСАДКА'; } else if ($sta4==4) { $sta4='ОЖИДАЕТСЯ'; } else if ($sta4==5) { $sta4='ВЫЛЕТЕЛ'; } else if ($sta4==6) { $sta4='РЕГИСТРАЦИЯ'; } else if ($sta4==0) { $sta4=''; };
if ($sta5==1) { $sta5='ПРИБЫЛ'; } else if ($sta5==2) { $sta5='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta5==3) { $sta5='ПОСАДКА'; } else if ($sta5==4) { $sta5='ОЖИДАЕТСЯ'; } else if ($sta5==5) { $sta5='ВЫЛЕТЕЛ'; } else if ($sta5==6) { $sta5='РЕГИСТРАЦИЯ'; } else if ($sta5==0) { $sta5=''; };
if ($sta6==1) { $sta6='ПРИБЫЛ'; } else if ($sta6==2) { $sta6='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta6==3) { $sta6='ПОСАДКА'; } else if ($sta6==4) { $sta6='ОЖИДАЕТСЯ'; } else if ($sta6==5) { $sta6='ВЫЛЕТЕЛ'; } else if ($sta6==6) { $sta6='РЕГИСТРАЦИЯ'; } else if ($sta6==0) { $sta6=''; };
if ($sta7==1) { $sta7='ПРИБЫЛ'; } else if ($sta7==2) { $sta7='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta7==3) { $sta7='ПОСАДКА'; } else if ($sta7==4) { $sta7='ОЖИДАЕТСЯ'; } else if ($sta7==5) { $sta7='ВЫЛЕТЕЛ'; } else if ($sta7==6) { $sta7='РЕГИСТРАЦИЯ'; } else if ($sta7==0) { $sta7=''; };
if ($sta8==1) { $sta8='ПРИБЫЛ'; } else if ($sta8==2) { $sta8='<font color=red>ЗАДЕРЖКА</font>'; } else if ($sta8==3) { $sta8='ПОСАДКА'; } else if ($sta8==4) { $sta8='ОЖИДАЕТСЯ'; } else if ($sta8==5) { $sta8='ВЫЛЕТЕЛ'; } else if ($sta8==6) { $sta8='РЕГИСТРАЦИЯ'; } else if ($sta8==0) { $sta8=''; };

$th = date('H');
$tm = date('i');
$time = $th.':'.$tm;

$dd = date('d');
$dm = date('m');
if ($dm==01) {$dm2 = 'Января';}
else if ($dm==02) {$dm2 = 'Февраля';}
else if ($dm==03) {$dm2 = 'Марта';}
else if ($dm==04) {$dm2 = 'Апреля';}
else if ($dm==05) {$dm2 = 'Мая';}
else if ($dm==06) {$dm2 = 'Июня';}
else if ($dm==07) {$dm2 = 'Июля';}
else if ($dm==8) {$dm2 = 'Августа';}
else if ($dm==9) {$dm2 = 'Сентября';}
else if ($dm==10) {$dm2 = 'Октября';}
else if ($dm==11) {$dm2 = 'Ноября';}
else if ($dm==12) {$dm2 = 'Декабря';}

$date = $dd.' '.$dm2;
?>
<html>
<head>
  <META HTTP-EQUIV="refresh" CONTENT="53;URL=tabp.php"> 
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <meta http-equiv="Page-Enter" content="BlendTrans(Duration=1)" />
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1)" />
  <title></title>
  <style>
.st { 
	width: 680px; 
	height: 110px;
	float: 	left;
	margin-top: -0.8%;
	margin-left: 2%;
	background:black;
   }
.st2 { 
    width: 100px; 
	height: 250px;
	float: right;
	margin-top: -14%;
	margin-right: 0.3%;
    background:black;
   }
.st3 { 
    width: 	350px; 
	height: 80px;
	float: right; 	
	margin-top: -2%;
	margin-right: 22%;
   }
.time { 
	width: 280px; 
	height: 100px;
	float: left;
	margin-top: -0.5%;
	margin-left: -0.4%;
   } 
.date { 
	width: 200px; 
	height: 40px;
	float: left;
	margin-top: 9%;
	margin-left:-22%;
   } 
.bd { 
	background:black;
	margin-top: 3%;
   } 
.bg { 
	width: 1024px; 
	height: 70px;
	float: left;
	margin-left:-0.8%;
   }
H11 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 70px; /* Размер шрифта в процентах */ 
	margin-top: 0%;
	color: #FF8C00;
   } 
H12 {
    font-family: 'Digital-7', Times, serif; /* Гарнитура текста */ 
    font-size: 100px; /* Размер шрифта в процентах */ 
	color: #CD0000;
	margin-top: 0%;
	margin-left: 10%;
   } 
H13 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 20px; /* Размер шрифта в процентах */ 
	color: #FF8C00;
   } 
H14 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 40px; /* Размер шрифта в процентах */ 
	color: #00EE00;
	font-weight:bold
   }
 H24 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 36px; /* Размер шрифта в процентах */ 
	color: #00EE00;
	font-weight:bold
   }
H15 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 200px; /* Размер шрифта в процентах */ 	
	color: #FF8C00;
 }   
H16 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 	
	color: #FF8C00;
 } 
H17 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 17px; /* Размер шрифта в процентах */ 
	color: #FF8C00;
   } 
H18 {
    font-size: 13px; /* Размер шрифта в процентах */ 
	color: black;
   } 
H19 {
    font-family: 'a_LCDNovaObl', Times, serif; /* Гарнитура текста */ 
    font-size: 35px; /* Размер шрифта в процентах */ 
	color: #CD0000;
	margin-top: 0%;
	margin-left: 5%;
	}

</style>
</head>
<body class="bd" style='filter:alpha(opacity=0); opacity: 100; margin-top: 1%;'* />
<div class="time"><h12><?php echo "$time" ?></h12></div>
<div class="date"><h19><?php echo "$date" ?></h19></div>
<div class="st"><h11><b>ТАБЛО ПРИЛЕТОВ</b><h11></div>
<div class="st3"><h16><b>ARRIVAL<b><h16></div>
<br>
<br>
<br>
<br>
<TABLE border=0 WIDTH=975>
    <TR>
      <TD WIDTH=200><center><h13><b>№ РЕЙСА</b></h13><br><h17>flight</h17></center></TD>
      <TD WIDTH=390><center><h13><b>НАПРАВЛЕНИЕ РЕЙСА</b></h13><br><h17>destination</h17></center></TD>
      <TD WIDTH=190><center><h13><b>ВРЕМЯ</b></h13><br><h17>time</h17></center></TD>
	  <TD WIDTH=200><center><h13><b>СТАТУС</b></h13><br><h17>status</h17></center></TD>
    </TR>
</TABLE>
<h18>5545456</h18>
<TABLE style="margin-left: 0%;" border=0>

	<?php if ($re1==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c1".' '."$re1" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn11"."$p1"."$pn21" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp11"."$e1"."$tvp21" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta1" ?></center></h24></TD>
    </TR>
	<?php }?>
	<?php if ($re2==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c2".' '."$re2" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn12"."$p2"."$pn22" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp12"."$e2"."$tvp22" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta2" ?></center></h24></TD>
    </TR>
	<?php }?>
	<?php if ($re3==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c3".' '."$re3" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn13"."$p3"."$pn23" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp13"."$e3"."$tvp23" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta3" ?></center></h24></TD>
    </TR>
	<?php }?>
		<?php if ($re4==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c4".' '."$re4" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn14"."$p4"."$pn24" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp14"."$e4"."$tvp24" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta4" ?></center></h24></TD>
    </TR>
	<?php }?>
		<?php if ($re5==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c5".' '."$re5" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn15"."$p5"."$pn25" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp15"."$e5"."$tvp25" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta5" ?></center></h24></TD>
    </TR>
	<?php }?>
		<?php if ($re6==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c6".' '."$re6" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn16"."$p6"."$pn26" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp16"."$e6"."$tvp26" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta6" ?></center></h24></TD>
    </TR>
	<?php }?>
		<?php if ($re7==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c7".' '."$re7" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn17"."$p7"."$pn27" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp17"."$e7"."$tvp27" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta7" ?></center></h24></TD>
    </TR>
	<?php }?>
		<?php if ($re8==0) { } else {?>
     <TR>
      <TD WIDTH=200 BGCOLOR="#363636"><h14><center><?php echo "$c8".' '."$re8" ?></center></h14></TD>
      <TD WIDTH=380 BGCOLOR="#363636"><h14><center><?php echo "$pn18"."$p8"."$pn28" ?></center></h14></TD>
      <TD WIDTH=160 BGCOLOR="#363636"><h14><center><?php echo "$tvp18"."$e8"."$tvp28" ?></center></h14></TD>
	  <TD WIDTH=230 BGCOLOR="#363636"><h24><center><?php echo "$sta8" ?></center></h24></TD>
    </TR>
	<?php }?>
	
  </TABLE>
  
</body>
</html>


