<?php 
$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Номер рейса (строка №1)
$qre = mysql_query ("select reis from sc2 where st=1");
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
// Время вылета (начало) (строка №1)
$qvv = mysql_query ("select vp1 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp11 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp21 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp31 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=1");
$fvv = mysql_fetch_array($qvv);
$tvp41 = $fvv['vp4'];
// Номер рейса (строка №2)
$qre = mysql_query ("select reis from sc2 where st=2");
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
// Время вылета (начало) (строка №2)
$qvv = mysql_query ("select vp1 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp12 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp22 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp32 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=2");
$fvv = mysql_fetch_array($qvv);
$tvp42 = $fvv['vp4'];
// Номер рейса (строка №3)
$qre = mysql_query ("select reis from sc2 where st=3");
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
// Время вылета (начало) (строка №3)
$qvv = mysql_query ("select vp1 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp13 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp23 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp33 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=3");
$fvv = mysql_fetch_array($qvv);
$tvp43 = $fvv['vp4'];
// Номер рейса (строка №4)
$qre = mysql_query ("select reis from sc2 where st=4");
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
// Время вылета (начало) (строка №4)
$qvv = mysql_query ("select vp1 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp14 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp24 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp34 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=4");
$fvv = mysql_fetch_array($qvv);
$tvp44 = $fvv['vp4'];
// Номер рейса (строка №5)
$qre = mysql_query ("select reis from sc2 where st=5");
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
// Время вылета (начало) (строка №5)
$qvv = mysql_query ("select vp1 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp15 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp25 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp35 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=5");
$fvv = mysql_fetch_array($qvv);
$tvp45 = $fvv['vp4'];
// Номер рейса (строка №6)
$qre = mysql_query ("select reis from sc2 where st=6");
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
// Время вылета (начало) (строка №6)
$qvv = mysql_query ("select vp1 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp16 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp26 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp36 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from sc2 where st=6");
$fvv = mysql_fetch_array($qvv);
$tvp46 = $fvv['vp4'];

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

if ($re1==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn11='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn21='</b></marquee>';
}
if ($re2==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn12='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn22='</b></marquee>';
} 
if ($re3==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn13='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn23='</b></marquee>';
} 
if ($re4==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn14='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn24='</b></marquee>';
} 
if ($re5==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn15='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn25='</b></marquee>';
} 
if ($re6==(35 or 36 or 171 or 533 or 172 or 115 or 713 or 172 or 413 or 510 or 530 or 915)) {
$pn16='<marquee sc2rollamount="2" sc2rolldelay="30" style="margin-top: 1%; width: 440px; " sc2rollamount="4"><b>';
$pn26='</b></marquee>';
} 


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
  <META HTTP-EQUIV="refresh" CONTENT="53;URL=zd2.php"> 
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <meta http-equiv="Page-Enter" content="BlendTrans(Duration=1)" />
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1)" />
  <title></title>
  <style>
.st { 
	width: 675px; 
	height: 110px;
	float: 	left;
	margin-top: -0.8%;
	margin-left: 1.5%;
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
	margin-right: 21%;
   }
.time { 
	width: 240px; 
	height: 100px;
	float: left;
	margin-top: -0.5%;
	margin-left: -2%;
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
H151 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 70px; /* Размер шрифта в процентах */ 	
	color: #FF8C00;
	margin-top: -10%;
	margin-left: 7%;
 }
 H152 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 70px; /* Размер шрифта в процентах */ 	
	color: #FF8C00;
	margin-top: -30%;
	margin-left: 5%;
 }
</style>
</head>
<body class="bd" style='filter:alpha(opacity=0); opacity: 100'* />
<div class="time"><h12><?php echo "$time" ?></h12></div>
<div class="date"><h19><?php echo "$date" ?></h19></div>
<div class="st"><h11><b>ПУНКТ ДОСМОТРА</b><h11></div>
<div class="st2"><h15><b>2<b><h15></div>
<div class="st3"><h16><b>security check<b><h16></div>
<br>
<br>

<center><h151><br><br><br>Служебный проход для</h151></center>
<h152><center>экипажей, персонала и</center></h152>
<h152><center>пассажиров бизнес класса</center></h152>
</body>

<?php /*

<sc2ript language='javasc2ript'>

 var m = 0;
 var t;
 var go;
 
 function show() {

  m+=2;
  document.body.style.opacity = m/100;
  document.body.style.filter="alpha(opacity="+m+")";
  t = setTimeout("show()",5);
  if (m>=100) clearTimeout(t);

 }

 function go_to(url) {

  clearTimeout(t);
  go = url;
  hide();

 }

 function hide() {

  m-=2;
  document.body.style.opacity = m/100;
  document.body.style.filter="alpha(opacity="+m+")";
  t = setTimeout("hide()",5);
  if (m<=0) { 

   clearTimeout(t);
   location.href = go;
  
  }

 }

 show();

</sc2ript> 

*/ ?>

</html>


