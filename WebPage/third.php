<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Third Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssquestionc.css" media="screen" rel="stylesheet" type="text/css"/>
		
		
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="start.php">
            			<button type="submit" formaction = "start.php" class="buttontitle" >Start Page</button>
			</form>
		</div>	

	</head>
	<div class="framedefinition">
	
		
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<div class="container">
			<div class="split left">
				<h1><span>Individual</span></h1>
				<button onclick="myFunction1()">Vote</button>
				<div id="myDIV">
				You prefer to do individual work.
				</div>
				
			</div>
			<div class="split right">
				<h1><span>Team work</span></h1>
				<img onclick="changeImage2()" id="image" src="../images/question2/computerO.png">
			</div>
		</div>		
		<script>
			function myFunction1(){
				var x = document.getElementById("myDIV");
				if(x.style.display=="none"){
					x.style.display="block";
				}else{
					x.style.display="none";
				}
			}
		</script>
	
		<form action="fourth.php">
			<button type="submit" formaction = "fourth.php">Continue to next page ►</button>
		</form>

	</body>
	</div>
</html>
