<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>First Page</title>
	<link href="../CSS/cssquestiona.css" media="screen" rel="stylesheet" type="text/css"/>
	    
	<div class="header">
		<img src="../images/STEM.png" alt="stem" style="margin: 0px 0px; padding: 70px 0px">
	</div>

	<div class="header2">
	</div>	
	    
	<script type="text/javascript">
	function change(id)
  	 {
    	  var cname=document.getElementById(id).className;
    	  var ab=document.getElementById(id+"_hidden").value;
    	  document.getElementById(cname+"rating").innerHTML=ab;
    	  for(var i=ab;i>=1;i--)
   	   {
    	     document.getElementById(cname+i).src="../images/staron.png";
    	  }
    	  var id=parseInt(ab)+1;
   	   for(var j=id;j<=5;j++)
   	   {
   	      document.getElementById(cname+j).src="../images/staroff.png";
   	   }
  	 }
	</script>
</head>
<div style="padding-left:150px">
<body>
	<h1>Please rate your favourite subjects from 1 to 5</h1>
	<h3>With 5 being your favourite subject, and 1 your least favourite subject</h3>
<div class="dropdown">

<button onclick="biologyDropdown()" class="dropbtn">Biology</button>
	  <input type="hidden" id="bio1_hidden" value="1">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="bio1" class="bio">
	  <input type="hidden" id="bio2_hidden" value="2">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="bio2" class="bio">
	  <input type="hidden" id="bio3_hidden" value="3">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="bio3" class="bio">
	  <input type="hidden" id="bio4_hidden" value="4">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="bio4" class="bio">
	  <input type="hidden" id="bio5_hidden" value="5">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="bio5" class="bio">
	
  <div id="myDropdown1" class="dropdown-content">
    <p>Biology is the natural science that studies life and living organisms, including their physical structure, 
       chemical processes, molecular interactions, physiological mechanisms, development and evolution.</p>
  </div>

</br>

<button onclick="calculusDropdown()" class="dropbtn">Calculus</button>
	  <input type="hidden" id="cal1_hidden" value="1">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="cal1" class="cal">
	  <input type="hidden" id="cal2_hidden" value="2">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="cal2" class="cal">
	  <input type="hidden" id="cal3_hidden" value="3">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="cal3" class="cal">
	  <input type="hidden" id="cal4_hidden" value="4">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="cal4" class="cal">
	  <input type="hidden" id="cal5_hidden" value="5">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="cal5" class="cal">
  <div id="myDropdown2" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>
	
</br>

<button onclick="chemistryDropdown()" class="dropbtn">Chemistry</button>
	  <input type="hidden" id="che1_hidden" value="1">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="che1" class="che">
	  <input type="hidden" id="che2_hidden" value="2">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="che2" class="che">
	  <input type="hidden" id="che3_hidden" value="3">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="che3" class="che">
	  <input type="hidden" id="che4_hidden" value="4">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="che4" class="che">
	  <input type="hidden" id="che5_hidden" value="5">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="che5" class="che">
  <div id="myDropdown3" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

</br>

<button onclick="physicsDropdown()" class="dropbtn">Physics</button>
	  <input type="hidden" id="phy1_hidden" value="1">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="phy1" class="phy">
	  <input type="hidden" id="phy2_hidden" value="2">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="phy2" class="phy">
	  <input type="hidden" id="phy3_hidden" value="3">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="phy3" class="phy">
	  <input type="hidden" id="phy4_hidden" value="4">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="phy4" class="phy">
	  <input type="hidden" id="phy5_hidden" value="5">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="phy5" class="phy">
  <div id="myDropdown4" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

</br>

<button onclick="statisticsDropdown()" class="dropbtn">Statistics</button>
	<input type="hidden" id="sta1_hidden" value="1">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="sta1" class="sta">
	  <input type="hidden" id="sta2_hidden" value="2">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="sta2" class="sta">
	  <input type="hidden" id="sta3_hidden" value="3">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="sta3" class="sta">
	  <input type="hidden" id="sta4_hidden" value="4">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="sta4" class="sta">
	  <input type="hidden" id="sta5_hidden" value="5">
	  <img src="../images/staroff.png" style="margin: -12px 0px" onclick="change(this.id);" id="sta5" class="sta">
  <div id="myDropdown5" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

  <input type="hidden" name="biorating" id="biorating" value="1">
  <input type="hidden" name="calrating" id="calrating" value="1">
  <input type="hidden" name="cherating" id="cherating" value="1">
  <input type="hidden" name="phyrating" id="phyrating" value="1">
  <input type="hidden" name="starating" id="starating" value="1">

</div>

</br>

</div>

</br>

<form action="thingsOrIdeas.php">
	<button type="submit" formaction = "thingsOrIdeas.php">Continue to next page ►</button>
</form>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function biologyDropdown() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function calculusDropdown() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function chemistryDropdown() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
function physicsDropdown() {
    document.getElementById("myDropdown4").classList.toggle("show");
}
function statisticsDropdown() {
    document.getElementById("myDropdown5").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

 </body>
</div>
</html>
