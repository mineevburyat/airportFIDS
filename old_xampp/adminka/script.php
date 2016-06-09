<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$reis1=$_POST["reis1"];
$nrch1=$_POST["nrch1"];
$krch1=$_POST["krch1"];
$vvch1=$_POST["vvch1"];
$nrm1=$_POST["nrm1"];
$krm1=$_POST["krm1"];
$vvm1=$_POST["vvm1"];
$reis2=$_POST["reis2"];
$nrch2=$_POST["nrch2"];
$krch2=$_POST["krch2"];
$vvch2=$_POST["vvch2"];
$nrm2=$_POST["nrm2"];
$krm2=$_POST["krm2"];
$vvm2=$_POST["vvm2"];
$reis3=$_POST["reis3"];
$nrch3=$_POST["nrch3"];
$krch3=$_POST["krch3"];
$vvch3=$_POST["vvch3"];
$nrm3=$_POST["nrm3"];
$krm3=$_POST["krm3"];
$vvm3=$_POST["vvm3"];
$reis4=$_POST["reis4"];
$nrch4=$_POST["nrch4"];
$krch4=$_POST["krch4"];
$vvch4=$_POST["vvch4"];
$nrm4=$_POST["nrm4"];
$krm4=$_POST["krm4"];
$vvm4=$_POST["vvm4"];
$reis5=$_POST["reis5"];
$nrch5=$_POST["nrch5"];
$krch5=$_POST["krch5"];
$vvch5=$_POST["vvch5"];
$nrm5=$_POST["nrm5"];
$krm5=$_POST["krm5"];
$vvm5=$_POST["vvm5"];
$reis6=$_POST["reis6"];
$nrch6=$_POST["nrch6"];
$krch6=$_POST["krch6"];
$vvch6=$_POST["vvch6"];
$nrm6=$_POST["nrm6"];
$krm6=$_POST["krm6"];
$vvm6=$_POST["vvm6"];

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

$rez11=$_POST["rez11"];
$vp11=$_POST["vp11"];
$vp12=$_POST["vp12"];
$vp13=$_POST["vp13"];
$vp14=$_POST["vp14"];
$rez21=$_POST["rez21"];
$vp21=$_POST["vp21"];
$vp22=$_POST["vp22"];
$vp23=$_POST["vp23"];
$vp24=$_POST["vp24"];
$rez31=$_POST["rez31"];
$vp31=$_POST["vp31"];
$vp32=$_POST["vp32"];
$vp33=$_POST["vp33"];
$vp34=$_POST["vp34"];
$rez41=$_POST["rez41"];
$vp41=$_POST["vp41"];
$vp42=$_POST["vp42"];
$vp43=$_POST["vp43"];
$vp44=$_POST["vp44"];
$rez51=$_POST["rez51"];
$vp51=$_POST["vp51"];
$vp52=$_POST["vp52"];
$vp53=$_POST["vp53"];
$vp54=$_POST["vp54"];
$rez61=$_POST["rez61"];
$vp61=$_POST["vp61"];
$vp62=$_POST["vp62"];
$vp63=$_POST["vp63"];
$vp64=$_POST["vp64"];

$rez11_2=$_POST["rez11_2"];
$vp11_2=$_POST["vp11_2"];
$vp12_2=$_POST["vp12_2"];
$vp13_2=$_POST["vp13_2"];
$vp14_2=$_POST["vp14_2"];
$rez21_2=$_POST["rez21_2"];
$vp21_2=$_POST["vp21_2"];
$vp22_2=$_POST["vp22_2"];
$vp23_2=$_POST["vp23_2"];
$vp24_2=$_POST["vp24_2"];
$rez31_2=$_POST["rez31_2"];
$vp31_2=$_POST["vp31_2"];
$vp32_2=$_POST["vp32_2"];
$vp33_2=$_POST["vp33_2"];
$vp34_2=$_POST["vp34_2"];
$rez41_2=$_POST["rez41_2"];
$vp41_2=$_POST["vp41_2"];
$vp42_2=$_POST["vp42_2"];
$vp43_2=$_POST["vp43_2"];
$vp44_2=$_POST["vp44_2"];
$rez51_2=$_POST["rez51_2"];
$vp51_2=$_POST["vp51_2"];
$vp52_2=$_POST["vp52_2"];
$vp53_2=$_POST["vp53_2"];
$vp54_2=$_POST["vp54_2"];
$rez61_2=$_POST["rez61_2"];
$vp61_2=$_POST["vp61_2"];
$vp62_2=$_POST["vp62_2"];
$vp63_2=$_POST["vp63_2"];
$vp64_2=$_POST["vp64_2"];

