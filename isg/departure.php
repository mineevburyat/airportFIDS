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
$qre = mysql_query ("select reis from departure where nst=1");
$fre = mysql_fetch_array($qre);
$reis1 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis1'");
$fc = mysql_fetch_array($pc);
$kod1 = $fc['kod'];

// Запрос данных для строки №2
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=2");
$fre = mysql_fetch_array($qre);
$reis2 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis2'");
$fc = mysql_fetch_array($pc);
$kod2 = $fc['kod'];

// Запрос данных для строки №3
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=3");
$fre = mysql_fetch_array($qre);
$reis3 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis3'");
$fc = mysql_fetch_array($pc);
$kod3 = $fc['kod'];

// Запрос данных для строки №4
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=4");
$fre = mysql_fetch_array($qre);
$reis4 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis4'");
$fc = mysql_fetch_array($pc);
$kod4 = $fc['kod'];

// Запрос данных для строки №5
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=5");
$fre = mysql_fetch_array($qre);
$reis5 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis5'");
$fc = mysql_fetch_array($pc);
$kod5 = $fc['kod'];

// Запрос данных для строки №6
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=6");
$fre = mysql_fetch_array($qre);
$reis6 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis6'");
$fc = mysql_fetch_array($pc);
$kod6 = $fc['kod'];

// Запрос данных для строки №7
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=7");
$fre = mysql_fetch_array($qre);
$reis7 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis7'");
$fc = mysql_fetch_array($pc);
$kod7 = $fc['kod'];

// Запрос данных для строки №8
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=8");
$fre = mysql_fetch_array($qre);
$reis8 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis8'");
$fc = mysql_fetch_array($pc);
$kod8 = $fc['kod'];

// Запрос данных для строки №9
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=9");
$fre = mysql_fetch_array($qre);
$reis9 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis9'");
$fc = mysql_fetch_array($pc);
$kod9 = $fc['kod'];

// Запрос данных для строки №10
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=10");
$fre = mysql_fetch_array($qre);
$reis10 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis10'");
$fc = mysql_fetch_array($pc);
$kod10 = $fc['kod'];

// Запрос данных для строки №11
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=11");
$fre = mysql_fetch_array($qre);
$reis11 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis11'");
$fc = mysql_fetch_array($pc);
$kod11 = $fc['kod'];

// Запрос данных для строки №12
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=12");
$fre = mysql_fetch_array($qre);
$reis12 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis12'");
$fc = mysql_fetch_array($pc);
$kod12 = $fc['kod'];

// Запрос данных для строки №13
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=13");
$fre = mysql_fetch_array($qre);
$reis13 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis13'");
$fc = mysql_fetch_array($pc);
$kod13 = $fc['kod'];


// Запрос данных для строки №14
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=14");
$fre = mysql_fetch_array($qre);
$reis14 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis14'");
$fc = mysql_fetch_array($pc);
$kod14 = $fc['kod'];

// Запрос данных для строки №15
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=15");
$fre = mysql_fetch_array($qre);
$reis15 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis15'");
$fc = mysql_fetch_array($pc);
$kod15 = $fc['kod'];

// Запрос данных для строки №16
// Номер рейса
$qre = mysql_query ("select reis from departure where nst=16");
$fre = mysql_fetch_array($qre);
$reis16 = $fre['reis'];
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
// Код
$pc = mysql_query ("select kod from reis where reis='$reis16'");
$fc = mysql_fetch_array($pc);
$kod16 = $fc['kod'];
?>

<html>
<head>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
 
