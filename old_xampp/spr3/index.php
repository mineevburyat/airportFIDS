<?php
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");
Header("Cache-Control: no-cache, must-revalidate"); 
Header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");

$db=mysql_connect("localhost", "root", "");
mysql_select_db("avia", $db);
mysql_query("SET NAMES 'cp1251'");

// Зона досмотра №1
// строка №1
$qrez11 = mysql_query ("select reis from sc where st='1'");
$frez11 = mysql_fetch_array($qrez11);
$rez11 = $frez11['reis'];
$qvp11 = mysql_query ("select vp1 from sc where reis='$rez11'");
$fvp11 = mysql_fetch_array($qvp11);
$vp11 = $fvp11['vp1'];
$qvp12 = mysql_query ("select vp2 from sc where reis='$rez11'");
$fvp12 = mysql_fetch_array($qvp12);
$vp12 = $fvp12['vp2'];
$qvp13 = mysql_query ("select vp3 from sc where reis='$rez11'");
$fvp13 = mysql_fetch_array($qvp13);
$vp13 = $fvp13['vp3'];
$qvp14 = mysql_query ("select vp4 from sc where reis='$rez11'");
$fvp14 = mysql_fetch_array($qvp14);
$vp14 = $fvp14['vp4'];

// строка №2
$qrez21 = mysql_query ("select reis from sc where st='2'");
$frez21 = mysql_fetch_array($qrez21);
$rez21 = $frez21['reis'];
$qvp21 = mysql_query ("select vp1 from sc where reis='$rez21'");
$fvp21 = mysql_fetch_array($qvp21);
$vp21 = $fvp21['vp1'];
$qvp22 = mysql_query ("select vp2 from sc where reis='$rez21'");
$fvp22 = mysql_fetch_array($qvp22);
$vp22 = $fvp22['vp2'];
$qvp23 = mysql_query ("select vp3 from sc where reis='$rez21'");
$fvp23 = mysql_fetch_array($qvp23);
$vp23 = $fvp23['vp3'];
$qvp24 = mysql_query ("select vp4 from sc where reis='$rez21'");
$fvp24 = mysql_fetch_array($qvp24);
$vp24 = $fvp24['vp4'];

// строка №3
$qrez31 = mysql_query ("select reis from sc where st='3'");
$frez31 = mysql_fetch_array($qrez31);
$rez31 = $frez31['reis'];
$qvp31 = mysql_query ("select vp1 from sc where reis='$rez31'");
$fvp31 = mysql_fetch_array($qvp31);
$vp31 = $fvp31['vp1'];
$qvp32 = mysql_query ("select vp2 from sc where reis='$rez31'");
$fvp32 = mysql_fetch_array($qvp32);
$vp32 = $fvp32['vp2'];
$qvp33 = mysql_query ("select vp3 from sc where reis='$rez31'");
$fvp33 = mysql_fetch_array($qvp33);
$vp33 = $fvp33['vp3'];
$qvp34 = mysql_query ("select vp4 from sc where reis='$rez31'");
$fvp34 = mysql_fetch_array($qvp34);
$vp34 = $fvp34['vp4'];

// строка №4
$qrez41 = mysql_query ("select reis from sc where st='4'");
$frez41 = mysql_fetch_array($qrez41);
$rez41 = $frez41['reis'];
$qvp41 = mysql_query ("select vp1 from sc where reis='$rez41'");
$fvp41 = mysql_fetch_array($qvp41);
$vp41 = $fvp41['vp1'];
$qvp42 = mysql_query ("select vp2 from sc where reis='$rez41'");
$fvp42 = mysql_fetch_array($qvp42);
$vp42 = $fvp42['vp2'];
$qvp43 = mysql_query ("select vp3 from sc where reis='$rez41'");
$fvp43 = mysql_fetch_array($qvp43);
$vp43 = $fvp43['vp3'];
$qvp44 = mysql_query ("select vp4 from sc where reis='$rez41'");
$fvp44 = mysql_fetch_array($qvp44);
$vp44 = $fvp44['vp4'];

