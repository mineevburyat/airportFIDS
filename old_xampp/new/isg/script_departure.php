<?php
mysql_connect("localhost", "edit", "123987");
mysql_select_db("airport") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

$qr = mysql_query ("select reis from departure where nst='1'");
$fr = mysql_fetch_array($qr);
$r1 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='2'");
$fr = mysql_fetch_array($qr);
$r2 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='3'");
$fr = mysql_fetch_array($qr);
$r3 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='4'");
$fr = mysql_fetch_array($qr);
$r4 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='5'");
$fr = mysql_fetch_array($qr);
$r5 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='6'");
$fr = mysql_fetch_array($qr);
$r6 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='7'");
$fr = mysql_fetch_array($qr);
$r7 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='8'");
$fr = mysql_fetch_array($qr);
$r8 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='9'");
$fr = mysql_fetch_array($qr);
$r9 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='10'");
$fr = mysql_fetch_array($qr);
$r10 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='11'");
$fr = mysql_fetch_array($qr);
$r11 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='12'");
$fr = mysql_fetch_array($qr);
$r12 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='13'");
$fr = mysql_fetch_array($qr);
$r13 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='14'");
$fr = mysql_fetch_array($qr);
$r14 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='15'");
$fr = mysql_fetch_array($qr);
$r15 = $fr['reis'];
$qr = mysql_query ("select reis from departure where nst='16'");
$fr = mysql_fetch_array($qr);
$r16 = $fr['reis'];

