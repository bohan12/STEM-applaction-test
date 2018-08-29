<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssquestionc.css" media="screen" rel="stylesheet" type="text/css"/>
		
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

        	<title>Third Page</title>
	</head>
	<div class="framedefinition">
	<body>
		<img src="../images/STEMblur.png" alt="stem" class="logo">
		<?php
			echo "this is the second page";
 			// define variables and set to empty values
			$preferErr = "";
			$prefer = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  				if (empty($_POST["prefer"])) {
  			  		$preferErr = "required to choice one of the options";
  				}
				else 
				{
    				$prefer = test_input($_POST["prefer"]);
  				}
			}

			function test_input($data) {
  			$data = trim($data);
 			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
 			return $data;
			}
			?> 
		<p><span class="error">* required field</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  			Do you prefer to working with: <span class="error">* <?php echo $preferErr;?></span>
				
			</br>
			
  			<input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="female") echo "checked";?> value="Team">Team
  
 			<br></br>
  			<div class="border">
  			<p> Team ....................</p>
  			</div>
  			<input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="male") echo "checked";?> value="Individual">Individual
  			<div id="border">
  			<p> Individual ........................</p>
  			</div>
  
  			<br><br>
  			<input type="submit" name="submit" value="Submit">  
		</form>

        	<form action="second.php">
            		<button type="submit" formaction = "thingsOrIdeas.php">Previous Page</button>
        	</form>
	
		<form action="fourth.php">
			<button type="submit" formaction = "fourth.php">Continue to next page ►</button>
		</form>

	</body>
	</div>
</html>
