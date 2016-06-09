<html>  
<head>  
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<script src="../../js/jquery.min.js" type="text/javascript"></script>
  <style>
  body { 
	background:#00BFFF;
		cursor: none;
   }
   </style>
   
</head>  
  
<body>  
    <div id="content"></div>  
      
    <script>  
	
        function show()  
        {  
            $.ajax({  
                url: "script_reis.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html);  
                }  
            });  
        }  
     
        $(document).ready(function(){  
            show();  
            setInterval('show()',1000);  
			
        });  
	 
    </script>  
      
</body>  
</html> 