<script>
function Res1() {
	document.getElementById("reis1").selectedIndex = 
	document.getElementById("reis1").length = 45;
	document.getElementById("time1").selectedIndex = 
	document.getElementById("time1").value = '';
	document.getElementById("status1").selectedIndex = 
	document.getElementById("status1").length = '6';
	document.getElementById("prim1").selectedIndex = 
	document.getElementById("prim1").value = '';
}
function Res2() {
	document.getElementById("reis2").selectedIndex = 
	document.getElementById("reis2").length = 45;
	document.getElementById("time2").selectedIndex = 
	document.getElementById("time2").value = '';
	document.getElementById("status2").selectedIndex = 
	document.getElementById("status2").length = '6';
	document.getElementById("prim2").selectedIndex = 
	document.getElementById("prim2").value = '';
}
function Res3() {
	document.getElementById("reis3").selectedIndex = 
	document.getElementById("reis3").length = 45;
	document.getElementById("time3").selectedIndex = 
	document.getElementById("time3").value = '';
	document.getElementById("status3").selectedIndex = 
	document.getElementById("status3").length = '6';
	document.getElementById("prim3").selectedIndex = 
	document.getElementById("prim3").value = '';
}
function Res4() {
	document.getElementById("reis4").selectedIndex = 
	document.getElementById("reis4").length = 45;
	document.getElementById("time4").selectedIndex = 
	document.getElementById("time4").value = '';
	document.getElementById("status4").selectedIndex = 
	document.getElementById("status4").length = '6';
	document.getElementById("prim4").selectedIndex = 
	document.getElementById("prim4").value = '';
}
function Res5() {
	document.getElementById("reis5").selectedIndex = 
	document.getElementById("reis5").length = 45;
	document.getElementById("time5").selectedIndex = 
	document.getElementById("time5").value = '';
	document.getElementById("status5").selectedIndex = 
	document.getElementById("status5").length = '6';
	document.getElementById("prim5").selectedIndex = 
	document.getElementById("prim5").value = '';
}
function Res6() {
	document.getElementById("reis6").selectedIndex = 
	document.getElementById("reis6").length = 45;
	document.getElementById("time6").selectedIndex = 
	document.getElementById("time6").value = '';
	document.getElementById("status6").selectedIndex = 
	document.getElementById("status6").length = '6';
	document.getElementById("prim6").selectedIndex = 
	document.getElementById("prim6").value = '';
}
function Res7() {
	document.getElementById("reis7").selectedIndex = 
	document.getElementById("reis7").length = 45;
	document.getElementById("time7").selectedIndex = 
	document.getElementById("time7").value = '';
	document.getElementById("status7").selectedIndex = 
	document.getElementById("status7").length = '6';
	document.getElementById("prim7").selectedIndex = 
	document.getElementById("prim7").value = '';
}
function Res8() {
	document.getElementById("reis8").selectedIndex = 
	document.getElementById("reis8").length = 45;
	document.getElementById("time8").selectedIndex = 
	document.getElementById("time8").value = '';
	document.getElementById("status8").selectedIndex = 
	document.getElementById("status8").length = '6';
	document.getElementById("prim8").selectedIndex = 
	document.getElementById("prim8").value = '';
}
function Res9() {
	document.getElementById("reis9").selectedIndex = 
	document.getElementById("reis9").length = 45;
	document.getElementById("time9").selectedIndex = 
	document.getElementById("time9").value = '';
	document.getElementById("status9").selectedIndex = 
	document.getElementById("status9").length = '6';
	document.getElementById("prim9").selectedIndex = 
	document.getElementById("prim9").value = '';
}
function Res10() {
	document.getElementById("reis10").selectedIndex = 
	document.getElementById("reis10").length = 45;
	document.getElementById("time10").selectedIndex = 
	document.getElementById("time10").value = '';
	document.getElementById("status10").selectedIndex = 
	document.getElementById("status10").length = '6';
	document.getElementById("prim10").selectedIndex = 
	document.getElementById("prim10").value = '';
}
function Res11() {
	document.getElementById("reis11").selectedIndex = 
	document.getElementById("reis11").length = 45;
	document.getElementById("time11").selectedIndex = 
	document.getElementById("time11").value = '';
	document.getElementById("status11").selectedIndex = 
	document.getElementById("status11").length = '6';
	document.getElementById("prim11").selectedIndex = 
	document.getElementById("prim11").value = '';
}
function Res12() {
	document.getElementById("reis12").selectedIndex = 
	document.getElementById("reis12").length = 45;
	document.getElementById("time12").selectedIndex = 
	document.getElementById("time12").value = '';
	document.getElementById("status12").selectedIndex = 
	document.getElementById("status12").length = '6';
	document.getElementById("prim12").selectedIndex = 
	document.getElementById("prim12").value = '';
}
function Res13() {
	document.getElementById("reis13").selectedIndex = 
	document.getElementById("reis13").length = 45;
	document.getElementById("time13").selectedIndex = 
	document.getElementById("time13").value = '';
	document.getElementById("status13").selectedIndex = 
	document.getElementById("status13").length = '6';
	document.getElementById("prim13").selectedIndex = 
	document.getElementById("prim13").value = '';
}
function Res14() {
	document.getElementById("reis14").selectedIndex = 
	document.getElementById("reis14").length = 45;
	document.getElementById("time14").selectedIndex = 
	document.getElementById("time14").value = '';
	document.getElementById("status14").selectedIndex = 
	document.getElementById("status14").length = '6';
	document.getElementById("prim14").selectedIndex = 
	document.getElementById("prim14").value = '';
}
function Res15() {
	document.getElementById("reis15").selectedIndex = 
	document.getElementById("reis15").length = 45;
	document.getElementById("time15").selectedIndex = 
	document.getElementById("time15").value = '';
	document.getElementById("status15").selectedIndex = 
	document.getElementById("status15").length = '6';
	document.getElementById("prim15").selectedIndex = 
	document.getElementById("prim15").value = '';
}
function Res16() {
	document.getElementById("reis16").selectedIndex = 
	document.getElementById("reis16").length = 45;
	document.getElementById("time16").selectedIndex = 
	document.getElementById("time16").value = '';
	document.getElementById("status16").selectedIndex = 
	document.getElementById("status16").length = '6';
	document.getElementById("prim16").selectedIndex = 
	document.getElementById("prim16").value = '';
}
</script>
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
$('#time1').mask('H9:M9');
$('#time2').mask('H9:M9');
$('#time3').mask('H9:M9');
$('#time4').mask('H9:M9');
$('#time5').mask('H9:M9');
$('#time6').mask('H9:M9');
$('#time7').mask('H9:M9');
$('#time8').mask('H9:M9');
$('#time9').mask('H9:M9');
$('#time10').mask('H9:M9');
$('#time11').mask('H9:M9');
$('#time12').mask('H9:M9');
$('#time13').mask('H9:M9');
$('#time14').mask('H9:M9');
$('#time15').mask('H9:M9');
$('#time16').mask('H9:M9');
});
</script>

 </head>
