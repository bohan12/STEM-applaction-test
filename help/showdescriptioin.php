<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#wrap div[id^='cat']").click(function() {
  var active = $(this).attr('id');
  $(this).siblings("[class^='cat']:not(." + active + ")").hide(500);
  $(this).siblings("." + active).slideToggle(500);
	});

});
</script>
<style>
#cat1,
#cat2,
#cat3 {
  margin-top: 24px;
  margin-left: 2%;
  background-color: #F85F5F;
  padding: 0 15px;
  line-height: 36px;
  float: left;
  color: #FFF;
  font-weight: 600;
  cursor: pointer;
}
.cat1,
.cat2,
.cat3 {
  display: none;
  clear: both;
  width: 100%;
}
</style>
</head>
<body>
<div id="wrap">
  <div id="cat1">Sample 1</div>
  <div id="cat2">Sample 2</div>
  <div id="cat3">Sample 3</div>
  <div class="cat1">sample demo txt one 1</div>
  <div class="cat2">sample demo txt two 2</div>
  <div class="cat3">sample demo txt two 3</div>
</div>
</body>
</html>