// строка №5
$qrez51 = mysql_query ("select reis from sc where st='5'");
$frez51 = mysql_fetch_array($qrez51);
$rez51 = $frez51['reis'];
$qvp51 = mysql_query ("select vp1 from sc where reis='$rez51'");
$fvp51 = mysql_fetch_array($qvp51);
$vp51 = $fvp51['vp1'];
$qvp52 = mysql_query ("select vp2 from sc where reis='$rez51'");
$fvp52 = mysql_fetch_array($qvp52);
$vp52 = $fvp52['vp2'];
$qvp53 = mysql_query ("select vp3 from sc where reis='$rez51'");
$fvp53 = mysql_fetch_array($qvp53);
$vp53 = $fvp53['vp3'];
$qvp54 = mysql_query ("select vp4 from sc where reis='$rez51'");
$fvp54 = mysql_fetch_array($qvp54);
$vp54 = $fvp54['vp4'];

// строка №6
$qrez61 = mysql_query ("select reis from sc where st='6'");
$frez61 = mysql_fetch_array($qrez61);
$rez61 = $frez61['reis'];
$qvp61 = mysql_query ("select vp1 from sc where reis='$rez61'");
$fvp61 = mysql_fetch_array($qvp61);
$vp61 = $fvp61['vp1'];
$qvp62 = mysql_query ("select vp2 from sc where reis='$rez61'");
$fvp62 = mysql_fetch_array($qvp62);
$vp62 = $fvp62['vp2'];
$qvp63 = mysql_query ("select vp3 from sc where reis='$rez61'");
$fvp63 = mysql_fetch_array($qvp63);
$vp63 = $fvp63['vp3'];
$qvp64 = mysql_query ("select vp4 from sc where reis='$rez61'");
$fvp64 = mysql_fetch_array($qvp64);
$vp64 = $fvp64['vp4'];

// Зона досмотра №2
// строка №1
$qrez11_2 = mysql_query ("select reis from sc2 where st='1'");
$frez11_2 = mysql_fetch_array($qrez11_2);
$rez11_2 = $frez11_2['reis'];
$qvp11_2 = mysql_query ("select vp1 from sc2 where reis='$rez11_2'");
$fvp11_2 = mysql_fetch_array($qvp11_2);
$vp11_2 = $fvp11_2['vp1'];
$qvp12_2 = mysql_query ("select vp2 from sc2 where reis='$rez11_2'");
$fvp12_2 = mysql_fetch_array($qvp12_2);
$vp12_2 = $fvp12_2['vp2'];
$qvp13_2 = mysql_query ("select vp3 from sc2 where reis='$rez11_2'");
$fvp13_2 = mysql_fetch_array($qvp13_2);
$vp13_2 = $fvp13_2['vp3'];
$qvp14_2 = mysql_query ("select vp4 from sc2 where reis='$rez11_2'");
$fvp14_2 = mysql_fetch_array($qvp14_2);
$vp14_2 = $fvp14_2['vp4'];

// строка №2
$qrez21_2 = mysql_query ("select reis from sc2 where st='2'");
$frez21_2 = mysql_fetch_array($qrez21_2);
$rez21_2 = $frez21_2['reis'];
$qvp21_2 = mysql_query ("select vp1 from sc2 where reis='$rez21_2'");
$fvp21_2 = mysql_fetch_array($qvp21_2);
$vp21_2 = $fvp21_2['vp1'];
$qvp22_2 = mysql_query ("select vp2 from sc2 where reis='$rez21_2'");
$fvp22_2 = mysql_fetch_array($qvp22_2);
$vp22_2 = $fvp22_2['vp2'];
$qvp23_2 = mysql_query ("select vp3 from sc2 where reis='$rez21_2'");
$fvp23_2 = mysql_fetch_array($qvp23_2);
$vp23_2 = $fvp23_2['vp3'];
$qvp24_2 = mysql_query ("select vp4 from sc2 where reis='$rez21_2'");
$fvp24_2 = mysql_fetch_array($qvp24_2);
$vp24_2 = $fvp24_2['vp4'];

