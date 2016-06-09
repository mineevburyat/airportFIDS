<?php
mysql_connect("localhost", "root", "");
mysql_select_db("avia") or die("Could not select database");
mysql_query("SET NAMES 'cp1251'");

if($_POST["confirm"])
{
$nst=$_POST["nst"];
$reis=$_POST["reis"];
$time=$_POST["time"];
}

$query4  = "UPDATE st SET reis='$reis' WHERE nst='$nst'";
$query  = "select nr from tables WHERE reis='$reis'";
$query2 = "select kr from tables WHERE reis='$reis'";
$query3 = "select vv from tables WHERE reis='$reis'";
$query5 = "select punkt from tables WHERE reis='$reis'";
$query6 = "select company from tables WHERE reis='$reis'";

$nr1 = mysql_query($query);
$nr2 = mysql_fetch_array($nr1);
$nr = $nr2['nr'];

$kr1 = mysql_query($query2);
$kr2 = mysql_fetch_array($kr1);
$kr = $kr2['kr'];

$vv1 = mysql_query($query3);
$vv2 = mysql_fetch_array($vv1);
$vv = $vv2['vv'];

$c1 = mysql_query($query6);
$c2 = mysql_fetch_array($c1);
$c = $c2['company'];

$p1 = mysql_query($query5);
$p2 = mysql_fetch_array($p1);
$p = $p2['punkt'];

$result = mysql_query($query4);
?>

<html>
<head>
	<META HTTP-EQUIV="refresh" CONTENT="60;URL=index.php">
  <meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <title></title>
    <style>
.st { 
	width: 524px; 
	height: 250px;
	margin-top: 0%;
	margin-left:-0.8%;
	background:#d4d4d4;
   }

   </style>
 </head>
<body> 
<center>
<br>
<br>
<div class="st">
<form action="reis_t.php" method="POST">
<br>
<b>Рейс <? echo "$c" ?><? echo "$reis" ?> (Улан-Удэ  -   <? echo "$p" ?>)</b>
<br>
<hr style="width:300px;">
Начало регистрации: <input style="width: 10%" id="nr" type="text" name="nr" class="POST" value="<? echo "$nr" ?>"/><br>
<br><input style="width: 10%" id="r" type="hidden" name="r" class="POST" value="<? echo "$reis" ?>"/>
Конец  регистраци: <input style="width: 10%" id="kr" type="text" name="kr" class="POST" value="<? echo "$kr" ?>"/><br>
<br>
Время вылета: <input style="width: 10%" id="vv" type="text" name="vv" class="POST" value="<? echo "$vv" ?>"/><br>
<hr style="width:300px;">
<input style="width: 15%" type="submit" id="confirm" value="Изменить" name="confirm" /></form>    <input type="submit" value="Вернуться на прошлую страницу" onclick=" location.href='http://135.242.153.120/admin/'" ></input>

</div>
   </center>
</body> 
</html>
