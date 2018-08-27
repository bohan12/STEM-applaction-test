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
		
		<button class="sbutton" value="S" id="sbuttonhome" onclick="ScienceDesc()">S</button>
		<button class="tbutton" value="T" id="tbuttonhome" onclick="TechnologyDesc()">T</button>
		<br/>
		<button class="ebutton" value="E" id="ebuttonhome" onclick="EngineeringDesc()">E</button>
		<button class="mbutton" value="M" id="mbuttonhome" onclick="MathDesc()">M</button>
	
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
		function TechnologyDesc() {
    			document.getElementById("tbuttonhome").innerHTML = "Technology";
		}
		function EngineeringDesc(this) {
    			if (this.innerHTML == "E"){
				this.innerHTML = "Engineering";
			}
			else this.innerHTML = "E";
		}
		function MathDesc(this) {
    			if (this.innerHTML == "M"){
				this.innerHTML = "Mathematics";
			}
			else this.innerHTML = "M";
		}
	</script>
</html>
