<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssresult.css" media="screen" rel="stylesheet" type="text/css"/>
		
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

        <title>Results Page</title>
	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
	
		<form action="start.php">
			<button type="submit" formaction = "start.php">Return to start</button>
		</form>
		<div id=result>
			<p>example</p>
		</div>

	</body>
	</div>
</html>

<script>
	var recentCookie = "";
	var scienceResult = 0;
	var technologyResult = 0;
	var engineeringResult = 0;
	var mathematicsResult = 0;
	
	function getCookies() 
	{
		var name = recentCookie;
		var ca = document.cookie.split(';');
		for(var i = 0; i < ca.length; i++) 
		{
			var c = ca[i];
        		while (c.charAt(0) == ' ')
			{
           			c = c.substring(1);
       			}
        		if (c.indexOf(name) == 0) 
			{
            			return c.substring(name.length, c.length);
        		}
   		}
    		return "";
	}
	
	recentCookie = "biology=";	
	var biologyScore = getCookies();
	recentCookie = "calculus=";	
	var calculusScore = getCookies();
	recentCookie = "chemistry=";	
	var chemistryScore = getCookies();
	recentCookie = "physics=";	
	var physicsScore = getCookies();
	recentCookie = "statistics=";	
	var statisticsScore = getCookies();
	recentCookie = "computer=";	
	var computerScore = getCookies();
	recentCookie = "pythagoras=";	
	var pythagorasScore = getCookies();
	recentCookie = "cell=";	
	var cellScore = getCookies();
	recentCookie = "apple=";	
	var appleScore = getCookies();
	recentCookie = "schrodinger=";	
	var schrodingerScore = getCookies();
	recentCookie = "scibeaker=";	
	var scibeakerScore = getCookies();
	recentCookie = "hammer=";	
	var hammerScore = getCookies();
	recentCookie = "gear=";	
	var gearScore = getCookies();
	recentCookie = "periodic=";	
	var periodicScore = getCookies();
	
	var recentCookie = "";
	
	//THE BELOW RESULTS CALCULATE THE SCORE TALLY
	
	//PAGE 1
	
	scienceResult = scienceResult + biologyScore*2;
	mathematicsResult = mathematicsResult + calculusScore*2;
	engineeringResult = engineeringResult + calculusScore;
	scienceResult = scienceResult + chemistryScore*2;
	scienceResult = scienceResult + physicsScore;
	engineeringResult = engineeringResult + physicsScore;
	technologyResult = technologyResult + physicsScore;
	mathematicsResult = mathematicsResult + statisticsScore;
	
	//PAGE 2
	
	technologyResult = technologyResult + computerScore*5;
	mathematicsResult = mathematicsResult + pythagorasScore*5;
	scienceResult = scienceResult + cellScore*5;
	engineeringResult = engineeringResult + appleScore*3;
	scienceResult = scienceResult + appleScore*2;
	scienceResult = scienceResult + schrodingerScore*3;
	mathematicsResult = mathematicsResult + schrodingerScore*2;
	scienceResult = scienceResult + scibeakerScore*5;
	technologyResult = technologyResult + hammerScore*5;
	technologyResult = technologyResult + gearScore*5;
	scienceResult = scienceResult + periodicScore*4;
	mathematicsResult = mathematicsResult + periodicScore;
	
	//The results are posted
	if (scienceResult >= technologyResult)
	{
		if (scienceResult >= engineeringResult)
		{	
			if (scienceResult >= mathematicsResult)
			{	
				if (scienceResult == technologyResult &&
				    scienceResult == mathematicsResult &&
				    scienceResult == engineeringResult)
				{
					document.getElementById('result').innerHTML="<p>Sorry, we could not get a clear "
					+ "result from your answers</p><p>Please try again</p><p>Scores:</p><p>Science: " + 
					scienceResult + "</p><p>Technology: " + technologyResult + "</p><p>Engineering: "
					+ engineeringResult + "</p><p>Mathematics: " + mathematicsResult + "</p>"
				}
				else if (scienceResult == technologyResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Technology at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>"
				}
				else if (scienceResult == engineeringResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Engineering at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>"
				}
				else if (scienceResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Science or Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>"
				}
				else
				{
					document.getElementById('result').innerHTML="<p>You should look into studying "
					+ "Technology at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>"
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="<p>You should look into studying "
				+ "Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>"
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying Engineering at AUT</p>"
				+ "<p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>";
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying " 
				+ "Engineering or Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>";
			}
		}
		else
		{
			document.getElementById('result').innerHTML="<p>You should look into studying "
			+ "Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
			"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
			"<p>Mathematics: " + mathematicsResult + "</p>";
		}
	}
	else
	{
		if (technologyResult >= engineeringResult)
		{	
			if (technologyResult >= mathematicsResult)
			{	
				if (technologyResult == engineeringResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Technology or Engineering at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>";
				}
				else if (technologyResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="<p>You should look into studying " 
					+ "Technology or Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>";
				}
				else
				{
					document.getElementById('result').innerHTML="<p>You should look into studying "
					+ "Technology at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
					"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
					"<p>Mathematics: " + mathematicsResult + "</p>";
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="<p>You should look into studying "
				+ "Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>";
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying Engineering at AUT</p>"
				+ "<p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>";
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="<p>You should look into studying " 
				+ "Engineering or Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
				"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
				"<p>Mathematics: " + mathematicsResult + "</p>";
			}
		}
		else
		{
			document.getElementById('result').innerHTML="<p>You should look into studying "
			+ "Mathematics at AUT</p><p>Scores:</p><p>Science: " + scienceResult + "</p>" +
			"<p>Technology: " + technologyResult + "</p><p>Engineering: " + engineeringResult + "</p>" +
			"<p>Mathematics: " + mathematicsResult + "</p>" + mathematicsResult  + mathematicsResult ;
		}
	}
</script>
