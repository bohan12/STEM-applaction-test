<!DOCTYPE html>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Third Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssquestionthird.css" media="screen" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			
			var individual = 0;
			var teamwork = 0;
		function SetIndividual()
		{
			++individual;
			SetCookies();
		}
		function SetTeamwork()
		{
			++teamwork;
			SetCookies();
		}
		function SetCookies()
		{
			document.cookie = "teamwork= " + teamwork;
			document.cookie = "individual= " + individual;	
			alert("setcookies " );
			getCookies();
		}
		function getCookie() 
		{
		//var name = "biology";
			alert("get cookies " );
			var name = "individual";
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
				
		</script>
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
	<div class="framedefinition">
	
		
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		
		<div class="container">
			
			<div class="split Left">
				<h1><span>Individual</span></h1>
				<div id="individualdesc">
					Hover the mouse on the image for more information.
				</div>
				<div class="container1">
									
					<img src="../images/question3/individual.png" alt="Avatar" class="image">
					<div class="overlay">
					<div class="text">You like to work by your self directed by your self or by the
						direction of some one else ( manager / leader ) examples of this may
						inclued research projects or therory work and civil engeenaring.</div>
				
				</div>
				</div>
				<form action="fourth.php" onSubmit="JavaScript:SetIndividual()">
				<button type="submit" formaction="fourth.php">Choose this option</button>
				</form>					
				
			</div>
			<div class="split Right">
				<h1><span>Team work</span></h1>
				<div id="teamworkdesc">
					Hover the mouse on the image for more information.
				</div>
				<div class="container1">
					
					<img src="../images/question3/individual.png" alt="Avatar" class="image">
					<div class="overlay">
					<div class="text">your like to work with a team. getting everones input when itcomes tp
						disisions. example of this may include software development. data visulisation
						marine bioligest.</div>
				
				</div>
				</div>
				<form action="fourth.php" onSubmit="JavaScript:SetTeamwork()">
				<button type="submit" formaction="fourth.php">Teamwork</button>
				</form>					
				
			</div>
		</body>
	</div>
</html>
