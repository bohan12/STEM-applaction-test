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
	
	recentCookie = "Biology";	
	var biologyScore = getCookie();
	recentCookie = "Calculus";	
	var calculusScore = getCookie();
	recentCookie = "Chemistry";	
	var chemistryScore = getCookie();
	recentCookie = "Physics";	
	var physicsScore = getCookie();
	recentCookie = "Statistics";	
	var statisticsScore = getCookie();
	
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
	
	scienceResult += biologyScore*2;
	mathematicsResult += calculusScore*2;
	engineeringResult += calculusScore;
	scienceResult += chemistryScore*2;
	scienceResult += physicsScore;
	engineeringResult += physicsScore;
	technologyResult += physicsScore;
	mathematicsResult += statisticsScore;
}
</script>
