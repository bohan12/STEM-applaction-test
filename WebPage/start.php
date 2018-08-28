<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Start Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssbegin1.css" media="screen" rel="stylesheet" type="text/css"/>
		
		<div class="header">
		</div>

		<div class="header2">
		</div>	

	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<button type="button" class="sbutton" value="S" id="sbuttonhome" onclick="ScienceDesc()">S</button>
		<input onclick="change()" type="button" value="T" id=myButton1></input>
		
		<button type="button" id="myBtn" onclick="myFunction()">Try it</button>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() 
		{
			var this = document.getElementById("sbuttonhome");
			if (this.value=="S")
			{ 
				this.value = "Science";
				this.innerHTML = "Science";
			}
			else
			{
				this.value = "S";
				this.innerHTML = "S";
			}
		}
		function myFunction() 
		{
   			var x = document.getElementById("myBtn");
    			x.disabled = true;
		}
		function change();
		{
			document.getElementById("myButton1").value="Close Curtain";
		}
	</script>
</html>
