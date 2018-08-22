<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				
		<div class="header">
		</div>

		<div class="header2">
		</div>	
<script type="text/javascript">
	function change(id)
  	 {
    	  var cname=document.getElementById(id).className;
    	  var ab=document.getElementById(id+"_hidden").value;
    	  document.getElementById(cname+"rating").innerHTML=ab;
    	  for(var i=ab;i>=1;i--)
   	   {
    	     document.getElementById(cname+i).src="computerO.png";
    	  }
    	  var id=parseInt(ab)+1;
   	   for(var j=id;j<=2;j++)
   	   {
   	      document.getElementById(cname+j).src="computerl.png";
   	   }
  	 }
	</script>
		
 		<style>
		
			.container {
   				 position: relative;
    				width: 100%;
   				 max-width: 400px;
				}

			.container img {
   			 width: 100%;
   			 height: auto;
			}

			.container .btn {
    			background: url(computerO.png);
    			padding: 50px 50px;
     		 }

			
		</style>

 		<title>Second Page</title>
	</head>
	<div style="padding-left:150px; padding-top:50px;">
		<body>
			
			<h1>Second Page</h1>
			<?php
			echo "this is the second page";
			?> 
			
			<p><a href="third.php">third page </a> <br /> - Went to third page</p>

			<form action="index.html">
			<button type="submit" formaction = "../index.php">index page</button>
			</form>
  			<p  hidden id="myP">I am a computer.</p>

  			Do you prefer to working with: 
			<div class="container">
  			<img src="" style="width:100%">
  			<button class="btn"  onclick="myFunction()" ></button>

			
			</div>
			
			<p id="demo"></p>  
			<script>
				img_array= new Array("computerO.png","computerl.png");
			i=0;
				function myFunction() {
				i++;
				document.getElementById("myImg").src=img_array[i];
				if(i==img_array.length-1){
				i=-1;}
    				var x = document.getElementById("myP").innerHTML;
    				document.getElementById("demo").innerHTML = x;
				}
				</script>
			



  			<input type="submit" name="submit" value="Submit">  
		</form>

		<?php
		echo "<h2>Your Input:</h2>";

		echo $prefer;
		?>
	
		<form action="third.php">
			<button type="submit" formaction = "third.php">Continue to next page ?</button>
		</form>

		</body>
	</div>
</html>