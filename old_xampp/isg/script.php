<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{

$ret1=$_POST["ret1"];
$vvcht1=$_POST["vvcht1"];
$vvmt1=$_POST["vvmt1"];
$status1=$_POST["status1"];
$ret2=$_POST["ret2"];
$vvcht2=$_POST["vvcht2"];
$vvmt2=$_POST["vvmt2"];
$status2=$_POST["status2"];
$ret3=$_POST["ret3"];
$vvcht3=$_POST["vvcht3"];
$vvmt3=$_POST["vvmt3"];
$status3=$_POST["status3"];
$ret4=$_POST["ret4"];
$vvcht4=$_POST["vvcht4"];
$vvmt4=$_POST["vvmt4"];
$status4=$_POST["status4"];
$ret5=$_POST["ret5"];
$vvcht5=$_POST["vvcht5"];
$vvmt5=$_POST["vvmt5"];
$status5=$_POST["status5"];
$ret6=$_POST["ret6"];
$vvcht6=$_POST["vvcht6"];
$vvmt6=$_POST["vvmt6"];
$status6=$_POST["status6"];
$ret7=$_POST["ret7"];
$vvcht7=$_POST["vvcht7"];
$vvmt7=$_POST["vvmt7"];
$status7=$_POST["status7"];
$ret8=$_POST["ret8"];
$vvcht8=$_POST["vvcht8"];
$vvmt8=$_POST["vvmt8"];
$status8=$_POST["status8"];


$retv1=$_POST["retv1"];
$vvchtv1=$_POST["vvchtv1"];
$vvmtv1=$_POST["vvmtv1"];
$statusv1=$_POST["statusv1"];
$retv2=$_POST["retv2"];
$vvchtv2=$_POST["vvchtv2"];
$vvmtv2=$_POST["vvmtv2"];
$statusv2=$_POST["statusv2"];
$retv3=$_POST["retv3"];
$vvchtv3=$_POST["vvchtv3"];
$vvmtv3=$_POST["vvmtv3"];
$statusv3=$_POST["statusv3"];
$retv4=$_POST["retv4"];
$vvchtv4=$_POST["vvchtv4"];
$vvmtv4=$_POST["vvmtv4"];
$statusv4=$_POST["statusv4"];
$retv5=$_POST["retv5"];
$vvchtv5=$_POST["vvchtv5"];
$vvmtv5=$_POST["vvmtv5"];
$statusv5=$_POST["statusv5"];
$retv6=$_POST["retv6"];
$vvchtv6=$_POST["vvchtv6"];
$vvmtv6=$_POST["vvmtv6"];
$statusv6=$_POST["statusv6"];
$retv7=$_POST["retv7"];
$vvchtv7=$_POST["vvchtv7"];
$vvmtv7=$_POST["vvmtv7"];
$statusv7=$_POST["statusv7"];
$retv8=$_POST["retv8"];
$vvchtv8=$_POST["vvchtv8"];
$vvmtv8=$_POST["vvmtv8"];
$statusv8=$_POST["statusv8"];
}
// табло прилета
$qp1 = mysql_query ("select zd_p from tables where reis='$ret1'");
$fp1 = mysql_fetch_array($qp1);
$p1 = $fp1['zd_p'];
$qp2 = mysql_query ("select zd_p from tables where reis='$ret2'");
$fp2 = mysql_fetch_array($qp2);
$p2 = $fp2['zd_p'];
$qp3 = mysql_query ("select zd_p from tables where reis='$ret3'");
$fp3 = mysql_fetch_array($qp3);
$p3 = $fp3['zd_p'];
$qp4 = mysql_query ("select zd_p from tables where reis='$ret4'");
$fp4 = mysql_fetch_array($qp4);
$p4 = $fp4['zd_p'];
$qp5 = mysql_query ("select zd_p from tables where reis='$ret5'");
$fp5 = mysql_fetch_array($qp5);
$p5 = $fp5['zd_p'];
$qp6 = mysql_query ("select zd_p from tables where reis='$ret6'");
$fp6 = mysql_fetch_array($qp6);
$p6 = $fp6['zd_p'];
$qp7 = mysql_query ("select zd_p from tables where reis='$ret7'");
$fp7 = mysql_fetch_array($qp7);
$p7 = $fp7['zd_p'];
$qp8 = mysql_query ("select zd_p from tables where reis='$ret8'");
$fp8 = mysql_fetch_array($qp8);
$p8 = $fp8['zd_p'];

