<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Start Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/csshome.css" media="screen" rel="stylesheet" type="text/css"/>
		
		<div class="header">
		</div>

		<div class="header2">
		</div>	

	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<button onclick="ScienceDesc()" class="sbutton" id="sbuttonhome"></button>
		<button onclick="TechnologyDesc()" class="tbutton" id="tbuttonhome"></button>
		<br/>
		<button onclick="EngineeringDesc()" class="ebutton" id="ebuttonhome"></button>
		<button onclick="MathDesc()" class="mbutton" id="mbuttonhome"></button>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() {
    			document.getElementById("sbuttonhome").value="You are now breathing manually";
		}
		function TechnologyDesc() {
    			document.getElementById("tbuttonhome").value="Clarke Gayford dies in Infinity War";
		}
		function EngineeringDesc() {
    			document.getElementById("ebuttonhome").value="You just lost The Game";
		}
		function MathDesc() {
    			document.getElementById("mbuttonhome").value="Subscribe to my Youtube channel";
		}
	</script>
</html>
