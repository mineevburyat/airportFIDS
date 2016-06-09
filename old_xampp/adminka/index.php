<?
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Стойки
// инфа для стойки №1
$qre1 = mysql_query ("select reis from st where nst='1'");
$fre1 = mysql_fetch_array($qre1);
$re1 = $fre1[reis];
$qnrch1 = mysql_query ("select nrch from tables where reis='$re1'");
$fnrch1 = mysql_fetch_array($qnrch1);
$nrch1 = $fnrch1[nrch];
$qkrch1 = mysql_query ("select krch from tables where reis='$re1'");
$fkrch1 = mysql_fetch_array($qkrch1);
$krch1 = $fkrch1[krch]; 
$qvvch1 = mysql_query ("select vvch from tables where reis='$re1'");
$fvvch1 = mysql_fetch_array($qvvch1);
$vvch1 = $fvvch1[vvch];
$qnrm1 = mysql_query ("select nrm from tables where reis='$re1'");
$fnrm1 = mysql_fetch_array($qnrm1);
$nrm1 = $fnrm1[nrm];
$qkrm1 = mysql_query ("select krm from tables where reis='$re1'");
$fkrm1 = mysql_fetch_array($qkrm1);
$krm1 = $fkrm1[krm]; 
$qvvm1 = mysql_query ("select vvm from tables where reis='$re1'");
$fvvm1 = mysql_fetch_array($qvvm1);
$vvm1 = $fvvm1[vvm];

// инфа для стойки №2
$qre2 = mysql_query ("select reis from st where nst='2'");
$fre2 = mysql_fetch_array($qre2);
$re2 = $fre2[reis];
$qnrch2 = mysql_query ("select nrch from tables where reis='$re2'");
$fnrch2 = mysql_fetch_array($qnrch2);
$nrch2 = $fnrch2[nrch];
$qkrch2 = mysql_query ("select krch from tables where reis='$re2'");
$fkrch2 = mysql_fetch_array($qkrch2);
$krch2 = $fkrch2[krch]; 
$qvvch2 = mysql_query ("select vvch from tables where reis='$re2'");
$fvvch2 = mysql_fetch_array($qvvch2);
$vvch2 = $fvvch2[vvch];
$qnrm2 = mysql_query ("select nrm from tables where reis='$re2'");
$fnrm2 = mysql_fetch_array($qnrm2);
$nrm2 = $fnrm2[nrm];
$qkrm2 = mysql_query ("select krm from tables where reis='$re2'");
$fkrm2 = mysql_fetch_array($qkrm2);
$krm2 = $fkrm2[krm]; 
$qvvm2 = mysql_query ("select vvm from tables where reis='$re2'");
$fvvm2 = mysql_fetch_array($qvvm2);
$vvm2 = $fvvm2[vvm];

// инфа для стойки №3
$qre3 = mysql_query ("select reis from st where nst='3'");
$fre3 = mysql_fetch_array($qre3);
$re3 = $fre3[reis];
$qnrch3 = mysql_query ("select nrch from tables where reis='$re3'");
$fnrch3 = mysql_fetch_array($qnrch3);
$nrch3 = $fnrch3[nrch];
$qkrch3 = mysql_query ("select krch from tables where reis='$re3'");
$fkrch3 = mysql_fetch_array($qkrch3);
$krch3 = $fkrch3[krch]; 
$qvvch3 = mysql_query ("select vvch from tables where reis='$re3'");
$fvvch3 = mysql_fetch_array($qvvch3);
$vvch3 = $fvvch3[vvch];
$qnrm3 = mysql_query ("select nrm from tables where reis='$re3'");
$fnrm3 = mysql_fetch_array($qnrm3);
$nrm3 = $fnrm3[nrm];
$qkrm3 = mysql_query ("select krm from tables where reis='$re3'");
$fkrm3 = mysql_fetch_array($qkrm3);
$krm3 = $fkrm3[krm]; 
$qvvm3 = mysql_query ("select vvm from tables where reis='$re3'");
$fvvm3 = mysql_fetch_array($qvvm3);
$vvm3 = $fvvm3[vvm];

// инфа для стойки №4
$qre4 = mysql_query ("select reis from st where nst='4'");
$fre4 = mysql_fetch_array($qre4);
$re4 = $fre4[reis];
$qnrch4 = mysql_query ("select nrch from tables where reis='$re4'");
$fnrch4 = mysql_fetch_array($qnrch4);
$nrch4 = $fnrch4[nrch];
$qkrch4 = mysql_query ("select krch from tables where reis='$re4'");
$fkrch4 = mysql_fetch_array($qkrch4);
$krch4 = $fkrch4[krch]; 
$qvvch4 = mysql_query ("select vvch from tables where reis='$re4'");
$fvvch4 = mysql_fetch_array($qvvch4);
$vvch4 = $fvvch4[vvch];
$qnrm4 = mysql_query ("select nrm from tables where reis='$re4'");
$fnrm4 = mysql_fetch_array($qnrm4);
$nrm4 = $fnrm4[nrm];
$qkrm4 = mysql_query ("select krm from tables where reis='$re4'");
$fkrm4 = mysql_fetch_array($qkrm4);
$krm4 = $fkrm4[krm]; 
$qvvm4 = mysql_query ("select vvm from tables where reis='$re4'");
$fvvm4 = mysql_fetch_array($qvvm4);
$vvm4 = $fvvm4[vvm];

// инфа для стойки №5
$qre5 = mysql_query ("select reis from st where nst='5'");
$fre5 = mysql_fetch_array($qre5);
$re5 = $fre5[reis];
$qnrch5 = mysql_query ("select nrch from tables where reis='$re5'");
$fnrch5 = mysql_fetch_array($qnrch5);
$nrch5 = $fnrch5[nrch];
$qkrch5 = mysql_query ("select krch from tables where reis='$re5'");
$fkrch5 = mysql_fetch_array($qkrch5);
$krch5 = $fkrch5[krch]; 
$qvvch5 = mysql_query ("select vvch from tables where reis='$re5'");
$fvvch5 = mysql_fetch_array($qvvch5);
$vvch5 = $fvvch5[vvch];
$qnrm5 = mysql_query ("select nrm from tables where reis='$re5'");
$fnrm5 = mysql_fetch_array($qnrm5);
$nrm5 = $fnrm5[nrm];
$qkrm5 = mysql_query ("select krm from tables where reis='$re5'");
$fkrm5 = mysql_fetch_array($qkrm5);
$krm5 = $fkrm5[krm]; 
$qvvm5 = mysql_query ("select vvm from tables where reis='$re5'");
$fvvm5 = mysql_fetch_array($qvvm5);
$vvm5 = $fvvm5[vvm];

// инфа для стойки №6
$qre6 = mysql_query ("select reis from st where nst='6'");
$fre6 = mysql_fetch_array($qre6);
$re6 = $fre6[reis];
$qnrch6 = mysql_query ("select nrch from tables where reis='$re6'");
$fnrch6 = mysql_fetch_array($qnrch6);
$nrch6 = $fnrch6[nrch];
$qkrch6 = mysql_query ("select krch from tables where reis='$re6'");
$fkrch6 = mysql_fetch_array($qkrch6);
$krch6 = $fkrch6[krch]; 
$qvvch6 = mysql_query ("select vvch from tables where reis='$re6'");
$fvvch6 = mysql_fetch_array($qvvch6);
$vvch6 = $fvvch6[vvch];
$qnrm6 = mysql_query ("select nrm from tables where reis='$re6'");
$fnrm6 = mysql_fetch_array($qnrm6);
$nrm6 = $fnrm6[nrm];
$qkrm6 = mysql_query ("select krm from tables where reis='$re6'");
$fkrm6 = mysql_fetch_array($qkrm6);
$krm6 = $fkrm6[krm]; 
$qvvm6 = mysql_query ("select vvm from tables where reis='$re6'");
$fvvm6 = mysql_fetch_array($qvvm6);
$vvm6 = $fvvm6[vvm];