$qc1 = mysql_query ("select company from tables where reis='$ret1'");
$fc1 = mysql_fetch_array($qc1);
$c1 = $fc1['company'];
$qc2 = mysql_query ("select company from tables where reis='$ret2'");
$fc2 = mysql_fetch_array($qc2);
$c2 = $fc2['company'];
$qc3 = mysql_query ("select company from tables where reis='$ret3'");
$fc3 = mysql_fetch_array($qc3);
$c3 = $fc3['company'];
$qc4 = mysql_query ("select company from tables where reis='$ret4'");
$fc4 = mysql_fetch_array($qc4);
$c4 = $fc4['company'];
$qc5 = mysql_query ("select company from tables where reis='$ret5'");
$fc5 = mysql_fetch_array($qc5);
$c5 = $fc5['company'];
$qc6 = mysql_query ("select company from tables where reis='$ret6'");
$fc6 = mysql_fetch_array($qc6);
$c6 = $fc6['company'];
$qc7 = mysql_query ("select company from tables where reis='$ret7'");
$fc7 = mysql_fetch_array($qc7);
$c7 = $fc7['company'];
$qc8 = mysql_query ("select company from tables where reis='$ret8'");
$fc8 = mysql_fetch_array($qc8);
$c8 = $fc8['company'];

// табло вылета
$qpv1 = mysql_query ("select zd_p from tables where reis='$retv1'");
$fpv1 = mysql_fetch_array($qpv1);
$pv1 = $fpv1['zd_p'];
$qpv2 = mysql_query ("select zd_p from tables where reis='$retv2'");
$fpv2 = mysql_fetch_array($qpv2);
$pv2 = $fpv2['zd_p'];
$qpv3 = mysql_query ("select zd_p from tables where reis='$retv3'");
$fpv3 = mysql_fetch_array($qpv3);
$pv3 = $fpv3['zd_p'];
$qpv4 = mysql_query ("select zd_p from tables where reis='$retv4'");
$fpv4 = mysql_fetch_array($qpv4);
$pv4 = $fpv4['zd_p'];
$qpv5 = mysql_query ("select zd_p from tables where reis='$retv5'");
$fpv5 = mysql_fetch_array($qpv5);
$pv5 = $fpv5['zd_p'];
$qpv6 = mysql_query ("select zd_p from tables where reis='$retv6'");
$fpv6 = mysql_fetch_array($qpv6);
$pv6 = $fpv6['zd_p'];
$qpv7 = mysql_query ("select zd_p from tables where reis='$retv7'");
$fpv7 = mysql_fetch_array($qpv7);
$pv7 = $fpv7['zd_p'];
$qpv8 = mysql_query ("select zd_p from tables where reis='$retv8'");
$fpv8 = mysql_fetch_array($qpv8);
$pv8 = $fpv8['zd_p'];

$qcv1 = mysql_query ("select company from tables where reis='$retv1'");
$fcv1 = mysql_fetch_array($qcv1);
$cv1 = $fcv1['company'];
$qcv2 = mysql_query ("select company from tables where reis='$retv2'");
$fcv2 = mysql_fetch_array($qcv2);
$cv2 = $fcv2['company'];
$qcv3 = mysql_query ("select company from tables where reis='$retv3'");
$fcv3 = mysql_fetch_array($qcv3);
$cv3 = $fcv3['company'];
$qcv4 = mysql_query ("select company from tables where reis='$retv4'");
$fcv4 = mysql_fetch_array($qcv4);
$cv4 = $fcv4['company'];
$qcv5 = mysql_query ("select company from tables where reis='$retv5'");
$fcv5 = mysql_fetch_array($qcv5);
$cv5 = $fcv5['company'];
$qcv6 = mysql_query ("select company from tables where reis='$retv6'");
$fcv6 = mysql_fetch_array($qcv6);
$cv6 = $fcv6['company'];
$qcv7 = mysql_query ("select company from tables where reis='$retv7'");
$fcv7 = mysql_fetch_array($qcv7);
$cv7 = $fcv7['company'];
$qcv8 = mysql_query ("select company from tables where reis='$retv8'");
$fcv8 = mysql_fetch_array($qcv8);
$cv8 = $fcv8['company'];


