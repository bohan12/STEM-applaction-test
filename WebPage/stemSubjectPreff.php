
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>First Page</title>
	<link href="../CSS/csssheet.css" media="screen" rel="stylesheet" type="text/css"/>
	<script type="text/javascript">
	function change(id)
  	 {
    	  var cname=document.getElementById(id).className;
    	  var ab=document.getElementById(id+"_hidden").value;
    	  document.getElementById(cname+"rating").innerHTML=ab;
    	  for(var i=ab;i>=1;i--)
   	   {
    	     document.getElementById(cname+i).src="../images/star2.png";
    	  }
    	  var id=parseInt(ab)+1;
   	   for(var j=id;j<=5;j++)
   	   {
   	      document.getElementById(cname+j).src="../images/star1.png";
   	   }
  	 }
	</script>
</head>
<body>
      <img src="../images/STEM.png" alt="stem">
	<h4>Please rate your favourite subjects from 1 to 5</h4>
	<p>Click on the subjects for their description</p>
<div class="dropdown">
	
<button onclick="algebraDropdown()" class="dropbtn">Algebra</button>
  <div id="myDropdown" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

<form method="post">
<div class="div">
	  <input type="hidden" id="abc1_hidden" value="1">
	  <img src="star2.png" onmouseover="change(this.id);" id="abc1" class="abc">
	  <input type="hidden" id="abc2_hidden" value="2">
	  <img src="star2.png" onmouseover="change(this.id);" id="abc2" class="abc">
	  <input type="hidden" id="abc3_hidden" value="3">
	  <img src="star2.png" onmouseover="change(this.id);" id="abc3" class="abc">
	  <input type="hidden" id="abc4_hidden" value="4">
	  <img src="star2.png" onmouseover="change(this.id);" id="abc4" class="abc">
	  <input type="hidden" id="abc5_hidden" value="5">
	  <img src="star2.png" onmouseover="change(this.id);" id="abc5" class="abc">
</div>	
	
</br>

<button onclick="biologyDropdown()" class="dropbtn">Biology</button>
  <div id="myDropdown1" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

<div class="div">
	  <input type="hidden" id="asp1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp1" class="asp">
	  <input type="hidden" id="asp2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp2" class="asp">
	  <input type="hidden" id="asp3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp3" class="asp">
	  <input type="hidden" id="asp4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp4" class="asp">
	  <input type="hidden" id="asp5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="asp5" class="asp">
</div>

</br>

<button onclick="calculusDropdown()" class="dropbtn">Calculus</button>
  <div id="myDropdown2" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

<div class="div">
	  <input type="hidden" id="asb1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="asb1" class="asb">
	  <input type="hidden" id="asb2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="asb2" class="asb">
	  <input type="hidden" id="asb3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="asb3" class="asb">
	  <input type="hidden" id="asb4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="asb4" class="asb">
	  <input type="hidden" id="asb5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="asb5" class="asb">
  </div>
	
</br>

<button onclick="chemistryDropdown()" class="dropbtn">Chemistry</button>
  <div id="myDropdown3" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

</br>

<button onclick="physicsDropdown()" class="dropbtn">Physics</button>
  <div id="myDropdown4" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

</br>

<button onclick="statisticsDropdown()" class="dropbtn">Statistics</button>
  <div id="myDropdown5" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>
  </div>

<div class="div">
  	  
	  <input type="hidden" id="jsp1_hidden" value="1">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp1" class="jsp">
	  <input type="hidden" id="jsp2_hidden" value="2">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp2" class="jsp">
	  <input type="hidden" id="jsp3_hidden" value="3">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp3" class="jsp">
	  <input type="hidden" id="jsp4_hidden" value="4">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp4" class="jsp">
	  <input type="hidden" id="jsp5_hidden" value="5">
	  <img src="star1.png" onmouseover="change(this.id);" id="jsp5" class="jsp">
  </div>
 <input type="hidden" name="abcrating" id="abcrating" value="0">
  <input type="hidden" name="asprating" id="asprating" value="0">
  <input type="hidden" name="asbrating" id="asbrating" value="0">

  <input type="hidden" name="jsprating" id="jsprating" value="0">

  <input type="submit" value="Submit" name="submit_rating">

</div>

</form>

</div>

</br>

<form action="second.php">
	<button type="submit" formaction = "second.php">Second page</button>
</form>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function algebraDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}
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
</html>
