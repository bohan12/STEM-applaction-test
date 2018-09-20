<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssthingsideas.css" media="screen" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
<title>Second Page</title>
	</head>
	<div class="framedefinition">
		<body>
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
			<p>What tools do you prefer to work with:</p>
<style>
.button{
    font-family: Calibri, sans-serif;
    width: 100px;
    height: 100px;
    background-image:url(../images/question2/computerO.png);
    background-repeat:no-repeat; 
}

.button1{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(pythagorasO.png);
    background-repeat:no-repeat; 
}

.button2{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(cellO.png);
    background-repeat:no-repeat; 

}

.button3{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(appleO.png);
    background-repeat:no-repeat; 

}
.button4{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(schrodingerO.png);
    background-repeat:no-repeat; 

}
.button5{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(scibeakerO.png);
    background-repeat:no-repeat; 

}
.button6{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(hammerO.png);
    background-repeat:no-repeat; 

}
.button7{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(gearO.png);
    background-repeat:no-repeat; 

}
.button8{
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 100px;
    height: 100px;
    background-image:url(periodicO.png);
    background-repeat:no-repeat; 

}
.button.selected {
      background:url(computerI.png);
}


.button1.selected {
      background:url(pythagorasI.png);
}

.button2.selected {
      background:url(cellI.png);
}

.button3.selected {
      background:url(appleI.png);
}
.button4.selected {
      background:url(schrodingerI.png);
}
.button5.selected {
      background:url(scibeakerI.png);
}
.button6.selected {
      background:url(hammerI.png);
}
.button7.selected {
      background:url(gearI.png);
}
.button8.selected {
      background:url(periodicI.png);
}
</style>
<script>

$(document).ready(function() {
  $(".change").click(function() {
    $(this).toggleClass("selected");
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

function descriptionPythagoras() {
    var x = document.getElementById("PythagorasDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description Pythagoras";
    } else {
        x.innerHTML = " ";
    }
}

function descriptionCell() {
    var x = document.getElementById("CellDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description Cell";
    } else {
        x.innerHTML = " ";
    }
}

function descriptionApple() {
    var x = document.getElementById("AppleDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description apple";
    } else {
        x.innerHTML = " ";
    }
}
function descriptionSchrodinger() {
    var x = document.getElementById("SchrodingerDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description schrodinger";
    } else {
        x.innerHTML = " ";
    }
}
function descriptionScibeaker() {
    var x = document.getElementById("ScibeakerDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description scibeaker";
    } else {
        x.innerHTML = " ";
    }
}
function descriptionHammer() {
    var x = document.getElementById("HammerDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description hammer";
    } else {
        x.innerHTML = " ";
    }
}
function descriptionGear() {
    var x = document.getElementById("GearDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description gear";
    } else {
        x.innerHTML = " ";
    }
}
function descriptionPeriodic() {
    var x = document.getElementById("PeriodicDIV");
    if (x.innerHTML === " ") {
        x.innerHTML = "description periodic";
    } else {
        x.innerHTML = " ";
    }
}

function nextPage() {
    var selectCount = $(".change.selected").length;
    if (selectCount > 3) {
        alert("You've selected too many classes");
    } else {
        window.location = "nextpage.html";
    }
}
</script>


<body>

<button onclick="descriptionComputer()" class="button change"></button>
<div id="ComputerDIV"> </div>

<br><br>

<button class="button1 change" onclick="descriptionPythagoras()"></button>
<div id="PythagorasDIV"> </div>

<br><br>
<button class="button2 change" onclick="descriptionCell()"></button>
<div id="PeridoiclDIV"> </div>
<br><br>
<button class="button3 change" onclick="descriptionApple()"></button>
<div id="AppleDIV"> </div>
<br><br>
<button class="button4 change" onclick="descriptionSchrodinger()"></button>
<div id="SchrodingerDIV"> </div>
<br><br>
<button class="button5 change" onclick="descriptionScibeaker()"></button>
<div id="ScibeakerDIV"> </div>
<br><br>
<button class="button6 change" onclick="descriptionHammer()"></button>
<div id="HammerDIV"> </div>
<br><br>
<button class="button7 change" onclick="descriptionGear()"></button>
<div id="GearDIV"> </div>
<br><br>
<button class="button8 change" onclick="descriptionPeriodic()"></button>
<div id="PeridoicDIV"> </div>
<br><br>
 <button onclick="nextPage()">Go to next page</button>


</body>
</html>