<body>
<center><font size=5 color="#555"><b>Отправление</b></font></center><br>
<FORM id="rowEditForm" ACTION="script_departure.php" method="POST">
<TABLE border="1" id="demoTable" style="margin: 0 0 0 0px;" >
<tr><th><center><b>Рейс</b></center></th><th WIDTH=120><center><b>Направление</b></center></th><th><center><b>Время</b></center></th><th><center><b>Статус</b></center></th><th><center><b>Примечание</b></center></th><th width='25px'></th></tr>
<tr><td style="background: #eee";>
<input type="hidden" name="kod1" value="<?php echo "$kod1" ?>"/>
<input type="hidden" name="punkt1" value="<?php echo "$punkt1" ?>"/>
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
<input style="width: 75px" id="time1" type="time2" name="time1" class="POST" value="<?php echo "$time1" ?>"/>

</td>
<td>
<SELECT NAME="status1" id="status1">
        <option  selected VALUE="<?php echo "$status1" ?>"><?php echo "$status1" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT>
</td><td>
<input style="width: 80px" id="prim1" type="text" name="prim1" class="POST" value="<?php echo "$prim1" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res1();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>
<tr><td style="background: #eee";>
<input type="hidden" name="kod2" value="<?php echo "$kod2" ?>"/>
<input type="hidden" name="punkt2" value="<?php echo "$punkt2" ?>"/>
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
<input style="width: 75px" id="time2" type="time2" name="time2" class="POST" value="<?php echo "$time2" ?>"/>
</td>
<td>
<SELECT NAME="status2" id="status2">
        <option  selected VALUE="<?php echo "$status2" ?>"><?php echo "$status2" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT>
</td><td>
<input style="width: 80px" id="prim2" type="text" name="prim2" class="POST" value="<?php echo "$prim2" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res2();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod3" value="<?php echo "$kod3" ?>"/>
<input type="hidden" name="punkt3" value="<?php echo "$punkt3" ?>"/>
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
<center><?php echo "$punkt3" ?></center></td>
<td>
<input style="width: 75px" id="time3" type="time2" name="time3" class="POST" value="<?php echo "$time3" ?>"/>
</td>
<td>
<SELECT NAME="status3" id="status3">
        <option  selected VALUE="<?php echo "$status3" ?>"><?php echo "$status3" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim3" type="text" name="prim3" class="POST" value="<?php echo "$prim3" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res3();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod4" value="<?php echo "$kod4" ?>"/>
<input type="hidden" name="punkt4" value="<?php echo "$punkt4" ?>"/>
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
<center><?php echo "$punkt4" ?></center></td>
<td>
<input style="width: 75px" id="time4" type="time2" name="time4" class="POST" value="<?php echo "$time4" ?>"/>
</td>
<td>
<SELECT NAME="status4" id="status4">
        <option  selected VALUE="<?php echo "$status4" ?>"><?php echo "$status4" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT>
