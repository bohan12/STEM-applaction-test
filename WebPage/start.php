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
			.<form action="https://www.aut.ac.nz/">
            		<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
		</div>	

	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<input onclick="ScienceDesc()" type="button" class="sbutton" value="S" id="sbuttonhome"></input>
		<input onclick="TechnologyDesc()" type="button" class="tbutton" value="T \r\n \r\n Technology" id="tbuttonhome"></input>
		<br/>
		<input onclick="EngineeringDesc()" type="button" class="ebutton" value="E" id="ebuttonhome"></input>
		<input onclick="MathematicsDesc()" type="button" class="mbutton" value="M" id="mbuttonhome"></input>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" class="nextpagebutton" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() {
			var science = document.getElementById("sbuttonhome");
    			if (science.value=="S") science.value = "Science at AUT covers the natural sciences such as Biology, " +
			"Chemistry and Physics. AUT also covers Conservation, Geology and Physcology among other majors";
    			else science.value = "S";
		}
		function TechnologyDesc() {
			var technology = document.getElementById("tbuttonhome");
    			if (technology.value=="T \r\n \r\n Technology") technology.value = "Technology at AUT focuses on Analytics, " +
			"Computational Intelligence, Computer Science, IT Service Science, Networks and Security, " +
			"and Software Development";
    			else {
				technology.value = "T \r\n \r\n Technology";
			}
		}
		function EngineeringDesc() {
			var engineering = document.getElementById("ebuttonhome");
    			if (engineering.value=="E") engineering.value = "Engineering at AUT covers both traditional majors " +
			"such as Electrical Engineering and Mechanical Engineering as well as the " +
			"hardware aspects of Technology";
    			else engineering.value = "E";
		}
		function MathematicsDesc() {
			var mathematics = document.getElementById("mbuttonhome");
    			if (mathematics.value=="M") mathematics.value = "Mathematics at AUT covers Analytics, " + 
			"Applied Mathematics, Astronomy and Computer Science."
    			else mathematics.value = "M";
		}
	</script>
</html>
