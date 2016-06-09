<html>  
<head>  
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">
<script src="../js/jquery.min.js" type="text/javascript"></script>
  <style>
html { overflow:  hidden; }
  body { 
	background:#1560bd;
	cursor: none;
   }
   .tr { 
	bgcolor:#000000;
		cursor: none;
   }
   </style>

</head>  
  
<body class="body" onload="colourRows() ; colourCells() ; colourCols()" >  
<script  >

var speed=1;
var currentpos=0,alt=1,curpos1=0,curpos2=-1;

function initialize(){
	startit();
}

function scrollwindow(){
if (document.all) {
	temp=document.body.scrollTop;
	}
else {
	temp=window.pageYOffset;
	}
if (alt==0) {
        alt=1; 
		}
else {
	alt=0; 
	}
if (alt==0) {
	curpos1=temp; 
	}
else {
	curpos2=temp; 
	}
if (curpos1!=curpos2){
	if (document.all) {
		currentpos=document.body.scrollTop+speed; 
		}
	else {
        	currentpos=window.pageYOffset+speed; 
			}
	window.scroll(0,currentpos);
}
else{
	currentpos=1;
        window.scroll(0,currentpos)
}
}

function startit(){
	setInterval("scrollwindow()",200); //скорость прокрутки таблицы 
}
window.onload=initialize;
</script>


    <div id="content"></div>  
      
    <script>  
	
        function show()  
        {  
            $.ajax({  
                url: "script_table.php",  
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