// Табло прилета
// строка №1
$qret1 = mysql_query ("select reis from tabp where st='1'");
$fret1 = mysql_fetch_array($qret1);
$ret1 = $fret1[reis];
$qvvcht1 = mysql_query ("select vp1 from tabp where reis='$ret1'");
$fvvcht1 = mysql_fetch_array($qvvcht1);
$vvcht1 = $fvvcht1[vp1];
$qvvmt1 = mysql_query ("select vp2 from tabp where reis='$ret1'");
$fvvmt1 = mysql_fetch_array($qvvmt1);
$vvmt1 = $fvvmt1[vp2];
$qstt1 = mysql_query ("select status from tabp where reis='$ret1'");
$fstt1 = mysql_fetch_array($qstt1);
$stt1 = $fstt1[status];

// строка №2
$qret2 = mysql_query ("select reis from tabp where st='2'");
$fret2 = mysql_fetch_array($qret2);
$ret2 = $fret2[reis];
$qvvcht2 = mysql_query ("select vp1 from tabp where reis='$ret2'");
$fvvcht2 = mysql_fetch_array($qvvcht2);
$vvcht2 = $fvvcht2[vp1];
$qvvmt2 = mysql_query ("select vp2 from tabp where reis='$ret2'");
$fvvmt2 = mysql_fetch_array($qvvmt2);
$vvmt2 = $fvvmt2[vp2];
$qstt2 = mysql_query ("select status from tabp where reis='$ret2'");
$fstt2 = mysql_fetch_array($qstt2);
$stt2 = $fstt2[status];

// строка №3
$qret3 = mysql_query ("select reis from tabp where st='3'");
$fret3 = mysql_fetch_array($qret3);
$ret3 = $fret3[reis];
$qvvcht3 = mysql_query ("select vp1 from tabp where reis='$ret3'");
$fvvcht3 = mysql_fetch_array($qvvcht3);
$vvcht3 = $fvvcht3[vp1];
$qvvmt3 = mysql_query ("select vp2 from tabp where reis='$ret3'");
$fvvmt3 = mysql_fetch_array($qvvmt3);
$vvmt3 = $fvvmt3[vp2];
$qstt3 = mysql_query ("select status from tabp where reis='$ret3'");
$fstt3 = mysql_fetch_array($qstt3);
$stt3 = $fstt3[status];

// строка №4
$qret4 = mysql_query ("select reis from tabp where st='4'");
$fret4 = mysql_fetch_array($qret4);
$ret4 = $fret4[reis];
$qvvcht4 = mysql_query ("select vp1 from tabp where reis='$ret4'");
$fvvcht4 = mysql_fetch_array($qvvcht4);
$vvcht4 = $fvvcht4[vp1];
$qvvmt4 = mysql_query ("select vp2 from tabp where reis='$ret4'");
$fvvmt4 = mysql_fetch_array($qvvmt4);
$vvmt4 = $fvvmt4[vp2];
$qstt4 = mysql_query ("select status from tabp where reis='$ret4'");
$fstt4 = mysql_fetch_array($qstt4);
$stt4 = $fstt4[status];

// строка №5
$qret5 = mysql_query ("select reis from tabp where st='5'");
$fret5 = mysql_fetch_array($qret5);
$ret5 = $fret5[reis];
$qvvcht5 = mysql_query ("select vp1 from tabp where reis='$ret5'");
$fvvcht5 = mysql_fetch_array($qvvcht5);
$vvcht5 = $fvvcht5[vp1];
$qvvmt5 = mysql_query ("select vp2 from tabp where reis='$ret5'");
$fvvmt5 = mysql_fetch_array($qvvmt5);
$vvmt5 = $fvvmt5[vp2];
$qstt5 = mysql_query ("select status from tabp where reis='$ret5'");
$fstt5 = mysql_fetch_array($qstt5);
$stt5 = $fstt5[status];

// строка №6
$qret6 = mysql_query ("select reis from tabp where st='6'");
$fret6 = mysql_fetch_array($qret6);
$ret6 = $fret6[reis];
$qvvcht6 = mysql_query ("select vp1 from tabp where reis='$ret6'");
$fvvcht6 = mysql_fetch_array($qvvcht6);
$vvcht6 = $fvvcht6[vp1];
$qvvmt6 = mysql_query ("select vp2 from tabp where reis='$ret6'");
$fvvmt6 = mysql_fetch_array($qvvmt6);
$vvmt6 = $fvvmt6[vp2];
$qstt6 = mysql_query ("select status from tabp where reis='$ret6'");
$fstt6 = mysql_fetch_array($qstt6);
$stt6 = $fstt6[status];

// строка №7
$qret7 = mysql_query ("select reis from tabp where st='7'");
$fret7 = mysql_fetch_array($qret7);
$ret7 = $fret7[reis];
$qvvcht7 = mysql_query ("select vp1 from tabp where reis='$ret7'");
$fvvcht7 = mysql_fetch_array($qvvcht7);
$vvcht7 = $fvvcht7[vp1];
$qvvmt7 = mysql_query ("select vp2 from tabp where reis='$ret7'");
$fvvmt7 = mysql_fetch_array($qvvmt7);
$vvmt7 = $fvvmt7[vp2];
$qstt7 = mysql_query ("select status from tabp where reis='$ret7'");
$fstt7 = mysql_fetch_array($qstt7);
$stt7 = $fstt7[status];

// строка №8
$qret8 = mysql_query ("select reis from tabp where st='8'");
$fret8 = mysql_fetch_array($qret8);
$ret8 = $fret8[reis];
$qvvcht8 = mysql_query ("select vp1 from tabp where reis='$ret8'");
$fvvcht8 = mysql_fetch_array($qvvcht8);
$vvcht8 = $fvvcht8[vp1];
$qvvmt8 = mysql_query ("select vp2 from tabp where reis='$ret8'");
$fvvmt8 = mysql_fetch_array($qvvmt8);
$vvmt8 = $fvvmt8[vp2];
$qstt8 = mysql_query ("select status from tabp where reis='$ret8'");
$fstt8 = mysql_fetch_array($qstt8);
$stt8 = $fstt8[status];