$rezb=$_POST["rezb"];
$vp1=$_POST["vp1"];
$vp2=$_POST["vp2"];
$vp3=$_POST["vp3"];
$vp4=$_POST["vp4"];
}

$qp1 = mysql_query ("select zd_p from tables where reis='$ret1'");
$fp1 = mysql_fetch_array($qp1);
$p1 = $fp1[zd_p];
$qp2 = mysql_query ("select zd_p from tables where reis='$ret2'");
$fp2 = mysql_fetch_array($qp2);
$p2 = $fp2[zd_p];
$qp3 = mysql_query ("select zd_p from tables where reis='$ret3'");
$fp3 = mysql_fetch_array($qp3);
$p3 = $fp3[zd_p];
$qp4 = mysql_query ("select zd_p from tables where reis='$ret4'");
$fp4 = mysql_fetch_array($qp4);
$p4 = $fp4[zd_p];
$qp5 = mysql_query ("select zd_p from tables where reis='$ret5'");
$fp5 = mysql_fetch_array($qp5);
$p5 = $fp5[zd_p];
$qp6 = mysql_query ("select zd_p from tables where reis='$ret6'");
$fp6 = mysql_fetch_array($qp6);
$p6 = $fp6[zd_p];
$qp7 = mysql_query ("select zd_p from tables where reis='$ret7'");
$fp7 = mysql_fetch_array($qp7);
$p7 = $fp7[zd_p];
$qp8 = mysql_query ("select zd_p from tables where reis='$ret8'");
$fp8 = mysql_fetch_array($qp8);
$p8 = $fp8[zd_p];

$qc1 = mysql_query ("select company from tables where reis='$ret1'");
$fc1 = mysql_fetch_array($qc1);
$c1 = $fc1[company];
$qc2 = mysql_query ("select company from tables where reis='$ret2'");
$fc2 = mysql_fetch_array($qc2);
$c2 = $fc2[company];
$qc3 = mysql_query ("select company from tables where reis='$ret3'");
$fc3 = mysql_fetch_array($qc3);
$c3 = $fc3[company];
$qc4 = mysql_query ("select company from tables where reis='$ret4'");
$fc4 = mysql_fetch_array($qc4);
$c4 = $fc4[company];
$qc5 = mysql_query ("select company from tables where reis='$ret5'");
$fc5 = mysql_fetch_array($qc5);
$c5 = $fc5[company];
$qc6 = mysql_query ("select company from tables where reis='$ret6'");
$fc6 = mysql_fetch_array($qc6);
$c6 = $fc6[company];
$qc7 = mysql_query ("select company from tables where reis='$ret7'");
$fc7 = mysql_fetch_array($qc7);
$c7 = $fc7[company];
$qc8 = mysql_query ("select company from tables where reis='$ret8'");
$fc8 = mysql_fetch_array($qc8);
$c8 = $fc8[company];

