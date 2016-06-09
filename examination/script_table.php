<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Запрос данных для строки №1
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=1");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis1'");
$fv = mysql_fetch_array($qv);
$npos1 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis1'");
$fvv = mysql_fetch_array($qvv);
$okpos1 = $fvv['okon_pos'];
 
// Запрос данных для строки №2
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=2");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis2'");
$fv = mysql_fetch_array($qv);
$npos2 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis2'");
$fvv = mysql_fetch_array($qvv);
$okpos2 = $fvv['okon_pos'];
 
// Запрос данных для строки №3
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=3");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis3'");
$fv = mysql_fetch_array($qv);
$npos3 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis3'");
$fvv = mysql_fetch_array($qvv);
$okpos3 = $fvv['okon_pos'];
 
// Запрос данных для строки №4
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=4");
$fre = mysql_fetch_array($qre);
$reis4 = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod from reis where reis='$reis3'");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis4'");
$fv = mysql_fetch_array($qv);
$npos4 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis4'");
$fvv = mysql_fetch_array($qvv);
$okpos4 = $fvv['okon_pos'];
 
// Запрос данных для строки №5
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=5");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis5'");
$fv = mysql_fetch_array($qv);
$npos5 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis5'");
$fvv = mysql_fetch_array($qvv);
$okpos5 = $fvv['okon_pos'];
 
// Запрос данных для строки №6
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=6");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis6'");
$fv = mysql_fetch_array($qv);
$npos6 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis6'");
$fvv = mysql_fetch_array($qvv);
$okpos6 = $fvv['okon_pos'];
 
// Запрос данных для строки №7
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=7");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis7'");
$fv = mysql_fetch_array($qv);
$npos7 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis7'");
$fvv = mysql_fetch_array($qvv);
$okpos7 = $fvv['okon_pos'];
 
// Запрос данных для строки №8
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=8");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis8'");
$fv = mysql_fetch_array($qv);
$npos8 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis8'");
$fvv = mysql_fetch_array($qvv);
$okpos8 = $fvv['okon_pos'];
 
// Запрос данных для строки №9
// Номер рейса
$qre = mysql_query ("select reis from examination where nst=9");
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
// Начало посадки 
$qv = mysql_query ("select nach_pos from reis where reis='$reis9'");
$fv = mysql_fetch_array($qv);
$npos9 = $fv['nach_pos'];
// Окончание посадки 
$qvv = mysql_query ("select okon_pos from reis where reis='$reis9'");
$fvv = mysql_fetch_array($qvv);
$okpos9 = $fvv['okon_pos'];

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
    font-size: 32px; /* Размер шрифта в процентах */ 
	color: #003399;
	font-weight:bold
   }
    H14 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 32px; /* Размер шрифта в процентах */ 
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
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo1" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod1"."$reis1" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt1" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos1" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos1" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis2==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo2" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod2"."$reis2" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt2" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos2" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos2" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis3==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo3" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod3"."$reis3" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt3" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos3" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos3" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis4==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo4" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod4"."$reis4" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt4" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos4" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos4" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis5==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo5" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod5"."$reis5" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt5" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos5" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos5" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis6==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo6" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod6"."$reis6" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt6" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos6" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos6" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis7==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo7" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod7"."$reis7" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt7" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos7" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos7" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis8==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo8" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod8"."$reis8" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt8" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos8" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos8" ?></center></h14></TD>
    </TR><?php }?>
	<?php if ($reis9==0) { } else {?>
     <TR>
      <TD WIDTH=150 ><h14><center><img src="../img/logo/<?php echo "$logo9" ?>.jpg" width="140px" height="59px" style="border-radius: 8px;"></center></h14></TD>
      <TD WIDTH=150 BGCOLOR="#f7f21a" style="border-radius: 8px;"><h15><center><?php echo "$kod9"."$reis9" ?></center></h15></TD>
      <TD WIDTH=340><h14><center><?php echo "$punkt9" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$npos9" ?></center></h14></TD>
	  <TD WIDTH=170 ><h14><center><?php echo "$okpos9" ?></center></h14></TD>
    </TR><?php }?>
	
</TABLE>

  
 </body>
 </html>