if ($stt1==1) { $sta1='Прибыл'; } else if ($stt1==2) { $sta1='Задержка'; } else if ($stt1==3) { $sta1='Посадка'; } else if ($stt1==4) { $sta1='Ожидается'; } else if ($stt1==5) { $sta1='Вылетел'; } else if ($stt1==6) { $sta1='Регистрация'; };
if ($stt2==1) { $sta2='Прибыл'; } else if ($stt2==2) { $sta2='Задержка'; } else if ($stt2==3) { $sta2='Посадка'; } else if ($stt2==4) { $sta2='Ожидается'; } else if ($stt2==5) { $sta2='Вылетел'; } else if ($stt2==6) { $sta2='Регистрация'; };
if ($stt3==1) { $sta3='Прибыл'; } else if ($stt3==2) { $sta3='Задержка'; } else if ($stt3==3) { $sta3='Посадка'; } else if ($stt3==4) { $sta3='Ожидается'; } else if ($stt3==5) { $sta3='Вылетел'; } else if ($stt3==6) { $sta3='Регистрация'; };
if ($stt4==1) { $sta4='Прибыл'; } else if ($stt4==2) { $sta4='Задержка'; } else if ($stt4==3) { $sta4='Посадка'; } else if ($stt4==4) { $sta4='Ожидается'; } else if ($stt4==5) { $sta4='Вылетел'; } else if ($stt4==6) { $sta4='Регистрация'; };
if ($stt5==1) { $sta5='Прибыл'; } else if ($stt5==2) { $sta5='Задержка'; } else if ($stt5==3) { $sta5='Посадка'; } else if ($stt5==4) { $sta5='Ожидается'; } else if ($stt5==5) { $sta5='Вылетел'; } else if ($stt5==6) { $sta5='Регистрация'; };
if ($stt6==1) { $sta6='Прибыл'; } else if ($stt6==2) { $sta6='Задержка'; } else if ($stt6==3) { $sta6='Посадка'; } else if ($stt6==4) { $sta6='Ожидается'; } else if ($stt6==5) { $sta6='Вылетел'; } else if ($stt6==6) { $sta6='Регистрация'; };
if ($stt7==1) { $sta7='Прибыл'; } else if ($stt7==2) { $sta7='Задержка'; } else if ($stt7==3) { $sta7='Посадка'; } else if ($stt7==4) { $sta7='Ожидается'; } else if ($stt7==5) { $sta7='Вылетел'; } else if ($stt7==6) { $sta7='Регистрация'; };
if ($stt8==1) { $sta8='Прибыл'; } else if ($stt8==2) { $sta8='Задержка'; } else if ($stt8==3) { $sta8='Посадка'; } else if ($stt8==4) { $sta8='Ожидается'; } else if ($stt8==5) { $sta8='Вылетел'; } else if ($stt8==6) { $sta8='Регистрация'; };

// Зона досмотра №1
// строка №1
$qrez11 = mysql_query ("select reis from sc where st='1'");
$frez11 = mysql_fetch_array($qrez11);
$rez11 = $frez11[reis];
$qvp11 = mysql_query ("select vp1 from sc where reis='$rez11'");
$fvp11 = mysql_fetch_array($qvp11);
$vp11 = $fvp11[vp1];
$qvp12 = mysql_query ("select vp2 from sc where reis='$rez11'");
$fvp12 = mysql_fetch_array($qvp12);
$vp12 = $fvp12[vp2];
$qvp13 = mysql_query ("select vp3 from sc where reis='$rez11'");
$fvp13 = mysql_fetch_array($qvp13);
$vp13 = $fvp13[vp3];
$qvp14 = mysql_query ("select vp4 from sc where reis='$rez11'");
$fvp14 = mysql_fetch_array($qvp14);
$vp14 = $fvp14[vp4];

// строка №2
$qrez21 = mysql_query ("select reis from sc where st='2'");
$frez21 = mysql_fetch_array($qrez21);
$rez21 = $frez21[reis];
$qvp21 = mysql_query ("select vp1 from sc where reis='$rez21'");
$fvp21 = mysql_fetch_array($qvp21);
$vp21 = $fvp21[vp1];
$qvp22 = mysql_query ("select vp2 from sc where reis='$rez21'");
$fvp22 = mysql_fetch_array($qvp22);
$vp22 = $fvp22[vp2];
$qvp23 = mysql_query ("select vp3 from sc where reis='$rez21'");
$fvp23 = mysql_fetch_array($qvp23);
$vp23 = $fvp23[vp3];
$qvp24 = mysql_query ("select vp4 from sc where reis='$rez21'");
$fvp24 = mysql_fetch_array($qvp24);
$vp24 = $fvp24[vp4];

// строка №3
$qrez31 = mysql_query ("select reis from sc where st='3'");
$frez31 = mysql_fetch_array($qrez31);
$rez31 = $frez31[reis];
$qvp31 = mysql_query ("select vp1 from sc where reis='$rez31'");
$fvp31 = mysql_fetch_array($qvp31);
$vp31 = $fvp31[vp1];
$qvp32 = mysql_query ("select vp2 from sc where reis='$rez31'");
$fvp32 = mysql_fetch_array($qvp32);
$vp32 = $fvp32[vp2];
$qvp33 = mysql_query ("select vp3 from sc where reis='$rez31'");
$fvp33 = mysql_fetch_array($qvp33);
$vp33 = $fvp33[vp3];
$qvp34 = mysql_query ("select vp4 from sc where reis='$rez31'");
$fvp34 = mysql_fetch_array($qvp34);
$vp34 = $fvp34[vp4];

// строка №4
$qrez41 = mysql_query ("select reis from sc where st='4'");
$frez41 = mysql_fetch_array($qrez41);
$rez41 = $frez41[reis];
$qvp41 = mysql_query ("select vp1 from sc where reis='$rez41'");
$fvp41 = mysql_fetch_array($qvp41);
$vp41 = $fvp41[vp1];
$qvp42 = mysql_query ("select vp2 from sc where reis='$rez41'");
$fvp42 = mysql_fetch_array($qvp42);
$vp42 = $fvp42[vp2];
$qvp43 = mysql_query ("select vp3 from sc where reis='$rez41'");
$fvp43 = mysql_fetch_array($qvp43);
$vp43 = $fvp43[vp3];
$qvp44 = mysql_query ("select vp4 from sc where reis='$rez41'");
$fvp44 = mysql_fetch_array($qvp44);
$vp44 = $fvp44[vp4];

// строка №5
$qrez51 = mysql_query ("select reis from sc where st='5'");
$frez51 = mysql_fetch_array($qrez51);
$rez51 = $frez51[reis];
$qvp51 = mysql_query ("select vp1 from sc where reis='$rez51'");
$fvp51 = mysql_fetch_array($qvp51);
$vp51 = $fvp51[vp1];
$qvp52 = mysql_query ("select vp2 from sc where reis='$rez51'");
$fvp52 = mysql_fetch_array($qvp52);
$vp52 = $fvp52[vp2];
$qvp53 = mysql_query ("select vp3 from sc where reis='$rez51'");
$fvp53 = mysql_fetch_array($qvp53);
$vp53 = $fvp53[vp3];
$qvp54 = mysql_query ("select vp4 from sc where reis='$rez51'");
$fvp54 = mysql_fetch_array($qvp54);
$vp54 = $fvp54[vp4];

// строка №6
$qrez61 = mysql_query ("select reis from sc where st='6'");
$frez61 = mysql_fetch_array($qrez61);
$rez61 = $frez61[reis];
$qvp61 = mysql_query ("select vp1 from sc where reis='$rez61'");
$fvp61 = mysql_fetch_array($qvp61);
$vp61 = $fvp61[vp1];
$qvp62 = mysql_query ("select vp2 from sc where reis='$rez61'");
$fvp62 = mysql_fetch_array($qvp62);
$vp62 = $fvp62[vp2];
$qvp63 = mysql_query ("select vp3 from sc where reis='$rez61'");
$fvp63 = mysql_fetch_array($qvp63);
$vp63 = $fvp63[vp3];
$qvp64 = mysql_query ("select vp4 from sc where reis='$rez61'");
$fvp64 = mysql_fetch_array($qvp64);
$vp64 = $fvp64[vp4];