// стойки
$query  = "UPDATE tables SET nrch='$nrch1' WHERE reis='$reis1'";
$query2  = "UPDATE tables SET krch='$krch1' WHERE reis='$reis1'";
$query3  = "UPDATE tables SET vvch='$vvch1' WHERE reis='$reis1'";
$query4  = "UPDATE tables SET nrm='$nrm1' WHERE reis='$reis1'";
$query5  = "UPDATE tables SET krm='$krm1' WHERE reis='$reis1'";
$query6  = "UPDATE tables SET vvm='$vvm1' WHERE reis='$reis1'";
$query7  = "UPDATE st SET reis='$reis1' WHERE nst=1";
$query8  = "UPDATE tables SET nrch='$nrch2' WHERE reis='$reis2'";
$query9  = "UPDATE tables SET krch='$krch2' WHERE reis='$reis2'";
$query10  = "UPDATE tables SET vvch='$vvch2' WHERE reis='$reis2'";
$query11  = "UPDATE tables SET nrm='$nrm2' WHERE reis='$reis2'";
$query12  = "UPDATE tables SET krm='$krm2' WHERE reis='$reis2'";
$query13  = "UPDATE tables SET vvm='$vvm2' WHERE reis='$reis2'";
$query14  = "UPDATE st SET reis='$reis2' WHERE nst=2";
$query15  = "UPDATE tables SET nrch='$nrch3' WHERE reis='$reis3'";
$query16  = "UPDATE tables SET krch='$krch3' WHERE reis='$reis3'";
$query17  = "UPDATE tables SET vvch='$vvch3' WHERE reis='$reis3'";
$query18  = "UPDATE tables SET nrm='$nrm3' WHERE reis='$reis3'";
$query19  = "UPDATE tables SET krm='$krm3' WHERE reis='$reis3'";
$query20  = "UPDATE tables SET vvm='$vvm3' WHERE reis='$reis3'";
$query21  = "UPDATE st SET reis='$reis3' WHERE nst=3";
$query22  = "UPDATE tables SET nrch='$nrch4' WHERE reis='$reis4'";
$query23  = "UPDATE tables SET krch='$krch4' WHERE reis='$reis4'";
$query24  = "UPDATE tables SET vvch='$vvch4' WHERE reis='$reis4'";
$query25  = "UPDATE tables SET nrm='$nrm4' WHERE reis='$reis4'";
$query26  = "UPDATE tables SET krm='$krm4' WHERE reis='$reis4'";
$query27  = "UPDATE tables SET vvm='$vvm4' WHERE reis='$reis4'";
$query28  = "UPDATE st SET reis='$reis4' WHERE nst=4";
$query29  = "UPDATE tables SET nrch='$nrch5' WHERE reis='$reis5'";
$query30  = "UPDATE tables SET krch='$krch5' WHERE reis='$reis5'";
$query31  = "UPDATE tables SET vvch='$vvch5' WHERE reis='$reis5'";
$query32  = "UPDATE tables SET nrm='$nrm5' WHERE reis='$reis5'";
$query33  = "UPDATE tables SET krm='$krm5' WHERE reis='$reis5'";
$query34  = "UPDATE tables SET vvm='$vvm5' WHERE reis='$reis5'";
$query35  = "UPDATE st SET reis='$reis5' WHERE nst=5";
$query36  = "UPDATE tables SET nrch='$nrch6' WHERE reis='$reis6'";
$query37  = "UPDATE tables SET krch='$krch6' WHERE reis='$reis6'";
$query38  = "UPDATE tables SET vvch='$vvch6' WHERE reis='$reis6'";
$query39  = "UPDATE tables SET nrm='$nrm6' WHERE reis='$reis6'";
$query40  = "UPDATE tables SET krm='$krm6' WHERE reis='$reis6'";
$query41  = "UPDATE tables SET vvm='$vvm6' WHERE reis='$reis6'";
$query42  = "UPDATE st SET reis='$reis6' WHERE nst=6";

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

// зона досмотра №1

