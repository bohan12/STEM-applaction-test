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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

	<script>

	$(document).ready(function(){
	$( ".button.change" ).click(function() {
 	 $( "button.change.selected" );
 	 $(this).toggleClass("selected");
	});
	$( ".button1.change" ).click(function() {
 	 $( "button1.change.selected1" );
  	$(this).toggleClass("selected1");
	});

	$( ".button2.change" ).click(function() {
 	 $( "button1.change.selected2" );
  	$(this).toggleClass("selected2");
	});

	$( ".button3.change" ).click(function() {
 	 $( "button1.change.selected3" );
 	 $(this).toggleClass("selected3");
	});

	});



	function descriptionComputer() {
  	  var x = document.getElementById("ComputerDIV");
   	 if (x.innerHTML === " ") {
      	  x.innerHTML = "description computer";
   	 } else {
       	 x.innerHTML = " ";
  	  }
	}

	function descriptionCalculus() {
    	var x = document.getElementById("CalculusDIV");
  	  if (x.innerHTML === " ") {
   	     x.innerHTML = "description calculus";
   	 } else {
    	    x.innerHTML = " ";
   	 }
	}

	function descriptionPeridoicl() {
   	 var x = document.getElementById("PeridoiclDIV");
   	 if (x.innerHTML === " ") {
   	     x.innerHTML = "description peridoicl";
   	 } else {
     	   x.innerHTML = " ";
   	 }
	}

	function descriptionNone() {
   	 var x = document.getElementById("NoneDIV");
  	  if (x.innerHTML === " ") {
    	    x.innerHTML = "description None";
 	   } else {
     	   x.innerHTML = " ";
	    }
	}

</script>

 		<style>
			.Button{
    			font-family: Calibri, sans-serif;
    			width: 100px;
    			height: 100px;
    			background-image:url(../images/question2/computerI.png);
    			background-repeat:no-reapeat; 
			}

			.button1{
   		 	font-family: Calibri, sans-serif;
   		 	font-size:13px;
    			font-weight: bold;
   		 	width: 100px;
   			 height: 100px;
    			background-image:url(../images/question2/calculusO.png);
   			 background-repeat:no-reapeat; 
			}

			.button2{
   			 font-family: Calibri, sans-serif;
   			 font-size:13px;
    			font-weight: bold;
   			 width: 100px;
   			 height: 100px;
   			 background-image:url(../images/question2/periodicO.png);
    			background-repeat:no-reapeat; 

			}

			.button3{
    			font-family: Calibri, sans-serif;
    			font-size:13px;
    			font-weight: bold;
    			width: 100px;
    			height: 100px;
    			background-image:url(../images/question2/calculusO.png);
    			background-repeat:no-reapeat; 

			}
			.selected {
     			 background:url(../images/question2/computerO.png);
			}


			.selected1 {
    			  background:url(../images/question2/calculusI.png);
			}

			.selected2 {
     			 background:url(../images/question2/periodicI.png);
			}

			.selected3 {
    			  background:url(../images/question2/calculusI.png);
			}


		</style>

 		<title>Second Page</title>
	</head>
	<div class="framedefinition">
		<body>
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
			
			
			
			<p><a href="third.php">third page </a> <br /> - Went to third page</p>

			<form action="index.html">
			<button type="submit" formaction = "../index.php">index page</button>
			</form>
			
		</form>

		<button onclick="descriptionComputer()" class="button change"></button>
		<div id="ComputerDIV"> </div>

		<br><br>

		<button class="button1 change" onclick="descriptionCalculus()"></button>
		<div id="CalculusDIV"> </div>

		<br><br>
		<button class="button2 change" onclick="descriptionPeridoicl()"></button>
		<div id="PeridoiclDIV"> </div>

		<br><br>
		<button class="button3 change" onclick="descriptionNone()"></button>

		<div id="NoneDIV"> </div>


		<form action="third.php">
			<button type="submit" formaction = "third.php">Continue to next page ►</button>
		</form>

		</body>
	</div>
</html>