// Зона досмотра №2
// строка №1
$qrez11_2 = mysql_query ("select reis from sc2 where st='1'");
$frez11_2 = mysql_fetch_array($qrez11_2);
$rez11_2 = $frez11_2[reis];
$qvp11_2 = mysql_query ("select vp1 from sc2 where reis='$rez11_2'");
$fvp11_2 = mysql_fetch_array($qvp11_2);
$vp11_2 = $fvp11_2[vp1];
$qvp12_2 = mysql_query ("select vp2 from sc2 where reis='$rez11_2'");
$fvp12_2 = mysql_fetch_array($qvp12_2);
$vp12_2 = $fvp12_2[vp2];
$qvp13_2 = mysql_query ("select vp3 from sc2 where reis='$rez11_2'");
$fvp13_2 = mysql_fetch_array($qvp13_2);
$vp13_2 = $fvp13_2[vp3];
$qvp14_2 = mysql_query ("select vp4 from sc2 where reis='$rez11_2'");
$fvp14_2 = mysql_fetch_array($qvp14_2);
$vp14_2 = $fvp14_2[vp4];

// строка №2
$qrez21_2 = mysql_query ("select reis from sc2 where st='2'");
$frez21_2 = mysql_fetch_array($qrez21_2);
$rez21_2 = $frez21_2[reis];
$qvp21_2 = mysql_query ("select vp1 from sc2 where reis='$rez21_2'");
$fvp21_2 = mysql_fetch_array($qvp21_2);
$vp21_2 = $fvp21_2[vp1];
$qvp22_2 = mysql_query ("select vp2 from sc2 where reis='$rez21_2'");
$fvp22_2 = mysql_fetch_array($qvp22_2);
$vp22_2 = $fvp22_2[vp2];
$qvp23_2 = mysql_query ("select vp3 from sc2 where reis='$rez21_2'");
$fvp23_2 = mysql_fetch_array($qvp23_2);
$vp23_2 = $fvp23_2[vp3];
$qvp24_2 = mysql_query ("select vp4 from sc2 where reis='$rez21_2'");
$fvp24_2 = mysql_fetch_array($qvp24_2);
$vp24_2 = $fvp24_2[vp4];

// строка №3
$qrez31_2 = mysql_query ("select reis from sc2 where st='3'");
$frez31_2 = mysql_fetch_array($qrez31_2);
$rez31_2 = $frez31_2[reis];
$qvp31_2 = mysql_query ("select vp1 from sc2 where reis='$rez31_2'");
$fvp31_2 = mysql_fetch_array($qvp31_2);
$vp31_2 = $fvp31_2[vp1];
$qvp32_2 = mysql_query ("select vp2 from sc2 where reis='$rez31_2'");
$fvp32_2 = mysql_fetch_array($qvp32_2);
$vp32_2 = $fvp32_2[vp2];
$qvp33_2 = mysql_query ("select vp3 from sc2 where reis='$rez31_2'");
$fvp33_2 = mysql_fetch_array($qvp33_2);
$vp33_2 = $fvp33_2[vp3];
$qvp34_2 = mysql_query ("select vp4 from sc2 where reis='$rez31_2'");
$fvp34_2 = mysql_fetch_array($qvp34_2);
$vp34_2 = $fvp34_2[vp4];

// строка №4
$qrez41_2 = mysql_query ("select reis from sc2 where st='4'");
$frez41_2 = mysql_fetch_array($qrez41_2);
$rez41_2 = $frez41_2[reis];
$qvp41_2 = mysql_query ("select vp1 from sc2 where reis='$rez41_2'");
$fvp41_2 = mysql_fetch_array($qvp41_2);
$vp41_2 = $fvp41_2[vp1];
$qvp42_2 = mysql_query ("select vp2 from sc2 where reis='$rez41_2'");
$fvp42_2 = mysql_fetch_array($qvp42_2);
$vp42_2 = $fvp42_2[vp2];
$qvp43_2 = mysql_query ("select vp3 from sc2 where reis='$rez41_2'");
$fvp43_2 = mysql_fetch_array($qvp43_2);
$vp43_2 = $fvp43_2[vp3];
$qvp44_2 = mysql_query ("select vp4 from sc2 where reis='$rez41_2'");
$fvp44_2 = mysql_fetch_array($qvp44_2);
$vp44_2 = $fvp44_2[vp4];

// строка №5
$qrez51_2 = mysql_query ("select reis from sc2 where st='5'");
$frez51_2 = mysql_fetch_array($qrez51_2);
$rez51_2 = $frez51_2[reis];
$qvp51_2 = mysql_query ("select vp1 from sc2 where reis='$rez51_2'");
$fvp51_2 = mysql_fetch_array($qvp51_2);
$vp51_2 = $fvp51_2[vp1];
$qvp52_2 = mysql_query ("select vp2 from sc2 where reis='$rez51_2'");
$fvp52_2 = mysql_fetch_array($qvp52_2);
$vp52_2 = $fvp52_2[vp2];
$qvp53_2 = mysql_query ("select vp3 from sc2 where reis='$rez51_2'");
$fvp53_2 = mysql_fetch_array($qvp53_2);
$vp53_2 = $fvp53_2[vp3];
$qvp54_2 = mysql_query ("select vp4 from sc2 where reis='$rez51_2'");
$fvp54_2 = mysql_fetch_array($qvp54_2);
$vp54_2 = $fvp54_2[vp4];

// строка №6
$qrez61_2 = mysql_query ("select reis from sc2 where st='6'");
$frez61_2 = mysql_fetch_array($qrez61_2);
$rez61_2 = $frez61_2[reis];
$qvp61_2 = mysql_query ("select vp1 from sc2 where reis='$rez61_2'");
$fvp61_2 = mysql_fetch_array($qvp61_2);
$vp61_2 = $fvp61_2[vp1];
$qvp62_2 = mysql_query ("select vp2 from sc2 where reis='$rez61_2'");
$fvp62_2 = mysql_fetch_array($qvp62_2);
$vp62_2 = $fvp62_2[vp2];
$qvp63_2 = mysql_query ("select vp3 from sc2 where reis='$rez61_2'");
$fvp63_2 = mysql_fetch_array($qvp63_2);
$vp63_2 = $fvp63_2[vp3];
$qvp64_2 = mysql_query ("select vp4 from sc2 where reis='$rez61_2'");
$fvp64_2 = mysql_fetch_array($qvp64_2);
$vp64_2 = $fvp64_2[vp4];