$query75  = "UPDATE sc SET reis='$rez11' WHERE st=1";
$query76  = "UPDATE sc SET vp1='$vp11' WHERE st=1";
$query77  = "UPDATE sc SET vp2='$vp12' WHERE st=1";
$query78  = "UPDATE sc SET vp3='$vp13' WHERE st=1";
$query79  = "UPDATE sc SET vp4='$vp14' WHERE st=1";
$query80  = "UPDATE sc SET reis='$rez21' WHERE st=2";
$query81  = "UPDATE sc SET vp1='$vp21' WHERE st=2";
$query82  = "UPDATE sc SET vp2='$vp22' WHERE st=2";
$query83  = "UPDATE sc SET vp3='$vp23' WHERE st=2";
$query84  = "UPDATE sc SET vp4='$vp24' WHERE st=2"; 
$query85  = "UPDATE sc SET reis='$rez31' WHERE st=3";
$query86  = "UPDATE sc SET vp1='$vp31' WHERE st=3";
$query87  = "UPDATE sc SET vp2='$vp32' WHERE st=3";
$query88  = "UPDATE sc SET vp3='$vp33' WHERE st=3";
$query89  = "UPDATE sc SET vp4='$vp34' WHERE st=3";
$query90  = "UPDATE sc SET reis='$rez41' WHERE st=4";
$query91  = "UPDATE sc SET vp1='$vp41' WHERE st=4";
$query92  = "UPDATE sc SET vp2='$vp42' WHERE st=4";
$query93  = "UPDATE sc SET vp3='$vp43' WHERE st=4";
$query94  = "UPDATE sc SET vp4='$vp44' WHERE st=4";
$query95  = "UPDATE sc SET reis='$rez51' WHERE st=5";
$query96  = "UPDATE sc SET vp1='$vp51' WHERE st=5";
$query97  = "UPDATE sc SET vp2='$vp52' WHERE st=5";
$query98  = "UPDATE sc SET vp3='$vp53' WHERE st=5";
$query99  = "UPDATE sc SET vp4='$vp54' WHERE st=5";
$query100  = "UPDATE sc SET reis='$rez61' WHERE st=6";
$query101  = "UPDATE sc SET vp1='$vp61' WHERE st=6";
$query102  = "UPDATE sc SET vp2='$vp62' WHERE st=6";
$query103  = "UPDATE sc SET vp3='$vp63' WHERE st=6";
$query104  = "UPDATE sc SET vp4='$vp64' WHERE st=6"; 

// зона досмотра №2 
$query105  = "UPDATE sc2 SET reis='$rez11_2' WHERE st=1";
$query106  = "UPDATE sc2 SET vp1='$vp11_2' WHERE st=1";
$query107  = "UPDATE sc2 SET vp2='$vp12_2' WHERE st=1";
$query108  = "UPDATE sc2 SET vp3='$vp13_2' WHERE st=1";
$query109  = "UPDATE sc2 SET vp4='$vp14_2' WHERE st=1";
$query110  = "UPDATE sc2 SET reis='$rez21_2' WHERE st=2";
$query111  = "UPDATE sc2 SET vp1='$vp21_2' WHERE st=2";
$query112  = "UPDATE sc2 SET vp2='$vp22_2' WHERE st=2";
$query113  = "UPDATE sc2 SET vp3='$vp23_2' WHERE st=2";
$query114  = "UPDATE sc2 SET vp4='$vp24_2' WHERE st=2";
$query115  = "UPDATE sc2 SET reis='$rez32_2' WHERE st=3";
$query116  = "UPDATE sc2 SET vp1='$vp31_2' WHERE st=3";
$query117  = "UPDATE sc2 SET vp2='$vp32_2' WHERE st=3";
$query118  = "UPDATE sc2 SET vp3='$vp33_2' WHERE st=3";
$query119  = "UPDATE sc2 SET vp4='$vp34_2' WHERE st=3";
$query120  = "UPDATE sc2 SET reis='$rez41_2' WHERE st=4";
$query121  = "UPDATE sc2 SET vp1='$vp41_2' WHERE st=4";
$query122  = "UPDATE sc2 SET vp2='$vp42_2' WHERE st=4";
$query123  = "UPDATE sc2 SET vp3='$vp43_2' WHERE st=4";
$query124  = "UPDATE sc2 SET vp4='$vp44_2' WHERE st=4";
$query125  = "UPDATE sc2 SET reis='$rez51_2' WHERE st=5";
$query126  = "UPDATE sc2 SET vp1='$vp51_2' WHERE st=5";
$query127  = "UPDATE sc2 SET vp2='$vp52_2' WHERE st=5";
$query128  = "UPDATE sc2 SET vp3='$vp53_2' WHERE st=5";
$query129  = "UPDATE sc2 SET vp4='$vp54_2' WHERE st=5";
$query130  = "UPDATE sc2 SET reis='$rez61_2' WHERE st=6";
$query131  = "UPDATE sc2 SET vp1='$vp61_2' WHERE st=6";
$query132  = "UPDATE sc2 SET vp2='$vp62_2' WHERE st=6";
$query133  = "UPDATE sc2 SET vp3='$vp63_2' WHERE st=6";
$query134  = "UPDATE sc2 SET vp4='$vp64_2' WHERE st=6"; 