</td><td>
<input style="width: 80px" id="prim4" type="text" name="prim4" class="POST" value="<?php echo "$prim4" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res4();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod5" value="<?php echo "$kod5" ?>"/>
<input type="hidden" name="punkt5" value="<?php echo "$punkt5" ?>"/>
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
<center><?php echo "$punkt5" ?></center></td>
<td>
<input style="width: 75px" id="time5" type="time2" name="time5" class="POST" value="<?php echo "$time5" ?>"/>
</td>
<td>
<SELECT NAME="status5" id="status5">
        <option  selected VALUE="<?php echo "$status5" ?>"><?php echo "$status5" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim5" type="text" name="prim5" class="POST" value="<?php echo "$prim5" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res5();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod6" value="<?php echo "$kod6" ?>"/>
<input type="hidden" name="punkt6" value="<?php echo "$punkt6" ?>"/>
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
<center><?php echo "$punkt6" ?></center></td>
<td>
<input style="width: 75px" id="time6" type="time2" name="time6" class="POST" value="<?php echo "$time6" ?>"/>
</td>
<td>
<SELECT NAME="status6" id="status6">
        <option  selected VALUE="<?php echo "$status6" ?>"><?php echo "$status6" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim6" type="text" name="prim6" class="POST" value="<?php echo "$prim6" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res6();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod7" value="<?php echo "$kod7" ?>"/>
<input type="hidden" name="punkt7" value="<?php echo "$punkt7" ?>"/>
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
<center><?php echo "$punkt7" ?></center></td>
<td>
<input style="width: 75px" id="time7" type="time2" name="time7" class="POST" value="<?php echo "$time7" ?>"/>
</td>
<td>
<SELECT NAME="status7" id="status7">
        <option  selected VALUE="<?php echo "$status7" ?>"><?php echo "$status7" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim7" type="text" name="prim7" class="POST" value="<?php echo "$prim7" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res7();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod8" value="<?php echo "$kod8" ?>"/>
<input type="hidden" name="punkt8" value="<?php echo "$punkt8" ?>"/>
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
<center><?php echo "$punkt8" ?></center></td>
<td>
<input style="width: 75px" id="time8" type="time2" name="time8" class="POST" value="<?php echo "$time8" ?>"/>
</td>
<td>
<SELECT NAME="status8" id="status8">
        <option  selected VALUE="<?php echo "$status8" ?>"><?php echo "$status8" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim8" type="text" name="prim8" class="POST" value="<?php echo "$prim8" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res8();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod9" value="<?php echo "$kod9" ?>"/>
<input type="hidden" name="punkt9" value="<?php echo "$punkt9" ?>"/>
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
<center><?php echo "$punkt9" ?></center></td>
<td>
<input style="width: 75px" id="time9" type="time2" name="time9" class="POST" value="<?php echo "$time9" ?>"/>
</td>
<td>
<SELECT NAME="status9" id="status9">
        <option  selected VALUE="<?php echo "$status9" ?>"><?php echo "$status9" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim9" type="text" name="prim9" class="POST" value="<?php echo "$prim9" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res9();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod10" value="<?php echo "$kod10" ?>"/>
<input type="hidden" name="punkt10" value="<?php echo "$punkt10" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis10' id='reis10' >";
echo "<option VALUE='$reis10' >$reis10</option>";
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
<center><?php echo "$punkt10" ?></center></td>
<td>
<input style="width: 75px" id="time10" type="time2" name="time10" class="POST" value="<?php echo "$time10" ?>"/>
</td>
<td>
<SELECT NAME="status10" id="status10">
        <option  selected VALUE="<?php echo "$status10" ?>"><?php echo "$status10" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim10" type="text" name="prim10" class="POST" value="<?php echo "$prim10" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res10();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod11" value="<?php echo "$kod11" ?>"/>
<input type="hidden" name="punkt11" value="<?php echo "$punkt11" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis11' id='reis11' >";
echo "<option VALUE='$reis11' >$reis11</option>";
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
<center><?php echo "$punkt11" ?></center></td>
<td>
<input style="width: 75px" id="time11" type="time2" name="time11" class="POST" value="<?php echo "$time11" ?>"/>
</td>
<td>
<SELECT NAME="status11" id="status11">
        <option  selected VALUE="<?php echo "$status11" ?>"><?php echo "$status11" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim11" type="text" name="prim11" class="POST" value="<?php echo "$prim11" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res11();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod12" value="<?php echo "$kod12" ?>"/>
