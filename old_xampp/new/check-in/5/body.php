<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=5");
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
// Класс
$ql = mysql_query ("select class from stand where nst=5");
$fl = mysql_fetch_array($ql);
$class = $fl['class'];
// Начало регистрации
$qp = mysql_query ("select nach_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$nreg = $fp['nach_reg'];
// Окончание регистрации
$qp = mysql_query ("select okon_reg from reis where reis='$reis'");
$fp = mysql_fetch_array($qp);
$okreg = $fp['okon_reg'];

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
	margin:-10px;
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
    background: #00BFFF; /* Цвет фона ячеек */
   }
H20 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 40px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
	padding: 0 0 0 10px;
   }
H21 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 34px; /* Размер шрифта в процентах */ 
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
    font-size: 190px; /* Размер шрифта в процентах */ 
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
    font-size: 23px; /* Размер шрифта в процентах */ 
	color: #333;
	font-weight:bold;
   }   
  </style>
   
</head>  
<body>
<TABLE BORDER >
        <TR class="style1">
            <TD COLSPAN=2 width="720px" height="115px">
				<h20><b>Стойка регистрации №5</b></h20><br>
				<h21>Check-in</h21>
			</TD>
            <TD width="304px">
				<h22><b><?php echo "$date" ?><b></h22><br>
				<h23><b><?php echo "$time" ?><b></h23>
			</TD>
        </TR>
        <TR class="style2">
            <TD COLSPAN=3 height="246px">
				<h24><center><?php echo "$kod"."$reis" ?></center></h24>
			</TD>
        </TR>
        <TR class="style1">
            <TD COLSPAN=3 height="130px">
				<h25><center><?php echo "$punkt" ?></center></h25>
			</TD>
        </TR>
		<TR class="style2">
            <TD ROWSPAN=2 height="278px" width="410px">
				<center><img src="../../logo/<?php echo "$logo" ?>.jpg" width="370px" height="170px" style="border-radius: 25px;"></center>
			</TD> 
			<TD COLSPAN=2 height="70px">
				<h26><center><?php echo "$class"." "."class" ?></center></h26> 
			</TD> 
        </TR>
        <TR class="style2">
            <TD>
				<h28><center>Начало регистрации:</center></h28>
				<h28><center>Registration begins:</center></h28>
				<h27><center><?php echo "$nreg" ?></center></h27>
			</TD> 
			<Td class="th">
				<h28><center>Окончание регистрации:</center></h28>
				<h28><center>The end registration:</center></h28>
				<h27><center><?php echo "$okreg" ?></center></h27>
			</Td> 
        </TR>
		
		
</TABLE>
 
</body>
</html> 



   