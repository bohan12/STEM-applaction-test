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
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
			<?php
			echo "this is the second page";
 			?> 
			
			<p><a href="third.php">third page </a> <br /> - Went to third page</p>

			<form action="index.html">
			<button type="submit" formaction = "../index.php">index page</button>
			</form>
			Do you prefer to working with: 
			<div id="ComputerDIV">
		
			<img onclick="changeImage1()" id="image" src="../images/question2/computerO.png">
			<img onclick="changeImage2()" id="image2" src="../images/question2/calculusO.png">
			<img onclick="changeImage3()" id="image3" src="../images/question2/cellO.png">
			</div>
			<div id="div2">
			<img onclick="changeImage4()" id="image4" src="../images/question2/appleO.png">
			<img onclick="changeImage5()" id="image5" src="../images/question2/schrodingerO.png">
			<img onclick="changeImage6()" id="image6" src="../images/question2/beakerO.png">
			</div>
			<div id="div3">
			<img onclick="changeImage7()" id="image7" src="../images/question2/hammerO.png">
			<img onclick="changeImage8()" id="image8" src="../images/question2/gearO.png">
			<img onclick="changeImage9()" id="image9" src="../images/question2/periodicO.png">
			</div>
			<div id="bottomtext">
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
				function changeImage1(){
					//showdes1();
					if($("#image").attr("src")=="../images/question2/computerO.png"){
						$("#image").attr("src",'../images/question2/computerI.png');
					}else{
						$("#image").attr("src",'../images/question2/computerO.png');
					}
				}
				function changeImage2(){
					if($("#image2").attr("src")=="../images/question2/calculusO.png"){
						$("#image2").attr("src",'../images/question2/calculusI.png');
					}
					else{
						$("#image2").attr("src",'../images/question2/calculusO.png');
					}
				}
				function changeImage3(){
					if($("#image3").attr("src")=="../images/question2/cellO.png"){
						$("#image3").attr("src",'../images/question2/cellI.png');
						}
					else{
						$("#image3").attr("src",'../images/question2/cellO.png');
					}
				}
				function changeImage4(){
					if($("#image4").attr("src")=="../images/question2/appleO.png"){
						$("#image4").attr("src",'../images/question2/appleI.png');
						}
					else{
						$("#image4").attr("src",'../images/question2/appleO.png');
					}
				}
				function changeImage5(){
					if($("#image5").attr("src")=="../images/question2/schrodingerO.png"){
						$("#image5").attr("src",'../images/question2/schrodingerI.png');
						}
					else{
						$("#image5").attr("src",'../images/question2/schrodingerO.png');
					}
				}
				function changeImage6(){
					if($("#image6").attr("src")=="../images/question2/beakerO.png"){
						$("#image6").attr("src",'../images/question2/beakerI.png');
						}
					else{
						$("#image6").attr("src",'../images/question2/beakerO.png');
					}
				}
				function changeImage7(){
					if($("#image7").attr("src")=="../images/question2/hammerO.png"){
						$("#image7").attr("src",'../images/question2/hammerI.png');
						}
					else{
						$("#image7").attr("src",'../images/question2/hammerO.png');
					}
				}
				function changeImage8(){
					if($("#image8").attr("src")=="../images/question2/gearO.png"){
						$("#image8").attr("src",'../images/question2/gearI.png');
						}
					else{
						$("#image8").attr("src",'../images/question2/gearO.png');
					}
				}
				function changeImage9(){
					if($("#image9").attr("src")=="../images/question2/periodicO.png"){
						$("#image9").attr("src",'../images/question2/periodicI.png');
						}
					else{
						$("#image9").attr("src",'../images/question2/periodicO.png');
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
