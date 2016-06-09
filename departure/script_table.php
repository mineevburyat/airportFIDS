<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Запрос данных для строки №1
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=1");
$fre = mysql_fetch_array($qre);
$reis1 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis1'");
$fc = mysql_fetch_array($qc);
$kod1 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis1'");
$fl = mysql_fetch_array($ql);
$logo1 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis1'");
$fp = mysql_fetch_array($qp);
$punkt1 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis1'");
$fvv = mysql_fetch_array($qvv);
$time1 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis1'");
$fvv = mysql_fetch_array($qvv);
$status1 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis1'");
$fr = mysql_fetch_array($pr);
$prim1 = $fr['primech2'];

// Запрос данных для строки №2
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=2");
$fre = mysql_fetch_array($qre);
$reis2 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis2'");
$fc = mysql_fetch_array($qc);
$kod2 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis2'");
$fl = mysql_fetch_array($ql);
$logo2 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis2'");
$fp = mysql_fetch_array($qp);
$punkt2 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis2'");
$fvv = mysql_fetch_array($qvv);
$time2 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis2'");
$fvv = mysql_fetch_array($qvv);
$status2 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis2'");
$fr = mysql_fetch_array($pr);
$prim2 = $fr['primech2'];

// Запрос данных для строки №3
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=3");
$fre = mysql_fetch_array($qre);
$reis3 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis3'");
$fc = mysql_fetch_array($qc);
$kod3 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis3'");
$fl = mysql_fetch_array($ql);
$logo3 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis3'");
$fp = mysql_fetch_array($qp);
$punkt3 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis3'");
$fvv = mysql_fetch_array($qvv);
$time3 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis3'");
$fvv = mysql_fetch_array($qvv);
$status3 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis3'");
$fr = mysql_fetch_array($pr);
$prim3 = $fr['primech2'];

// Запрос данных для строки №4
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=4");
$fre = mysql_fetch_array($qre);
$reis4 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis4'");
$fc = mysql_fetch_array($qc);
$kod4 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis4'");
$fl = mysql_fetch_array($ql);
$logo4 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis4'");
$fp = mysql_fetch_array($qp);
$punkt4 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis4'");
$fvv = mysql_fetch_array($qvv);
$time4 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis4'");
$fvv = mysql_fetch_array($qvv);
$status4 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis4'");
$fr = mysql_fetch_array($pr);
$prim4 = $fr['primech2'];

// Запрос данных для строки №5
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=5");
$fre = mysql_fetch_array($qre);
$reis5 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis5'");
$fc = mysql_fetch_array($qc);
$kod5 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis5'");
$fl = mysql_fetch_array($ql);
$logo5 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis5'");
$fp = mysql_fetch_array($qp);
$punkt5 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis5'");
$fvv = mysql_fetch_array($qvv);
$time5 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis5'");
$fvv = mysql_fetch_array($qvv);
$status5 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis5'");
$fr = mysql_fetch_array($pr);
$prim5 = $fr['primech2'];

// Запрос данных для строки №6
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=6");
$fre = mysql_fetch_array($qre);
$reis6 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis6'");
$fc = mysql_fetch_array($qc);
$kod6 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis6'");
$fl = mysql_fetch_array($ql);
$logo6 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis6'");
$fp = mysql_fetch_array($qp);
$punkt6 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis6'");
$fvv = mysql_fetch_array($qvv);
$time6 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis6'");
$fvv = mysql_fetch_array($qvv);
$status6 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis6'");
$fr = mysql_fetch_array($pr);
$prim6 = $fr['primech2'];

// Запрос данных для строки №7
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=7");
$fre = mysql_fetch_array($qre);
$reis7 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis7'");
$fc = mysql_fetch_array($qc);
$kod7 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis7'");
$fl = mysql_fetch_array($ql);
$logo7 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis7'");
$fp = mysql_fetch_array($qp);
$punkt7 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis7'");
$fvv = mysql_fetch_array($qvv);
$time7 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis7'");
$fvv = mysql_fetch_array($qvv);
$status7 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis7'");
$fr = mysql_fetch_array($pr);
$prim7 = $fr['primech2'];

