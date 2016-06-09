<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
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

$rex=$_POST["rex"];
$vpx1=$_POST["vpx1"];
$vpx2=$_POST["vpx2"];
$vpx3=$_POST["vpx3"];
$vpx4=$_POST["vpx4"];

$rex2=$_POST["rex2"];
$vpx12=$_POST["vpx12"];
$vpx22=$_POST["vpx22"];
$vpx32=$_POST["vpx32"];
$vpx42=$_POST["vpx42"];

$rezb=$_POST["rezb"];
$vp1=$_POST["vp1"];
$vp2=$_POST["vp2"];
$vp3=$_POST["vp3"];
$vp4=$_POST["vp4"];
}

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
$query115  = "UPDATE sc2 SET reis='$rez31_2' WHERE st=3";
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

// 1-й выход
$query140  = "UPDATE `exit`  SET reis='$rex' WHERE st=1";
$query141  = "UPDATE `exit`  SET vp1='$vpx1' WHERE st=1";
$query142  = "UPDATE `exit`  SET vp2='$vpx2' WHERE st=1";
$query143  = "UPDATE `exit`  SET vp3='$vpx3' WHERE st=1";
$query144  = "UPDATE `exit`  SET vp4='$vpx4' WHERE st=1";

// 2-й выход
$query145  = "UPDATE `exit2`  SET reis='$rex2' WHERE st=1";
$query146  = "UPDATE `exit2`  SET vp1='$vpx12' WHERE st=1";
$query147  = "UPDATE `exit2`  SET vp2='$vpx22' WHERE st=1";
$query148  = "UPDATE `exit2`  SET vp3='$vpx32' WHERE st=1";
$query149  = "UPDATE `exit2`  SET vp4='$vpx42' WHERE st=1";

// Багаж
$query135  = "UPDATE bagazh SET reis='$rezb' WHERE st=1";
$query136  = "UPDATE bagazh SET vp1='$vp1' WHERE st=1";
$query137  = "UPDATE bagazh SET vp2='$vp2' WHERE st=1";
$query138  = "UPDATE bagazh SET vp3='$vp3' WHERE st=1";
$query139  = "UPDATE bagazh SET vp4='$vp4' WHERE st=1";

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

$result = mysql_query($query140);
$result = mysql_query($query141);
$result = mysql_query($query142);
$result = mysql_query($query143);
$result = mysql_query($query144);

$result = mysql_query($query145);
$result = mysql_query($query146);
$result = mysql_query($query147);
$result = mysql_query($query148);
$result = mysql_query($query149);

?>

<html><head><meta content="text/html; charset=cp1251" http-equiv="content-type">
	<META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
  <title></title>
 </head>
</html>