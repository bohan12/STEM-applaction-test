<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="../CSS/cssquestionc.css" media="screen" rel="stylesheet" type="text/css"/>
		
		<div class="header">
		</div>

		<div class="header2">
		</div>	

        <title>Second Page</title>
	</head>
	<div style="padding-left:150px; padding-top:50px;">
	<body>
		<img src="../images/STEM.png" alt="stem" style="position: absolute; top: 0px; left: 150px;">
		<?php
            echo "this is the third page";
        ?> 

        <p><a href="fourth.php">fourth page </a> <br /> - Went to fourth page</p>

        <form action="second.php">
            <button type="submit" formaction = "second.php">second page</button>
        </form>

	</body>
	</div>
</html>