if($_POST)
{
$reis1=$_POST["reis1"];
$time1=$_POST["time1"];
$status1=$_POST["status1"];
$prim1=$_POST["prim1"];
$kod1=$_POST["kod1"];
$punkt1=$_POST["punkt1"];
$reis2=$_POST["reis2"];
$time2=$_POST["time2"];
$status2=$_POST["status2"];
$kod2=$_POST["kod2"];
$punkt2=$_POST["punkt2"];
$prim2=$_POST["prim2"];
$reis3=$_POST["reis3"];
$time3=$_POST["time3"];
$status3=$_POST["status3"];
$kod3=$_POST["kod3"];
$punkt3=$_POST["punkt3"];
$prim3=$_POST["prim3"];
$reis4=$_POST["reis4"];
$time4=$_POST["time4"];
$status4=$_POST["status4"];
$kod4=$_POST["kod4"];
$punkt4=$_POST["punkt4"];
$prim4=$_POST["prim4"];
$reis5=$_POST["reis5"];
$time5=$_POST["time5"];
$status5=$_POST["status5"];
$kod5=$_POST["kod5"];
$punkt5=$_POST["punkt5"];
$prim5=$_POST["prim5"];
$reis6=$_POST["reis6"];
$time6=$_POST["time6"];
$status6=$_POST["status6"];
$kod6=$_POST["kod6"];
$punkt6=$_POST["punkt6"];
$prim6=$_POST["prim6"];
$reis7=$_POST["reis7"];
$time7=$_POST["time7"];
$status7=$_POST["status7"];
$kod7=$_POST["kod7"];
$punkt7=$_POST["punkt7"];
$prim7=$_POST["prim7"];
$reis8=$_POST["reis8"];
$time8=$_POST["time8"];
$status8=$_POST["status8"];
$kod8=$_POST["kod8"];
$punkt8=$_POST["punkt8"];
$prim8=$_POST["prim8"];
$reis9=$_POST["reis9"];
$time9=$_POST["time9"];
$status9=$_POST["status9"];
$kod9=$_POST["kod9"];
$punkt9=$_POST["punkt9"];
$prim9=$_POST["prim9"];
$reis10=$_POST["reis10"];
$time10=$_POST["time10"];
$status10=$_POST["status10"];
$kod10=$_POST["kod10"];
$punkt10=$_POST["punkt10"];
$prim10=$_POST["prim10"];
$reis11=$_POST["reis11"];
$time11=$_POST["time11"];
$status11=$_POST["status11"];
$kod11=$_POST["kod11"];
$punkt11=$_POST["punkt11"];
$prim11=$_POST["prim11"];
$reis12=$_POST["reis12"];
$time12=$_POST["time12"];
$status12=$_POST["status12"];
$kod12=$_POST["kod13"];
$punkt13=$_POST["punkt13"];
$prim12=$_POST["prim12"];
$reis13=$_POST["reis13"];
$time13=$_POST["time13"];
$status13=$_POST["status13"];
$kod13=$_POST["kod13"];
$punkt13=$_POST["punkt13"];
$prim13=$_POST["prim13"];
$reis14=$_POST["reis14"];
$time14=$_POST["time14"];
$status14=$_POST["status14"];
$kod14=$_POST["kod14"];
$punkt14=$_POST["punkt14"];
$prim14=$_POST["prim14"];
$reis15=$_POST["reis15"];
$time15=$_POST["time15"];
$status15=$_POST["status15"];
$kod15=$_POST["kod15"];
$punkt15=$_POST["punkt15"];
$prim15=$_POST["prim15"];
$reis16=$_POST["reis16"];
$time16=$_POST["time16"];
$status16=$_POST["status16"];
$kod16=$_POST["kod16"];
$punkt16=$_POST["punkt16"];
$prim16=$_POST["prim16"];
$query1  = "UPDATE departure SET reis='$reis1' WHERE nst=1";
$query2  = "UPDATE departure SET reis='$reis2' WHERE nst=2";
$query3  = "UPDATE departure SET reis='$reis3' WHERE nst=3";
$query4  = "UPDATE departure SET reis='$reis4' WHERE nst=4";
$query5  = "UPDATE departure SET reis='$reis5' WHERE nst=5";
$query6  = "UPDATE departure SET reis='$reis6' WHERE nst=6";
$query7  = "UPDATE departure SET reis='$reis7' WHERE nst=7";
$query8  = "UPDATE departure SET reis='$reis8' WHERE nst=8";
$query9  = "UPDATE departure SET reis='$reis9' WHERE nst=9";
$query10  = "UPDATE departure SET reis='$reis10' WHERE nst=10";
$query11  = "UPDATE departure SET reis='$reis11' WHERE nst=11";
$query12  = "UPDATE departure SET reis='$reis12' WHERE nst=12";
$query13  = "UPDATE departure SET reis='$reis13' WHERE nst=13";
$query14  = "UPDATE departure SET reis='$reis14' WHERE nst=14";
$query15  = "UPDATE departure SET reis='$reis15' WHERE nst=15";
$query16  = "UPDATE departure SET reis='$reis16' WHERE nst=16";
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

if ($reis1==$r1)  { 
$query17  = "UPDATE reis SET time2='$time1' WHERE reis='$reis1'";
$query18  = "UPDATE reis SET status2='$status1' WHERE reis='$reis1'";
$query19  = "UPDATE reis SET primech2='$prim1' WHERE reis='$reis1'";
$result = mysql_query($query17);
$result = mysql_query($query18);
$result = mysql_query($query19);
}
if ($reis2==$r2)  { 
$query20  = "UPDATE reis SET time2='$time2' WHERE reis='$reis2'";
$query21  = "UPDATE reis SET status2='$status2' WHERE reis='$reis2'";
$query22  = "UPDATE reis SET primech2='$prim2' WHERE reis='$reis2'";
$result = mysql_query($query20);
$result = mysql_query($query21);
$result = mysql_query($query22);
}
if ($reis3==$r3)  { 
$query23  = "UPDATE reis SET time2='$time3' WHERE reis='$reis3'";
$query24  = "UPDATE reis SET status2='$status3' WHERE reis='$reis3'";
$query25  = "UPDATE reis SET primech2='$prim3' WHERE reis='$reis3'";
$result = mysql_query($query23);
$result = mysql_query($query24);
$result = mysql_query($query25);
}
if ($reis4==$r4)  { 
$query26  = "UPDATE reis SET time2='$time4' WHERE reis='$reis4'";
$query27  = "UPDATE reis SET status2='$status4' WHERE reis='$reis4'";
$query28  = "UPDATE reis SET primech2='$prim4' WHERE reis='$reis4'";
$result = mysql_query($query26);
$result = mysql_query($query27);
$result = mysql_query($query28);
}
if ($reis5==$r5)  { 
$query29  = "UPDATE reis SET time2='$time5' WHERE reis='$reis5'";
$query30  = "UPDATE reis SET status2='$status5' WHERE reis='$reis5'";
$query31  = "UPDATE reis SET primech2='$prim5' WHERE reis='$reis5'";
$result = mysql_query($query29);
$result = mysql_query($query30);
$result = mysql_query($query31);
}
if ($reis6==$r6)  { 
$query32  = "UPDATE reis SET time2='$time6' WHERE reis='$reis6'";
$query33  = "UPDATE reis SET status2='$status6' WHERE reis='$reis6'";
$query34  = "UPDATE reis SET primech2='$prim6' WHERE reis='$reis6'";
$result = mysql_query($query32);
$result = mysql_query($query33);
$result = mysql_query($query34);
}
if ($reis7==$r7)  { 
$query35  = "UPDATE reis SET time2='$time7' WHERE reis='$reis7'";
$query36  = "UPDATE reis SET status2='$status7' WHERE reis='$reis7'";
$query37  = "UPDATE reis SET primech2='$prim7' WHERE reis='$reis7'";
$result = mysql_query($query35);
$result = mysql_query($query36);
$result = mysql_query($query37);
}
if ($reis8==$r8)  { 
$query38  = "UPDATE reis SET time2='$time8' WHERE reis='$reis8'";
$query39  = "UPDATE reis SET status2='$status8' WHERE reis='$reis8'";
$query40  = "UPDATE reis SET primech2='$prim8' WHERE reis='$reis8'";
$result = mysql_query($query38);
$result = mysql_query($query39);
$result = mysql_query($query40);
}
if ($reis9==$r9)  { 
$query41  = "UPDATE reis SET time2='$time9' WHERE reis='$reis9'";
$query42  = "UPDATE reis SET status2='$status9' WHERE reis='$reis9'";
$query43  = "UPDATE reis SET primech2='$prim9' WHERE reis='$reis9'";
$result = mysql_query($query41);
$result = mysql_query($query42);
$result = mysql_query($query43);
}
if ($reis10==$r10)  { 
$query44  = "UPDATE reis SET time2='$time10' WHERE reis='$reis10'";
$query45  = "UPDATE reis SET status2='$status10' WHERE reis='$reis10'";
$query46  = "UPDATE reis SET primech2='$prim10' WHERE reis='$reis10'";
$result = mysql_query($query44);
$result = mysql_query($query45);
$result = mysql_query($query46);
}
if ($reis11==$r11)  { 
$query47  = "UPDATE reis SET time2='$time11' WHERE reis='$reis11'";
$query48  = "UPDATE reis SET status2='$status11' WHERE reis='$reis11'";
$query49  = "UPDATE reis SET primech2='$prim11' WHERE reis='$reis11'";
$result = mysql_query($query47);
$result = mysql_query($query48);
$result = mysql_query($query49);
}
if ($reis12==$r12)  { 
$query50  = "UPDATE reis SET time2='$time12' WHERE reis='$reis12'";
$query51  = "UPDATE reis SET status2='$status12' WHERE reis='$reis12'";
$query52  = "UPDATE reis SET primech2='$prim12' WHERE reis='$reis12'";
$result = mysql_query($query50);
$result = mysql_query($query51);
$result = mysql_query($query52);
}
if ($reis13==$r13)  { 
$query53  = "UPDATE reis SET time2='$time13' WHERE reis='$reis13'";
$query54  = "UPDATE reis SET status2='$status13' WHERE reis='$reis13'";
$query55  = "UPDATE reis SET primech2='$prim13' WHERE reis='$reis13'";
$result = mysql_query($query53);
$result = mysql_query($query54);
$result = mysql_query($query55);
}
if ($reis14==$r14)  { 
$query56  = "UPDATE reis SET time2='$time14' WHERE reis='$reis14'";
$query57  = "UPDATE reis SET status2='$status14' WHERE reis='$reis14'";
$query58  = "UPDATE reis SET primech2='$prim14' WHERE reis='$reis14'";
$result = mysql_query($query56);
$result = mysql_query($query57);
$result = mysql_query($query58);
}
if ($reis15==$r15)  { 
$query59  = "UPDATE reis SET time2='$time15' WHERE reis='$reis15'";
$query60  = "UPDATE reis SET status2='$status15' WHERE reis='$reis15'";
$query61  = "UPDATE reis SET primech2='$prim15' WHERE reis='$reis15'";
$result = mysql_query($query59);
$result = mysql_query($query60);
$result = mysql_query($query61);
}
if ($reis16==$r16)  { 
$query62  = "UPDATE reis SET time2='$time16' WHERE reis='$reis16'";
$query63  = "UPDATE reis SET status2='$status16' WHERE reis='$reis16'";
$query64  = "UPDATE reis SET primech2='$prim16' WHERE reis='$reis16'";
$result = mysql_query($query62);
$result = mysql_query($query63);
$result = mysql_query($query64);
}
}