// табло прилета
$query43  = "UPDATE tabp SET reis='$ret1' WHERE st=1";
$query44  = "UPDATE tabp SET vp1='$vvcht1' WHERE st=1";
$query45  = "UPDATE tabp SET vp2='$vvmt1' WHERE st=1";
$query46  = "UPDATE tabp SET status='$status1' WHERE st=1";
$query47  = "UPDATE tabp SET reis='$ret2' WHERE st=2";
$query48  = "UPDATE tabp SET vp1='$vvcht2' WHERE st=2";
$query49  = "UPDATE tabp SET vp2='$vvmt2' WHERE st=2";
$query50  = "UPDATE tabp SET status='$status2' WHERE st=2";
$query51  = "UPDATE tabp SET reis='$ret3' WHERE st=3";
$query52  = "UPDATE tabp SET vp1='$vvcht3' WHERE st=3";
$query53  = "UPDATE tabp SET vp2='$vvmt3' WHERE st=3";
$query54  = "UPDATE tabp SET status='$status3' WHERE st=3";
$query55  = "UPDATE tabp SET reis='$ret4' WHERE st=4";
$query56  = "UPDATE tabp SET vp1='$vvcht4' WHERE st=4";
$query57  = "UPDATE tabp SET vp2='$vvmt4' WHERE st=4";
$query58  = "UPDATE tabp SET status='$status4' WHERE st=4";
$query59  = "UPDATE tabp SET reis='$ret5' WHERE st=5";
$query60  = "UPDATE tabp SET vp1='$vvcht5' WHERE st=5";
$query61  = "UPDATE tabp SET vp2='$vvmt5' WHERE st=5";
$query62  = "UPDATE tabp SET status='$status5' WHERE st=5";
$query63  = "UPDATE tabp SET reis='$ret6' WHERE st=6";
$query64  = "UPDATE tabp SET vp1='$vvcht6' WHERE st=6";
$query65  = "UPDATE tabp SET vp2='$vvmt6' WHERE st=6";
$query66  = "UPDATE tabp SET status='$status6' WHERE st=6";
$query67  = "UPDATE tabp SET reis='$ret7' WHERE st=7";
$query68  = "UPDATE tabp SET vp1='$vvcht7' WHERE st=7";
$query69  = "UPDATE tabp SET vp2='$vvmt7' WHERE st=7";
$query70  = "UPDATE tabp SET status='$status7' WHERE st=7";
$query71  = "UPDATE tabp SET reis='$ret8' WHERE st=8";
$query72  = "UPDATE tabp SET vp1='$vvcht8' WHERE st=8";
$query73  = "UPDATE tabp SET vp2='$vvmt8' WHERE st=8";
$query74  = "UPDATE tabp SET status='$status8' WHERE st=8";

