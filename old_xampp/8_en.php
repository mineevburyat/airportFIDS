<?php
$db=mysql_connect('localhost', 'root', '');
mysql_select_db('avia', $db);
mysql_query("SET NAMES 'cp1251'");

$st=8;

$qre = mysql_query ("select reis from st where nst='$st'");
$fre = mysql_fetch_array($qre);
$re = $fre['reis'];

if ($re==0) {
$st="08";
} 

$qnrch = mysql_query ("select nrch from tables where reis='$re'");
$fnrch = mysql_fetch_array($qnrch);
$nrch = $fnrch['nrch'];

$qkrch = mysql_query ("select krch from tables where reis='$re'");
$fkrch = mysql_fetch_array($qkrch);
$krch = $fkrch['krch']; 

$qvvch = mysql_query ("select vvch from tables where reis='$re'");
$fvvch = mysql_fetch_array($qvvch);
$vvch = $fvvch['vvch'];

$qnrm = mysql_query ("select nrm from tables where reis='$re'");
$fnrm = mysql_fetch_array($qnrm);
$nrm = $fnrm['nrm'];

$qkrm = mysql_query ("select krm from tables where reis='$re'");
$fkrm = mysql_fetch_array($qkrm);
$krm = $fkrm['krm']; 

$qvvm = mysql_query ("select vvm from tables where reis='$re'");
$fvvm = mysql_fetch_array($qvvm);
$vvm = $fvvm['vvm'];

// Логотип
$ql = mysql_query ("select logo from tables where reis='$re'");
$fl = mysql_fetch_array($ql);
$l = $fl['logo'];

// Компания
$qc = mysql_query ("select company from tables where reis='$re'");
$fc = mysql_fetch_array($qc);
$c = $fc['company'];

// Пункт назначения
$qp = mysql_query ("select punkt from tables where reis='$re'");
$fp = mysql_fetch_array($qp);
$p = $fp['punkt'];

// Погода
$qm = mysql_query ("select meteo from tables where reis='$re'");
$fm = mysql_fetch_array($qm);
$m = $fm['meteo'];

// Бегущая строка
$qb = mysql_query ("select bg from st where nst='$st'");
$fb = mysql_fetch_array($qb);
//$b = $fb[bg];
$b='Prepare please, the ticket and the passport.';
$color='#ebe7e7';

$qzr = mysql_query ("select zreis from st where nst='$st'");
$fzr = mysql_fetch_array($qzr);
$zr = $fzr['zreis'];

$qzt = mysql_query ("select ztime from st where nst='$st'");
$fzt = mysql_fetch_array($qzt);
$zt = $fzt['ztime'];

$bg2='   Flight № '.$zr.' is delayed to '.$zt.'    ';
$tim='22';

if ($zr)
{
$b = $bg2;
$color='red';
$tim='19';
}

$th = date('H');
$tm = date('i');
$time = $th.':'.$tm;
$dd = date('d');
$dm = date('M');

$date = $dd.' '.$dm;
?>
<html>
<head>
  <META HTTP-EQUIV="refresh" CONTENT='<?php echo $tim ?>;URL=<?php echo $st ?>.php'>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  <style>
.st { 
	width: 1024px; 
	height: 80px;
	float: left;
	margin-top: -0.8%;
	margin-left:-0.8%;
	background:#d4d4d4;
   }
.logo { 
	width: 785px; 
	height: 200px;
	float: left;
	margin-left:-0.8%;
	background:;
   }
.reis { 
	width: 785px; 
	height: 274px;
	float: left;
	margin-left:-0.8%;
	background:#071850;
   }
.bg { 
	width: 785px; 
	height: 70px;
	float: left;
	margin-left:-0.8%;
	background:#2baf42;
   }
.nr { 
	width: 341px; 
	height: 144px;
	float: left;
	margin-left:-0.8%;
	background:#0595d1;
	bottom:0px;
	position:absolute;
   }    
.kr { 
	width: 341px; 
	height: 144px;
	float: left;
	margin-left:335px;
	background:#0595d1;
	bottom:0px;
	position:absolute;
   } 
.vv { 
	width: 338px; 
	height: 144px;
	float: left;
	margin-left:678px;
	background:#0595d1;
	bottom:0px;
	position:absolute;
   }
.date { 
	width: 210px; 
	height: 35px;
	float: right;
	margin-top:-41%;
   }   
.time { 
	width: 210px; 
	height: 75px;
	padding: 0px;
	float: right;
	margin-top:-36%;
   } 
.pg { 
	width: 200px; 
	height: 320px;
	float: right;
	margin-top:-25%;
   }   
   
H11 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 60px; /* Размер шрифта в процентах */ 
	color: red;
	margin-top: 0%;
   } 
H12 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 90px; /* Размер шрифта в процентах */ 
	color: #f7f562;
   } 
H13 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 75px; /* Размер шрифта в процентах */ 
	color: #f7f562;
   } 
H14 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 24px; /* Размер шрифта в процентах */ 
	color: #000000;
	margin-left: 3%;
   }      
H15 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 70px; /* Размер шрифта в процентах */ 
	color: #f0ed28;	
   } 
H16 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 30px; /* Размер шрифта в процентах */ 
	color: white;
	margin-left: -3%;
	margin-bottom: -5%;
   }    
H17 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 
	color: white;
	margin-top: 10%;
	margin-left: -3%;
   }    
</style>
</head>
<body background='logo/fon.jpg'>
<div class="st"><center><h11>CHECK-IN №<?php echo $st ?></h11></center></div>
<div class="logo"><center><br><br><img src="logo/<?php echo "$l" ?>" weight="132px"></img></center></div>
<div class="reis"><b><br><br><center><h12><?php echo "$p" ?></h12><br><h13><?php echo "$c$re" ?></h13></center></b></div>
<div class="bg"><marquee style='color:<?php echo $color ?>; font-family:ARIAL; font-size:40px;  margin-top: 1%;'><b><?php echo "$b" ?></b></marquee></div>

<div class="nr">
<br>
<b><center><h14>Registration begins:</h14></center>
<center><h15><?php echo "$nrch:$nrm" ?></h15></center></b></div>

<div class="kr">
<br>
<b><center><h14>The end registration:</h14></center>
<center><h15><?php echo "$krch:$krm" ?></h15></center></b></div>

<div class="vv">
<br>
<b><center><h14>Time of departure:</h14></center>
<center><h15><?php echo "$vvch:$vvm" ?></h15></center></b></div>

<div class="date"><center><h16><b><?php echo "$date" ?></b></h16></center></div>

<div class="time"><center><h17><b><?php echo "$time" ?></b></h17></center></div>

<div class="pg">
<center>
<br>
<br>
<img src="http://www.meteoservice.ru/img/cur_weather_icons/2.png" border="0">
<br>
<br>
<br>
<br>

<img src="http://inf.meteoservice.ru/blue_yellow/<?php echo "$m" ?>.png" border="0"></center>
</div>
</body>
</html>


