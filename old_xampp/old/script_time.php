<?php 
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

 ?> 
 <html>
<head>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type"/> 
  <style>
  html { overflow:  hidden; }
     body { 
	background:#156fdf;
	cursor: none;
	float: right;
   }
 H24 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 34px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:bold;
   }
   H25 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 50px; /* Размер шрифта в процентах */ 
	color: #f7f21a;
	font-weight:normal;
	margin-left:55px;
   }
</style>
</head>
<body class="body">
<h24><b><?php echo "$date" ?><b></h24><br>
<h25><b><?php echo "$time" ?><b></h25>
</body>
</html>