if ($status1=='Задержка') { $status1='<font color=#C00>Задержка</font>'; } else if ($status1=='Ожидается') { $status1='<font color=#036>Ожидается</font>'; } else if ($status1=='Вылетел') { $status1='<font color=#036>Вылетел</font>'; } else if ($status1=='Регистрация') { $status1='<font color=#090>Регистрация</font>'; } else if ($status1=='Посадка') { $status1='<font color=#090>Посадка пассажиров</font>'; };
if ($status2=='Задержка') { $status2='<font color=#C00>Задержка</font>'; } else if ($status2=='Ожидается') { $status2='<font color=#036>Ожидается</font>'; } else if ($status2=='Вылетел') { $status2='<font color=#036>Вылетел</font>'; } else if ($status2=='Регистрация') { $status2='<font color=#090>Регистрация</font>'; } else if ($status2=='Посадка') { $status2='<font color=#090>Посадка пассажиров</font>'; };
if ($status3=='Задержка') { $status3='<font color=#C00>Задержка</font>'; } else if ($status3=='Ожидается') { $status3='<font color=#036>Ожидается</font>'; } else if ($status3=='Вылетел') { $status3='<font color=#036>Вылетел</font>'; } else if ($status3=='Регистрация') { $status3='<font color=#090>Регистрация</font>'; } else if ($status3=='Посадка') { $status3='<font color=#090>Посадка пассажиров</font>'; };
if ($status4=='Задержка') { $status4='<font color=#C00>Задержка</font>'; } else if ($status4=='Ожидается') { $status4='<font color=#036>Ожидается</font>'; } else if ($status4=='Вылетел') { $status4='<font color=#036>Вылетел</font>'; } else if ($status4=='Регистрация') { $status4='<font color=#090>Регистрация</font>'; } else if ($status4=='Посадка') { $status4='<font color=#090>Посадка пассажиров</font>'; };
if ($status5=='Задержка') { $status5='<font color=#C00>Задержка</font>'; } else if ($status5=='Ожидается') { $status5='<font color=#036>Ожидается</font>'; } else if ($status5=='Вылетел') { $status5='<font color=#036>Вылетел</font>'; } else if ($status5=='Регистрация') { $status5='<font color=#090>Регистрация</font>'; } else if ($status5=='Посадка') { $status5='<font color=#090>Посадка пассажиров</font>'; };
if ($status6=='Задержка') { $status6='<font color=#C00>Задержка</font>'; } else if ($status6=='Ожидается') { $status6='<font color=#036>Ожидается</font>'; } else if ($status6=='Вылетел') { $status6='<font color=#036>Вылетел</font>'; } else if ($status6=='Регистрация') { $status6='<font color=#090>Регистрация</font>'; } else if ($status6=='Посадка') { $status6='<font color=#090>Посадка пассажиров</font>'; };
if ($status7=='Задержка') { $status7='<font color=#C00>Задержка</font>'; } else if ($status7=='Ожидается') { $status7='<font color=#036>Ожидается</font>'; } else if ($status7=='Вылетел') { $status7='<font color=#036>Вылетел</font>'; } else if ($status7=='Регистрация') { $status7='<font color=#090>Регистрация</font>'; } else if ($status7=='Посадка') { $status7='<font color=#090>Посадка пассажиров</font>'; };
if ($status8=='Задержка') { $status8='<font color=#C00>Задержка</font>'; } else if ($status8=='Ожидается') { $status8='<font color=#036>Ожидается</font>'; } else if ($status8=='Вылетел') { $status8='<font color=#036>Вылетел</font>'; } else if ($status8=='Регистрация') { $status8='<font color=#090>Регистрация</font>'; } else if ($status8=='Посадка') { $status8='<font color=#090>Посадка пассажиров</font>'; };
if ($status9=='Задержка') { $status9='<font color=#C00>Задержка</font>'; } else if ($status9=='Ожидается') { $status9='<font color=#036>Ожидается</font>'; } else if ($status9=='Вылетел') { $status9='<font color=#036>Вылетел</font>'; } else if ($status9=='Регистрация') { $status9='<font color=#090>Регистрация</font>'; } else if ($status9=='Посадка') { $status9='<font color=#090>Посадка пассажиров</font>'; };
if ($status10=='Задержка') { $status10='<font color=#C00>Задержка</font>'; } else if ($status10=='Ожидается') { $status10='<font color=#036>Ожидается</font>'; } else if ($status10=='Вылетел') { $status10='<font color=#036>Вылетел</font>'; } else if ($status10=='Регистрация') { $status10='<font color=#090>Регистрация</font>'; } else if ($status10=='Посадка') { $status10='<font color=#090>Посадка пассажиров</font>'; };
if ($status11=='Задержка') { $status11='<font color=#C00>Задержка</font>'; } else if ($status11=='Ожидается') { $status11='<font color=#036>Ожидается</font>'; } else if ($status11=='Вылетел') { $status11='<font color=#036>Вылетел</font>'; } else if ($status11=='Регистрация') { $status11='<font color=#090>Регистрация</font>'; } else if ($status11=='Посадка') { $status11='<font color=#090>Посадка пассажиров</font>'; };
if ($status12=='Задержка') { $status12='<font color=#C00>Задержка</font>'; } else if ($status12=='Ожидается') { $status12='<font color=#036>Ожидается</font>'; } else if ($status12=='Вылетел') { $status12='<font color=#036>Вылетел</font>'; } else if ($status12=='Регистрация') { $status12='<font color=#090>Регистрация</font>'; } else if ($status12=='Посадка') { $status12='<font color=#090>Посадка пассажиров</font>'; };
if ($status13=='Задержка') { $status13='<font color=#C00>Задержка</font>'; } else if ($status13=='Ожидается') { $status13='<font color=#036>Ожидается</font>'; } else if ($status13=='Вылетел') { $status13='<font color=#036>Вылетел</font>'; } else if ($status13=='Регистрация') { $status13='<font color=#090>Регистрация</font>'; } else if ($status13=='Посадка') { $status13='<font color=#090>Посадка пассажиров</font>'; };
if ($status14=='Задержка') { $status14='<font color=#C00>Задержка</font>'; } else if ($status14=='Ожидается') { $status14='<font color=#036>Ожидается</font>'; } else if ($status14=='Вылетел') { $status14='<font color=#036>Вылетел</font>'; } else if ($status14=='Регистрация') { $status14='<font color=#090>Регистрация</font>'; } else if ($status14=='Посадка') { $status14='<font color=#090>Посадка пассажиров</font>'; };
if ($status15=='Задержка') { $status15='<font color=#C00>Задержка</font>'; } else if ($status15=='Ожидается') { $status15='<font color=#036>Ожидается</font>'; } else if ($status15=='Вылетел') { $status15='<font color=#036>Вылетел</font>'; } else if ($status15=='Регистрация') { $status15='<font color=#090>Регистрация</font>'; } else if ($status15=='Посадка') { $status15='<font color=#090>Посадка пассажиров</font>'; };
if ($status16=='Задержка') { $status16='<font color=#C00>Задержка</font>'; } else if ($status16=='Ожидается') { $status16='<font color=#036>Ожидается</font>'; } else if ($status16=='Вылетел') { $status16='<font color=#036>Вылетел</font>'; } else if ($status16=='Регистрация') { $status16='<font color=#090>Регистрация</font>'; } else if ($status16=='Посадка') { $status16='<font color=#090>Посадка пассажиров</font>'; };


