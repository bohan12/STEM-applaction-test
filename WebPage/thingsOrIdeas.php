<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssthingsideas.css" media="screen" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<!---window.onload = loadButtonVariables;--->
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
			
			<p>What tools do you prefer to work with:</p>
			<div id="ComputerDIV">
		
			<img onclick="changeImage1()" id="image" src="../images/question2/computerO.png">
			<img onclick="changeImage2()" id="image2" src="../images/question2/pythagorasO.png">
			<img onclick="changeImage3()" id="image3" src="../images/question2/cellO.png">
			</div>
			<div id="div2">
			<img onclick="changeImage4()" id="image4" src="../images/question2/appleO.png">
			<img onclick="changeImage5()" id="image5" src="../images/question2/schrodingerO.png">
			<img onclick="changeImage6()" id="image6" src="../images/question2/scibeakerO.png">
			</div>
			<div id="div3">
			<img onclick="changeImage7()" id="image7" src="../images/question2/hammerO.png">
			<img onclick="changeImage8()" id="image8" src="../images/question2/gearO.png">
			<img onclick="changeImage9()" id="image9" src="../images/question2/periodicO.png">
			</div>
			<div id="desctext" class="bottomtext">
				<p>Select an option for its description</p>
			</div>
			<script type="text/javascript">
				/*function showdes1(){
					var x = document.getElementById("ComputerDIV");
					if (x.innerHTML === " ") {
   	    			 		x.innerHTML = "";
   	 				} else {
    	    				x.innerHTML = " description computer";
   	 				}
				}*/
				var buttonNumber = 0;
				function changeImage1()
				{
					//showdes1();
					if($("#image").attr("src")=="../images/question2/computerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image").attr("src",'../images/question2/computerI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Computers</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>Computers</p></br><p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image").attr("src",'../images/question2/computerO.png');
						--buttonNumber;
					}
				}
				function changeImage2()
				{
					//showdes1();
					if($("#image2").attr("src")=="../images/question2/pythagorasO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image2").attr("src",'../images/question2/pythagorasI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Pythagorean Theorem</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image2").attr("src",'../images/question2/pythagorasO.png');
						--buttonNumber;
					}
				}
				function changeImage3()
				{
					if($("#image3").attr("src")=="../images/question2/cellO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image3").attr("src",'../images/question2/cellI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Microscopic Organisms</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image3").attr("src",'../images/question2/cellO.png');
						--buttonNumber;
					}
				}
				function changeImage4()
				{
					if($("#image4").attr("src")=="../images/question2/appleO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image4").attr("src",'../images/question2/appleI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Laws of Gravity</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image4").attr("src",'../images/question2/appleO.png');
						--buttonNumber;
					}
				}
				function changeImage5()
				{
					if($("#image5").attr("src")=="../images/question2/schrodingerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image5").attr("src",'../images/question2/schrodingerI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Schrodinger's Cat</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image5").attr("src",'../images/question2/schrodingerO.png');
						--buttonNumber;
					}
				}
				function changeImage6()
				{
					if($("#image6").attr("src")=="../images/question2/scibeakerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image6").attr("src",'../images/question2/scibeakerI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Lab Equipment</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image6").attr("src",'../images/question2/scibeakerO.png');
						--buttonNumber;
					}
				}
				function changeImage7()
				{
					if($("#image7").attr("src")=="../images/question2/hammerO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image7").attr("src",'../images/question2/hammerI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Field Equipment</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image7").attr("src",'../images/question2/hammerO.png');
						--buttonNumber;
					}
				}
				function changeImage8()
				{
					if($("#image8").attr("src")=="../images/question2/gearO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image8").attr("src",'../images/question2/gearI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Gears, Nuts & Bolts</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image8").attr("src",'../images/question2/gearO.png');
						--buttonNumber;
					}
				}
				function changeImage9()
				{
					if($("#image9").attr("src")=="../images/question2/periodicO.png")
					{
						if(buttonNumber < 3)
						{
							$("#image9").attr("src",'../images/question2/periodicI.png');
							++buttonNumber;
							document.getElementById("desctext").classList.toggle("show");
							document.getElementById("desctext").innerHTML = "<p>Periodic Table</p>";
						}
						else
						{
							document.getElementById("desctext").innerHTML = 
							"<p>You have selected your maximum number of options</p>";
						}
					}
					else
					{
						$("#image9").attr("src",'../images/question2/periodicO.png');
						--buttonNumber;
					}
				}
			</script>
		</form>

			
		<form action="third.php">
			<button type="submit" formaction = "third.php">Continue to next page ►</button>
		</form>

		</body>
	</div>
</html>
