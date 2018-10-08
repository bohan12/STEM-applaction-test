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
	
	recentCookie = "biology";	
	var biologyScore = getCookie();
	recentCookie = "calculus";	
	var calculusScore = getCookie();
	recentCookie = "chemistry";	
	var chemistryScore = getCookie();
	recentCookie = "physics";	
	var physicsScore = getCookie();
	recentCookie = "statistics";	
	var statisticsScore = getCookie();
	recentCookie = "computer";	
	var computerScore = getCookie();
	recentCookie = "pythagoras";	
	var pythagorasScore = getCookie();
	recentCookie = "cell";	
	var cellScore = getCookie();
	recentCookie = "apple";	
	var appleScore = getCookie();
	recentCookie = "schrodinger";	
	var schrodingerScore = getCookie();
	recentCookie = "scibeaker";	
	var scibeakerScore = getCookie();
	recentCookie = "hammer";	
	var hammerScore = getCookie();
	recentCookie = "gear";	
	var gearScore = getCookie();
	recentCookie = "periodic";	
	var periodicScore = getCookie();
	
	var recentCookie = "";
	
	//THE BELOW RESULTS CALCULATE THE SCORE TALLY
	
	//PAGE 1
	
	scienceResult += biologyScore*2;
	mathematicsResult += calculusScore*2;
	engineeringResult += calculusScore;
	scienceResult += chemistryScore*2;
	scienceResult += physicsScore;
	engineeringResult += physicsScore;
	technologyResult += physicsScore;
	mathematicsResult += statisticsScore;
	
	//PAGE 2
	
	technologyResult += computerScore*5;
	mathematicsResult += pythagorasScore*5;
	scienceResult += cellScore*5;
	engineeringResult += appleScore*3;
	scienceResult += appleScore*2;
	scienceResult += schrodingerScore*3;
	mathematicsResult += schrodingerScore*2;
	scienceResult += scibeakerScore*5;
	technologyResult += engineeringScore*5;
	technologyResult += gearScore*5;
	scienceResult += periodicScore*4;
	mathematicsResult += periodicScore;
	
	//The results are posted
	if (scienceResult >= technologyResult)
	{
		if (scienceResult >= engineeringResult)
		{	
			if (scienceResult >= mathematicsResult)
			{	
				if (scienceResult == technologyResult)
				{	
					document.getElementById('result').innerHTML="You should look into studying " 
					+ "Science or Technology at AUT";
				}
				else if (scienceResult == engineeringResult)
				{	
					document.getElementById('result').innerHTML="You should look into studying " 
					+ "Science or Engineering at AUT";
				}
				else if (scienceResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="You should look into studying " 
					+ "Science or Mathematics at AUT";
				}
				else
				{
					document.getElementById('result').innerHTML="You should look into studying Technology at AUT";
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="You should look into studying Mathematics at AUT";
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="You should look into studying Engineering at AUT";
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="You should look into studying " 
					+ "Engineering or Mathematics at AUT";
			}
		}
		else
		{
			document.getElementById('result').innerHTML="You should look into studying Mathematics at AUT";
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
					document.getElementById('result').innerHTML="You should look into studying " 
					+ "Technology or Engineering at AUT";
				}
				else if (technologyResult == mathematicsResult)
				{	
					document.getElementById('result').innerHTML="You should look into studying " 
					+ "Technology or Mathematics at AUT";
				}
				else
				{
					document.getElementById('result').innerHTML="You should look into studying Technology at AUT";
				}
			}
			else
			{	
				document.getElementById('result').innerHTML="You should look into studying Mathematics at AUT";
			}
		}
		else if (engineeringResult >= mathematicsResult)
		{
			if (engineeringResult > mathematicsResult)
			{
				document.getElementById('result').innerHTML="You should look into studying Engineering at AUT";
			}
			else if (engineeringResult == mathematicsResult)
			{
				document.getElementById('result').innerHTML="You should look into studying " 
					+ "Engineering or Mathematics at AUT";
			}
		}
		else
		{
			document.getElementById('result').innerHTML="You should look into studying Mathematics at AUT";
		}
	}
</script>
