<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Start Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssbegin2.css" media="screen" rel="stylesheet" type="text/css"/>
		
		<div class="header">
		</div>

		<div class="header2">
		</div>	

	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<input onclick="ScienceDesc()" type="button" class="sbutton" value="S" id="sbuttonhome"></input>
		<input onclick="TechnologyDesc()" type="button" class="tbutton" value="T" id="tbuttonhome"></input>
		<br/>
		<input onclick="EngineeringDesc()" type="button" class="ebutton" value="E" id="ebuttonhome"></input>
		<input onclick="MathematicsDesc()" type="button" class="mbutton" value="M" id="mbuttonhome"></input>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() {
			var science = document.getElementById("sbuttonhome");
    			if (science.value=="S") science.value = "Science is the fffffffffffff fffffffffffffff ffffffffffffff " +
			"fffffffffffff fffffffffffff ffffffffffff ffffffffffffffff fffffffffffffff fffffffffff ffffffffffffff" +
			"ffffffffffffff fffffffffffff fffffffffffffffff ffffffffffffffffffffffffffff fffffffff ffffffffffffff";
    			else science.value = "S";
		}
		function TechnologyDesc() {
			var technology = document.getElementById("tbuttonhome");
    			if (technology.value=="T") technology.value = "Technology";
    			else technology.value = "T";
		}
		function EngineeringDesc() {
			var engineering = document.getElementById("ebuttonhome");
    			if (engineering.value=="E") engineering.value = "Engineering";
    			else engineering.value = "E";
		}
		function MathematicsDesc() {
			var mathematics = document.getElementById("mbuttonhome");
    			if (mathematics.value=="M") mathematics.value = "Mathematics";
    			else mathematics.value = "M";
		}
	</script>
</html>
