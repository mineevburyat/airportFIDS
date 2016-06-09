<?php 
$s=time ("G:i"); 
$time=date("G:i",$s) . "<br>"; 
 ?> 
 <html>
<head>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type"/> 
  <style>
  
 H24 {
    font-family: 'Arial', Times, serif; /* Гарнитура текста */ 
    font-size: 46px; /* Размер шрифта в процентах */ 
	color: #003399;
	font-weight:bold
   }
</style>
</head>
<body class="body">
<h24><b><?php echo "$time" ?><b></h24>

</body>
</html>