<input type="hidden" name="punkt12" value="<?php echo "$punkt12" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis12' id='reis12' >";
echo "<option VALUE='$reis12' >$reis12</option>";
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
<center><?php echo "$punkt12" ?></center></td>
<td>
<input style="width: 75px" id="time12" type="time2" name="time12" class="POST" value="<?php echo "$time12" ?>"/>
</td>
<td>
<SELECT NAME="status12" id="status12">
        <option  selected VALUE="<?php echo "$status12" ?>"><?php echo "$status12" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim12" type="text" name="prim12" class="POST" value="<?php echo "$prim12" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res12();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod13" value="<?php echo "$kod13" ?>"/>
<input type="hidden" name="punkt13" value="<?php echo "$punkt13" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis13' id='reis13' >";
echo "<option VALUE='$reis13' >$reis13</option>";
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
<center><?php echo "$punkt13" ?></center></td>
<td>
<input style="width: 75px" id="time13" type="time2" name="time13" class="POST" value="<?php echo "$time13" ?>"/>
</td>
<td>
<SELECT NAME="status13" id="status13">
        <option  selected VALUE="<?php echo "$status13" ?>"><?php echo "$status13" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim13" type="text" name="prim13" class="POST" value="<?php echo "$prim13" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res13();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod14" value="<?php echo "$kod14" ?>"/>
<input type="hidden" name="punkt14" value="<?php echo "$punkt14" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis14' id='reis14' >";
echo "<option VALUE='$reis14' >$reis14</option>";
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
<center><?php echo "$punkt14" ?></center></td>
<td>
<input style="width: 75px" id="time14" type="time2" name="time14" class="POST" value="<?php echo "$time14" ?>"/>
</td>
<td>
<SELECT NAME="status14" id="status14">
        <option  selected VALUE="<?php echo "$status14" ?>"><?php echo "$status14" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim14" type="text" name="prim14" class="POST" value="<?php echo "$prim14" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res14();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod15" value="<?php echo "$kod15" ?>"/>
<input type="hidden" name="punkt15" value="<?php echo "$punkt15" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis15' id='reis15' >";
echo "<option VALUE='$reis15' >$reis15</option>";
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
<center><?php echo "$punkt15" ?></center></td>
<td>
<input style="width: 75px" id="time15" type="time2" name="time15" class="POST" value="<?php echo "$time15" ?>"/>
</td>
<td>
<SELECT NAME="status15" id="status15">
        <option  selected VALUE="<?php echo "$status15" ?>"><?php echo "$status15" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim15" type="text" name="prim15" class="POST" value="<?php echo "$prim15" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res15();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
<tr><td style="background: #eee";>
<input type="hidden" name="kod16" value="<?php echo "$kod16" ?>"/>
<input type="hidden" name="punkt16" value="<?php echo "$punkt16" ?>"/>
<?php
echo "<SELECT onchange='this.form.submit()' NAME='reis16' id='reis16' >";
echo "<option VALUE='$reis16' >$reis16</option>";
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
<center><?php echo "$punkt16" ?></center></td>
<td>
<input style="width: 75px" id="time16" type="time2" name="time16" class="POST" value="<?php echo "$time16" ?>"/>
</td>
<td>
<SELECT NAME="status16" id="status16">
        <option  selected VALUE="<?php echo "$status16" ?>"><?php echo "$status16" ?></option>
        <OPTION VALUE="Задержка">Задержка</option>
		<OPTION VALUE="Ожидается">Ожидается</option>
		<OPTION VALUE="Отменен">Отменен</option>
		<OPTION VALUE="Вылетел">Вылетел</option>
		<OPTION VALUE="Регистрация">Регистрация</option>
		<OPTION VALUE="Посадка">Посадка</option>
</SELECT></td><td>
<input style="width: 80px" id="prim16" type="text" name="prim16" class="POST" value="<?php echo "$prim16" ?>"/>
</td>
<td>
<center><input title='Очистить строку' type="image" src="../img/work/del.gif" OnClick="Res16();Forma1.submit();" onmouseover="this.width=16;this.height=16" onmouseout="this.width=10;this.height=10">  </center>
</td></tr>
</table>

<INPUT class="button" TYPE="submit" name="confirm" VALUE="Сохранить" style="margin: 10px 0 0 130px; width:150px; height:30px;border-radius: 4px;">
</FORM>

</body> 
</html>