// строка №3
$qrez31_2 = mysql_query ("select reis from sc2 where st='3'");
$frez31_2 = mysql_fetch_array($qrez31_2);
$rez31_2 = $frez31_2['reis'];
$qvp31_2 = mysql_query ("select vp1 from sc2 where reis='$rez31_2'");
$fvp31_2 = mysql_fetch_array($qvp31_2);
$vp31_2 = $fvp31_2['vp1'];
$qvp32_2 = mysql_query ("select vp2 from sc2 where reis='$rez31_2'");
$fvp32_2 = mysql_fetch_array($qvp32_2);
$vp32_2 = $fvp32_2['vp2'];
$qvp33_2 = mysql_query ("select vp3 from sc2 where reis='$rez31_2'");
$fvp33_2 = mysql_fetch_array($qvp33_2);
$vp33_2 = $fvp33_2['vp3'];
$qvp34_2 = mysql_query ("select vp4 from sc2 where reis='$rez31_2'");
$fvp34_2 = mysql_fetch_array($qvp34_2);
$vp34_2 = $fvp34_2['vp4'];

// строка №4
$qrez41_2 = mysql_query ("select reis from sc2 where st='4'");
$frez41_2 = mysql_fetch_array($qrez41_2);
$rez41_2 = $frez41_2['reis'];
$qvp41_2 = mysql_query ("select vp1 from sc2 where reis='$rez41_2'");
$fvp41_2 = mysql_fetch_array($qvp41_2);
$vp41_2 = $fvp41_2['vp1'];
$qvp42_2 = mysql_query ("select vp2 from sc2 where reis='$rez41_2'");
$fvp42_2 = mysql_fetch_array($qvp42_2);
$vp42_2 = $fvp42_2['vp2'];
$qvp43_2 = mysql_query ("select vp3 from sc2 where reis='$rez41_2'");
$fvp43_2 = mysql_fetch_array($qvp43_2);
$vp43_2 = $fvp43_2['vp3'];
$qvp44_2 = mysql_query ("select vp4 from sc2 where reis='$rez41_2'");
$fvp44_2 = mysql_fetch_array($qvp44_2);
$vp44_2 = $fvp44_2['vp4'];

// строка №5
$qrez51_2 = mysql_query ("select reis from sc2 where st='5'");
$frez51_2 = mysql_fetch_array($qrez51_2);
$rez51_2 = $frez51_2['reis'];
$qvp51_2 = mysql_query ("select vp1 from sc2 where reis='$rez51_2'");
$fvp51_2 = mysql_fetch_array($qvp51_2);
$vp51_2 = $fvp51_2['vp1'];
$qvp52_2 = mysql_query ("select vp2 from sc2 where reis='$rez51_2'");
$fvp52_2 = mysql_fetch_array($qvp52_2);
$vp52_2 = $fvp52_2['vp2'];
$qvp53_2 = mysql_query ("select vp3 from sc2 where reis='$rez51_2'");
$fvp53_2 = mysql_fetch_array($qvp53_2);
$vp53_2 = $fvp53_2['vp3'];
$qvp54_2 = mysql_query ("select vp4 from sc2 where reis='$rez51_2'");
$fvp54_2 = mysql_fetch_array($qvp54_2);
$vp54_2 = $fvp54_2['vp4'];

// строка №6
$qrez61_2 = mysql_query ("select reis from sc2 where st='6'");
$frez61_2 = mysql_fetch_array($qrez61_2);
$rez61_2 = $frez61_2['reis'];
$qvp61_2 = mysql_query ("select vp1 from sc2 where reis='$rez61_2'");
$fvp61_2 = mysql_fetch_array($qvp61_2);
$vp61_2 = $fvp61_2['vp1'];
$qvp62_2 = mysql_query ("select vp2 from sc2 where reis='$rez61_2'");
$fvp62_2 = mysql_fetch_array($qvp62_2);
$vp62_2 = $fvp62_2['vp2'];
$qvp63_2 = mysql_query ("select vp3 from sc2 where reis='$rez61_2'");
$fvp63_2 = mysql_fetch_array($qvp63_2);
$vp63_2 = $fvp63_2['vp3'];
$qvp64_2 = mysql_query ("select vp4 from sc2 where reis='$rez61_2'");
$fvp64_2 = mysql_fetch_array($qvp64_2);
$vp64_2 = $fvp64_2['vp4'];