$fp = fopen('online_departure.php', 'w+');
$tabn1 = '<?php header("Content-Type: text/html;charset=windows-1251"); ?><br/><div id="online">
<table class="table"><tr class="tr1"><td width=80px><center>Рейс</center></td><td  width=200px><center>Направление</center></td><td  width=130px><center>Прибытие</center></td><td  width=110px><center>Статус</center></td></tr>';

if ($reis1<>0) { $table1 = "<tr><td ><center><b>$kod1$reis1</b></center></td><td ><center>$punkt1</center></td><td ><center><b>$time1</b></center></td><td ><center>$status1</center></td></tr>"; } else {$table1 = "";}
if ($reis2<>0) { $table2 = "<tr><td ><center><b>$kod2$reis2</b></center></td><td ><center>$punkt2</center></td><td ><center><b>$time2</b></center></td><td ><center>$status2</center></td></tr>"; } else {$table2 = "";}
if ($reis3<>0) { $table3 = "<tr><td ><center><b>$kod3$reis3</b></center></td><td ><center>$punkt3</center></td><td ><center><b>$time3</b></center></td><td ><center>$status3</center></td></tr>"; } else {$table3 = "";}
if ($reis4<>0) { $table4 = "<tr><td ><center><b>$kod4$reis4</b></center></td><td ><center>$punkt4</center></td><td ><center><b>$time4</b></center></td><td ><center>$status4</center></td></tr>"; } else {$table4 = "";}
if ($reis5<>0) { $table5 = "<tr><td ><center><b>$kod5$reis5</b></center></td><td ><center>$punkt5</center></td><td ><center><b>$time5</b></center></td><td ><center>$status5</center></td></tr>"; } else {$table5 = "";}
if ($reis6<>0) { $table6 = "<tr><td ><center><b>$kod6$reis6</b></center></td><td ><center>$punkt6</center></td><td ><center><b>$time6</b></center></td><td ><center>$status6</center></td></tr>"; } else {$table6 = "";}
if ($reis7<>0) { $table7 = "<tr><td ><center><b>$kod7$reis7</b></center></td><td ><center>$punkt7</center></td><td ><center><b>$time7</b></center></td><td ><center>$status7</center></td></tr>"; } else {$table7 = "";}
if ($reis8<>0) { $table8 = "<tr><td ><center><b>$kod8$reis8</b></center></td><td ><center>$punkt8</center></td><td ><center><b>$time8</b></center></td><td ><center>$status8</center></td></tr>"; } else {$table8 = "";}
if ($reis9<>0) { $table9 = "<tr><td ><center><b>$kod9$reis9</b></center></td><td ><center>$punkt9</center></td><td ><center><b>$time9</b></center></td><td ><center>$status9</center></td></tr>"; } else {$table9 = "";}
if ($reis10<>0) { $table10 = "<tr><td ><center><b>$kod10$reis10</b></center></td><td ><center>$punkt10</center></td><td ><center><b>$time10</b></center></td><td ><center>$status10</center></td></tr>"; } else {$table10 = "";}
if ($reis11<>0) { $table11 = "<tr><td ><center><b>$kod11$reis11</b></center></td><td ><center>$punkt11</center></td><td ><center><b>$time11</b></center></td><td ><center>$status11</center></td></tr>"; } else {$table11 = "";}
if ($reis12<>0) { $table12 = "<tr><td ><center><b>$kod12$reis12</b></center></td><td ><center>$punkt12</center></td><td ><center><b>$time12</b></center></td><td ><center>$status12</center></td></tr>"; } else {$table12 = "";}
if ($reis13<>0) { $table13 = "<tr><td ><center><b>$kod13$reis13</b></center></td><td ><center>$punkt13</center></td><td ><center><b>$time13</b></center></td><td ><center>$status13</center></td></tr>"; } else {$table13 = "";}
if ($reis14<>0) { $table14 = "<tr><td ><center><b>$kod14$reis14</b></center></td><td ><center>$punkt14</center></td><td ><center><b>$time14</b></center></td><td ><center>$status14</center></td></tr>"; } else {$table14 = "";}
if ($reis15<>0) { $table15 = "<tr><td ><center><b>$kod15$reis15</b></center></td><td ><center>$punkt15</center></td><td ><center><b>$time15</b></center></td><td ><center>$status15</center></td></tr>"; } else {$table15 = "";}
if ($reis16<>0) { $table16 = "<tr><td ><center><b>$kod16$reis16</b></center></td><td ><center>$punkt16</center></td><td ><center><b>$time16</b></center></td><td ><center>$status16</center></td></tr>"; } else {$table16 = "";}

