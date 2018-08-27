<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssthingsideas.css" media="screen" rel="stylesheet" type="text/css"/>
		
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
		
 		<style>
			.error {color: #FF0000;}

			.border {
				border: 2 px solid lightblue;
				padding: 10;
  				border-radius:50px 20px;
			}
		</style>

 		<title>Second Page</title>
	</head>
	<div class="framedefinition">
		<body>
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
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
			
			<p><a href="third.php">third page </a> <br /> - Went to third page</p>

			<form action="index.html">
			<button type="submit" formaction = "../index.php">index page</button>
			</form>
			<p><span class="error">* required field</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  			Do you prefer to working with: <span class="error">* <?php echo $preferErr;?></span>
				
			</br>
			
  			<input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="female") echo "checked";?> value="a thing">a thing
  
 			<br></br>
  			<div class="border">
  			<p> computer ....................</p>
  			</div>
  			<input type="radio" name="prefer" <?php if (isset($prefer) && $prefer=="male") echo "checked";?> value="Ideas">Ideas
  			<div id="border">
  			<p> Ideas ........................</p>
  			</div>
  
  			<br><br>
  			<input type="submit" name="submit" value="Submit">  
		</form>

		<?php
		echo "<h2>Your Input:</h2>";

		echo $prefer;
		?>
	
		<form action="third.php">
			<button type="submit" formaction = "third.php">Continue to next page ►</button>
		</form>

		</body>
	</div>
</html>
