<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");


// Табло прилета
// строка №1
$qret1 = mysql_query ("select reis from tabp where st='1'");
$fret1 = mysql_fetch_array($qret1);
$ret1 = $fret1['reis'];
$qvvcht1 = mysql_query ("select vp1 from tabp where reis='$ret1'");
$fvvcht1 = mysql_fetch_array($qvvcht1);
$vvcht1 = $fvvcht1['vp1'];
$qvvmt1 = mysql_query ("select vp2 from tabp where reis='$ret1'");
$fvvmt1 = mysql_fetch_array($qvvmt1);
$vvmt1 = $fvvmt1['vp2'];
$qstt1 = mysql_query ("select status from tabp where reis='$ret1'");
$fstt1 = mysql_fetch_array($qstt1);
$stt1 = $fstt1['status'];

// строка №2
$qret2 = mysql_query ("select reis from tabp where st='2'");
$fret2 = mysql_fetch_array($qret2);
$ret2 = $fret2['reis'];
$qvvcht2 = mysql_query ("select vp1 from tabp where reis='$ret2'");
$fvvcht2 = mysql_fetch_array($qvvcht2);
$vvcht2 = $fvvcht2['vp1'];
$qvvmt2 = mysql_query ("select vp2 from tabp where reis='$ret2'");
$fvvmt2 = mysql_fetch_array($qvvmt2);
$vvmt2 = $fvvmt2['vp2'];
$qstt2 = mysql_query ("select status from tabp where reis='$ret2'");
$fstt2 = mysql_fetch_array($qstt2);
$stt2 = $fstt2['status'];

// строка №3
$qret3 = mysql_query ("select reis from tabp where st='3'");
$fret3 = mysql_fetch_array($qret3);
$ret3 = $fret3['reis'];
$qvvcht3 = mysql_query ("select vp1 from tabp where reis='$ret3'");
$fvvcht3 = mysql_fetch_array($qvvcht3);
$vvcht3 = $fvvcht3['vp1'];
$qvvmt3 = mysql_query ("select vp2 from tabp where reis='$ret3'");
$fvvmt3 = mysql_fetch_array($qvvmt3);
$vvmt3 = $fvvmt3['vp2'];
$qstt3 = mysql_query ("select status from tabp where reis='$ret3'");
$fstt3 = mysql_fetch_array($qstt3);
$stt3 = $fstt3['status'];

// строка №4
$qret4 = mysql_query ("select reis from tabp where st='4'");
$fret4 = mysql_fetch_array($qret4);
$ret4 = $fret4['reis'];
$qvvcht4 = mysql_query ("select vp1 from tabp where reis='$ret4'");
$fvvcht4 = mysql_fetch_array($qvvcht4);
$vvcht4 = $fvvcht4['vp1'];
$qvvmt4 = mysql_query ("select vp2 from tabp where reis='$ret4'");
$fvvmt4 = mysql_fetch_array($qvvmt4);
$vvmt4 = $fvvmt4['vp2'];
$qstt4 = mysql_query ("select status from tabp where reis='$ret4'");
$fstt4 = mysql_fetch_array($qstt4);
$stt4 = $fstt4['status'];

// строка №5
$qret5 = mysql_query ("select reis from tabp where st='5'");
$fret5 = mysql_fetch_array($qret5);
$ret5 = $fret5['reis'];
$qvvcht5 = mysql_query ("select vp1 from tabp where reis='$ret5'");
$fvvcht5 = mysql_fetch_array($qvvcht5);
$vvcht5 = $fvvcht5['vp1'];
$qvvmt5 = mysql_query ("select vp2 from tabp where reis='$ret5'");
$fvvmt5 = mysql_fetch_array($qvvmt5);
$vvmt5 = $fvvmt5['vp2'];
$qstt5 = mysql_query ("select status from tabp where reis='$ret5'");
$fstt5 = mysql_fetch_array($qstt5);
$stt5 = $fstt5['status'];

// строка №6
$qret6 = mysql_query ("select reis from tabp where st='6'");
$fret6 = mysql_fetch_array($qret6);
$ret6 = $fret6['reis'];
$qvvcht6 = mysql_query ("select vp1 from tabp where reis='$ret6'");
$fvvcht6 = mysql_fetch_array($qvvcht6);
$vvcht6 = $fvvcht6['vp1'];
$qvvmt6 = mysql_query ("select vp2 from tabp where reis='$ret6'");
$fvvmt6 = mysql_fetch_array($qvvmt6);
$vvmt6 = $fvvmt6['vp2'];
$qstt6 = mysql_query ("select status from tabp where reis='$ret6'");
$fstt6 = mysql_fetch_array($qstt6);
$stt6 = $fstt6['status'];