// табло вылета
$query1  = "UPDATE tabv SET reis='$retv1' WHERE st=1";
$query2  = "UPDATE tabv SET vp1='$vvchtv1' WHERE st=1";
$query3  = "UPDATE tabv SET vp2='$vvmtv1' WHERE st=1";
$query4  = "UPDATE tabv SET status='$statusv1' WHERE st=1";
$query5  = "UPDATE tabv SET reis='$retv2' WHERE st=2";
$query6  = "UPDATE tabv SET vp1='$vvchtv2' WHERE st=2";
$query7  = "UPDATE tabv SET vp2='$vvmtv2' WHERE st=2";
$query8  = "UPDATE tabv SET status='$statusv2' WHERE st=2";
$query9  = "UPDATE tabv SET reis='$retv3' WHERE st=3";
$query10  = "UPDATE tabv SET vp1='$vvchtv3' WHERE st=3";
$query11  = "UPDATE tabv SET vp2='$vvmtv3' WHERE st=3";
$query12  = "UPDATE tabv SET status='$statusv3' WHERE st=3";
$query13  = "UPDATE tabv SET reis='$retv4' WHERE st=4";
$query14  = "UPDATE tabv SET vp1='$vvchtv4' WHERE st=4";
$query15  = "UPDATE tabv SET vp2='$vvmtv4' WHERE st=4";
$query16  = "UPDATE tabv SET status='$statusv4' WHERE st=4";
$query17  = "UPDATE tabv SET reis='$retv5' WHERE st=5";
$query18  = "UPDATE tabv SET vp1='$vvchtv5' WHERE st=5";
$query19  = "UPDATE tabv SET vp2='$vvmtv5' WHERE st=5";
$query20  = "UPDATE tabv SET status='$statusv5' WHERE st=5";
$query21  = "UPDATE tabv SET reis='$retv6' WHERE st=6";
$query22  = "UPDATE tabv SET vp1='$vvchtv6' WHERE st=6";
$query23  = "UPDATE tabv SET vp2='$vvmtv6' WHERE st=6";
$query24  = "UPDATE tabv SET status='$statusv6' WHERE st=6";
$query25  = "UPDATE tabv SET reis='$retv7' WHERE st=7";
$query26  = "UPDATE tabv SET vp1='$vvchtv7' WHERE st=7";
$query27  = "UPDATE tabv SET vp2='$vvmtv7' WHERE st=7";
$query28  = "UPDATE tabv SET status='$statusv7' WHERE st=7";
$query29  = "UPDATE tabv SET reis='$retv8' WHERE st=8";
$query30  = "UPDATE tabv SET vp1='$vvchtv8' WHERE st=8";
$query31  = "UPDATE tabv SET vp2='$vvmtv8' WHERE st=8";
$query32  = "UPDATE tabv SET status='$statusv8' WHERE st=8";

$result = mysql_query($query1);
$result = mysql_query($query2);
$result = mysql_query($query3);
$result = mysql_query($query4);
$result = mysql_query($query5);
$result = mysql_query($query6);
$result = mysql_query($query7);
$result = mysql_query($query8);
$result = mysql_query($query9);
$result = mysql_query($query10);
$result = mysql_query($query11);
$result = mysql_query($query12);
$result = mysql_query($query13);
$result = mysql_query($query14);
$result = mysql_query($query15);
$result = mysql_query($query16);
$result = mysql_query($query17);
$result = mysql_query($query18);
$result = mysql_query($query19);
$result = mysql_query($query20);
$result = mysql_query($query21);
$result = mysql_query($query22);
$result = mysql_query($query23);
$result = mysql_query($query24);
$result = mysql_query($query25);
$result = mysql_query($query26);
$result = mysql_query($query27);
$result = mysql_query($query28);
$result = mysql_query($query29);
$result = mysql_query($query30);
$result = mysql_query($query31);
$result = mysql_query($query32);
$result = mysql_query($query43);
$result = mysql_query($query44);
$result = mysql_query($query45);
$result = mysql_query($query46);
$result = mysql_query($query47);
$result = mysql_query($query48);
$result = mysql_query($query49);
$result = mysql_query($query50);
$result = mysql_query($query51);
$result = mysql_query($query52);
$result = mysql_query($query53);
$result = mysql_query($query54);
$result = mysql_query($query55);
$result = mysql_query($query56);
$result = mysql_query($query57);
$result = mysql_query($query58);
$result = mysql_query($query59);
$result = mysql_query($query60);
$result = mysql_query($query61);
$result = mysql_query($query62);
$result = mysql_query($query63);
$result = mysql_query($query64);
$result = mysql_query($query65);
$result = mysql_query($query66);
$result = mysql_query($query67);
$result = mysql_query($query68);
$result = mysql_query($query69);
$result = mysql_query($query70);
$result = mysql_query($query71);
$result = mysql_query($query72);
$result = mysql_query($query73);
$result = mysql_query($query74);

