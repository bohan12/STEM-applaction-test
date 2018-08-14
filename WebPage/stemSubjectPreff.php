
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>First Page</title>
	<link href="../CSS/csssheet.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
      <img src="../images/STEM.png" alt="stem">
      <h1>Index Page</h1>
	<p><a href="second.php">Second page </a> <br /> - Went to second page</p>
	<form action="second.php">
	<button type="submit" formaction = "second.php">Second page</button>
	</form>
	<p>Question</p>
<div class="dropdown">
<button onclick="algebraDropdown()" class="dropbtn">Algebra</button>
  <div id="myDropdown" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>

</br>

<button onclick="biologyDropdown()" class="dropbtn">Biology</button>
  <div id="myDropdown1" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>
</br>

<button onclick="calculusDropdown()" class="dropbtn">Calculus</button>
  <div id="myDropdown2" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

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


</div>


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