// строка №7
$qret7 = mysql_query ("select reis from tabp where st='7'");
$fret7 = mysql_fetch_array($qret7);
$ret7 = $fret7['reis'];
$qvvcht7 = mysql_query ("select vp1 from tabp where reis='$ret7'");
$fvvcht7 = mysql_fetch_array($qvvcht7);
$vvcht7 = $fvvcht7['vp1'];
$qvvmt7 = mysql_query ("select vp2 from tabp where reis='$ret7'");
$fvvmt7 = mysql_fetch_array($qvvmt7);
$vvmt7 = $fvvmt7['vp2'];
$qstt7 = mysql_query ("select status from tabp where reis='$ret7'");
$fstt7 = mysql_fetch_array($qstt7);
$stt7 = $fstt7['status'];

// строка №8
$qret8 = mysql_query ("select reis from tabp where st='8'");
$fret8 = mysql_fetch_array($qret8);
$ret8 = $fret8['reis'];
$qvvcht8 = mysql_query ("select vp1 from tabp where reis='$ret8'");
$fvvcht8 = mysql_fetch_array($qvvcht8);
$vvcht8 = $fvvcht8['vp1'];
$qvvmt8 = mysql_query ("select vp2 from tabp where reis='$ret8'");
$fvvmt8 = mysql_fetch_array($qvvmt8);
$vvmt8 = $fvvmt8['vp2'];
$qstt8 = mysql_query ("select status from tabp where reis='$ret8'");
$fstt8 = mysql_fetch_array($qstt8);
$stt8 = $fstt8['status'];

// Табло вылета 
// строка №1
$qretv1 = mysql_query ("select reis from tabv where st='1'");
$fretv1 = mysql_fetch_array($qretv1);
$retv1 = $fretv1['reis'];
$qvvchtv1 = mysql_query ("select vp1 from tabv where reis='$retv1'");
$fvvchtv1 = mysql_fetch_array($qvvchtv1);
$vvchtv1 = $fvvchtv1['vp1'];
$qvvmtv1 = mysql_query ("select vp2 from tabv where reis='$retv1'");
$fvvmtv1 = mysql_fetch_array($qvvmtv1);
$vvmtv1 = $fvvmtv1['vp2'];
$qsttv1 = mysql_query ("select status from tabv where reis='$retv1'");
$fsttv1 = mysql_fetch_array($qsttv1);
$sttv1 = $fsttv1['status'];

// строка №2
$qretv2 = mysql_query ("select reis from tabv where st='2'");
$fretv2 = mysql_fetch_array($qretv2);
$retv2 = $fretv2['reis'];
$qvvchtv2 = mysql_query ("select vp1 from tabv where reis='$retv2'");
$fvvchtv2 = mysql_fetch_array($qvvchtv2);
$vvchtv2 = $fvvchtv2['vp1'];
$qvvmtv2 = mysql_query ("select vp2 from tabv where reis='$retv2'");
$fvvmtv2 = mysql_fetch_array($qvvmtv2);
$vvmtv2 = $fvvmtv2['vp2'];
$qsttv2 = mysql_query ("select status from tabv where reis='$retv2'");
$fsttv2 = mysql_fetch_array($qsttv2);
$sttv2 = $fsttv2['status'];

// строка №3
$qretv3 = mysql_query ("select reis from tabv where st='3'");
$fretv3 = mysql_fetch_array($qretv3);
$retv3 = $fretv3['reis'];
$qvvchtv3 = mysql_query ("select vp1 from tabv where reis='$retv3'");
$fvvchtv3 = mysql_fetch_array($qvvchtv3);
$vvchtv3 = $fvvchtv3['vp1'];
$qvvmtv3 = mysql_query ("select vp2 from tabv where reis='$retv3'");
$fvvmtv3 = mysql_fetch_array($qvvmtv3);
$vvmtv3 = $fvvmtv3['vp2'];
$qsttv3 = mysql_query ("select status from tabv where reis='$retv3'");
$fsttv3 = mysql_fetch_array($qsttv3);
$sttv3 = $fsttv3['status'];

// строка №4
$qretv4 = mysql_query ("select reis from tabv where st='4'");
$fretv4 = mysql_fetch_array($qretv4);
$retv4 = $fretv4['reis'];
$qvvchtv4 = mysql_query ("select vp1 from tabv where reis='$retv4'");
$fvvchtv4 = mysql_fetch_array($qvvchtv4);
$vvchtv4 = $fvvchtv4['vp1'];
$qvvmtv4 = mysql_query ("select vp2 from tabv where reis='$retv4'");
$fvvmtv4 = mysql_fetch_array($qvvmtv4);
$vvmtv4 = $fvvmtv4['vp2'];
$qsttv4 = mysql_query ("select status from tabv where reis='$retv4'");
$fsttv4 = mysql_fetch_array($qsttv4);
$sttv4 = $fsttv4['status'];