// Багаж
$query135  = "UPDATE bagazh SET reis='$rezb' WHERE st=1";
$query136  = "UPDATE bagazh SET vp1='$vp1' WHERE st=1";
$query137  = "UPDATE bagazh SET vp2='$vp2' WHERE st=1";
$query138  = "UPDATE bagazh SET vp3='$vp3' WHERE st=1";
$query139  = "UPDATE bagazh SET vp4='$vp4' WHERE st=1";

$result = mysql_query($query);
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
$result = mysql_query($query33);
$result = mysql_query($query34);
$result = mysql_query($query35);
$result = mysql_query($query36);
$result = mysql_query($query37);
$result = mysql_query($query38);
$result = mysql_query($query39);
$result = mysql_query($query40);
$result = mysql_query($query41);
$result = mysql_query($query42);
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
$result = mysql_query($query75);
$result = mysql_query($query76);
$result = mysql_query($query77);
$result = mysql_query($query78);
$result = mysql_query($query79);
$result = mysql_query($query80);
$result = mysql_query($query81);
$result = mysql_query($query82);
$result = mysql_query($query83);
$result = mysql_query($query84);
$result = mysql_query($query85);
$result = mysql_query($query86);
$result = mysql_query($query87);
$result = mysql_query($query88);
$result = mysql_query($query89);
$result = mysql_query($query90);
$result = mysql_query($query91);
$result = mysql_query($query92);
$result = mysql_query($query93);
$result = mysql_query($query94);
$result = mysql_query($query95);
$result = mysql_query($query96);
$result = mysql_query($query97);
$result = mysql_query($query98);
$result = mysql_query($query99);
$result = mysql_query($query100);
$result = mysql_query($query101);
$result = mysql_query($query102);
$result = mysql_query($query103);
$result = mysql_query($query104);
$result = mysql_query($query105);
$result = mysql_query($query106);
$result = mysql_query($query107);
$result = mysql_query($query108);
$result = mysql_query($query109);
$result = mysql_query($query110);
$result = mysql_query($query111);
$result = mysql_query($query112);
$result = mysql_query($query113);
$result = mysql_query($query114);
$result = mysql_query($query115);
$result = mysql_query($query116);
$result = mysql_query($query117);
$result = mysql_query($query118);
$result = mysql_query($query119);
$result = mysql_query($query120);
$result = mysql_query($query121);
$result = mysql_query($query122);
$result = mysql_query($query123);
$result = mysql_query($query124);
$result = mysql_query($query125);
$result = mysql_query($query126);
$result = mysql_query($query127);
$result = mysql_query($query128);
$result = mysql_query($query129);
$result = mysql_query($query130);
$result = mysql_query($query131);
$result = mysql_query($query132);
$result = mysql_query($query133);
$result = mysql_query($query134);
$result = mysql_query($query135);
$result = mysql_query($query136);
$result = mysql_query($query137);
$result = mysql_query($query138);
$result = mysql_query($query139);