// багаж
$qrezb = mysql_query ("select reis from bagazh where st='1'");
$frezb = mysql_fetch_array($qrezb);
$rezb = $frezb['reis'];
$qvp1 = mysql_query ("select vp1 from bagazh where reis='$rezb'");
$fvp1 = mysql_fetch_array($qvp1);
$vp1 = $fvp1['vp1'];
$qvp2 = mysql_query ("select vp2 from bagazh where reis='$rezb'");
$fvp2 = mysql_fetch_array($qvp2);
$vp2 = $fvp2['vp2'];
$qvp3 = mysql_query ("select vp3 from bagazh where reis='$rezb'");
$fvp3 = mysql_fetch_array($qvp3);
$vp3 = $fvp3['vp3'];
$qvp4 = mysql_query ("select vp4 from bagazh where reis='$rezb'");
$fvp4 = mysql_fetch_array($qvp4);
$vp4 = $fvp4['vp4'];

// 1-й выход
$qrex = mysql_query ("select reis from `exit`  where st='1'");
$frex = mysql_fetch_array($qrex);
$rex = $frex['reis'];
$qvpx1 = mysql_query ("select vp1 from `exit`  where reis='$rex'");
$fvpx1 = mysql_fetch_array($qvpx1);
$vpx1 = $fvpx1['vp1'];
$qvpx2 = mysql_query ("select vp2 from `exit`  where reis='$rex'");
$fvpx2 = mysql_fetch_array($qvpx2);
$vpx2 = $fvpx2['vp2'];
$qvpx3 = mysql_query ("select vp3 from `exit`  where reis='$rex'");
$fvpx3 = mysql_fetch_array($qvpx3);
$vpx3 = $fvpx3['vp3'];
$qvpx4 = mysql_query ("select vp4 from `exit`  where reis='$rex'");
$fvpx4 = mysql_fetch_array($qvpx4);
$vpx4 = $fvpx4['vp4'];

// 2-й выход
$qrex2 = mysql_query ("select reis from `exit2`  where st='1'");
$frex2 = mysql_fetch_array($qrex2);
$rex2 = $frex2['reis'];
$qvpx12 = mysql_query ("select vp1 from `exit2`  where reis='$rex2'");
$fvpx12 = mysql_fetch_array($qvpx12);
$vpx12 = $fvpx12['vp1'];
$qvpx22 = mysql_query ("select vp2 from `exit2`  where reis='$rex2'");
$fvpx22 = mysql_fetch_array($qvpx22);
$vpx22 = $fvpx22['vp2'];
$qvpx32 = mysql_query ("select vp3 from `exit2`  where reis='$rex2'");
$fvpx32 = mysql_fetch_array($qvpx32);
$vpx32 = $fvpx32['vp3'];
$qvpx42 = mysql_query ("select vp4 from `exit2`  where reis='$rex2'");
$fvpx42 = mysql_fetch_array($qvpx42);
$vpx42 = $fvpx42['vp4'];
?>