// строка №5
$qretv5 = mysql_query ("select reis from tabv where st='5'");
$fretv5 = mysql_fetch_array($qretv5);
$retv5 = $fretv5['reis'];
$qvvchtv5 = mysql_query ("select vp1 from tabv where reis='$retv5'");
$fvvchtv5 = mysql_fetch_array($qvvchtv5);
$vvchtv5 = $fvvchtv5['vp1'];
$qvvmtv5 = mysql_query ("select vp2 from tabv where reis='$retv5'");
$fvvmtv5 = mysql_fetch_array($qvvmtv5);
$vvmtv5 = $fvvmtv5['vp2'];
$qsttv5 = mysql_query ("select status from tabv where reis='$retv5'");
$fsttv5 = mysql_fetch_array($qsttv5);
$sttv5 = $fsttv5['status'];

// строка №6
$qretv6 = mysql_query ("select reis from tabv where st='6'");
$fretv6 = mysql_fetch_array($qretv6);
$retv6 = $fretv6['reis'];
$qvvchtv6 = mysql_query ("select vp1 from tabv where reis='$retv6'");
$fvvchtv6 = mysql_fetch_array($qvvchtv6);
$vvchtv6 = $fvvchtv6['vp1'];
$qvvmtv6 = mysql_query ("select vp2 from tabv where reis='$retv6'");
$fvvmtv6 = mysql_fetch_array($qvvmtv6);
$vvmtv6 = $fvvmtv6['vp2'];
$qsttv6 = mysql_query ("select status from tabv where reis='$retv6'");
$fsttv6 = mysql_fetch_array($qsttv6);
$sttv6 = $fsttv6['status'];

// строка №7
$qretv7 = mysql_query ("select reis from tabv where st='7'");
$fretv7 = mysql_fetch_array($qretv7);
$retv7 = $fretv7['reis'];
$qvvchtv7 = mysql_query ("select vp1 from tabv where reis='$retv7'");
$fvvchtv7 = mysql_fetch_array($qvvchtv7);
$vvchtv7 = $fvvchtv7['vp1'];
$qvvmtv7 = mysql_query ("select vp2 from tabv where reis='$retv7'");
$fvvmtv7 = mysql_fetch_array($qvvmtv7);
$vvmtv7 = $fvvmtv7['vp2'];
$qsttv7 = mysql_query ("select status from tabv where reis='$retv7'");
$fsttv7 = mysql_fetch_array($qsttv7);
$sttv7 = $fsttv7['status'];

// строка №8
$qretv8 = mysql_query ("select reis from tabv where st='8'");
$fretv8 = mysql_fetch_array($qretv8);
$retv8 = $fretv8['reis'];
$qvvchtv8 = mysql_query ("select vp1 from tabv where reis='$retv8'");
$fvvchtv8 = mysql_fetch_array($qvvchtv8);
$vvchtv8 = $fvvchtv8['vp1'];
$qvvmtv8 = mysql_query ("select vp2 from tabv where reis='$retv8'");
$fvvmtv8 = mysql_fetch_array($qvvmtv8);
$vvmtv8 = $fvvmtv8['vp2'];
$qsttv8 = mysql_query ("select status from tabv where reis='$retv8'");
$fsttv8 = mysql_fetch_array($qsttv8);
$sttv8 = $fsttv8['status'];

if ($sttv1==0) {$stav1='';}
if ($sttv2==0) {$stav2='';}
if ($sttv3==0) {$stav3='';}
if ($sttv4==0) {$stav4='';}
if ($sttv5==0) {$stav5='';}
if ($sttv6==0) {$stav6='';}
if ($sttv7==0) {$stav7='';}
if ($sttv8==0) {$stav8='';}

if ($stt1==0) {$sta1='';}
if ($stt2==0) {$sta2='';}
if ($stt3==0) {$sta3='';}
if ($stt4==0) {$sta4='';}
if ($stt5==0) {$sta5='';}
if ($stt6==0) {$sta6='';}
if ($stt7==0) {$sta7='';}
if ($stt8==0) {$sta8='';}