if ($status1==1) { $sta1='<font color=#090>Прибыл</font>'; } else if ($status1==2) { $sta1='<font color=#C00>Задержка</font>'; } else if ($status1==3) { $sta1='<font color=#036>Посадка</font>'; } else if ($status1==4) { $sta1='<font color=#036>Ожидается</font>'; } else if ($status1==5) { $sta1='<font color=#036>Вылетел</font>'; } else if ($status1==6) { $sta1='<font color=#036>Регистрация</font>'; };
if ($status2==1) { $sta2='<font color=#090>Прибыл</font>'; } else if ($status2==2) { $sta2='<font color=#C00>Задержка</font>'; } else if ($status2==3) { $sta2='<font color=#036>Посадка</font>'; } else if ($status2==4) { $sta2='<font color=#036>Ожидается</font>'; } else if ($status2==5) { $sta2='<font color=#036>Вылетел</font>'; } else if ($status2==6) { $sta2='<font color=#036>Регистрация</font>'; };
if ($status3==1) { $sta3='<font color=#090>Прибыл</font>'; } else if ($status3==2) { $sta3='<font color=#C00>Задержка</font>'; } else if ($status3==3) { $sta3='<font color=#036>Посадка</font>'; } else if ($status3==4) { $sta3='<font color=#036>Ожидается</font>'; } else if ($status3==5) { $sta3='<font color=#036>Вылетел</font>'; } else if ($status3==6) { $sta3='<font color=#036>Регистрация</font>'; };
if ($status4==1) { $sta4='<font color=#090>Прибыл</font>'; } else if ($status4==2) { $sta4='<font color=#C00>Задержка</font>'; } else if ($status4==3) { $sta4='<font color=#036>Посадка</font>'; } else if ($status4==4) { $sta4='<font color=#036>Ожидается</font>'; } else if ($status4==5) { $sta4='<font color=#036>Вылетел</font>'; } else if ($status4==6) { $sta4='<font color=#036>Регистрация</font>'; };
if ($status5==1) { $sta5='<font color=#090>Прибыл</font>'; } else if ($status5==2) { $sta5='<font color=#C00>Задержка</font>'; } else if ($status5==3) { $sta5='<font color=#036>Посадка</font>'; } else if ($status5==4) { $sta5='<font color=#036>Ожидается</font>'; } else if ($status5==5) { $sta5='<font color=#036>Вылетел</font>'; } else if ($status5==6) { $sta5='<font color=#036>Регистрация</font>'; };
if ($status6==1) { $sta6='<font color=#090>Прибыл</font>'; } else if ($status6==2) { $sta6='<font color=#C00>Задержка</font>'; } else if ($status6==3) { $sta6='<font color=#036>Посадка</font>'; } else if ($status6==4) { $sta6='<font color=#036>Ожидается</font>'; } else if ($status6==5) { $sta6='<font color=#036>Вылетел</font>'; } else if ($status6==6) { $sta6='<font color=#036>Регистрация</font>'; };
if ($status7==1) { $sta7='<font color=#090>Прибыл</font>'; } else if ($status7==2) { $sta7='<font color=#C00>Задержка</font>'; } else if ($status7==3) { $sta7='<font color=#036>Посадка</font>'; } else if ($status7==4) { $sta7='<font color=#036>Ожидается</font>'; } else if ($status7==5) { $sta7='<font color=#036>Вылетел</font>'; } else if ($status7==6) { $sta7='<font color=#036>Регистрация</font>'; };
if ($status8==1) { $sta8='<font color=#090>Прибыл</font>'; } else if ($status8==2) { $sta8='<font color=#C00>Задержка</font>'; } else if ($status8==3) { $sta8='<font color=#036>Посадка</font>'; } else if ($status8==4) { $sta8='<font color=#036>Ожидается</font>'; } else if ($status8==5) { $sta8='<font color=#036>Вылетел</font>'; } else if ($status8==6) { $sta8='<font color=#036>Регистрация</font>'; };


$fp = fopen('tablo.php', 'w+');
$tabn1 = '<? header("Content-Type: text/html;charset=windows-1251"); ?><br/><div id="online"><center><h110>Время местное (Улан-Удэ):  <span class="clock24s" id="clock24_60816" style="color:#666;"/></h110><h110>  ( <SCRIPT>writeDateLong(7);</SCRIPT>)</h110></center><br/><br/>
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

$ftp = ftp_connect('92.53.98.158', 21, 30); // соединяемся с локальным FTP (21-ый порт, 30 секунд - таймаут)

if (!empty($ftp)) {

	if (ftp_login($ftp, 'airport_alex', '454647')) { // авторизуемся анонимным юзером

		if (ftp_chdir($ftp, 'public_html/source/php')) { // меняем текущую директорию на pub

			// пытаемся положить файл test.txt в директорию pub на FTP
			if (!ftp_put($ftp, 'tablo.php', 'tablo.php', FTP_ASCII)) {
				echo 'Cannot put your file to FTP';
			} else {

				// устанавливаем права на запись для залитого файла
				if (ftp_chmod($ftp, 0777, 'tablo.php')) {
					echo '<br/><br/><br/><font size=80pt color=darkpink><b><center>ГОТОВО ГОСПОЖА!!!!</center></b></font>';
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