<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  
<script>
function Resz1() {
	document.getElementById('rez11').selectedIndex = 
	document.getElementById('rez11').length = 47;
	document.getElementById('vp11').selectedIndex = 
	document.getElementById('vp11').value = '';
	document.getElementById('vp12').selectedIndex = 
	document.getElementById('vp12').value = '';
	document.getElementById('vp13').selectedIndex = 
	document.getElementById('vp13').value = '';
	document.getElementById('vp14').selectedIndex = 
	document.getElementById('vp14').value = '';
}
function Resz2() {
	document.getElementById('rez21').selectedIndex = 
	document.getElementById('rez21').length = 47;
	document.getElementById('vp21').selectedIndex = 
	document.getElementById('vp21').value = '';
	document.getElementById('vp22').selectedIndex = 
	document.getElementById('vp22').value = '';
	document.getElementById('vp23').selectedIndex = 
	document.getElementById('vp23').value = '';
	document.getElementById('vp24').selectedIndex = 
	document.getElementById('vp24').value = '';
}
function Resz3() {
	document.getElementById('rez31').selectedIndex = 
	document.getElementById('rez31').length = 47;
	document.getElementById('vp31').selectedIndex = 
	document.getElementById('vp31').value = '';
	document.getElementById('vp32').selectedIndex = 
	document.getElementById('vp32').value = '';
	document.getElementById('vp33').selectedIndex = 
	document.getElementById('vp33').value = '';
	document.getElementById('vp34').selectedIndex = 
	document.getElementById('vp34').value = '';
}
function Resz4() {
	document.getElementById('rez41').selectedIndex = 
	document.getElementById('rez41').length = 47;
	document.getElementById('vp41').selectedIndex = 
	document.getElementById('vp41').value = '';
	document.getElementById('vp42').selectedIndex = 
	document.getElementById('vp42').value = '';
	document.getElementById('vp43').selectedIndex = 
	document.getElementById('vp43').value = '';
	document.getElementById('vp44').selectedIndex = 
	document.getElementById('vp44').value = '';
}
function Resz5() {
	document.getElementById('rez51').selectedIndex = 
	document.getElementById('rez51').length = 47;
	document.getElementById('vp51').selectedIndex = 
	document.getElementById('vp51').value = '';
	document.getElementById('vp52').selectedIndex = 
	document.getElementById('vp52').value = '';
	document.getElementById('vp53').selectedIndex = 
	document.getElementById('vp53').value = '';
	document.getElementById('vp54').selectedIndex = 
	document.getElementById('vp54').value = '';
}
function Resz6() {
	document.getElementById('rez61').selectedIndex = 
	document.getElementById('rez61').length = 47;
	document.getElementById('vp61').selectedIndex = 
	document.getElementById('vp61').value = '';
	document.getElementById('vp62').selectedIndex = 
	document.getElementById('vp62').value = '';
	document.getElementById('vp63').selectedIndex = 
	document.getElementById('vp63').value = '';
	document.getElementById('vp64').selectedIndex = 
	document.getElementById('vp64').value = '';
}
function Resz1_2() {
	document.getElementById('rez11_2').selectedIndex = 
	document.getElementById('rez11_2').length = 47;
	document.getElementById('vp11_2').selectedIndex = 
	document.getElementById('vp11_2').value = '';
	document.getElementById('vp12_2').selectedIndex = 
	document.getElementById('vp12_2').value = '';
	document.getElementById('vp13_2').selectedIndex = 
	document.getElementById('vp13_2').value = '';
	document.getElementById('vp14_2').selectedIndex = 
	document.getElementById('vp14_2').value = '';
}
function Resz2_2() {
	document.getElementById('rez21_2').selectedIndex = 
	document.getElementById('rez21_2').length = 47;
	document.getElementById('vp21_2').selectedIndex = 
	document.getElementById('vp21_2').value = '';
	document.getElementById('vp22_2').selectedIndex = 
	document.getElementById('vp22_2').value = '';
	document.getElementById('vp23_2').selectedIndex = 
	document.getElementById('vp23_2').value = '';
	document.getElementById('vp24_2').selectedIndex = 
	document.getElementById('vp24_2').value = '';
}
function Resz3_2() {
	document.getElementById('rez31_2').selectedIndex = 
	document.getElementById('rez31_2').length = 47;
	document.getElementById('vp31_2').selectedIndex = 
	document.getElementById('vp31_2').value = '';
	document.getElementById('vp32_2').selectedIndex = 
	document.getElementById('vp32_2').value = '';
	document.getElementById('vp33_2').selectedIndex = 
	document.getElementById('vp33_2').value = '';
	document.getElementById('vp34_2').selectedIndex = 
	document.getElementById('vp34_2').value = '';
}
function Resz4_2() {
	document.getElementById('rez41_2').selectedIndex = 
	document.getElementById('rez41_2').length = 47;
	document.getElementById('vp41_2').selectedIndex = 
	document.getElementById('vp41_2').value = '';
	document.getElementById('vp42_2').selectedIndex = 
	document.getElementById('vp42_2').value = '';
	document.getElementById('vp43_2').selectedIndex = 
	document.getElementById('vp43_2').value = '';
	document.getElementById('vp44_2').selectedIndex = 
	document.getElementById('vp44_2').value = '';
}
function Resz5_2() {
	document.getElementById('rez51_2').selectedIndex = 
	document.getElementById('rez51_2').length = 47;
	document.getElementById('vp51_2').selectedIndex = 
	document.getElementById('vp51_2').value = '';
	document.getElementById('vp52_2').selectedIndex = 
	document.getElementById('vp52_2').value = '';
	document.getElementById('vp53_2').selectedIndex = 
	document.getElementById('vp53_2').value = '';
	document.getElementById('vp54_2').selectedIndex = 
	document.getElementById('vp54_2').value = '';
}
function Resz6_2() {
	document.getElementById('rez61_2').selectedIndex = 
	document.getElementById('rez61_2').length = 47;
	document.getElementById('vp61_2').selectedIndex = 
	document.getElementById('vp61_2').value = '';
	document.getElementById('vp62_2').selectedIndex = 
	document.getElementById('vp62_2').value = '';
	document.getElementById('vp63_2').selectedIndex = 
	document.getElementById('vp63_2').value = '';
	document.getElementById('vp64_2').selectedIndex = 
	document.getElementById('vp64_2').value = '';
}
function Resb() {
	document.getElementById('rezb').selectedIndex = 
	document.getElementById('rezb').length = 47;
	document.getElementById('vp1').selectedIndex = 
	document.getElementById('vp1').value = '';
	document.getElementById('vp2').selectedIndex = 
	document.getElementById('vp2').value = '';
	document.getElementById('vp3').selectedIndex = 
	document.getElementById('vp3').value = '';
	document.getElementById('vp4').selectedIndex = 
	document.getElementById('vp4').value = '';
}
function Resx() {
	document.getElementById('rex').selectedIndex = 
	document.getElementById('rex').length = 47;
	document.getElementById('vpx1').selectedIndex = 
	document.getElementById('vpx1').value = '';
	document.getElementById('vpx2').selectedIndex = 
	document.getElementById('vpx2').value = '';
	document.getElementById('vpx3').selectedIndex = 
	document.getElementById('vpx3').value = '';
	document.getElementById('vpx4').selectedIndex = 
	document.getElementById('vpx4').value = '';
}
function Resx2() {
	document.getElementById("rex2").selectedIndex = 
	document.getElementById("rex2").length = 47;
	document.getElementById('vpx12').selectedIndex = 
	document.getElementById('vpx12').value = '';
	document.getElementById('vpx22').selectedIndex = 
	document.getElementById('vpx22').value = '';
	document.getElementById('vpx32').selectedIndex = 
	document.getElementById('vpx32').value = '';
	document.getElementById('vpx42').selectedIndex = 
	document.getElementById('vpx42').value = '';
}
</script>
 </head>