if ($stt1==1) { $sta1='Прибыл'; } else if ($stt1==2) { $sta1='Задержка'; } else if ($stt1==3) { $sta1='Посадка'; } else if ($stt1==4) { $sta1='Ожидается'; } else if ($stt1==5) { $sta1='Вылетел'; } else if ($stt1==6) { $sta1='Регистрация'; };
if ($stt2==1) { $sta2='Прибыл'; } else if ($stt2==2) { $sta2='Задержка'; } else if ($stt2==3) { $sta2='Посадка'; } else if ($stt2==4) { $sta2='Ожидается'; } else if ($stt2==5) { $sta2='Вылетел'; } else if ($stt2==6) { $sta2='Регистрация'; };
if ($stt3==1) { $sta3='Прибыл'; } else if ($stt3==2) { $sta3='Задержка'; } else if ($stt3==3) { $sta3='Посадка'; } else if ($stt3==4) { $sta3='Ожидается'; } else if ($stt3==5) { $sta3='Вылетел'; } else if ($stt3==6) { $sta3='Регистрация'; };
if ($stt4==1) { $sta4='Прибыл'; } else if ($stt4==2) { $sta4='Задержка'; } else if ($stt4==3) { $sta4='Посадка'; } else if ($stt4==4) { $sta4='Ожидается'; } else if ($stt4==5) { $sta4='Вылетел'; } else if ($stt4==6) { $sta4='Регистрация'; };
if ($stt5==1) { $sta5='Прибыл'; } else if ($stt5==2) { $sta5='Задержка'; } else if ($stt5==3) { $sta5='Посадка'; } else if ($stt5==4) { $sta5='Ожидается'; } else if ($stt5==5) { $sta5='Вылетел'; } else if ($stt5==6) { $sta5='Регистрация'; };
if ($stt6==1) { $sta6='Прибыл'; } else if ($stt6==2) { $sta6='Задержка'; } else if ($stt6==3) { $sta6='Посадка'; } else if ($stt6==4) { $sta6='Ожидается'; } else if ($stt6==5) { $sta6='Вылетел'; } else if ($stt6==6) { $sta6='Регистрация'; };
if ($stt7==1) { $sta7='Прибыл'; } else if ($stt7==2) { $sta7='Задержка'; } else if ($stt7==3) { $sta7='Посадка'; } else if ($stt7==4) { $sta7='Ожидается'; } else if ($stt7==5) { $sta7='Вылетел'; } else if ($stt7==6) { $sta7='Регистрация'; };
if ($stt8==1) { $sta8='Прибыл'; } else if ($stt8==2) { $sta8='Задержка'; } else if ($stt8==3) { $sta8='Посадка'; } else if ($stt8==4) { $sta8='Ожидается'; } else if ($stt8==5) { $sta8='Вылетел'; } else if ($stt8==6) { $sta8='Регистрация'; };

if ($sttv1==1) { $stav1='Прибыл'; } else if ($sttv1==2) { $stav1='Задержка'; } else if ($sttv1==3) { $stav1='Посадка'; } else if ($sttv1==4) { $stav1='Ожидается'; } else if ($sttv1==5) { $stav1='Вылетел'; } else if ($sttv1==6) { $stav1='Регистрация'; } else if ($sttv1==7) { $stav1='Посадкапасс'; };
if ($sttv2==1) { $stav2='Прибыл'; } else if ($sttv2==2) { $stav2='Задержка'; } else if ($sttv2==3) { $stav2='Посадка'; } else if ($sttv2==4) { $stav2='Ожидается'; } else if ($sttv2==5) { $stav2='Вылетел'; } else if ($sttv2==6) { $stav2='Регистрация'; } else if ($sttv2==7) { $stav2='Посадкапасс'; };
if ($sttv3==1) { $stav3='Прибыл'; } else if ($sttv3==2) { $stav3='Задержка'; } else if ($sttv3==3) { $stav3='Посадка'; } else if ($sttv3==4) { $stav3='Ожидается'; } else if ($sttv3==5) { $stav3='Вылетел'; } else if ($sttv3==6) { $stav3='Регистрация'; } else if ($sttv3==7) { $stav3='Посадкапасс'; };
if ($sttv4==1) { $stav4='Прибыл'; } else if ($sttv4==2) { $stav4='Задержка'; } else if ($sttv4==3) { $stav4='Посадка'; } else if ($sttv4==4) { $stav4='Ожидается'; } else if ($sttv4==5) { $stav4='Вылетел'; } else if ($sttv4==6) { $stav4='Регистрация'; } else if ($sttv4==7) { $stav4='Посадкапасс'; };
if ($sttv5==1) { $stav5='Прибыл'; } else if ($sttv5==2) { $stav5='Задержка'; } else if ($sttv5==3) { $stav5='Посадка'; } else if ($sttv5==4) { $stav5='Ожидается'; } else if ($sttv5==5) { $stav5='Вылетел'; } else if ($sttv5==6) { $stav5='Регистрация'; } else if ($sttv5==7) { $stav5='Посадкапасс'; };
if ($sttv6==1) { $stav6='Прибыл'; } else if ($sttv6==2) { $stav6='Задержка'; } else if ($sttv6==3) { $stav6='Посадка'; } else if ($sttv6==4) { $stav6='Ожидается'; } else if ($sttv6==5) { $stav6='Вылетел'; } else if ($sttv6==6) { $stav6='Регистрация'; } else if ($sttv6==7) { $stav6='Посадкапасс'; };
if ($sttv7==1) { $stav7='Прибыл'; } else if ($sttv7==2) { $stav7='Задержка'; } else if ($sttv7==3) { $stav7='Посадка'; } else if ($sttv7==4) { $stav7='Ожидается'; } else if ($sttv7==5) { $stav7='Вылетел'; } else if ($sttv7==6) { $stav7='Регистрация'; } else if ($sttv7==7) { $stav7='Посадкапасс'; };
if ($sttv8==1) { $stav8='Прибыл'; } else if ($sttv8==2) { $stav8='Задержка'; } else if ($sttv8==3) { $stav8='Посадка'; } else if ($sttv8==4) { $stav8='Ожидается'; } else if ($sttv8==5) { $stav8='Вылетел'; } else if ($sttv8==6) { $stav8='Регистрация'; } else if ($sttv8==7) { $stav8='Посадкапасс'; };

