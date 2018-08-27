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
		
		<input type="button" class="sbutton" value="S" id="sbuttonhome" onclick="ScienceDesc(this)"></input>
		<input type="button" class="tbutton" value="T" id="tbuttonhome" onclick="TechnologyDesc(this)"></input>
		<br/>
		<input type="button" class="ebutton" value="E" id="ebuttonhome" onclick="EngineeringDesc(this)"></input>
		<input type="button" class="mbutton" value="M" id="mbuttonhome" onclick="MathDesc(this)"></input>
	
	    	<form action="stemSubjectPreff.php">
			<button type="submit" formaction = "stemSubjectPreff.php">Begin ►</button>
		</form>

	</body>
	</div>
	
	<script>
		function ScienceDesc(this) {
    			if (this.value == "S"){
				this.value = "Science";
			}
			else this.value = "S";
		}
		function TechnologyDesc(this) {
    			if (this.value == "T"){
				this.value = "Technology";
			}
			else this.value = "T";
		}
		function EngineeringDesc(this) {
    			if (this.value == "E"){
				this.value = "Engineering";
			}
			else this.value = "E";
		}
		function MathDesc(this) {
    			if (this.value == "M"){
				this.value = "Mathematics";
			}
			else this.value = "M";
		}
	</script>
</html>
