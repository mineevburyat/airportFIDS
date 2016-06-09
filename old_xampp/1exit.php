<?php 
$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

$qre = mysql_query ("select reis from `exit` where st=1");
$fre = mysql_fetch_array($qre);
$re1 = $fre['reis'];

$qvv = mysql_query ("select vp1 from `exit` where st=1");
$fvv = mysql_fetch_array($qvv);
$v1 = $fvv['vp1'];
$qvv = mysql_query ("select vp2 from `exit` where st=1");
$fvv = mysql_fetch_array($qvv);
$v2 = $fvv['vp2'];

$qvv = mysql_query ("select vp3 from `exit` where st=1");
$fvv = mysql_fetch_array($qvv);
$v3 = $fvv['vp3'];
$qvv = mysql_query ("select vp4 from `exit` where st=1");
$fvv = mysql_fetch_array($qvv);
$v4 = $fvv['vp4'];

$qp = mysql_query ("select punkt from tables where reis='$re1'");
$fp = mysql_fetch_array($qp);
$p1 = $fp['punkt'];

$e1=':';

if ($re1==0) {
$re1='';
$v1='';
$v2='';
$v3='';
$v4='';
$e1='';
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
  <META HTTP-EQUIV="refresh" CONTENT="39;URL=1exit_en.php"> 
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <meta http-equiv="Page-Enter" content="BlendTrans(Duration=1)" />
<meta http-equiv="Page-Exit" content="blendTrans(Duration=1)" />
  <title></title>
  <style>
.st { 
	width: 720px; 
	height: 110px;
	float: 	left;
	margin-top: -18%;
	margin-left: 28%;
	background:black;
   }
.st2 { 
    width: 	450px; 
	height: 80px;
	float: right; 	
	margin-top: -12%;
	margin-right: 3%;
   }
.st3 { 
    width: 	450px; 
	height: 350px;
	float: right; 	
	margin-top: 0%;
	margin-right: 30%;
   }
.time { 
	width: 220px; 
	height: 100px;
	float: left;
	margin-top: -0.5%;
	margin-left: -0.4%;
   } 
.date { 
	width: 230px; 
	height: 100px;
	float: left;
	margin-top: 9%;
	margin-left:-20%;
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
    font-size: 56px; /* Размер шрифта в процентах */ 
	margin-top: 0%;
	color: #FF8C00;
   } 
H12 {
    font-family: 'Digital-7', Times, serif; /* Гарнитура текста */ 
    font-size: 100px; /* Размер шрифта в процентах */ 
	color: #CD0000;
	margin-top: 0%;
	margin-left: 8%;
   } 
H13 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 20px; /* Размер шрифта в процентах */ 
	color: #FF8C00;
   } 
H14 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 55px; /* Размер шрифта в процентах */ 
	color: #CD0000;
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
	margin-left: 10%;
	}
H20 {
    font-family: 'Lucida Sans Unicode', Times, serif; /* Гарнитура текста */ 
    font-size: 200px; /* Размер шрифта в процентах */ 
	margin-top: 0%;
	color: #d8d7d7;
   } 
 H21 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 	
	color: #00EE00;
 }   
   
</style>
</head>
<body class="bd" style='filter:alpha(opacity=0); opacity: 100'* />
<div class="time"><h12><?php echo "$time" ?></h12></div>
<div class="date"><h19><?php echo "$date" ?></h19></div>
<div class="st"><h11><b>ВЫХОД НА ПОСАДКУ №1</b><h11></div>
<br>
<br>
<div class="st3"><center><h16><b>НА РЕЙС<b><h16><br><h21><?php echo "$p1" ?><b></h21><br/>
<h20><b><?php echo "$re1" ?></b><h20></center></div>

<br>
<br>
<TABLE border=0 style="margin-top: 30%;"  WIDTH=1000>
    <TR>
      <TD  WIDTH=500><center><h13><b>НАЧАЛО ПОСАДКИ</b></h13></center></TD>
	  <TD  WIDTH=480><center><h13><b>ОКОНЧАНИЕ ПОСАДКИ</b></h13></center></TD>
    </TR>
</TABLE>
<h18>5545456</h18>
<TABLE style="margin-left: 1%; margin-top: 0%;" border=0>

     <TR>
      <TD WIDTH=510 height=80 BGCOLOR="#ffc"><h14><center><?php echo "$v1"."$e1"."$v2" ?></center></h14></TD>
      <TD WIDTH=510 height=80 BGCOLOR="#ffc"><h14><center><?php echo "$v3"."$e1"."$v4" ?></center></h14></TD>
    </TR>

  </TABLE>

  <div class="bg"><marquee scrollamount="3" scrolldelay="10" style="color:#FF8C00; font-family:ARIAL; font-size:40px;  margin-top: 2%; width: 1024px; "><b> Приготовьте пожалуйста, билет и паспорт.</b></marquee></div>


</body>

<?php /*

<script language='javascript'>

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

</script> 

*/ ?>

</html>


