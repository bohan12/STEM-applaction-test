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
		
		<input onclick="ScienceDesc()" type="button" class="sbutton" value="S" id="sbuttonhome"></input>
		<input onclick="TechnologyDesc()" type="button" class="tbutton" value="T" id="tbuttonhome"></input>
		<br/>
		<input onclick="EngineeringDesc()" type="button" class="ebutton" value="E" id="ebuttonhome"></input>
		<input onclick="MathDesc()" type="button" class="mbutton" value="M" id="mbuttonhome"></input>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc() {
    			document.getElementById("sbuttonhome").value="You are now breathing \n manually";
		}
		function TechnologyDesc() {
    			document.getElementById("tbuttonhome").value="Clarke Gayford dies \n in Infinity War";
		}
		function EngineeringDesc() {
    			document.getElementById("ebuttonhome").value="You just \n lost The Game";
		}
		function MathDesc() {
    			document.getElementById("mbuttonhome").value="Subscribe to my \n Youtube channel";
		}
	</script>
</html>
