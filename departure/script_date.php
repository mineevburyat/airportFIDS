<?php 
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
 H24 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 22px; /* Размер шрифта в процентах */ 
	color: #003399;
	font-weight:normal;
	margin-left:15px;	
   }
</style>
</head>
<body class="body">
<h24><?php echo "$date" ?></h24>

</body>
</html>