?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Res1() {
	document.getElementById("ret1").selectedIndex = 
	document.getElementById("ret1").length = 45;
	document.getElementById("vvcht1").selectedIndex = 
	document.getElementById("vvcht1").value = '';
	document.getElementById("vvmt1").selectedIndex = 
	document.getElementById("vvmt1").value = '';
	document.getElementById("status1").selectedIndex = 
	document.getElementById("status1").length = 5;
}
function Res2() {
	document.getElementById("ret2").selectedIndex = 
	document.getElementById("ret2").length = 45;
	document.getElementById("vvcht2").selectedIndex = 
	document.getElementById("vvcht2").value = '';
	document.getElementById("vvmt2").selectedIndex = 
	document.getElementById("vvmt2").value = '';
	document.getElementById("status2").selectedIndex = 
	document.getElementById("status2").length = 5;
}
function Res3() {
	document.getElementById("ret3").selectedIndex = 
	document.getElementById("ret3").length = 45;
	document.getElementById("vvcht3").selectedIndex = 
	document.getElementById("vvcht3").value = '';
	document.getElementById("vvmt3").selectedIndex = 
	document.getElementById("vvmt3").value = '';
	document.getElementById("status3").selectedIndex = 
	document.getElementById("status3").length = 5;
}
function Res4() {
	document.getElementById("ret4").selectedIndex = 
	document.getElementById("ret4").length = 45;
	document.getElementById("vvcht4").selectedIndex = 
	document.getElementById("vvcht4").value = '';
	document.getElementById("vvmt4").selectedIndex = 
	document.getElementById("vvmt4").value = '';
	document.getElementById("status4").selectedIndex = 
	document.getElementById("status4").length = 5;
}
function Res5() {
	document.getElementById("ret5").selectedIndex = 
	document.getElementById("ret5").length = 45;
	document.getElementById("vvcht5").selectedIndex = 
	document.getElementById("vvcht5").value = '';
	document.getElementById("vvmt5").selectedIndex = 
	document.getElementById("vvmt5").value = '';
	document.getElementById("status5").selectedIndex = 
	document.getElementById("status5").length = 5;
}
function Res6() {
	document.getElementById("ret6").selectedIndex = 
	document.getElementById("ret6").length = 45;
	document.getElementById("vvcht6").selectedIndex = 
	document.getElementById("vvcht6").value = '';
	document.getElementById("vvmt6").selectedIndex = 
	document.getElementById("vvmt6").value = '';
	document.getElementById("status6").selectedIndex = 
	document.getElementById("status6").length = 5;
}
function Res7() {
	document.getElementById("ret7").selectedIndex = 
	document.getElementById("ret7").length = 45;
	document.getElementById("vvcht7").selectedIndex = 
	document.getElementById("vvcht7").value = '';
	document.getElementById("vvmt7").selectedIndex = 
	document.getElementById("vvmt7").value = '';
	document.getElementById("status7").selectedIndex = 
	document.getElementById("status7").length = 5;
}
function Res8() {
	document.getElementById("ret8").selectedIndex = 
	document.getElementById("ret8").length = 45;
	document.getElementById("vvcht8").selectedIndex = 
	document.getElementById("vvcht8").value = '';
	document.getElementById("vvmt8").selectedIndex = 
	document.getElementById("vvmt8").value = '';
	document.getElementById("status8").selectedIndex = 
	document.getElementById("status8").length = 5;
}