// багаж
$qrezb = mysql_query ("select reis from bagazh where st='1'");
$frezb = mysql_fetch_array($qrezb);
$rezb = $frezb[reis];
$qvp1 = mysql_query ("select vp1 from bagazh where reis='$rezb'");
$fvp1 = mysql_fetch_array($qvp1);
$vp1 = $fvp1[vp1];
$qvp2 = mysql_query ("select vp2 from bagazh where reis='$rezb'");
$fvp2 = mysql_fetch_array($qvp2);
$vp2 = $fvp2[vp2];
$qvp3 = mysql_query ("select vp3 from bagazh where reis='$rezb'");
$fvp3 = mysql_fetch_array($qvp3);
$vp3 = $fvp3[vp3];
$qvp4 = mysql_query ("select vp4 from bagazh where reis='$rezb'");
$fvp4 = mysql_fetch_array($qvp4);
$vp4 = $fvp4[vp4];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Reset1() {
	document.getElementById("reis1").selectedIndex = 
	document.getElementById("reis1").length = 45;
	document.getElementById("nrch1").selectedIndex = 
	document.getElementById("nrch1").value = '';
	document.getElementById("krch1").selectedIndex = 
	document.getElementById("krch1").value = '';
	document.getElementById("vvch1").selectedIndex = 
	document.getElementById("vvch1").value = '';
	document.getElementById("nrm1").selectedIndex = 
	document.getElementById("nrm1").value = '';
	document.getElementById("krm1").selectedIndex = 
	document.getElementById("krm1").value = '';
	document.getElementById("vvm1").selectedIndex = 
	document.getElementById("vvm1").value = '';
}
function Reset2() {
	document.getElementById("reis2").selectedIndex = 
	document.getElementById("reis2").length = 45;
	document.getElementById("nrch2").selectedIndex = 
	document.getElementById("nrch2").value = '';
	document.getElementById("krch2").selectedIndex = 
	document.getElementById("krch2").value = '';
	document.getElementById("vvch2").selectedIndex = 
	document.getElementById("vvch2").value = '';
	document.getElementById("nrm2").selectedIndex = 
	document.getElementById("nrm2").value = '';
	document.getElementById("krm2").selectedIndex = 
	document.getElementById("krm2").value = '';
	document.getElementById("vvm2").selectedIndex = 
	document.getElementById("vvm2").value = '';
}
function Reset3() {
	document.getElementById("reis3").selectedIndex = 
	document.getElementById("reis3").length = 45;
	document.getElementById("nrch3").selectedIndex = 
	document.getElementById("nrch3").value = '';
	document.getElementById("krch3").selectedIndex = 
	document.getElementById("krch3").value = '';
	document.getElementById("vvch3").selectedIndex = 
	document.getElementById("vvch3").value = '';
	document.getElementById("nrm3").selectedIndex = 
	document.getElementById("nrm3").value = '';
	document.getElementById("krm3").selectedIndex = 
	document.getElementById("krm3").value = '';
	document.getElementById("vvm3").selectedIndex = 
	document.getElementById("vvm3").value = '';
}
function Reset4() {
	document.getElementById("reis4").selectedIndex = 
	document.getElementById("reis4").length = 45;
	document.getElementById("nrch4").selectedIndex = 
	document.getElementById("nrch4").value = '';
	document.getElementById("krch4").selectedIndex = 
	document.getElementById("krch4").value = '';
	document.getElementById("vvch4").selectedIndex = 
	document.getElementById("vvch4").value = '';
	document.getElementById("nrm4").selectedIndex = 
	document.getElementById("nrm4").value = '';
	document.getElementById("krm4").selectedIndex = 
	document.getElementById("krm4").value = '';
	document.getElementById("vvm4").selectedIndex = 
	document.getElementById("vvm4").value = '';
}
function Reset5() {
	document.getElementById("reis5").selectedIndex = 
	document.getElementById("reis5").length = 45;
	document.getElementById("nrch5").selectedIndex = 
	document.getElementById("nrch5").value = '';
	document.getElementById("krch5").selectedIndex = 
	document.getElementById("krch5").value = '';
	document.getElementById("vvch5").selectedIndex = 
	document.getElementById("vvch5").value = '';
	document.getElementById("nrm5").selectedIndex = 
	document.getElementById("nrm5").value = '';
	document.getElementById("krm5").selectedIndex = 
	document.getElementById("krm5").value = '';
	document.getElementById("vvm5").selectedIndex = 
	document.getElementById("vvm5").value = '';
}
function Reset6() {
	document.getElementById("reis6").selectedIndex = 
	document.getElementById("reis6").length = 45;
	document.getElementById("nrch6").selectedIndex = 
	document.getElementById("nrch6").value = '';
	document.getElementById("krch6").selectedIndex = 
	document.getElementById("krch6").value = '';
	document.getElementById("vvch6").selectedIndex = 
	document.getElementById("vvch6").value = '';
	document.getElementById("nrm6").selectedIndex = 
	document.getElementById("nrm6").value = '';
	document.getElementById("krm6").selectedIndex = 
	document.getElementById("krm6").value = '';
	document.getElementById("vvm6").selectedIndex = 
	document.getElementById("vvm6").value = '';
}
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
function Resz1() {
	document.getElementById("rez11").selectedIndex = 
	document.getElementById("rez11").length = 45;
	document.getElementById("vp11").selectedIndex = 
	document.getElementById("vp11").value = '';
	document.getElementById("vp12").selectedIndex = 
	document.getElementById("vp12").value = '';
	document.getElementById("vp13").selectedIndex = 
	document.getElementById("vp13").value = '';
	document.getElementById("vp14").selectedIndex = 
	document.getElementById("vp14").value = '';
}
function Resz2() {
	document.getElementById("rez21").selectedIndex = 
	document.getElementById("rez21").length = 45;
	document.getElementById("vp21").selectedIndex = 
	document.getElementById("vp21").value = '';
	document.getElementById("vp22").selectedIndex = 
	document.getElementById("vp22").value = '';
	document.getElementById("vp23").selectedIndex = 
	document.getElementById("vp23").value = '';
	document.getElementById("vp24").selectedIndex = 
	document.getElementById("vp24").value = '';
}
function Resz3() {
	document.getElementById("rez31").selectedIndex = 
	document.getElementById("rez31").length = 45;
	document.getElementById("vp31").selectedIndex = 
	document.getElementById("vp31").value = '';
	document.getElementById("vp32").selectedIndex = 
	document.getElementById("vp32").value = '';
	document.getElementById("vp33").selectedIndex = 
	document.getElementById("vp33").value = '';
	document.getElementById("vp34").selectedIndex = 
	document.getElementById("vp34").value = '';
}
function Resz4() {
	document.getElementById("rez41").selectedIndex = 
	document.getElementById("rez41").length = 45;
	document.getElementById("vp41").selectedIndex = 
	document.getElementById("vp41").value = '';
	document.getElementById("vp42").selectedIndex = 
	document.getElementById("vp42").value = '';
	document.getElementById("vp43").selectedIndex = 
	document.getElementById("vp43").value = '';
	document.getElementById("vp44").selectedIndex = 
	document.getElementById("vp44").value = '';
}
function Resz5() {
	document.getElementById("rez51").selectedIndex = 
	document.getElementById("rez51").length = 45;
	document.getElementById("vp51").selectedIndex = 
	document.getElementById("vp51").value = '';
	document.getElementById("vp52").selectedIndex = 
	document.getElementById("vp52").value = '';
	document.getElementById("vp53").selectedIndex = 
	document.getElementById("vp53").value = '';
	document.getElementById("vp54").selectedIndex = 
	document.getElementById("vp54").value = '';
}
function Resz6() {
	document.getElementById("rez61").selectedIndex = 
	document.getElementById("rez61").length = 45;
	document.getElementById("vp61").selectedIndex = 
	document.getElementById("vp61").value = '';
	document.getElementById("vp62").selectedIndex = 
	document.getElementById("vp62").value = '';
	document.getElementById("vp63").selectedIndex = 
	document.getElementById("vp63").value = '';
	document.getElementById("vp64").selectedIndex = 
	document.getElementById("vp64").value = '';
}
function Resz1_2() {
	document.getElementById("rez11_2").selectedIndex = 
	document.getElementById("rez11_2").length = 45;
	document.getElementById("vp11_2").selectedIndex = 
	document.getElementById("vp11_2").value = '';
	document.getElementById("vp12_2").selectedIndex = 
	document.getElementById("vp12_2").value = '';
	document.getElementById("vp13_2").selectedIndex = 
	document.getElementById("vp13_2").value = '';
	document.getElementById("vp14_2").selectedIndex = 
	document.getElementById("vp14_2").value = '';
}
function Resz2_2() {
	document.getElementById("rez21_2").selectedIndex = 
	document.getElementById("rez21_2").length = 45;
	document.getElementById("vp21_2").selectedIndex = 
	document.getElementById("vp21_2").value = '';
	document.getElementById("vp22_2").selectedIndex = 
	document.getElementById("vp22_2").value = '';
	document.getElementById("vp23_2").selectedIndex = 
	document.getElementById("vp23_2").value = '';
	document.getElementById("vp24_2").selectedIndex = 
	document.getElementById("vp24_2").value = '';
}
function Resz3_2() {
	document.getElementById("rez31_2").selectedIndex = 
	document.getElementById("rez31_2").length = 45;
	document.getElementById("vp31_2").selectedIndex = 
	document.getElementById("vp31_2").value = '';
	document.getElementById("vp32_2").selectedIndex = 
	document.getElementById("vp32_2").value = '';
	document.getElementById("vp33_2").selectedIndex = 
	document.getElementById("vp33_2").value = '';
	document.getElementById("vp34_2").selectedIndex = 
	document.getElementById("vp34_2").value = '';
}
function Resz4_2() {
	document.getElementById("rez41_2").selectedIndex = 
	document.getElementById("rez41_2").length = 45;
	document.getElementById("vp41_2").selectedIndex = 
	document.getElementById("vp41_2").value = '';
	document.getElementById("vp42_2").selectedIndex = 
	document.getElementById("vp42_2").value = '';
	document.getElementById("vp43_2").selectedIndex = 
	document.getElementById("vp43_2").value = '';
	document.getElementById("vp44_2").selectedIndex = 
	document.getElementById("vp44_2").value = '';
}
function Resz5_2() {
	document.getElementById("rez51_2").selectedIndex = 
	document.getElementById("rez51_2").length = 45;
	document.getElementById("vp51_2").selectedIndex = 
	document.getElementById("vp51_2").value = '';
	document.getElementById("vp52_2").selectedIndex = 
	document.getElementById("vp52_2").value = '';
	document.getElementById("vp53_2").selectedIndex = 
	document.getElementById("vp53_2").value = '';
	document.getElementById("vp54_2").selectedIndex = 
	document.getElementById("vp54_2").value = '';
}
function Resz6_2() {
	document.getElementById("rez61_2").selectedIndex = 
	document.getElementById("rez61_2").length = 45;
	document.getElementById("vp61_2").selectedIndex = 
	document.getElementById("vp61_2").value = '';
	document.getElementById("vp62_2").selectedIndex = 
	document.getElementById("vp62_2").value = '';
	document.getElementById("vp63_2").selectedIndex = 
	document.getElementById("vp63_2").value = '';
	document.getElementById("vp64_2").selectedIndex = 
	document.getElementById("vp64_2").value = '';
}
function Resb() {
	document.getElementById("rezb").selectedIndex = 
	document.getElementById("rezb").length = 45;
	document.getElementById("vp1").selectedIndex = 
	document.getElementById("vp1").value = '';
	document.getElementById("vp2").selectedIndex = 
	document.getElementById("vp2").value = '';
	document.getElementById("vp3").selectedIndex = 
	document.getElementById("vp3").value = '';
	document.getElementById("vp4").selectedIndex = 
	document.getElementById("vp4").value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<center><font size="5"><b>Стойки регистрации:</b></font><br/><br/>
<TABLE BORDER=1 id="demoTable">
<TR><TD><center>Стойка №1</center></TD><TD><center>Стойка №2</center></TD><TD><center>Стойка №3</center></TD><TD><center>Стойка №4</center></TD><TD><center>Стойка №5</center></TD><TD><center>Стойка №6</center></TD></TR>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis1' id='reis1'>";
echo "<option VALUE='$re1'>$re1</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset1()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch1" type="text" name="nrch1" class="POST" value="<? echo "$nrch1" ?>"/>ч.<input style="width: 30px" id="nrm1" type="text" name="nrm1" class="POST" value="<? echo "$nrm1" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch1" type="text" name="krch1" class="POST" value="<? echo "$krch1" ?>"/>ч.<input style="width: 30px" id="krm1" type="text" name="krm1" class="POST" value="<? echo "$krm1" ?>"/>мин.<br>
Время .выл.: <input style="width: 30px" id="vvch1" type="text" name="vvch1" class="POST" value="<? echo "$vvch1" ?>"/>ч.<input style="width: 30px" id="vvm1" type="text" name="vvm1" class="POST" value="<? echo "$vvm1" ?>"/>мин.<br>
</center></TD>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis2' id='reis2'>";
echo "<option VALUE='$re2'>$re2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++)
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset2()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch2" type="text" name="nrch2" class="POST" value="<? echo "$nrch2" ?>"/>ч.<input style="width: 30px" id="nrm2" type="text" name="nrm2" class="POST" value="<? echo "$nrm2" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch2" type="text" name="krch2" class="POST" value="<? echo "$krch2" ?>"/>ч.<input style="width: 30px" id="krm2" type="text" name="krm2" class="POST" value="<? echo "$krm2" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch2" type="text" name="vvch2" class="POST" value="<? echo "$vvch2" ?>"/>ч.<input style="width: 30px" id="vvm2" type="text" name="vvm2" class="POST" value="<? echo "$vvm2" ?>"/>мин.<br>
</center></TD>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis3' id='reis3'>";
echo "<option VALUE='$re3'>$re3</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++)
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset3()' value='X' title='Очистить стойку'>"; 
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch3" type="text" name="nrch3" class="POST" value="<? echo "$nrch3" ?>"/>ч.<input style="width: 30px" id="nrm3" type="text" name="nrm3" class="POST" value="<? echo "$nrm3" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch3" type="text" name="krch3" class="POST" value="<? echo "$krch3" ?>"/>ч.<input style="width: 30px" id="krm3" type="text" name="krm3" class="POST" value="<? echo "$krm3" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch3" type="text" name="vvch3" class="POST" value="<? echo "$vvch3" ?>"/>ч.<input style="width: 30px" id="vvm3" type="text" name="vvm3" class="POST" value="<? echo "$vvm3" ?>"/>мин.<br>
</center></TD>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis4' id='reis4'>";
echo "<option VALUE='$re4'>$re4</option>";
$r=mysql_query("select reis from tables"); 
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset4()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch4" type="text" name="nrch4" class="POST" value="<? echo "$nrch4" ?>"/>ч.<input style="width: 30px" id="nrm4" type="text" name="nrm4" class="POST" value="<? echo "$nrm4" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch4" type="text" name="krch4" class="POST" value="<? echo "$krch4" ?>"/>ч.<input style="width: 30px" id="krm4" type="text" name="krm4" class="POST" value="<? echo "$krm4" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch4" type="text" name="vvch4" class="POST" value="<? echo "$vvch4" ?>"/>ч.<input style="width: 30px" id="vvm4" type="text" name="vvm4" class="POST" value="<? echo "$vvm4" ?>"/>мин.<br>
</center></TD>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis5' id='reis5'>";
echo "<option VALUE='$re5'>$re5</option>";
$r=mysql_query("select reis from tables"); 
for($i=0; $i<mysql_num_rows($r); $i++)  
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset5()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch5" type="text" name="nrch5" class="POST" value="<? echo "$nrch5" ?>"/>ч.<input style="width: 30px" id="nrm5" type="text" name="nrm5" class="POST" value="<? echo "$nrm5" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch5" type="text" name="krch5" class="POST" value="<? echo "$krch5" ?>"/>ч.<input style="width: 30px" id="krm5" type="text" name="krm5" class="POST" value="<? echo "$krm5" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch5" type="text" name="vvch5" class="POST" value="<? echo "$vvch5" ?>"/>ч.<input style="width: 30px" id="vvm5" type="text" name="vvm5" class="POST" value="<? echo "$vvm5" ?>"/>мин.<br>
</center></TD>

<TD style="width: 210px"><center>
<br>
<?
echo "Рейс №<SELECT NAME='reis6' id='reis6'>";
echo "<option VALUE='$re6'>$re6</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r); 
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT><input type='button' onclick='Reset6()' value='X' title='Очистить стойку'>";
?>
<hr/>
Начало рег.: <input style="width: 30px" id="nrch6" type="text" name="nrch6" class="POST" value="<? echo "$nrch6" ?>"/>ч.<input style="width: 30px" id="nrm6" type="text" name="nrm6" class="POST" value="<? echo "$nrm6" ?>"/>мин.<br>
Оконч. рег.: <input style="width: 30px" id="krch6" type="text" name="krch6" class="POST" value="<? echo "$krch6" ?>"/>ч.<input style="width: 30px" id="krm6" type="text" name="krm6" class="POST" value="<? echo "$krm6" ?>"/>мин.<br>
Время  выл.: <input style="width: 30px" id="vvch6" type="text" name="vvch6" class="POST" value="<? echo "$vvch6" ?>"/>ч.<input style="width: 30px" id="vvm6" type="text" name="vvm6" class="POST" value="<? echo "$vvm6" ?>"/>мин.<br>
</center></TD>
</TABLE>
</center>
<br/><br/><font size="5" style="margin: 0 0 0 80px;"><b>Табло прилета:</b></font><font size="5" style="margin: 0 0 0 130px;"><b>Зона досмотра №1:</b></font><font size="5" style="margin: 0 0 0 125px;"><b>Зона досмотра №2:</b></font><font size="5" style="margin: 0 0 0 145px;"><b>Выдача багажа:</b></font><br/><br/>
<TABLE BORDER="1" id="demoTable" style="margin: 0 0 0 0px;" >
<tr><td><center>№ Рейса</center></td><td><center>Время вылета</center></td><td><center>Статус</center></td><td></td></tr>
<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht1" type="text" name="vvcht1" class="POST" value="<? echo "$vvcht1" ?>"/>ч.<input style="width: 30px" id="vvmt1" type="text" name="vvmt1" class="POST" value="<? echo "$vvmt1" ?>"/>мин.</td><td>
<SELECT NAME="status1" id="status1">
        <option  selected VALUE="<? echo "$stt1" ?>"><? echo "$sta1" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res1()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht2" type="text" name="vvcht2" class="POST" value="<? echo "$vvcht2" ?>"/>ч.<input style="width: 30px" id="vvmt2" type="text" name="vvmt2" class="POST" value="<? echo "$vvmt2" ?>"/>мин.</td><td>
<SELECT NAME="status2" id="status2">
        <option  selected VALUE="<? echo "$stt2" ?>"><? echo "$sta2" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res2()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht3" type="text" name="vvcht3" class="POST" value="<? echo "$vvcht3" ?>"/>ч.<input style="width: 30px" id="vvmt3" type="text" name="vvmt3" class="POST" value="<? echo "$vvmt3" ?>"/>мин.</td><td>
<SELECT NAME="status3" id="status3">
        <option  selected VALUE="<? echo "$stt3" ?>"><? echo "$sta3" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res3()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht4" type="text" name="vvcht4" class="POST" value="<? echo "$vvcht4" ?>"/>ч.<input style="width: 30px" id="vvmt4" type="text" name="vvmt4" class="POST" value="<? echo "$vvmt4" ?>"/>мин.</td><td>
<SELECT NAME="status4" id="status4">
        <option  selected VALUE="<? echo "$stt4" ?>"><? echo "$sta4" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res4()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht5" type="text" name="vvcht5" class="POST" value="<? echo "$vvcht5" ?>"/>ч.<input style="width: 30px" id="vvmt5" type="text" name="vvmt5" class="POST" value="<? echo "$vvmt5" ?>"/>мин.</td><td>
<SELECT NAME="status5" id="status5">
        <option  selected VALUE="<? echo "$stt5" ?>"><? echo "$sta5" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res5()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht6" type="text" name="vvcht6" class="POST" value="<? echo "$vvcht6" ?>"/>ч.<input style="width: 30px" id="vvmt6" type="text" name="vvmt6" class="POST" value="<? echo "$vvmt6" ?>"/>мин.</td><td>
<SELECT NAME="status6" id="status6">
        <option  selected VALUE="<? echo "$stt6" ?>"><? echo "$sta6" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res6()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht7" type="text" name="vvcht7" class="POST" value="<? echo "$vvcht7" ?>"/>ч.<input style="width: 30px" id="vvmt7" type="text" name="vvmt7" class="POST" value="<? echo "$vvmt7" ?>"/>мин.</td><td>
<SELECT NAME="status7" id="status7">
        <option  selected VALUE="<? echo "$stt7" ?>"><? echo "$sta7" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res7()' value='X' title='Очистить строку'></td></tr>

<tr><td>
<?
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
</td><td><input style="width: 30px" id="vvcht8" type="text" name="vvcht8" class="POST" value="<? echo "$vvcht8" ?>"/>ч.<input style="width: 30px" id="vvmt8" type="text" name="vvmt8" class="POST" value="<? echo "$vvmt8" ?>"/>мин.</td><td>
<SELECT NAME="status8" id="status8">
        <option  selected VALUE="<? echo "$stt8" ?>"><? echo "$sta8" ?></option>
        <OPTION VALUE="1">Прибыл</option>
        <OPTION VALUE="2">Задержка</option>
        <OPTION VALUE="3">Посадка</option>
		<OPTION VALUE="4">Ожидается</option>
		<OPTION VALUE="5">Вылетел</option>
		<OPTION VALUE="6">Регистрация</option>
</SELECT>
</td><td><input type='button' onclick='Res8()' value='X' title='Очистить строку'></td></tr>

</table>
<TABLE BORDER="1" id="demoTable" style="margin: -270px 0 0 330px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?
echo "<SELECT NAME='rez11' id='rez11'>";
echo "<option VALUE='$rez11'>$rez11</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp11" type="text" name="vp11" class="POST" value="<? echo "$vp11" ?>"/>ч.<input style="width: 30px" id="vp12" type="text" name="vp12" class="POST" value="<? echo "$vp12" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp13" type="text" name="vp13" class="POST" value="<? echo "$vp13" ?>"/>ч.<input style="width: 30px" id="vp14" type="text" name="vp14" class="POST" value="<? echo "$vp14" ?>"/>мин.</td>
<td><input type='button' onclick='Resz1()' value='X' title='Очистить строку'></td>
</tr>

<tr><td>
<?
echo "<SELECT NAME='rez21' id='rez21'>";
echo "<option VALUE='$rez21'>$rez21</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp21" type="text" name="vp21" class="POST" value="<? echo "$vp21" ?>"/>ч.<input style="width: 30px" id="vp22" type="text" name="vp22" class="POST" value="<? echo "$vp22" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp23" type="text" name="vp23" class="POST" value="<? echo "$vp23" ?>"/>ч.<input style="width: 30px" id="vp24" type="text" name="vp24" class="POST" value="<? echo "$vp24" ?>"/>мин.</td>
<td><input type='button' onclick='Resz2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez31' id='rez31'>";
echo "<option VALUE='$rez31'>$rez31</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp31" type="text" name="vp31" class="POST" value="<? echo "$vp31" ?>"/>ч.<input style="width: 30px" id="vp32" type="text" name="vp32" class="POST" value="<? echo "$vp32" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp33" type="text" name="vp33" class="POST" value="<? echo "$vp33" ?>"/>ч.<input style="width: 30px" id="vp34" type="text" name="vp34" class="POST" value="<? echo "$vp34" ?>"/>мин.</td>
<td><input type='button' onclick='Resz3()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez41' id='rez41'>";
echo "<option VALUE='$rez41'>$rez41</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp41" type="text" name="vp41" class="POST" value="<? echo "$vp41" ?>"/>ч.<input style="width: 30px" id="vp42" type="text" name="vp42" class="POST" value="<? echo "$vp42" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp43" type="text" name="vp43" class="POST" value="<? echo "$vp43" ?>"/>ч.<input style="width: 30px" id="vp44" type="text" name="vp44" class="POST" value="<? echo "$vp44" ?>"/>мин.</td>
<td><input type='button' onclick='Resz4()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez51' id='rez51'>";
echo "<option VALUE='$rez51'>$rez51</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp51" type="text" name="vp51" class="POST" value="<? echo "$vp51" ?>"/>ч.<input style="width: 30px" id="vp52" type="text" name="vp52" class="POST" value="<? echo "$vp52" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp53" type="text" name="vp53" class="POST" value="<? echo "$vp53" ?>"/>ч.<input style="width: 30px" id="vp54" type="text" name="vp54" class="POST" value="<? echo "$vp54" ?>"/>мин.</td>
<td><input type='button' onclick='Resz5()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez61' id='rez61'>";
echo "<option VALUE='$rez61'>$rez61</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp61" type="text" name="vp61" class="POST" value="<? echo "$vp61" ?>"/>ч.<input style="width: 30px" id="vp62" type="text" name="vp62" class="POST" value="<? echo "$vp62" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp63" type="text" name="vp63" class="POST" value="<? echo "$vp63" ?>"/>ч.<input style="width: 30px" id="vp64" type="text" name="vp64" class="POST" value="<? echo "$vp64" ?>"/>мин.</td>
<td><input type='button' onclick='Resz6()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>
<TABLE BORDER="1" id="demoTable" style="margin: -235px -10px 0 670px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?
echo "<SELECT NAME='rez11_2' id='rez11_2'>";
echo "<option VALUE='$rez11_2'>$rez11_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp11_2" type="text" name="vp11_2" class="POST" value="<? echo "$vp11_2" ?>"/>ч.<input style="width: 30px" id="vp12_2" type="text" name="vp12_2" class="POST" value="<? echo "$vp12_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp13_2" type="text" name="vp13_2" class="POST" value="<? echo "$vp13_2" ?>"/>ч.<input style="width: 30px" id="vp14_2" type="text" name="vp14_2" class="POST" value="<? echo "$vp14_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz1_2()' value='X' title='Очистить строку'></td>
</tr>

<tr><td>
<?
echo "<SELECT NAME='rez21_2' id='rez21_2'>";
echo "<option VALUE='$rez21_2'>$rez21_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp21_2" type="text" name="vp21_2" class="POST" value="<? echo "$vp21_2" ?>"/>ч.<input style="width: 30px" id="vp22_2" type="text" name="vp22_2" class="POST" value="<? echo "$vp22_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp23_2" type="text" name="vp23_2" class="POST" value="<? echo "$vp23_2" ?>"/>ч.<input style="width: 30px" id="vp24_2" type="text" name="vp24_2" class="POST" value="<? echo "$vp24_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz2_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez31_2' id='rez31_2'>";
echo "<option VALUE='$rez31_2'>$rez31_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp31_2" type="text" name="vp31_2" class="POST" value="<? echo "$vp31_2" ?>"/>ч.<input style="width: 30px" id="vp32_2" type="text" name="vp32_2" class="POST" value="<? echo "$vp32_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp33_2" type="text" name="vp33_2" class="POST" value="<? echo "$vp33_2" ?>"/>ч.<input style="width: 30px" id="vp34_2" type="text" name="vp34_2" class="POST" value="<? echo "$vp34_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz3_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez41_2' id='rez41_2'>";
echo "<option VALUE='$rez41_2'>$rez41_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp41_2" type="text" name="vp41_2" class="POST" value="<? echo "$vp41_2" ?>"/>ч.<input style="width: 30px" id="vp42_2" type="text" name="vp42_2" class="POST" value="<? echo "$vp42_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp43_2" type="text" name="vp43_2" class="POST" value="<? echo "$vp43_2" ?>"/>ч.<input style="width: 30px" id="vp44_2" type="text" name="vp44_2" class="POST" value="<? echo "$vp44_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz4_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez51_2' id='rez51_2'>";
echo "<option VALUE='$rez51_2'>$rez51_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp51_2" type="text" name="vp51_2" class="POST" value="<? echo "$vp51_2" ?>"/>ч.<input style="width: 30px" id="vp52_2" type="text" name="vp52_2" class="POST" value="<? echo "$vp52_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp53_2" type="text" name="vp53_2" class="POST" value="<? echo "$vp53_2" ?>"/>ч.<input style="width: 30px" id="vp54_2" type="text" name="vp54_2" class="POST" value="<? echo "$vp54_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz5_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?
echo "<SELECT NAME='rez61_2' id='rez61_2'>";
echo "<option VALUE='$rez61_2'>$rez61_2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp61_2" type="text" name="vp61_2" class="POST" value="<? echo "$vp61_2" ?>"/>ч.<input style="width: 30px" id="vp62_2" type="text" name="vp62_2" class="POST" value="<? echo "$vp62_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp63_2" type="text" name="vp63_2" class="POST" value="<? echo "$vp63_2" ?>"/>ч.<input style="width: 30px" id="vp64_2" type="text" name="vp64_2" class="POST" value="<? echo "$vp64_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz6_2()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>
<TABLE BORDER="1" id="demoTable" style="margin: -235px 0 0px 1010px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время выдачи багажа</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?
echo "<SELECT NAME='rezb' id='rezb'>";
echo "<option VALUE='$rezb'>$rezb</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vp1" type="text" name="vp1" class="POST" value="<? echo "$vp1" ?>"/>ч.<input style="width: 30px" id="vp2" type="text" name="vp2" class="POST" value="<? echo "$vp2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp3" type="text" name="vp3" class="POST" value="<? echo "$vp3" ?>"/>ч.<input style="width: 30px" id="vp4" type="text" name="vp4" class="POST" value="<? echo "$vp4" ?>"/>мин.</td>
<td><input type='button' onclick='Resb()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>

<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="margin: 200px 0 0 620px; width:200px; height:50px;">
</FORM>

</body> 
</html>