<body>
<FORM id="rowEditForm" ACTION="script.php" method="POST">
<br/><br/><font size="5" style="margin: 0 0 0 50px;"><b>Зона досмотра №1:</b></font><font size="5" style="margin: 0 0 0 260px;"><b>Зона досмотра №2:</b></font><br/><br/>
<TABLE BORDER="1" id="demoTable" style="margin: 0px 0 0 20px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp11" type="text" name="vp11" class="POST" value="<?php echo "$vp11" ?>"/>ч.<input style="width: 30px" id="vp12" type="text" name="vp12" class="POST" value="<?php echo "$vp12" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp13" type="text" name="vp13" class="POST" value="<?php echo "$vp13" ?>"/>ч.<input style="width: 30px" id="vp14" type="text" name="vp14" class="POST" value="<?php echo "$vp14" ?>"/>мин.</td>
<td><input type='button' onclick='Resz1()' value='X' title='Очистить строку'></td>
</tr>

<tr><td>
<?php
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
<td><input style="width: 30px" id="vp21" type="text" name="vp21" class="POST" value="<?php echo "$vp21" ?>"/>ч.<input style="width: 30px" id="vp22" type="text" name="vp22" class="POST" value="<?php echo "$vp22" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp23" type="text" name="vp23" class="POST" value="<?php echo "$vp23" ?>"/>ч.<input style="width: 30px" id="vp24" type="text" name="vp24" class="POST" value="<?php echo "$vp24" ?>"/>мин.</td>
<td><input type='button' onclick='Resz2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp31" type="text" name="vp31" class="POST" value="<?php echo "$vp31" ?>"/>ч.<input style="width: 30px" id="vp32" type="text" name="vp32" class="POST" value="<?php echo "$vp32" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp33" type="text" name="vp33" class="POST" value="<?php echo "$vp33" ?>"/>ч.<input style="width: 30px" id="vp34" type="text" name="vp34" class="POST" value="<?php echo "$vp34" ?>"/>мин.</td>
<td><input type='button' onclick='Resz3()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp41" type="text" name="vp41" class="POST" value="<?php echo "$vp41" ?>"/>ч.<input style="width: 30px" id="vp42" type="text" name="vp42" class="POST" value="<?php echo "$vp42" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp43" type="text" name="vp43" class="POST" value="<?php echo "$vp43" ?>"/>ч.<input style="width: 30px" id="vp44" type="text" name="vp44" class="POST" value="<?php echo "$vp44" ?>"/>мин.</td>
<td><input type='button' onclick='Resz4()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp51" type="text" name="vp51" class="POST" value="<?php echo "$vp51" ?>"/>ч.<input style="width: 30px" id="vp52" type="text" name="vp52" class="POST" value="<?php echo "$vp52" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp53" type="text" name="vp53" class="POST" value="<?php echo "$vp53" ?>"/>ч.<input style="width: 30px" id="vp54" type="text" name="vp54" class="POST" value="<?php echo "$vp54" ?>"/>мин.</td>
<td><input type='button' onclick='Resz5()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp61" type="text" name="vp61" class="POST" value="<?php echo "$vp61" ?>"/>ч.<input style="width: 30px" id="vp62" type="text" name="vp62" class="POST" value="<?php echo "$vp62" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp63" type="text" name="vp63" class="POST" value="<?php echo "$vp63" ?>"/>ч.<input style="width: 30px" id="vp64" type="text" name="vp64" class="POST" value="<?php echo "$vp64" ?>"/>мин.</td>
<td><input type='button' onclick='Resz6()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>
<TABLE BORDER="1" id="demoTable" style="margin: -245px -10px 0 460px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp11_2" type="text" name="vp11_2" class="POST" value="<?php echo "$vp11_2" ?>"/>ч.<input style="width: 30px" id="vp12_2" type="text" name="vp12_2" class="POST" value="<?php echo "$vp12_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp13_2" type="text" name="vp13_2" class="POST" value="<?php echo "$vp13_2" ?>"/>ч.<input style="width: 30px" id="vp14_2" type="text" name="vp14_2" class="POST" value="<?php echo "$vp14_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz1_2()' value='X' title='Очистить строку'></td>
</tr>

