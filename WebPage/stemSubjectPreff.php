
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>First Page</title>
	<link href="../CSS/csssheet.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<divbumper1>
	<p>description</p>
</divbumper1>
<divbumper2>
	<p>description</p>
</divbumper2>
<body>
      <img src="../images/STEM.png" alt="stem">
      <h1>Index Page</h1>
	<p><a href="second.php">Second page </a> <br /> - Went to second page</p>
	<form action="second.php">
	<button type="submit" formaction = "second.php">Second page</button>
	</form>
	<p>Question</p>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Subject</button>
  <div id="myDropdown" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>

</br>

<button onclick="myFunction1()" class="dropbtn">Subject</button>
  <div id="myDropdown1" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>
</br>

<button onclick="myFunction2()" class="dropbtn">Subject</button>
  <div id="myDropdown2" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>
</br>

<button onclick="myFunction3()" class="dropbtn">Subject</button>
  <div id="myDropdown3" class="dropdown-content">
    <p>description</p><p>description</p>
<p>description</p>
<p>description</p>
<p>description</p>

  </div>


</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
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
