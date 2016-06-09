<?php
$db=mysql_connect("localhost", "read", "123987");
mysql_select_db("airport", $db);
mysql_query("SET NAMES 'cp1251'");
 
// Номер рейса
$qre = mysql_query ("select reis from stand where nst=1");
$fre = mysql_fetch_array($qre);
$reis = $fre['reis'];

If ($reis==0) {
$page='reklama';
} else {
$page='index';
}
?>
<html>  
<head>  
  <META HTTP-EQUIV="refresh" CONTENT='60;URL=<?php echo $page ?>.php'>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
  <style>
html { 
overflow:  hidden; 
cursor: none;
}
  </style>
   
</head>  

 <frameset rows="15%,32%,17%,36%" border="0">
     
   <frameset cols="50,50" border="0">
   
     <frameset border="0">
     <frame src="text_check.php" name="MENU"/>
     </frameset>
	 <frame src="body_time.php" name="MENU"/>
   </frameset>
   <frameset cols="100" border="0">
       <frame src="body_reis.php" name="MENU"/>
   </frameset>
   
   <frameset cols="100" border="0">
       <frame src="body_departure.php" name="MENU"/>
   </frameset>
   <frameset cols="40,60" border="0">
       <frame src="body_logo.php" name="MENU"/>
	      <frameset rows="25,75" border="0">
   		<frame src="body_class.php" name="MENU"/>
		<frameset cols="50,50" border="1">
		  <frame src="body_time_reg1.php" name="MENU" border="0"/>
		  <frame src="body_time_reg2.php" name="MENU" border="0"/>
		</frameset>
     </frameset>
   </frameset>

   </frameset>
</html> 



   