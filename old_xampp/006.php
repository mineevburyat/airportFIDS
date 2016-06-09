<?php
$db=mysql_connect('localhost', 'root', '');
mysql_select_db('avia', $db);
mysql_query("SET NAMES 'cp1251'");

$st="6_en";

?>
<html>
<head>
  <META HTTP-EQUIV="refresh" CONTENT='30;URL=<?php echo $st?>.php'>
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  <style>

  H12 {
    font-family: 'Times New Roman', Times, serif; /* Гарнитура текста */ 
    font-size: 45px; /* Размер шрифта в процентах */ 
	color: #c9586b;	
	margin-top: 3%;
	margin-left: 3%;
   } 
H10 {
    font-family: 'Times New Roman', Times, serif; /* Гарнитура текста */ 
    font-size: 34px; /* Размер шрифта в процентах */ 
	color: #24629d;
	margin-top: 10%;
	margin-left: 2%;
   }   
H11 {
    font-family: 'Times New Roman', Times, serif; /* Гарнитура текста */ 
    font-size: 25px; /* Размер шрифта в процентах */ 
	color: #2e6aa1;
	margin-top: 3%;
	margin-left: 3%;
   }
  
</style>
</head>
<body bgcolor='#99CCFF'>
<br>
<br>
<center><img src=logo\logo.png></center> 
<br>
<br>
<br>
<br>
<br>
<br>
<center><h12><b>Уважаемые пассажиры!</b></h12></center>
<br><h10 align="justify"><b>В соответствии с Распоряжением Федерального агентства<br>
воздушного транспорта от 05.01.2014 г. в период с 07 января<br>
по 21 марта 2014 гг. все жидкости, включая, средства личной<br>
гигиены, косметические средства, медикаменты*, аэрозоли и <br>
гели в любых емкостях, в том числе средства, используемые в<br> 
художественной деятельности (краски, грунты, клеи) должны<br> 
сдаваться в багаж.</b></h10>
<br>
<br>
<h11><i align="justify">* Медикаменты и детское питание допускаются к провозу в ручной клади после проверки службой авиационной безопасности аэропорта «Байкал».</i></h11>
<br>
</body>
</html>