<tr><td>
<?php
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
<td><input style="width: 30px" id="vp21_2" type="text" name="vp21_2" class="POST" value="<?php echo "$vp21_2" ?>"/>ч.<input style="width: 30px" id="vp22_2" type="text" name="vp22_2" class="POST" value="<?php echo "$vp22_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp23_2" type="text" name="vp23_2" class="POST" value="<?php echo "$vp23_2" ?>"/>ч.<input style="width: 30px" id="vp24_2" type="text" name="vp24_2" class="POST" value="<?php echo "$vp24_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz2_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp31_2" type="text" name="vp31_2" class="POST" value="<?php echo "$vp31_2" ?>"/>ч.<input style="width: 30px" id="vp32_2" type="text" name="vp32_2" class="POST" value="<?php echo "$vp32_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp33_2" type="text" name="vp33_2" class="POST" value="<?php echo "$vp33_2" ?>"/>ч.<input style="width: 30px" id="vp34_2" type="text" name="vp34_2" class="POST" value="<?php echo "$vp34_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz3_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp41_2" type="text" name="vp41_2" class="POST" value="<?php echo "$vp41_2" ?>"/>ч.<input style="width: 30px" id="vp42_2" type="text" name="vp42_2" class="POST" value="<?php echo "$vp42_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp43_2" type="text" name="vp43_2" class="POST" value="<?php echo "$vp43_2" ?>"/>ч.<input style="width: 30px" id="vp44_2" type="text" name="vp44_2" class="POST" value="<?php echo "$vp44_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz4_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp51_2" type="text" name="vp51_2" class="POST" value="<?php echo "$vp51_2" ?>"/>ч.<input style="width: 30px" id="vp52_2" type="text" name="vp52_2" class="POST" value="<?php echo "$vp52_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp53_2" type="text" name="vp53_2" class="POST" value="<?php echo "$vp53_2" ?>"/>ч.<input style="width: 30px" id="vp54_2" type="text" name="vp54_2" class="POST" value="<?php echo "$vp54_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz5_2()' value='X' title='Очистить строку'></td>
</tr>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp61_2" type="text" name="vp61_2" class="POST" value="<?php echo "$vp61_2" ?>"/>ч.<input style="width: 30px" id="vp62_2" type="text" name="vp62_2" class="POST" value="<?php echo "$vp62_2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp63_2" type="text" name="vp63_2" class="POST" value="<?php echo "$vp63_2" ?>"/>ч.<input style="width: 30px" id="vp64_2" type="text" name="vp64_2" class="POST" value="<?php echo "$vp64_2" ?>"/>мин.</td>
<td><input type='button' onclick='Resz6_2()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>