function Resv1() {
	document.getElementById("retv1").selectedIndex = 
	document.getElementById("retv1").length = 45;
	document.getElementById("vvchtv1").selectedIndex = 
	document.getElementById("vvchtv1").value = '';
	document.getElementById("vvmtv1").selectedIndex = 
	document.getElementById("vvmtv1").value = '';
	document.getElementById("statusv1").selectedIndex = 
	document.getElementById("statusv1").length = 5;
}
function Resv2() {
	document.getElementById("retv2").selectedIndex = 
	document.getElementById("retv2").length = 45;
	document.getElementById("vvchtv2").selectedIndex = 
	document.getElementById("vvchtv2").value = '';
	document.getElementById("vvmtv2").selectedIndex = 
	document.getElementById("vvmtv2").value = '';
	document.getElementById("statusv2").selectedIndex = 
	document.getElementById("statusv2").length = 5;
}
function Resv3() {
	document.getElementById("retv3").selectedIndex = 
	document.getElementById("retv3").length = 45;
	document.getElementById("vvchtv3").selectedIndex = 
	document.getElementById("vvchtv3").value = '';
	document.getElementById("vvmtv3").selectedIndex = 
	document.getElementById("vvmtv3").value = '';
	document.getElementById("statusv3").selectedIndex = 
	document.getElementById("statusv3").length = 5;
}
function Resv4() {
	document.getElementById("retv4").selectedIndex = 
	document.getElementById("retv4").length = 45;
	document.getElementById("vvchtv4").selectedIndex = 
	document.getElementById("vvchtv4").value = '';
	document.getElementById("vvmtv4").selectedIndex = 
	document.getElementById("vvmtv4").value = '';
	document.getElementById("statusv4").selectedIndex = 
	document.getElementById("statusv4").length = 5;
}
function Resv5() {
	document.getElementById("retv5").selectedIndex = 
	document.getElementById("retv5").length = 45;
	document.getElementById("vvchtv5").selectedIndex = 
	document.getElementById("vvchtv5").value = '';
	document.getElementById("vvmtv5").selectedIndex = 
	document.getElementById("vvmtv5").value = '';
	document.getElementById("statusv5").selectedIndex = 
	document.getElementById("statusv5").length = 5;
}
function Resv6() {
	document.getElementById("retv6").selectedIndex = 
	document.getElementById("retv6").length = 45;
	document.getElementById("vvchtv6").selectedIndex = 
	document.getElementById("vvchtv6").value = '';
	document.getElementById("vvmtv6").selectedIndex = 
	document.getElementById("vvmtv6").value = '';
	document.getElementById("statusv6").selectedIndex = 
	document.getElementById("statusv6").length = 5;
}
function Resv7() {
	document.getElementById("retv7").selectedIndex = 
	document.getElementById("retv7").length = 45;
	document.getElementById("vvchtv7").selectedIndex = 
	document.getElementById("vvchtv7").value = '';
	document.getElementById("vvmtv7").selectedIndex = 
	document.getElementById("vvmtv7").value = '';
	document.getElementById("statusv7").selectedIndex = 
	document.getElementById("statusv7").length = 5;
}
function Resv8() {
	document.getElementById("retv8").selectedIndex = 
	document.getElementById("retv8").length = 45;
	document.getElementById("vvchtv8").selectedIndex = 
	document.getElementById("vvchtv8").value = '';
	document.getElementById("vvmtv8").selectedIndex = 
	document.getElementById("vvmtv8").value = '';
	document.getElementById("statusv8").selectedIndex = 
	document.getElementById("statusv8").length = 5;
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">

<br/><br/><font size="5" style="margin: 0 0 0 80px;"><b>Табло прилета:</b></font><font size="5" style="margin: 0 0 0 180px;"><b>Табло вылета:</b></font><br/><br/>
<TABLE BORDER="1" id="demoTable" style="margin: 0 0 0 0px;" >
<tr><td><center>№ Рейса</center></td><td><center>Время вылета</center></td><td><center>Статус</center></td><td></td></tr>
<tr><td>
<?php
echo "<SELECT NAME='ret1' id='ret1'>";
echo "<option VALUE='$ret1'>$ret1</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht1" type="text" name="vvcht1" class="POST" value="<?php echo "$vvcht1" ?>"/>ч.<input style="width: 30px" id="vvmt1" type="text" name="vvmt1" class="POST" value="<?php echo "$vvmt1" ?>"/>мин.</td><td>
<SELECT NAME="status1" id="status1">
        <option selected VALUE="<?php echo "$stt1" ?>"><?php echo "$sta1" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res1()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret2' id='ret2'>";
echo "<option VALUE='$ret2'>$ret2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht2" type="text" name="vvcht2" class="POST" value="<?php echo "$vvcht2" ?>"/>ч.<input style="width: 30px" id="vvmt2" type="text" name="vvmt2" class="POST" value="<?php echo "$vvmt2" ?>"/>мин.</td><td>
<SELECT NAME="status2" id="status2">
        <option  selected VALUE="<?php echo "$stt2" ?>"><?php echo "$sta2" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res2()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret3' id='ret3'>";
echo "<option VALUE='$ret3'>$ret3</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht3" type="text" name="vvcht3" class="POST" value="<?php echo "$vvcht3" ?>"/>ч.<input style="width: 30px" id="vvmt3" type="text" name="vvmt3" class="POST" value="<?php echo "$vvmt3" ?>"/>мин.</td><td>
<SELECT NAME="status3" id="status3">
        <option  selected VALUE="<?php echo "$stt3" ?>"><?php echo "$sta3" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res3()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret4' id='ret4'>";
echo "<option VALUE='$ret4'>$ret4</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht4" type="text" name="vvcht4" class="POST" value="<?php echo "$vvcht4" ?>"/>ч.<input style="width: 30px" id="vvmt4" type="text" name="vvmt4" class="POST" value="<?php echo "$vvmt4" ?>"/>мин.</td><td>
<SELECT NAME="status4" id="status4">
        <option  selected VALUE="<?php echo "$stt4" ?>"><?php echo "$sta4" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res4()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret5' id='ret5'>";
echo "<option VALUE='$ret5'>$ret5</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht5" type="text" name="vvcht5" class="POST" value="<?php echo "$vvcht5" ?>"/>ч.<input style="width: 30px" id="vvmt5" type="text" name="vvmt5" class="POST" value="<?php echo "$vvmt5" ?>"/>мин.</td><td>
<SELECT NAME="status5" id="status5">
        <option  selected VALUE="<?php echo "$stt5" ?>"><?php echo "$sta5" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res5()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret6' id='ret6'>";
echo "<option VALUE='$ret6'>$ret6</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht6" type="text" name="vvcht6" class="POST" value="<?php echo "$vvcht6" ?>"/>ч.<input style="width: 30px" id="vvmt6" type="text" name="vvmt6" class="POST" value="<?php echo "$vvmt6" ?>"/>мин.</td><td>
<SELECT NAME="status6" id="status6">
        <option  selected VALUE="<?php echo "$stt6" ?>"><?php echo "$sta6" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res6()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret7' id='ret7'>";
echo "<option VALUE='$ret7'>$ret7</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht7" type="text" name="vvcht7" class="POST" value="<?php echo "$vvcht7" ?>"/>ч.<input style="width: 30px" id="vvmt7" type="text" name="vvmt7" class="POST" value="<?php echo "$vvmt7" ?>"/>мин.</td><td>
<SELECT NAME="status7" id="status7">
        <option  selected VALUE="<?php echo "$stt7" ?>"><?php echo "$sta7" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res7()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='ret8' id='ret8'>";
echo "<option VALUE='$ret8'>$ret8</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvcht8" type="text" name="vvcht8" class="POST" value="<?php echo "$vvcht8" ?>"/>ч.<input style="width: 30px" id="vvmt8" type="text" name="vvmt8" class="POST" value="<?php echo "$vvmt8" ?>"/>мин.</td><td>
<SELECT NAME="status8" id="status8">
        <option  selected VALUE="<?php echo "$stt8" ?>"><?php echo "$sta8" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
      	<OPTION VALUE="4">Ожидается</option>
</SELECT>
</td><td><input type='button' onclick='Res8()' value='X' title='Очистить строку'></td></tr>

</table>

<TABLE BORDER="1" id="demoTable" style="margin: -269px 0 0 350px;" >
<tr><td><center>№ Рейса</center></td><td><center>Время вылета</center></td><td><center>Статус</center></td><td></td></tr>
<tr><td>
<?php
echo "<SELECT NAME='retv1' id='retv1'>";
echo "<option VALUE='$retv1'>$retv1</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv1" type="text" name="vvchtv1" class="POST" value="<?php echo "$vvchtv1" ?>"/>ч.<input style="width: 30px" id="vvmtv1" type="text" name="vvmtv1" class="POST" value="<?php echo "$vvmtv1" ?>"/>мин.</td><td>
<SELECT NAME="statusv1" id="statusv1">
        <option  selected VALUE="<?php echo "$sttv1" ?>"><?php echo "$stav1" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv1()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv2' id='retv2'>";
echo "<option VALUE='$retv2'>$retv2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv2" type="text" name="vvchtv2" class="POST" value="<?php echo "$vvchtv2" ?>"/>ч.<input style="width: 30px" id="vvmtv2" type="text" name="vvmtv2" class="POST" value="<?php echo "$vvmtv2" ?>"/>мин.</td><td>
<SELECT NAME="statusv2" id="statusv2">
        <option  selected VALUE="<?php echo "$sttv2" ?>"><?php echo "$stav2" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv2()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv3' id='retv3'>";
echo "<option VALUE='$retv3'>$retv3</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv3" type="text" name="vvchtv3" class="POST" value="<?php echo "$vvchtv3" ?>"/>ч.<input style="width: 30px" id="vvmtv3" type="text" name="vvmtv3" class="POST" value="<?php echo "$vvmtv3" ?>"/>мин.</td><td>
<SELECT NAME="statusv3" id="statusv3">
        <option  selected VALUE="<?php echo "$sttv3" ?>"><?php echo "$stav3" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv3()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv4' id='retv4'>";
echo "<option VALUE='$retv4'>$retv4</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv4" type="text" name="vvchtv4" class="POST" value="<?php echo "$vvchtv4" ?>"/>ч.<input style="width: 30px" id="vvmtv4" type="text" name="vvmtv4" class="POST" value="<?php echo "$vvmtv4" ?>"/>мин.</td><td>
<SELECT NAME="statusv4" id="statusv4">
        <option  selected VALUE="<?php echo "$sttv4" ?>"><?php echo "$stav4" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv4()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv5' id='retv5'>";
echo "<option VALUE='$retv5'>$retv5</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv5" type="text" name="vvchtv5" class="POST" value="<?php echo "$vvchtv5" ?>"/>ч.<input style="width: 30px" id="vvmtv5" type="text" name="vvmtv5" class="POST" value="<?php echo "$vvmtv5" ?>"/>мин.</td><td>
<SELECT NAME="statusv5" id="statusv5">
        <option  selected VALUE="<?php echo "$sttv5" ?>"><?php echo "$stav5" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv5()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv6' id='retv6'>";
echo "<option VALUE='$retv6'>$retv6</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv6" type="text" name="vvchtv6" class="POST" value="<?php echo "$vvchtv6" ?>"/>ч.<input style="width: 30px" id="vvmtv6" type="text" name="vvmtv6" class="POST" value="<?php echo "$vvmtv6" ?>"/>мин.</td><td>
<SELECT NAME="statusv6" id="statusv6">
        <option  selected VALUE="<?php echo "$sttv6" ?>"><?php echo "$stav6" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv6()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv7' id='retv7'>";
echo "<option VALUE='$retv7'>$retv7</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv7" type="text" name="vvchtv7" class="POST" value="<?php echo "$vvchtv7" ?>"/>ч.<input style="width: 30px" id="vvmtv7" type="text" name="vvmtv7" class="POST" value="<?php echo "$vvmtv7" ?>"/>мин.</td><td>
<SELECT NAME="statusv7" id="statusv7">
        <option  selected VALUE="<?php echo "$sttv7" ?>"><?php echo "$stav7" ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv7()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?php
echo "<SELECT NAME='retv8' id='retv8'>";
echo "<option VALUE='$retv8'>$retv8</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td><td><input style="width: 30px" id="vvchtv8" type="text" name="vvchtv8" class="POST" value="<?php echo "$vvchtv8" ?>"/>ч.<input style="width: 30px" id="vvmtv8" type="text" name="vvmtv8" class="POST" value="<?php echo "$vvmtv8" ?>"/>мин.</td><td>
<SELECT NAME="statusv8" id="statusv8">
        <option selected VALUE='<?php echo "$sttv8" ?>'><?php echo $stav8 ?></option>
        <OPTION VALUE="2">Задержка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
		<OPTION VALUE="7">Посадкапасс</option>
</SELECT>
</td><td><input type='button' onclick='Resv8()' value='X' title='Очистить строку'></td></tr>

</table>

<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="margin: 20px 0 0 220px; width:200px; height:50px;">
</FORM>

</body> 
</html>

