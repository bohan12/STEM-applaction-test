<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$( "button.change" ).click(function() {
  $( "button.change.selected" );
  $(this).toggleClass( "selected" );
});
});

</script>

</head>
<style>
.Button {
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 150px;
    height: 150px;
    background:url(ComputerI.png);
    
}
.selected {
      background:url(ComputerO.png);
}
button#cssColorChange:active{
    color: white;
    background:red
}
</style>

<body>

<button class="Button change" id="jQueryColorChange"></button>
<br><br>
<button class="Button change" id="jQueryColorChange">Click to change color</button>
<br><br>
<button class="Button change" id="jQueryColorChange">Click to change color</button>
<br><br>
<button class="Button change" id="jQueryColorChange">Click to change color</button>

</body>
</html>