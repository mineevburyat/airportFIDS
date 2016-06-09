<html>  
<head>  
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<script src="../js/jquery.min.js" type="text/javascript"></script>
  <style>
  body { 
	background:#f7f21a;
	margin-top: 3%;
		cursor: none;

   }
html { overflow:  hidden; }
   </style>
   
</head>  
  
<body>  
    <div id="content"></div>  
      
    <script>  
	
        function show()  
        {  
            $.ajax({  
                url: "script_date.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }  
     
        $(document).ready(function(){  
            show();  
            setInterval('show()',60000);  
			
        });  
	 
    </script>  
      
</body>  
</html> 