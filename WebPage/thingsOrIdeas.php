<!DOCTYPE html>
<html>
<head>
<link href="../CSS/cssquestionb.css" media="screen" rel="stylesheet" type="text/css"/>
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
<div style="padding-left:150px; padding-top:50px;">
<body>
<img src="../images/STEM.png" alt="stem" style="position: absolute; top: 0px; left: 150px;">
<h1>Second Page</h1>
<?php
echo "this is the second page";
 // define variables and set to empty values
$preferErr = "";
$prefer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  if (empty($_POST["prefer"])) {
    $preferErr = "required to choice one of the options";
  } else {
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

</body>
</div>
</html>