<br/>
<font size="5" style="margin: 0px 0 0px 110px;"><b>1-й выход:</b></font><font size="5" style="margin: 0px 0 0px 340px;"><b>2-й выход:</b></font>
<TABLE BORDER="1" id="demoTable" style="margin: 10px 0 0px 20px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?php
echo "<SELECT NAME='rex' id='rex'>";
echo "<option VALUE='$rex'>$rex</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vpx1" type="text" name="vpx1" class="POST" value="<?php echo "$vpx1" ?>"/>ч.<input style="width: 30px" id="vpx2" type="text" name="vpx2" class="POST" value="<?php echo "$vpx2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vpx3" type="text" name="vpx3" class="POST" value="<?php echo "$vpx3" ?>"/>ч.<input style="width: 30px" id="vpx4" type="text" name="vpx4" class="POST" value="<?php echo "$vpx4" ?>"/>мин.</td>
<td><input type='button' onclick='Resx()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>

<br/>

<TABLE BORDER="1" id="demoTable" style="margin: -100px 0 0px 460px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время посадки</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?php
echo "<SELECT NAME='rex2' id='rex2'>";
echo "<option VALUE='$rex2'>$rex2</option>";
$r=mysql_query("select reis from tables");
for($i=0; $i<mysql_num_rows($r); $i++) 
{ 
$f=mysql_fetch_array($r);
echo "<option VALUE='$f[0]'>$f[0]</option>";
} 
echo "</SELECT>";
?>
</td>
<td><input style="width: 30px" id="vpx12" type="text" name="vpx12" class="POST" value="<?php echo "$vpx12" ?>"/>ч.<input style="width: 30px" id="vpx22" type="text" name="vpx22" class="POST" value="<?php echo "$vpx22" ?>"/>мин.</td>
<td><input style="width: 30px" id="vpx32" type="text" name="vpx32" class="POST" value="<?php echo "$vpx32" ?>"/>ч.<input style="width: 30px" id="vpx42" type="text" name="vpx42" class="POST" value="<?php echo "$vpx42" ?>"/>мин.</td>
<td><input type="button" onclick="Resx2()" value="X" title="Очистить строку"></td>
</tr>
</TABLE>
<br/>

<TABLE BORDER="1" id="demoTable" style="margin: 25px 0 0px 20px;">
<TR><TD ROWSPAN=2><center>Рейс</center></TD><TD colspan=2><center>Время выдачи багажа</center></TD><td ROWSPAN=2></td></TR>
<TR><TD><center>начало</center></TD><TD><center>окончание</center></TD></TR>
<tr><td>
<?php
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
<td><input style="width: 30px" id="vp1" type="text" name="vp1" class="POST" value="<?php echo "$vp1" ?>"/>ч.<input style="width: 30px" id="vp2" type="text" name="vp2" class="POST" value="<?php echo "$vp2" ?>"/>мин.</td>
<td><input style="width: 30px" id="vp3" type="text" name="vp3" class="POST" value="<?php echo "$vp3" ?>"/>ч.<input style="width: 30px" id="vp4" type="text" name="vp4" class="POST" value="<?php echo "$vp4" ?>"/>мин.</td>
<td><input type='button' onclick='Resb()' value='X' title='Очистить строку'></td>
</tr>
</TABLE>

<INPUT TYPE="submit" name="confirm" VALUE="Сохранить изменения =)" style="margin: -80px 0 0 500px; width:200px; height:50px;">
</FORM>


<font size="5" style="margin: 0 0 0 50px;"><b>Для того чтобы закрыть программу, удерживая клавишу ALT нажмите клавишу F4.</b></font>

</body> 
</html>