if ($status1==1) { $sta1='<font color=#090>Прибыл</font>'; } else if ($status1==2) { $sta1='<font color=#C00>Задержка</font>'; } else if ($status1==3) { $sta1='<font color=#036>Посадка</font>'; } else if ($status1==4) { $sta1='<font color=#036>Ожидается</font>'; } else if ($status1==5) { $sta1='<font color=#036>Вылетел</font>'; } else if ($status1==6) { $sta1='<font color=#036>Регистрация</font>'; };
if ($status2==1) { $sta2='<font color=#090>Прибыл</font>'; } else if ($status2==2) { $sta2='<font color=#C00>Задержка</font>'; } else if ($status2==3) { $sta2='<font color=#036>Посадка</font>'; } else if ($status2==4) { $sta2='<font color=#036>Ожидается</font>'; } else if ($status2==5) { $sta2='<font color=#036>Вылетел</font>'; } else if ($status2==6) { $sta2='<font color=#036>Регистрация</font>'; };
if ($status3==1) { $sta3='<font color=#090>Прибыл</font>'; } else if ($status3==2) { $sta3='<font color=#C00>Задержка</font>'; } else if ($status3==3) { $sta3='<font color=#036>Посадка</font>'; } else if ($status3==4) { $sta3='<font color=#036>Ожидается</font>'; } else if ($status3==5) { $sta3='<font color=#036>Вылетел</font>'; } else if ($status3==6) { $sta3='<font color=#036>Регистрация</font>'; };
if ($status4==1) { $sta4='<font color=#090>Прибыл</font>'; } else if ($status4==2) { $sta4='<font color=#C00>Задержка</font>'; } else if ($status4==3) { $sta4='<font color=#036>Посадка</font>'; } else if ($status4==4) { $sta4='<font color=#036>Ожидается</font>'; } else if ($status4==5) { $sta4='<font color=#036>Вылетел</font>'; } else if ($status4==6) { $sta4='<font color=#036>Регистрация</font>'; };
if ($status5==1) { $sta5='<font color=#090>Прибыл</font>'; } else if ($status5==2) { $sta5='<font color=#C00>Задержка</font>'; } else if ($status5==3) { $sta5='<font color=#036>Посадка</font>'; } else if ($status5==4) { $sta5='<font color=#036>Ожидается</font>'; } else if ($status5==5) { $sta5='<font color=#036>Вылетел</font>'; } else if ($status5==6) { $sta5='<font color=#036>Регистрация</font>'; };
if ($status6==1) { $sta6='<font color=#090>Прибыл</font>'; } else if ($status6==2) { $sta6='<font color=#C00>Задержка</font>'; } else if ($status6==3) { $sta6='<font color=#036>Посадка</font>'; } else if ($status6==4) { $sta6='<font color=#036>Ожидается</font>'; } else if ($status6==5) { $sta6='<font color=#036>Вылетел</font>'; } else if ($status6==6) { $sta6='<font color=#036>Регистрация</font>'; };
if ($status7==1) { $sta7='<font color=#090>Прибыл</font>'; } else if ($status7==2) { $sta7='<font color=#C00>Задержка</font>'; } else if ($status7==3) { $sta7='<font color=#036>Посадка</font>'; } else if ($status7==4) { $sta7='<font color=#036>Ожидается</font>'; } else if ($status7==5) { $sta7='<font color=#036>Вылетел</font>'; } else if ($status7==6) { $sta7='<font color=#036>Регистрация</font>'; };
if ($status8==1) { $sta8='<font color=#090>Прибыл</font>'; } else if ($status8==2) { $sta8='<font color=#C00>Задержка</font>'; } else if ($status8==3) { $sta8='<font color=#036>Посадка</font>'; } else if ($status8==4) { $sta8='<font color=#036>Ожидается</font>'; } else if ($status8==5) { $sta8='<font color=#036>Вылетел</font>'; } else if ($status8==6) { $sta8='<font color=#036>Регистрация</font>'; };