// Запрос данных для строки №8
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=8");
$fre = mysql_fetch_array($qre);
$reis8 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis8'");
$fc = mysql_fetch_array($qc);
$kod8 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis8'");
$fl = mysql_fetch_array($ql);
$logo8 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis8'");
$fp = mysql_fetch_array($qp);
$punkt8 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis8'");
$fvv = mysql_fetch_array($qvv);
$time8 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis8'");
$fvv = mysql_fetch_array($qvv);
$status8 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis8'");
$fr = mysql_fetch_array($pr);
$prim8 = $fr['primech2'];

// Запрос данных для строки №9
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=9");
$fre = mysql_fetch_array($qre);
$reis9 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis9'");
$fc = mysql_fetch_array($qc);
$kod9 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis9'");
$fl = mysql_fetch_array($ql);
$logo9 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis9'");
$fp = mysql_fetch_array($qp);
$punkt9 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis9'");
$fvv = mysql_fetch_array($qvv);
$time9 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis9'");
$fvv = mysql_fetch_array($qvv);
$status9 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis9'");
$fr = mysql_fetch_array($pr);
$prim9 = $fr['primech2'];

// Запрос данных для строки №10
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=10");
$fre = mysql_fetch_array($qre);
$reis10 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis10'");
$fc = mysql_fetch_array($qc);
$kod10 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis10'");
$fl = mysql_fetch_array($ql);
$logo10 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis10'");
$fp = mysql_fetch_array($qp);
$punkt10 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis10'");
$fvv = mysql_fetch_array($qvv);
$time10 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis10'");
$fvv = mysql_fetch_array($qvv);
$status10 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis10'");
$fr = mysql_fetch_array($pr);
$prim10 = $fr['primech2'];

// Запрос данных для строки №11
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=11");
$fre = mysql_fetch_array($qre);
$reis11 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis11'");
$fc = mysql_fetch_array($qc);
$kod11 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis11'");
$fl = mysql_fetch_array($ql);
$logo11 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis11'");
$fp = mysql_fetch_array($qp);
$punkt11 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis11'");
$fvv = mysql_fetch_array($qvv);
$time11 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis11'");
$fvv = mysql_fetch_array($qvv);
$status11 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis11'");
$fr = mysql_fetch_array($pr);
$prim11 = $fr['primech2'];

// Запрос данных для строки №12
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=12");
$fre = mysql_fetch_array($qre);
$reis12 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis12'");
$fc = mysql_fetch_array($qc);
$kod12 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis12'");
$fl = mysql_fetch_array($ql);
$logo12 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis12'");
$fp = mysql_fetch_array($qp);
$punkt12 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis12'");
$fvv = mysql_fetch_array($qvv);
$time12 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis12'");
$fvv = mysql_fetch_array($qvv);
$status12 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis12'");
$fr = mysql_fetch_array($pr);
$prim12 = $fr['primech2'];

// Запрос данных для строки №13
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=13");
$fre = mysql_fetch_array($qre);
$reis13 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis13'");
$fc = mysql_fetch_array($qc);
$kod13 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis13'");
$fl = mysql_fetch_array($ql);
$logo13 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis13'");
$fp = mysql_fetch_array($qp);
$punkt13 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis13'");
$fvv = mysql_fetch_array($qvv);
$time13 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis13'");
$fvv = mysql_fetch_array($qvv);
$status13 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis13'");
$fr = mysql_fetch_array($pr);
$prim13 = $fr['primech2'];

// Запрос данных для строки №14
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=14");
$fre = mysql_fetch_array($qre);
$reis14 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis14'");
$fc = mysql_fetch_array($qc);
$kod14 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis14'");
$fl = mysql_fetch_array($ql);
$logo14 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis14'");
$fp = mysql_fetch_array($qp);
$punkt14 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis14'");
$fvv = mysql_fetch_array($qvv);
$time14 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis14'");
$fvv = mysql_fetch_array($qvv);
$status14 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis14'");
$fr = mysql_fetch_array($pr);
$prim14 = $fr['primech2'];