$tabk = '</table></div>';

$tabk1 = "$tabn1 $table1 $table2 $table3 $table4 $table5 $table6 $table7 $table8 $table9 $table10 $table11 $table12 $table13 $table14 $table15 $table16 $tabk";
$test = fwrite($fp, $tabk1); 
fclose($fp);

$ftp = ftp_connect('93.170.129.93', 21, 30); // соединяемся с локальным FTP (21-ый порт, 30 секунд - таймаут)  93.170.129.94  //92.53.96.11

if (!empty($ftp)) {

	if (ftp_login($ftp, 'airport_upload', '7xXS2VZA')) { // авторизуемся ShoaCZIf  //'gpdemo_airport', 'HYma4VQS'
		ftp_pasv($ftp, true);
		if (ftp_chdir($ftp, '//')) { // меняем текущую директорию на pub

			// пытаемся положить файл test.txt в директорию pub на FTP
			if (!ftp_put($ftp, 'online_departure.php', 'online_departure.php', FTP_ASCII)) {
				echo 'Cannot put your file to FTP';
			} else {

				// устанавливаем права на запись для залитого файла
				if (ftp_chmod($ftp, 0777, 'online_departure.php')) {
					
				} else {
					echo 'Cannot set access rights for online_departure.php file';
				}

			}

		} else {
			echo 'Cannot find pub directory';
		}


	ftp_close($ftp);

} else {
	echo 'Cannot connect to FTP';
} }
?>
<html>
<head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="0;URL=departure.php">
 </head>
</html>