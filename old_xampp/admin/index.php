<html>
<head>
	
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
  <style>
.st { 
	width: 524px; 
	height: 140px;

	margin-left:-0.8%;
	background:#d4d4d4;
   }
   
   .st2 { 
	width: 524px; 
	height: 220px;

	margin-left:-0.8%;
	background:#d4d4d4;
   }
   
   .st3 { 
	width: 524px; 
	height: 190px;

	margin-left:-0.8%;
	background:#d4d4d4;
   }
   </style>
 </head>
<body> 
<center>

<div class="st">
<form action="reis.php" method="POST">
<center>
<br>
<b>Установка информации на мониторы:</b>
<hr style="width:300px;">
Введите номер стойки: <input style="width: 10%" id="nst" type="text" name="nst" class="POST" /> Введите номер рейса: <input style="width: 11%" id="reis" type="text" name="reis" class="POST" /><br>
<hr style="width:300px;">
<font size=2 color=red>Не забывайте ставить двоеточие при указании времени!</font><br><br>
<input style="width: 10%" type="submit" id="confirm" value="Ввод" name="confirm" />
</form>
</div>
<font size=1 color=white>1</font><br>
<div class="st2">
<form action="zader.php" method="POST">
<br>
<b>Задержка:</b>
<hr style="width:300px;">
Задержка на стойке: <input style="width: 10%" id="znst" type="text" name="znst" class="POST" /><br> 
<br>
Задержка рейса: <input style="width: 10%" id="zreis" type="text" name="zreis" class="POST" /><br>
<br>
Задержка до: <input style="width: 10%" id="ztime" type="text" name="ztime" class="POST" /><br>
<hr style="width:350px;">
<input style="width: 10%" type="submit" id="confirm" value="Ввод" name="confirm" />

</form>
</div>
<font size=1 color=white>1</font><br>
<br>
<br>
<input type="submit" value="Просмотр информации на стойках регистрации" onclick=" location.href='http://172.17.10.120/admin/streg.php'" ></input>
<br>
<br>
<input type="submit" value="Табло зоны досмотра №1" onclick=" location.href='http://172.17.10.120/admin/zd.php'" ></input>
<br>
<br>
<input type="submit" value="Табло зоны досмотра №2" onclick=" location.href='http://172.17.10.120/admin/zd2.php'" ></input>
<br>
<br>
<input type="submit" value="Табло прилета" onclick=" location.href='http://172.17.10.120/admin/tabp.php'" ></input>
   </center>

   </body> 
</html>