// Запрос данных для строки №15
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=15");
$fre = mysql_fetch_array($qre);
$reis15 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis15'");
$fc = mysql_fetch_array($qc);
$kod15 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis15'");
$fl = mysql_fetch_array($ql);
$logo15 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis15'");
$fp = mysql_fetch_array($qp);
$punkt15 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis15'");
$fvv = mysql_fetch_array($qvv);
$time15 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis15'");
$fvv = mysql_fetch_array($qvv);
$status15 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis15'");
$fr = mysql_fetch_array($pr);
$prim15 = $fr['primech2'];

// Запрос данных для строки №16
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=16");
$fre = mysql_fetch_array($qre);
$reis16 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis16'");
$fc = mysql_fetch_array($qc);
$kod16 = $fc['kod'];
// Логотип
$ql = mysql_query ("select kod_en from reis where reis='$reis16'");
$fl = mysql_fetch_array($ql);
$logo16 = $fl['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis16'");
$fp = mysql_fetch_array($qp);
$punkt16 = $fp['naznach'];
// Время 
$qvv = mysql_query ("select time2 from reis where reis='$reis16'");
$fvv = mysql_fetch_array($qvv);
$time16 = $fvv['time2'];
// Статус 
$qvv = mysql_query ("select status2 from reis where reis='$reis16'");
$fvv = mysql_fetch_array($qvv);
$status16 = $fvv['status2'];
// Примечание
$pr = mysql_query ("select primech2 from reis where reis='$reis16'");
$fr = mysql_fetch_array($pr);
$prim16 = $fr['primech2'];


?>

<html>
<head>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<style>
   html { overflow:  hidden; }
     body { 
	background:#1560bd;
	cursor: none;
   }
    H15 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 22px; /* Размер шрифта в процентах */ 
	color: #003399;
	font-weight:bold
   }
    H14 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 22px; /* Размер шрифта в процентах */ 
	color: white;
	font-weight:bold
   }
    H16 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 26px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold
   }
   tr:nth-child(2n+1) {
    background: #333; 
   } 
   td:nth-child(1) {
    background: #1560bd; 
   } 
  </style>
 </head> 
<body >

<TABLE>
	<?php if ($reis1==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo1" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod1"."$reis1" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt1" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time1" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status1" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim1" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis2==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo2" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod2"."$reis2" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt2" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time2" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status2" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim2" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis3==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo3" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod3"."$reis3" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt3" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time3" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status3" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim3" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis4==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo4" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod4"."$reis4" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt4" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time4" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status4" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim4" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis5==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo5" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod5"."$reis5" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt5" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time5" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status5" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim5" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis6==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo6" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod6"."$reis6" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt6" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time6" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status6" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim6" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis7==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo7" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod7"."$reis7" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt7" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time7" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status7" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim7" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis8==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo8" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod8"."$reis8" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt8" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time8" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status8" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim8" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis9==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo9" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod9"."$reis9" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt9" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time9" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status9" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim9" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis10==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo10" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod10"."$reis10" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt10" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time10" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status10" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim10" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis11==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo11" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod11"."$reis11" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt11" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time11" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status11" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim11" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis12==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo12" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod12"."$reis12" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt12" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time12" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status12" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim12" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis13==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo13" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod13"."$reis13" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt13" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time13" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status13" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim13" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis14==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo14" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod14"."$reis14" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt14" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time14" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status14" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim14" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis15==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo15" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod15"."$reis15" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt15" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time15" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status15" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim15" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis16==0) { } else {?>
     <TR>
      <TD WIDTH=120 ><h14><center><img src="../img/logo/<?php echo "$logo16" ?>.jpg" width="100px" height="45px" style="border-radius: 5px;"></center></h14></TD>
      <TD WIDTH=120 BGCOLOR="#f7f21a" style="border-radius: 5px;"><h15><center><?php echo "$kod16"."$reis16" ?></center></h15></TD>
      <TD WIDTH=310><h14><center><?php echo "$punkt16" ?></center></h14></TD>
	  <TD WIDTH=90 ><h16><center><?php echo "$time16" ?></center></h16></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$status16" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$prim16" ?></center></h14></TD>
    </TR><?php }?>
</TABLE>

  
 </body>
 </html>