if ($statusv1==1) { $stav1='Прибыл'; } else if ($statusv1==2) { $stav1='<font color=#C00>Задержка</font>'; } else if ($statusv1==3) { $stav1='Посадка'; } else if ($statusv1==4) { $stav1='<font color=#036>Ожидается</font>'; } else if ($statusv1==5) { $stav1='<font color=#036>Вылетел</font>'; } else if ($statusv1==6) { $stav1='<font color=#090>Регистрация</font>'; } else if ($statusv1==7) { $stav1='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv2==1) { $stav2='Прибыл'; } else if ($statusv2==2) { $stav2='<font color=#C00>Задержка</font>'; } else if ($statusv2==3) { $stav2='Посадка'; } else if ($statusv2==4) { $stav2='<font color=#036>Ожидается</font>'; } else if ($statusv2==5) { $stav2='<font color=#036>Вылетел</font>'; } else if ($statusv2==6) { $stav2='<font color=#090>Регистрация</font>'; } else if ($statusv2==7) { $stav2='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv3==1) { $stav3='Прибыл'; } else if ($statusv3==2) { $stav3='<font color=#C00>Задержка</font>'; } else if ($statusv3==3) { $stav3='Посадка'; } else if ($statusv3==4) { $stav3='<font color=#036>Ожидается</font>'; } else if ($statusv3==5) { $stav3='<font color=#036>Вылетел</font>'; } else if ($statusv3==6) { $stav3='<font color=#090>Регистрация</font>'; } else if ($statusv3==7) { $stav3='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv4==1) { $stav4='Прибыл'; } else if ($statusv4==2) { $stav4='<font color=#C00>Задержка</font>'; } else if ($statusv4==3) { $stav4='Посадка'; } else if ($statusv4==4) { $stav4='<font color=#036>Ожидается</font>'; } else if ($statusv4==5) { $stav4='<font color=#036>Вылетел</font>'; } else if ($statusv4==6) { $stav4='<font color=#090>Регистрация</font>'; } else if ($statusv4==7) { $stav4='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv5==1) { $stav5='Прибыл'; } else if ($statusv5==2) { $stav5='<font color=#C00>Задержка</font>'; } else if ($statusv5==3) { $stav5='Посадка'; } else if ($statusv5==4) { $stav5='<font color=#036>Ожидается</font>'; } else if ($statusv5==5) { $stav5='<font color=#036>Вылетел</font>'; } else if ($statusv5==6) { $stav5='<font color=#090>Регистрация</font>'; } else if ($statusv5==7) { $stav5='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv6==1) { $stav6='Прибыл'; } else if ($statusv6==2) { $stav6='<font color=#C00>Задержка</font>'; } else if ($statusv6==3) { $stav6='Посадка'; } else if ($statusv6==4) { $stav6='<font color=#036>Ожидается</font>'; } else if ($statusv6==5) { $stav6='<font color=#036>Вылетел</font>'; } else if ($statusv6==6) { $stav6='<font color=#090>Регистрация</font>'; } else if ($statusv6==7) { $stav6='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv7==1) { $stav7='Прибыл'; } else if ($statusv7==2) { $stav7='<font color=#C00>Задержка</font>'; } else if ($statusv7==3) { $stav7='Посадка'; } else if ($statusv7==4) { $stav7='<font color=#036>Ожидается</font>'; } else if ($statusv7==5) { $stav7='<font color=#036>Вылетел</font>'; } else if ($statusv7==6) { $stav7='<font color=#090>Регистрация</font>'; } else if ($statusv7==7) { $stav7='<font color=#090>Посадка пассажиров</font>'; };
if ($statusv8==1) { $stav8='Прибыл'; } else if ($statusv8==2) { $stav8='<font color=#C00>Задержка</font>'; } else if ($statusv8==3) { $stav8='Посадка'; } else if ($statusv8==4) { $stav8='<font color=#036>Ожидается</font>'; } else if ($statusv8==5) { $stav8='<font color=#036>Вылетел</font>'; } else if ($statusv8==6) { $stav8='<font color=#090>Регистрация</font>'; } else if ($statusv8==7) { $stav8='<font color=#090>Посадка пассажиров</font>'; };


$fp = fopen('tablo.php', 'w+');
$tabn1 = '<?php header("Content-Type: text/html;charset=windows-1251"); ?><br/><div id="online">
<table class="table"><tr class="tr1"><td width=80px><center>Рейс</center></td><td  width=200px><center>Направление</center></td><td  width=130px><center>Прибытие</center></td><td  width=110px><center>Статус</center></td></tr>';

if ($ret1<>0) { $table1 = "<tr><td ><center><b>$c1$ret1</b></center></td><td ><center>$p1</center></td><td ><center><b>$vvcht1:$vvmt1</b></center></td><td ><center>$sta1</center></td></tr>"; } else {$table1 = "";}
if ($ret2<>0) { $table2 = "<tr><td ><center><b>$c2$ret2</b></center></td><td ><center>$p2</center></td><td ><center><b>$vvcht2:$vvmt2</b></center></td><td ><center>$sta2</center></td></tr>"; } else {$table2 = "";}
if ($ret3<>0) { $table3 = "<tr><td ><center><b>$c3$ret3</b></center></td><td ><center>$p3</center></td><td ><center><b>$vvcht3:$vvmt3</b></center></td><td ><center>$sta3</center></td></tr>"; } else {$table3 = "";}
if ($ret4<>0) { $table4 = "<tr><td ><center><b>$c4$ret4</b></center></td><td ><center>$p4</center></td><td ><center><b>$vvcht4:$vvmt4</b></center></td><td ><center>$sta4</center></td></tr>"; } else {$table4 = "";}
if ($ret5<>0) { $table5 = "<tr><td ><center><b>$c5$ret5</b></center></td><td ><center>$p5</center></td><td ><center><b>$vvcht5:$vvmt5</b></center></td><td ><center>$sta5</center></td></tr>"; } else {$table5 = "";}
if ($ret6<>0) { $table6 = "<tr><td ><center><b>$c6$ret6</b></center></td><td ><center>$p6</center></td><td ><center><b>$vvcht6:$vvmt6</b></center></td><td ><center>$sta6</center></td></tr>"; } else {$table6 = "";}
if ($ret7<>0) { $table7 = "<tr><td ><center><b>$c7$ret7</b></center></td><td ><center>$p7</center></td><td ><center><b>$vvcht7:$vvmt7</b></center></td><td ><center>$sta7</center></td></tr>"; } else {$table7 = "";}
if ($ret8<>0) { $table8 = "<tr><td ><center><b>$c8$ret8</b></center></td><td ><center>$p8</center></td><td ><center><b>$vvcht8:$vvmt8</b></center></td><td ><center>$sta8</center></td></tr>"; } else {$table8 = "";}
$tabk = '</table></div>';

$tabk1 = "$tabn1 $table1 $table2 $table3 $table4 $table5 $table6 $table7 $table8 $tabk";
$test = fwrite($fp, $tabk1); 
fclose($fp);

$ftp = ftp_connect('93.170.129.93', 21, 30); // соединяемся с локальным FTP (21-ый порт, 30 секунд - таймаут)  93.170.129.94  //92.53.96.11

if (!empty($ftp)) {

	if (ftp_login($ftp, 'airport_upload', '7xXS2VZA')) { // авторизуемся ShoaCZIf  //'gpdemo_airport', 'HYma4VQS'
		ftp_pasv($ftp, true);
		if (ftp_chdir($ftp, '//')) { // меняем текущую директорию на pub

			// пытаемся положить файл test.txt в директорию pub на FTP
			if (!ftp_put($ftp, 'tablo.php', 'tablo.php', FTP_ASCII)) {
				echo 'Cannot put your file to FTP';
			} else {

				// устанавливаем права на запись для залитого файла
				if (ftp_chmod($ftp, 0777, 'tablo.php')) {
					echo '<br/><br/><br/><font size=80pt color=darkpink><b><center>ВЫПОЛНЕНО!!!!</center></b></font>';
				} else {
					echo 'Cannot set access rights for tablo.php file';
				}

			}

		





$fpv = fopen('tablo2.php', 'w+');
$tabnv1 = '<?php header("Content-Type: text/html;charset=windows-1251"); ?><br/><div id="online">
<table class="table"><tr class="tr1"><td width=80px><center>Рейс</center></td><td  width=200px><center>Направление</center></td><td  width=130px><center>Отправление</center></td><td  width=110px><center>Статус</center></td></tr>';

if ($retv1<>0) { $tablev1 = "<tr><td ><center><b>$cv1$retv1</b></center></td><td ><center>$pv1</center></td><td ><center><b>$vvchtv1:$vvmtv1</b></center></td><td ><center>$stav1</center></td></tr>"; } else {$tablev1 = "";}
if ($retv2<>0) { $tablev2 = "<tr><td ><center><b>$cv2$retv2</b></center></td><td ><center>$pv2</center></td><td ><center><b>$vvchtv2:$vvmtv2</b></center></td><td ><center>$stav2</center></td></tr>"; } else {$tablev2 = "";}
if ($retv3<>0) { $tablev3 = "<tr><td ><center><b>$cv3$retv3</b></center></td><td ><center>$pv3</center></td><td ><center><b>$vvchtv3:$vvmtv3</b></center></td><td ><center>$stav3</center></td></tr>"; } else {$tablev3 = "";}
if ($retv4<>0) { $tablev4 = "<tr><td ><center><b>$cv4$retv4</b></center></td><td ><center>$pv4</center></td><td ><center><b>$vvchtv4:$vvmtv4</b></center></td><td ><center>$stav4</center></td></tr>"; } else {$tablev4 = "";}
if ($retv5<>0) { $tablev5 = "<tr><td ><center><b>$cv5$retv5</b></center></td><td ><center>$pv5</center></td><td ><center><b>$vvchtv5:$vvmtv5</b></center></td><td ><center>$stav5</center></td></tr>"; } else {$tablev5 = "";}
if ($retv6<>0) { $tablev6 = "<tr><td ><center><b>$cv6$retv6</b></center></td><td ><center>$pv6</center></td><td ><center><b>$vvchtv6:$vvmtv6</b></center></td><td ><center>$stav6</center></td></tr>"; } else {$tablev6 = "";}
if ($retv7<>0) { $tablev7 = "<tr><td ><center><b>$cv7$retv7</b></center></td><td ><center>$pv7</center></td><td ><center><b>$vvchtv7:$vvmtv7</b></center></td><td ><center>$stav7</center></td></tr>"; } else {$tablev7 = "";}
if ($retv8<>0) { $tablev8 = "<tr><td ><center><b>$cv8$retv8</b></center></td><td ><center>$pv8</center></td><td ><center><b>$vvchtv8:$vvmtv8</b></center></td><td ><center>$stav8</center></td></tr>"; } else {$tablev8 = "";}
$tabkv = '</table></div>';

$tabk1 = "$tabnv1 $tablev1 $tablev2 $tablev3 $tablev4 $tablev5 $tablev6 $tablev7 $tablev8 $tabkv";
$test = fwrite($fpv, $tabk1); 


			// пытаемся положить файл test.php в директорию pub на FTP
			if (!ftp_put($ftp, 'tablo2.php', 'tablo2.php', FTP_ASCII)) {
				echo 'Cannot put your file to FTP';
			} else {

				// устанавливаем права на запись для залитого файла
				if (ftp_chmod($ftp, 0777, 'tablo2.php')) {
					echo '<br/><br/><br/><font size=80pt color=darkpink><b><center>ВЫПОЛНЕНО ДВАЖДЫ!!!!</center></b></font>';
				} else {
					echo 'Cannot set access rights for tablo.php file';
				}

			}

		} else {
			echo 'Cannot find pub directory';
		}

	} else {
		echo 'Cannot login at FTP';
	}

	ftp_close($ftp);

} else {
	echo 'Cannot connect to FTP';
}
?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>