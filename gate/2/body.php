<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
$ngate='2'; // Номер выхода

// Номер рейса
$qre = mysql_query ("select reis from gate where nexit=$ngate");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];
// Код компании / логотип
$qc = mysql_query ("select kod_en from reis where reis='$reis'");
$fc = mysql_fetch_array($qc);
$kod = $fc['kod_en'];
$logo = $fc['kod_en'];
// Пункт отправления
$qp = mysql_query ("select naznach from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$punkt = $fp['naznach'];
// Начало регистрации
$qp = mysql_query ("select nach_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$nreg = $fp['nach_reg'];
// Окончание регистрации
$qp = mysql_query ("select okon_pos from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$okpos = $fp['okon_pos'];

$s=time ("G:i"); 
$time=date("G:i",$s) . "<br>"; 

$th = date('H');
$tm = date('i');
$time = $th.':'.$tm;

$dd = date('d');
$dm = date('m');
$dm3 = date('Y');
if ($dm==01) {$dm2 = 'Января';}
else if ($dm==02) {$dm2 = 'Февраля';}
else if ($dm==03) {$dm2 = 'Марта';}
else if ($dm==04) {$dm2 = 'Апреля';}
else if ($dm==05) {$dm2 = 'Мая';}
else if ($dm==06) {$dm2 = 'Июня';}
else if ($dm==07) {$dm2 = 'Июля';}
else if ($dm==8) {$dm2 = 'Августа';}
else if ($dm==9) {$dm2 = 'Сентября';}
else if ($dm==10) {$dm2 = 'Октября';}
else if ($dm==11) {$dm2 = 'Ноября';}
else if ($dm==12) {$dm2 = 'Декабря';}

$date = $dd.' '.$dm2.' '.$dm3;

if ($reis==0) {
$st="reklama.php";
$st1="0";
} else {
$st="";
$st1="99999";
}
 ?> 
<html>  
<head>  
<META HTTP-EQUIV="refresh" CONTENT='<?php echo $st1?>;URL=<?php echo $st?>'>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <style>
html { 
	overflow:  hidden; 
	cursor: none;
}
table { 
    border: 0px double #999999; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
	margin:-10px -10px 0px -10px; /* top right bottom left */
   }
td { 
    padding: 1px; /* Поля вокруг содержимого ячеек */
    border: 0px solid #999999; /* Граница вокруг ячеек */
   }
.th { 
    padding: 1px; /* Поля вокруг содержимого ячеек */
    border: 1px solid #ccc; /* Граница вокруг ячеек */
	border-width: 0 0 0 1px;
   }
.style1 { 
    background: #156fdf; /* Цвет фона ячеек */
   }
.style2 { 
    background: #00ccff; /* Цвет фона ячеек */
   }
H20 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
	padding: 0 0 0 10px;
   }
H21 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 40px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:normal;
	padding: 0 0 0 10px;
   }
H22 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 34px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
	float: right;
	padding: 0 10px 0 0 ;
   }
H23 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:normal;
	margin-right:55px;
	float: right;	
   }
H24 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 170px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
   } 
H25 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 100px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:normal;
   } 
H26 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold
   }
H27 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 115px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
   }  
H28 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 28px; /* Размер шрифта в процентах */ 
	color: #fff;
	font-weight:bold;
   }   
  </style>
   
</head>  
<body>
<TABLE BORDER >
        <TR class="style1">
            <TD width="762px" height="118px" COLSPAN=3>
				<h20><b>Выход на посадку №<?php echo "$ngate" ?></b></h20><br>
				<h21>Departure gate</h21>
			</TD>
            <TD width="362px" height="118px" COLSPAN=1>
				<h22><b><?php echo "$date" ?><b></h22><br>
				<h23><b><?php echo "$time" ?><b></h23>
			</TD>
        </TR>
        <TR class="style2">
            <TD COLSPAN=1 height="295px" width="390px">
				<center><img src="../../img/logo/<?php echo "$logo" ?>.jpg" width="370px" height="170px" style="border-radius: 25px;"></center>
			</TD>
			<TD COLSPAN=3 height="295px">
				<center><h24><?php echo " "."$kod" ?><?php echo "$reis" ?></h24></center>
			</TD>
        </TR>
        <TR class="style2">
            <TD COLSPAN=4 height="160px">
				<h25><center><?php echo "$punkt" ?></center></h25>
			</TD>
        </TR>
		<TR class="style1">
            <TD height="195px" COLSPAN=2>
				<h28><center>Начало посадки:</center></h28>
				<h28><center>Landing beginning:</center></h28>
				<h27><center><?php echo "$nreg" ?></center></h27>
			</TD> 
			<TD class="th" height="195px" COLSPAN=2>
				<h28><center>Окончание посадки:</center></h28>
				<h28><center>Completion of landing:</center></h28>
				<h27><center><?php echo "$okpos" ?></center></h27>
			</TD> 
        </TR>
</TABLE>

</body>
</html> 



   