<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Fourth Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssquestiond.css" media="screen" rel="stylesheet" type="text/css"/>
		
		
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
	<script>
		var inside = 0;
		var outside = 0;
		function SetInside()
		{
			++inside;
			SetCookies();
		}
		function SetOutside()
		{
			++outside;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "inside= " + inside;
			document.cookie = "outside= " + outside;	
		}
	</script>
	<div class="framedefinition">
	
		
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		<h3>Choose your preferred work environment<h3>
		<div class="container">
			<div class="split left">
				<h1><span>Outside</span></h1>
				<image src="../images/question4/enviroment.png" style="width:510px;height:274px";>
				
				<p>You prefer to work outside in nature or at a construction site</p>
				
				<form action="fifth.php" onSubmit="JavaScript:SetOutside()">
				<button type="submit" formaction="fifth.php" align="middle">Select this option</button>
				</form>		
			</div>
			<div class="split right">
				<h1><span>Inside</span></h1>
				<image src="../images/question4/webwxgetmsgimg.jpg" style= "width:510px;height:274px";>
				<p>You prefer to work inside at an office with a computer or customer.</p>
					
				<form action="fifth.php "onSubmit="JavaScript:SetInside()">
				<button type="submit" formaction="fifth.php" align="middle">Select this option</button>
				</form>	
			</div>
		</div>
	</body>
	</div>
</html>
